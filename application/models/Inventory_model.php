<?php
    date_default_timezone_set('Asia/Manila');
    class Inventory_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        
        public function authentication($username,$password){
            $result=$this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
            if($result){
                return $result->row_array();
            }else{
                return false;
            }
        }
        public function save_user(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');            
            $fullname=$this->input->post('fullname');
            
                $check=$this->db->query("SELECT * FROM users WHERE username='$username'");
                if($check->num_rows() > 0){
                    return false;
                }else{
                    $result=$this->db->query("INSERT INTO users(username,`password`,fullname) VALUES('$username', '$password', '$fullname')");                
                }
            
            if($result){
                return true;
            }
        }

        public function generateRefNo($seqname,$user){
			$datenow=date('Y');
			$checkExist=$this->db->query("SELECT * FROM seqpatientid WHERE seq_name='$seqname' AND seq_code='$datenow'");
			if($checkExist->num_rows()==1){
				$row=$checkExist->row_array();
				$seq_name=$seqname;
				$seq_code=$datenow;
				$last_value=$row['last_value'];
				$last_gen_date=date('Ym',strtotime($row['last_gen_date']));
				$date=date('Y-m-d H:i:s');
				$new_value=$last_value+1;
				$count_last_value=strlen($new_value);
				$count_format=strlen('00000');
				$count=$count_format - $count_last_value;
				$new_format="";
				for($i=0;$i<$count;$i++){
					$new_format=$new_format."0";
				}

				$caseno=$seq_name."".$seq_code."".$new_format."".$new_value;
				$this->db->query("UPDATE seqpatientid SET last_value='$new_value',last_gen_date='$date',last_gen_by='$user' WHERE seq_name='$seqname'");
			}else{
				$new_value=1;
				$last_gen_date=date('Ym');
				$format='0000';
				$seq_name=$seqname;
				$caseno=$seq_name."".$datenow."".$format."".$new_value;
				$this->db->query("INSERT INTO seqpatientid(seq_name,seq_code,last_value,last_gen_date,last_gen_by) VALUES('$seqname','$datenow','$new_value',NOW(),'$user')");
			}
			return $caseno;
		}

        public function getAllItems(){
            $result=$this->db->query("SELECT r.*,SUM(s.quantity) as quantity FROM stocktable s INNER JOIN receiving r ON r.code=s.code GROUP BY r.code ORDER BY r.description ASC");
            return $result->result_array();
        }

        public function save_item(){
            $description=$this->input->post('description');
            $unit=$this->input->post('unit');
            $id=$this->input->post('id');
            $prod=$this->input->post('production');
            $receive=$this->input->post('receiving');
            $date=date("Y-m-d");
            $time=date("H:i:s");
            if($prod==1){
                $type="RDU SUPPLIES";
            }else{
                $type="KIT SUPPLIES";
            }
            if($id==""){
                $code=date('YmdHis');
                $result=$this->db->query("INSERT INTO receiving(code,`description`,unit,prodtype,production,datearray,timearray,receiving) VALUES('$code','$description','$unit','$type','$prod','$date','$time','$receiving')");
                if($result){
                    $result=$this->db->query("INSERT INTO stocktable(code,quantity,datearray,timearray) VALUES('$code','0','$date','$time')");
                }else{
                    $this->db->query("DELETE FROM receiving WHERE code='$code'");
                    return false;
                }
            }else{
                $result=$this->db->query("UPDATE receiving SET `description`='$description',`unit`='$unit',`production`='$prod',prodtype='$type',receiving='$receiving' WHERE id='$id'");
            }            
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function getSingleItem($id){
            $result=$this->db->query("SELECT * FROM receiving WHERE id='$id'");
            return $result->row_array();
        }
        public function getAllReceiving(){
            $result=$this->db->query("SELECT * FROM stocktablepayables GROUP BY rrno ORDER BY datearray DESC");
            return $result->result_array();

        }
        public function getAllReceivingItem(){
            $result=$this->db->query("SELECT * FROM receiving WHERE receiving='1'");
            return $result->result_array();

        }

        public function post_receiving($code,$expiration,$lotno,$quantity,$invno,$invdate,$rrno){            
            $time=date('H:i:s');
            $result=$this->db->query("INSERT INTO stocktablepayables(rrno,invno,code,quantity,expiration,lotno,datearray,timearray) VALUES('$rrno','$invno','$code','$quantity','$expiration','$lotno','$invdate','$time')");
            if($result){
                $this->db->query("INSERT INTO stocktable(rrno,invno,code,quantity,expiration,lotno,datearray,timearray) VALUES('$rrno','$invno','$code','$quantity','$expiration','$lotno','$invdate','$time')");;
                return true;
            }            
        }
        public function getAllRRDetails($invno,$rrno){
            $result=$this->db->query("SELECT sp.*,r.unit,r.description FROM stocktablepayables sp INNER JOIN receiving r ON r.code=sp.code WHERE sp.invno='$invno' AND sp.rrno='$rrno'");
            return $result->result_array();
        }
        public function getRRDetails($invno,$rrno){
            $result=$this->db->query("SELECT * FROM stocktablepayables WHERE invno='$invno' AND rrno='$rrno'");
            return $result->row_array();
        }
        public function getAllProduction(){
            $result=$this->db->query("SELECT r.*,SUM(s.quantity) as quantity,s.rrno FROM receiving r INNER JOIN stocktable s ON s.code=r.code WHERE r.production='1' AND s.rrno <> '' GROUP BY r.code,s.rrno ORDER BY s.rrno ASC");
            return $result->result_array();
        }
        public function fetchSingleItem($code){
            $result=$this->db->query("SELECT r.*,SUM(s.quantity) as quantity FROM stocktable s INNER JOIN receiving r ON r.code=s.code WHERE r.code='$code' GROUP BY r.code");
            return $result->row_array();
        }
        public function save_production(){
            $item_code=$this->input->post('item_code');
            $rrno=$this->input->post('rrno');
            $no_units=$this->input->post('no_of_unit');
            $prodcode=$this->input->post('item_to_produce');
            $no_unit_produce=$this->input->post('no_of_unit_produce');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $query=$this->db->query("SELECT * FROM stocktable WHERE code='$item_code' AND rrno='$rrno' AND invno <> ''");
            $res=$query->row_array();
            $result=$this->db->query("INSERT INTO stocktable(rrno,code,quantity,expiration,lotno,datearray,timearray) VALUES('$rrno','$item_code','-$no_units','$res[expiration]','$res[lotno]','$date','$time')");            
            $result=$this->db->query("INSERT INTO stocktable(rrno,code,quantity,expiration,lotno,datearray,timearray) VALUES('$rrno','$prodcode','$no_unit_produce','$res[expiration]','$res[lotno]','$date','$time')");            
            if($result){
                return true;
            }else{
                return false;
            }            
        }

        public function getAllKit(){
            $result=$this->db->query("SELECT * FROM kitassembly ORDER BY `description` ASC");
            return $result->result_array();
        }

        public function getSingleKit($code){
            $result=$this->db->query("SELECT * FROM kitassembly WHERE id='$code'");
            return $result->row_array();
        }

        public function save_kit($code,$description,$unitcost){
            if($code==""){
                $code=date('YmdHis');
                $result=$this->db->query("INSERT INTO kitassembly(id,`description`,sellingpricePHIC,sellingpriceOPD) VALUES('$code','$description','$unitcost','$unitcost')");
            }else{
                $result=$this->db->query("UPDATE kitassembly SET `description`='$description',unitcost='$unitcost' WHERE id='$code'");
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
    }
?>
