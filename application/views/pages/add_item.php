<div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Add New Items</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></div>                        
                        <div class="breadcrumb-item"><a href="<?=base_url();?>manage_items">Manage Items</a></div>
                        <div class="breadcrumb-item active">Add Items</div>
                    </div>
                </div>

                <div class="section-body">                    
                    <div class="row">
                        <div class="col-6">
                            <?=form_open(base_url()."save_item");?>
                            <input type="hidden" name="id" value="<?=$id;?>">
                            <div class="card">
                                <div class="card-header">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><h4>Item Details</h4></td>
                                            <td align="right"><button type="submit" class="btn btn-primary">Save Item</button></td>
                                        </tr>
                                    </table>                                    
                                </div>
                                <div class="card-body">
                                    <div class="form-group">                                        
                                        <input type="text" class="form-control" name="description" placeholder="Description" required value="<?=$description;?>">
                                    </div>
                                    <div class="form-group">                                        
                                        <select name="unit" class="form-control" required placeholder="Select Unit">
                                            <option value="<?=$unit;?>"><?=$unit;?></option>
                                            <option value="box">box</option>
                                            <option value="pc">pc</option>
                                            <option value="bot">bot</option>
                                            <option value="gal">gal</option>
                                            <option value="tube">tube</option>
                                            <option value="tx">tx</option>
                                            <option value="vial">vial</option>
                                            <option value="packs">packs</option>
                                        </select>
                                    </div>
                                    <div class="form-group">          
                                        <input type="checkbox" name="production" value="1" style="transform: scale(1.5);" <?=$production;?>>                              
                                        &nbsp;&nbsp;<label>For Production?</label>                                        
                                    </div>
                                    <div class="form-group">          
                                        <input type="checkbox" name="receiving" value="1" style="transform: scale(1.5);" <?=$receiving;?>>                              
                                        &nbsp;&nbsp;<label>Receiving?</label>                                        
                                    </div>
                                </div>
                            </div>
                            <?=form_close();?>
                        </div>
                    </div>                    
                </div>
            </section>
        </div>