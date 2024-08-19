<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Production Report</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item active">Production Report</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Production Report</h4></td>
                                            <td align="right"></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Date</th>
                                                <th>RR #</th>
                                                <th>Description</th>                                                
                                                <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x=1;
                                                foreach($items as $item){
                                                    echo "<tr>";
                                                        echo "<td align='center'>$x.</td>";
                                                        echo "<td align='left'>$item[datearray]</td>";
                                                        echo "<td align='left'>$item[rrno]</td>";
                                                        echo "<td align='left'>$item[description]</td>";
                                                        echo "<td>$item[quantity]</td>";                                                                                                                
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
                    </div>                    
                </div>
            </section>
        </div>