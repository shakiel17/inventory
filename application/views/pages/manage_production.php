<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Manage Production</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item active">Manage Production</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-7">
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Production List</h4></td>
                                            <td align="right"></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center">
                                            <thead>
                                                <tr>
                                                <th class="text-center">
                                                    #
                                                </th>                                                
                                                <th>RRNo</th>
                                                <th>Description</th>
                                                <th>Unit</th>
                                                <th>Qty</th>                                                                                               
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x=1;
                                                foreach($items as $item){
                                                    echo "<tr>";
                                                        echo "<td align='center'>$x.</td>";                                                        
                                                        echo "<td align='left'>$item[rrno]</td>";
                                                        echo "<td align='left'>$item[description]</td>";
                                                        echo "<td align='left'>$item[unit]</td>";
                                                        echo "<td>$item[quantity]</td>";                                                        
                                                        echo "<td align='center'><a href='".base_url()."add_production/$item[code]/$item[rrno]' class='btn btn-success'>Production</a></td>";
                                                    echo "</tr>";
                                                    $x++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($item_code <> ""){
                        ?>
                        <div class="col-5">
                            <?=form_open(base_url()."save_production");?>
                            <input type="hidden" name="item_code" value="<?=$item_code;?>">
                            <input type="hidden" name="rrno" value="<?=$rrno;?>">
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Production</h4></td>
                                            <td align="right"><button type="submit" class="btn btn-primary">Save Production</button> <a href="<?=base_url();?>manage_production" class="btn btn-danger">Close</a></td>
                                        </tr>
                                    </table>                                    
                                </div>                                
                                <div class="card-body">
                                    <div class="form-group">
                                        RRNo.: <b><?=$rrno;?></b><br>
                                        Item: <b><?=$selected['description'];?></b><br>
                                        Unit: <b><?=$selected['unit'];?></b><br>
                                        Stock on Hand: <b><?=$selected['quantity'];?></b><br>                                        
                                        No. of Units: <input type="text" class="form-control" name="no_of_unit" style="width:200px;">
                                    </div>
                                    <div class="form-group">
                                        <label>Item to Produce</label>                                 
                                        <select name="item_to_produce" class="form-control" style="width:400px;">
                                            <option value="">Select Item</option>
                                            <?php
                                            $query=$this->Inventory_model->getAllItems();
                                            foreach($query as $item){
                                                if($item['prodtype']=="KIT SUPPLIES" && $item['receiving'] <> "1"){
                                                    echo "<option value='$item[code]'>$item[description] - $item[quantity]</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <label>No of Units to Produce</label>                                 
                                        <input type="text" class="form-control" name="no_of_unit_produce" style="width:200px;">
                                    </div>
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>
                        <?php
                        }
                        ?>
                    </div>                    
                </div>
            </section>
        </div>