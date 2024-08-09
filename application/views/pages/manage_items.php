<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Manage Items</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item active">Manage Items</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>List of Items</h4></td>
                                            <td align="right"><a href="<?=base_url();?>add_item" class="btn btn-primary">Add New Item</a></td>
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
                                                <th>Item Code</th>
                                                <th>Description</th>
                                                <th>SOH</th>
                                                <th>Unit</th>
                                                <th>Product Type</th>                                                
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x=1;
                                                foreach($items as $item){
                                                    echo "<tr>";
                                                        echo "<td align='center'>$x.</td>";
                                                        echo "<td align='left'>$item[code]</td>";
                                                        echo "<td>$item[description]</td>";
                                                        echo "<td align='left'>$item[quantity]</td>";
                                                        echo "<td align='left'>$item[unit]</td>";
                                                        echo "<td align='left'>$item[prodtype]</td>";
                                                        echo "<td align='center'><a href='".base_url()."edit_item/$item[id]' class='btn btn-warning'>Edit</a></td>";
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