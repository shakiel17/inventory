<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Kit Assembly</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item active">Kit Assembly</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-7">
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>List of Kit</h4></td>
                                            <td align="right"><a href="<?=base_url();?>add_kit" class="btn btn-primary">Add New Kit</a></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center">
                                            <thead>
                                                <tr>                                                                                               
                                                <th>Item Code</th>
                                                <th>Description</th>
                                                <th>Unit Cost</th>
                                                <th>Qty</th>                                                                                               
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x=1;
                                                foreach($items as $item){
                                                    $qty=$this->Inventory_model->getQty($item['id']);
                                                    echo "<tr>";                                                        
                                                        echo "<td align='left'>$item[id]</td>";
                                                        echo "<td align='left'>$item[description]</td>";
                                                        echo "<td align='left'>".number_format($item['sellingpricePHIC'],2)."</td>";
                                                        echo "<td>$qty[quantity]</td>";                                                        
                                                        echo "<td align='center'><a href='".base_url()."edit_kit/$item[id]' class='btn btn-success btn-sm'>Edit</a> <a href='".base_url()."add_kit_item/$item[id]' class='btn btn-warning btn-sm'>Items</a> <a href='".base_url()."add_kit_qty/$item[id]' class='btn btn-info btn-sm'>Qty</a>";
                                                        ?>
                                                            <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Do you wish to stock transfer this kit?'); return false;">Transfer</a>
                                                        <?php
                                                        echo "</td>";
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
                        if($add_kit <> ""){
                        ?>
                        <div class="col-5">
                            <?=form_open(base_url()."save_kit");?>   
                            <input type="hidden" name="code" value="<?=$item_code;?>">                         
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Production</h4></td>
                                            <td align="right"><button type="submit" class="btn btn-primary">Save Kit Details</button> <a href="<?=base_url();?>kit_assembly" class="btn btn-danger">Close</a></td>
                                        </tr>
                                    </table>                                    
                                </div>            
                                <?php
                                $select = $this->Inventory_model->getSingleKit($item_code);
                                ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kit Description</label>
                                        <input type="text" name="description" class="form-control" placeholder="Kit Description" value="<?=$select['description'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Unit Cost</label>
                                        <input type="text" name="unitcost" class="form-control" placeholder="Unit Cost"  value="<?=$select['sellingpricePHIC'];?>" required>
                                    </div>
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>
                        <?php
                        }
                        ?>

<?php
                        if($add_kit_item <> ""){
                        ?>
                        <div class="col-5">
                            <?=form_open(base_url()."save_kit_item");?>   
                            <input type="hidden" name="id" value="<?=$item_code;?>">                         
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Manage Kit Items</h4></td>
                                            <td align="right"><button type="submit" class="btn btn-primary" id="btnrrno">Save Details</button> <a href="<?=base_url();?>kit_assembly" class="btn btn-danger">Close</a></td>
                                        </tr>
                                    </table>                                    
                                </div>            
                                <?php
                                $select = $this->Inventory_model->getRRNO();
                                ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>RRNo</label>
                                        <select name="rrno" class="form-control" id="rrno" required onclick="changeDisplay();">
                                            <option value="">Select RRNo</option>
                                            <?php
                                            foreach($select as $item){
                                                echo "<option value='$item[rrno]'>$item[rrno]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php
                                    $selected = $this->Inventory_model->getAllItemsByRRNO();
                                    ?>
                                    <div class="form-group" id="rr_items">
                                        <label>Kit Supplies</label>
                                        <table width="100%" border="0">
                                            <tr>
                                                <td>Description</td>
                                                <td>SOH</td>
                                                <td width="20%"></td>
                                            </tr>
                                            <?php
                                            foreach($selected as $item){
                                                $check=$this->Inventory_model->checkItemExist($item_code,$item['code']);
                                                if(count($check)>0){

                                                }else{                                                    
                                                ?>
                                                <input type="hidden" name="code[]" value="<?=$item['code'];?>">
                                                <tr>
                                                    <td><?=$item['description'];?></td>
                                                    <td><?=$item['quantity'];?></td>
                                                    <td><input type="text" class="form-control" name="quantity[]" value="1" required style="text-align:center;"></td>
                                                </tr>
                                                <?php
                                                }
                                            }
                                            ?>                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>
                        <?php
                        }
                        ?>

<?php
                        if($add_qty <> ""){
                        ?>
                        <div class="col-5">
                            <?=form_open(base_url()."save_kit_qty");?>   
                            <input type="hidden" name="id" value="<?=$add_qty;?>">                         
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Add Kit Quantity</h4></td>
                                            <td align="right"><button type="submit" class="btn btn-primary" id="btnrrno">Save Details</button> <a href="<?=base_url();?>kit_assembly" class="btn btn-danger">Close</a></td>
                                        </tr>
                                    </table>                                    
                                </div>            
                                <?php
                                $select = $this->Inventory_model->getRRNO();
                                ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>RRNo</label>
                                        <select name="rrno" class="form-control" id="rrno" required onclick="changeDisplay();">
                                            <option value="">Select RRNo</option>
                                            <?php
                                            foreach($select as $item){
                                                if($item['quantity'] > 0){
                                                    echo "<option value='$item[rrno]'>$item[rrno]</option>";
                                                }                                                
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" name="quantity" class="form-control" required>
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