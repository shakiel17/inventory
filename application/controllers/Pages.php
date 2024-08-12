<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit','2048M');
date_default_timezone_set('Asia/Manila');
    class Pages extends CI_Controller{        
        public function index(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }             
            $data['home'] = 'active';
            $data['product'] = '';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = '';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }
        public function login(){
            $page = "login";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }            
            $this->load->view('templates/header');                                    
            $this->load->view('pages/'.$page);            
            $this->load->view('templates/footer');
        }
        public function register(){
            $page = "register";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }            
            $this->load->view('templates/header');                                    
            $this->load->view('pages/'.$page);            
            $this->load->view('templates/footer');
        }
        public function authentication(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $user=$this->Inventory_model->authentication($username,$password);
            if($user){
                $userdata=array(
                    'username' => $user['username'],
                    'fullname' => $user['fullname'],
                    'user_login' => true
                );
                $this->session->set_userdata($userdata);
                redirect(base_url());
            }else{
                echo "<script>alert('Invalid username and password!');window.location='".base_url()."login';</script>";
            }
        }
        public function save_user(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');                        
            $save=$this->Inventory_model->save_user();
            if($save){
                $login=$this->authentication($username,$password);
            }else{
                echo "<script>alert('Unable to add user! Username already exist!');window.location='".base_url()."register';</script>";
            }            
        }
        
        public function logout(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('fullname');
            $this->session->unset_userdata('user_login');
            echo "<script>alert('You successfully logged out!');window.location='".base_url()."';</script>";
        }

        public function manage_items(){
            $page = "manage_items";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = 'active';
                $data['prod'] = '';
                $data['kit'] = '';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
            $data['items'] = $this->Inventory_model->getAllItems();
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }
        public function add_item(){
            $page = "add_item";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = 'active';
                $data['prod'] = '';
                $data['kit'] = '';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
                $data['id'] = '';
                $data['description'] = '';
                $data['unit'] = '';
                $data['production'] = '';
                $data['receiving'] = '';
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }
        public function save_item(){
            $save=$this->Inventory_model->save_item();
            if($save){
                echo "<script>alert('Item successfully saved!');window.location='".base_url()."manage_items';</script>";
            }else{
                echo "<script>alert('Unable to save item!');window.location='".base_url()."add_item';</script>";
            }
        }

        public function edit_item($id){
            $page = "add_item";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = 'active';
                $data['prod'] = '';
                $data['kit'] = '';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
                $data['id'] = $id;
                $check=$this->Inventory_model->getSingleItem($id);
                $data['description'] = $check['description'];
                $data['unit']  = $check['unit'];
                if($check['production']==1){
                    $data['production'] = 'checked';   
                }else{
                    $data['production'] = '';
                }

                if($check['receiving']==1){
                    $data['receiving'] = 'checked';   
                }else{
                    $data['receiving'] = '';
                }
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }

        public function manual_receiving(){
            $page = "manual_receiving";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = '';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = '';
            $data['receive'] = 'active';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
            $data['items'] = $this->Inventory_model->getAllReceiving();
            $this->session->unset_userdata('pono');
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }
        public function new_receiving(){
            $page = "new_receiving";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = '';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = '';
            $data['receive'] = 'active';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';
                if($this->session->pono)  {
                    $pono=$this->session->pono;
                }else{
                    $pono=date('YmdHis');
                }
            $data['items'] = $this->Inventory_model->getAllReceivingItem();            
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }
        public function post_receiving(){
            $id=$this->input->post('code');
            $expiration=$this->input->post('expiration');
            $lotno=$this->input->post('lotno');
            $quantity=$this->input->post('quantity');
            $invno=$this->input->post('invno');
            $invdate=$this->input->post('invdate');
            $rrno=$this->Inventory_model->generateRefNo("RRN",$this->session->fullname);
            $x=0;
            foreach($id as $code){
                if($quantity[$x] > 0){
                    $result=$this->Inventory_model->post_receiving($code,$expiration[$x],$lotno[$x],$quantity[$x],$invno,$invdate,$rrno);
                }                
                $x++;
            }
            echo "<script>alert('Items successfully posted!');window.location='".base_url()."manual_receiving';</script>";
        }

        public function rr_print($invno,$rrno){
			$invno = str_replace('%20',' ',$invno);
			$page="receiving_report";			
            $detail=$this->Inventory_model->getRRDetails($invno,$rrno);
			$data['body'] = $this->Inventory_model->getAllRRDetails($invno,$rrno);
			$html=$this->load->view('pages/'.$page, $data,true);
			$mpdf = new \Mpdf\Mpdf([
				'setAutoTopMargin' => 'stretch',
				'margin_left' => 5,
				'margin_right' => 10,
				'margin_bottom' => 85,
				//'format' => [215.9,137.5],
				'format' => 'Letter',
				'orientation' => 'L'
			]);			
			$mpdf->setHTMLHeader('
            <div style="text-align:center;font-family:Arial;">
             <table width="500" border="0" cellspacing="0" cellpadding="0">
             <tr>
             <td width="20">&nbsp;</td>
             <td width="80"></td>
            <td align="center" style="font-family:Arial;"><b style="font-size:10px;">Republic of the Philippines</td>
          <td width="30">&nbsp;</td>
      </tr>
                <tr>
                     <td width="10">&nbsp;</td>
                     <td width="50"><img src="'.base_url().'design/assets/img/kmsci.png" width="50"></td>
                    <td align="center" style="font-family:Arial;"><b style="font-size:12px;">KIDAPAWAN MEDICAL SPECIALISTS CENTER, INC.</b><br>
                    <font style="font-size:10px;">Sudapin, Kidapawan City</font><br>
                    <font style="font-size:10px;">Tel. No.: (064)-577-1762</font></td>
                  <td width="60">&nbsp;</td>
              </tr>
            </table>
            <center style="width:500px;"><h4>RECEIVING REPORT</h4></center>
            <table width="500" border="0" cellspacing="1" cellpadding="1" style="font-family:Arial,Helvetica; font-size: 10px;">
             <tr>
                <td align="right">Supplier: </td>
                 <td><b>99 Commercial, Inc.</b></td>
                 <td align="right">R.R. No.: </td>
                 <td><b>'.$rrno.'</b></td>
                 </tr>
                 <tr>
                <td align="right"  width="70">Invoice No.: </td>
                 <td><b>'.$invno.'</b></td>
                 <td align="right">RR Date: </td>
                 <td><b>'.$detail['datearray'].'</b></td>
                 </tr>                 
             </table>
             <table width="500" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial;font-size:9px;border-collapse: collapse;">
                <tr>
					 <td align="center" width="10%">Qty</td>
					 <td align="center" width="10%">Unit</td>
					 <td align="center" width="45%">Description</td>					 					 
					 <td align="center" width="11%">Unit<br>Price</td>                     
                     <td align="center" width="12%">Gross</td>                     
                     <td align="center" width="12%">Net</td>
				 </tr>
                 </table>
             </div>
            ');
			$mpdf->setHTMLFooter('
            <div>

            <table width="500" border="0" cellspacing="0" cellpadding="1" style="font-size:12px;">
                <tr>
                    <td width="80%" align="right" $view>Total Gross:</td>
                    <td width="20%" align="right" $view><b>'.number_format(0,2).'</b></td>
                </tr>
                <tr $view>
                    <td width="80%" align="right">Handling Fee (1%):</td>
                    <td width="20%" align="right"><b>'.number_format(0,2).'</b></td>
                </tr>
                <tr>
                    <td width="80%" align="right" style="border-top:1px solid black;">Total:</td>
                    <td width="20%" style="border-bottom:1px solid; border-top:1px solid black;" align="right"><b>'.number_format(0,2).'</b></td>
                </tr>
            </table>
            <br>
            <table width="500" border="0" cellspacing="0" cellpadding="1" style="font-size:11px;">
            <tr>
            <td colspan="2">Journal Entries</td>
            <td align="right"><b>Debit</b></td>
            <td align="right"><b>Credit</b></td>
            </tr>            
            <tr>
            <td width="5%">&nbsp;</td>
            <td width="55%">INPUT TAX - 0</td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            </tr>
            '.$nv.'
            <tr>
            <td width="5%">&nbsp;</td>
            <td width="55%">DEFERRED INCOME - </td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            </tr>
            <tr>
            <td width="5%">&nbsp;</td>
            <td width="55%">FREIGHT IN - </td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            </tr>
            <tr>
            <td width="5%">&nbsp;</td>
            <td width="55%">EXPANDED WTAX - </td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            </tr>
            <tr>
            <td width="5%">&nbsp;</td>
            <td width="55%">ACCOUNTS PAYABLE-TRADE</td>
            <td align="right" width="20%" style="border-bottom:1px solid;">'.number_format(0,3).'</td>
            <td align="right" width="20%" style="border-bottom:1px solid;">'.number_format(0,3).'</td>
            </tr>
            <tr>
            <td width="5%">&nbsp;</td>
            <td width="55%">&nbsp;</td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            <td align="right" width="20%">'.number_format(0,3).'</td>
            </tr>
            </table>
            <br>
            <br>
            <br>
            <table width="500" border="0" cellspacing="0" cellpadding="1" style="font-size:8px;">
            <tr>
            <td style="border-top:1px solid black;" colspan="4">&nbsp;</td>
            </tr>
            <tr>
            <td width="25%">Prepared by:_______________</td>
            <td width="25%">Checked by:_______________</td>
            <td width="25%">Reviewed by:_______________</td>
            <td width="25%">Noted/Verified by:_______________</td>
            </tr>
            </table>
            </div>
            ');
			$mpdf->autoPageBreak = true;
			$mpdf->WriteHTML($html);
			$mpdf->Output();

		}

        public function manage_production(){
            $page = "manage_production";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = '';
                $data['prod'] = 'active';
                $data['kit'] = '';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
            $data['items'] = $this->Inventory_model->getAllProduction();
            $data['item_code'] = ''; 
            $data['rrno'] = '';           
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }

        public function add_production($code,$rrno){
            $page = "manage_production";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = '';
                $data['prod'] = 'active';
                $data['kit'] = '';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
            $data['items'] = $this->Inventory_model->getAllProduction();
            $data['selected'] = $this->Inventory_model->fetchSingleItem($code);
            $data['item_code'] = $code;            
            $data['rrno'] = $rrno;
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }

        public function save_production(){
            $item_code=$this->input->post('item_code');
            $rrno=$this->input->post('rrno');
            $save=$this->Inventory_model->save_production();
            if($save){
                echo "<script>alert('Production successfully saved!');</script>";
            }else{
                echo "<script>alert('Unable to save production!');</script>";
            }
                echo "<script>window.location='".base_url()."add_production/$item_code/$rrno';</script>";
        }

        public function kit_assembly(){
            $page = "kit_assembly";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = 'active';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
                $data['items'] = $this->Inventory_model->getAllKit();
            $data['item_code'] = ''; 
            $data['rrno'] = '';
            $data['add_kit'] = '';
            $data['add_qty'] = '';
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');
                        
        }

        public function add_kit(){
            $page = "kit_assembly";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = 'active';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
            $data['items'] = $this->Inventory_model->getAllKit();
            $data['item_code'] = '';             
            $data['rrno'] = '';
            $data['add_kit'] = 'add_kit';
            $data['add_qty'] = '';
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');                        
        }
        public function edit_kit($code){
            $page = "kit_assembly";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = 'active';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
            $data['items'] = $this->Inventory_model->getAllKit();            
            $data['item_code'] = $code; 
            $data['rrno'] = '';
            $data['add_kit'] = 'add_kit';            
            $data['add_qty'] = '';
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');                        
        }

        public function save_kit(){
            $code=$this->input->post('code');
            $description=$this->input->post('description');
            $unitcost=$this->input->post('unitcost');
            $save=$this->Inventory_model->save_kit($code,$description,$unitcost);
            if($save){
                echo "<script>alert('Kit details successfully saved!');</script>";
            }else{
                echo "<script>alert('Unable to save kit details!');</script>";
            }                
            echo "<script>window.location='".base_url()."kit_assembly';</script>";
        }

        public function add_kit_qty($code){
            $page = "kit_assembly";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = 'active';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
                $data['items'] = $this->Inventory_model->getAllKit();
            $data['item_code'] = ''; 
            $data['rrno'] = '';
            $data['add_kit'] = '';
            $data['add_qty'] = $code;
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');                        
        }

        public function add_kit_item($code){
            $page = "kit_assembly";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }         
            $data['home'] = '';
            $data['product'] = 'active';
                $data['item'] = '';
                $data['prod'] = '';
                $data['kit'] = 'active';
            $data['receive'] = '';            
            $data['inventory'] = '';
                $data['card'] = '';
                $data['sheet'] = '';
            $data['report'] = '';
                $data['rr'] = '';
                $data['prodrep'] = '';  
                $data['items'] = $this->Inventory_model->getAllKit();
            $data['item_code'] = $code; 
            $data['rrno'] = '';
            $data['add_kit'] = '';
            $data['add_qty'] = '';
            $this->load->view('templates/header');                        
            $this->load->view('templates/nav');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');                        
        }

}
?>
