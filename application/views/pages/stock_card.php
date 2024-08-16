<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Stock Card</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item active">Stock Card</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-4">
                            <?=form_open('view_stock_card',array('target' => '_blank'));?>
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Generate Stock Transaction</h4></td>
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
                                    <div class="form-group">
                                        <label>Item</label>
                                        <select name="code" class="form-control select2" required>
                                            <option value="">Select Item</option>
                                            <?php
                                            foreach($items as $item){
                                                echo "<option value='$item[code]'>$item[description]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>                        
                    </div>                    
                </div>
            </section>
        </div>