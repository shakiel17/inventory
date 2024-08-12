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
                                                <th class="text-center">
                                                    #
                                                </th>                                                
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
                                                    echo "<tr>";
                                                        echo "<td align='center'>$x.</td>";                                                        
                                                        echo "<td align='left'>$item[id]</td>";
                                                        echo "<td align='left'>$item[description]</td>";
                                                        echo "<td align='left'>".number_format($item['sellingpricePHIC'],2)."</td>";
                                                        echo "<td></td>";                                                        
                                                        echo "<td align='center'><a href='".base_url()."edit_kit/$item[id]' class='btn btn-success'>Edit</a></td>";
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
                    </div>                    
                </div>
            </section>
        </div>