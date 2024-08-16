<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Count Sheet</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item active">Count Sheet</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-5">
                            <?=form_open('count_sheet_print');?>
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Generate Count Sheet</h4></td>
                                            <td align="right"><button type="submit" class="btn btn-primary">Generate</button></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Inventory Date</label>
                                        <input type="date" name="rundate" class="form-control" required>
                                    </div>                                    
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>
                        <?php
                        if(count($items) > 0){
                            ?>
                            <div class="col-7">
                            
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Count Sheet</h4>
                                        Inventory Date: <b><?=date('F d, Y',strtotime($date));?></b></td>
                                            <td align="right"><button type="submit" class="btn btn-primary">Print</button></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="responsive-table">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Description</th>
                                                    <th>Unit</th>
                                                    <th>SOH</th>
                                                    <th>Count 1</th>
                                                    <th>Count 2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x=1;
                                                foreach($items as $item){
                                                    $qty=$this->Inventory_model->getQtyByDate($item['code'],$date);
                                                    echo "<tr>";
                                                        echo "<td>$x.</td>";
                                                        echo "<td>$item[description]</td>";
                                                        echo "<td>$item[unit]</td>";
                                                        echo "<td align='center'>$qty[quantity]</td>";
                                                        echo "<td>&nbsp;</td>";
                                                        echo "<td>&nbsp;</td>";
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
                        }
                        ?>
                        
                    </div>                    
                </div>
            </section>
        </div>