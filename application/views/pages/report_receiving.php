<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Receiving Summary</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item active">Receiving Summary</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-4">
                            <?=form_open('view_receiving_report');?>
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Generate Receiving Summary</h4></td>
                                            <td align="right"><button type="submit" class="btn btn-primary">Generate</button></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" name="startdate" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" name="enddate" class="form-control" required>
                                    </div>                                    
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>
                        <?php
                        if($result <> ""){
                        ?>
                        <div class="col-8">                            
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Receiving Summary Report</h4></td>
                                            <td align="right"><a href="<?=base_url();?>receiving_report" class="btn btn-danger">Close</a></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>RR #</th>
                                                    <th>Invoice #</th>
                                                    <th>Items</th>
                                                    <th>Qty Rec</th>
                                                    <th>SOH</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($items as $item){
                                                        $itemr="";
                                                        $sohr="";
                                                        $soh="";
                                                        $query=$this->Inventory_model->getAllRRDetails($item['invno'],$item['rrno']);
                                                        foreach($query as $row){
                                                            $qty=$this->Inventory_model->getQtyByRR($item['code'],$item['rrno']);
                                                            $itemr .= $row['description']."<br>";
                                                            $sohr .= $row['quantity']."<br>";
                                                            $soh .= $qty['quantity']."<br>";
                                                        }
                                                        echo "<tr>";
                                                            echo "<td>".date('m/d/Y',strtotime($item['datearray']))."</td>";
                                                            echo "<td>$item[rrno]</td>";
                                                            echo "<td>$item[invno]</td>";
                                                            echo "<td>".$itemr."</td>";
                                                            echo "<td>".$sohr."</td>";
                                                            echo "<td>".$soh."</td>";
                                                        echo "</tr>";
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