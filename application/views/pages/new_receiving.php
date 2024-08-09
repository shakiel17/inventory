<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>New Manual Receiving</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Manual Receiving</a></div>
                        <div class="breadcrumb-item active">New Manual Receiving</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-9">
                            <?=form_open(base_url()."post_receiving");?>
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Invoice #:</h4><input type="text" class="form-control" name="invno" required placeholder="Invoice #"><h4>Invoice Date:</h4><input type="date" class="form-control" name="invdate" required placeholder="Invoice Date"></td>
                                            <td align="right"><button type="submit" class="btn btn-primary" onclick="return confirm('Do you wish to post items for receiving?');return false;">Post Receiving</button> <a href="<?=base_url();?>manual_receiving" class="btn btn-danger" onclick="return confirm('Do you wish to cancel transaction?');return false;">Cancel</a></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center">
                                            <thead>
                                                <tr>
                                                <th class="text-center" width="20">
                                                    #
                                                </th>
                                                <th>Description</th>
                                                <th>Unit</th>                                                                                               
                                                <th width="300">Expiration</th>
                                                <th width="300">Lot No</th>
                                                <th width="100">Qty</th>                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x=1;
                                                foreach($items as $item){
                                                    echo "<input type='hidden' name='code[]' value='$item[code]'>";
                                                    echo "<tr>";
                                                        echo "<td align='center'>$x.</td>";
                                                        echo "<td align='left'>$item[description]</td>";
                                                        echo "<td>$item[unit]</td>";
                                                        echo "<td><input type='date' class='form-control' name='expiration[]'></td>";
                                                        echo "<td><input type='text' class='form-control' name='lotno[]'></td>";
                                                        echo "<td><input type='text' class='form-control' name='quantity[]'></td>";
                                                    echo "</tr>";
                                                    $x++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>
                    </div>                    
                </div>
            </section>
        </div>