            <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3><?=$title;?></h3>
						</div>						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-5 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Item Details</h2>									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />									
                                        <?=form_open(base_url()."save_item",array('class' => 'form-horizontal form-label-left'));?>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Item Code<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" id="first-name" required="required" class="form-control" name="code">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Name<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" id="last-name" required="required" class="form-control" name="item_name">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Description<span class="required">*</span></label>
											<div class="col-md-9 col-sm-9 ">
												<textarea name="description" rows="3" class="form-control"></textarea>
											</div>
										</div>										
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Category<span class="required">*</span></label>
											<div class="col-md-9 col-sm-9 ">
												<select name="category" class="form-control" required>
                                                    <option value="">Select Category</option>
                                                    <option value="oil">Oil Paint</option>
                                                    <option value="emulsion">Emulsion Paint</option>
                                                    <option value="enamel">Enamel Paint</option>
                                                    <option value="bituminous">Bituminous Paint</option>
                                                    <option value="aluminum">Aluminum Paint</option>
                                                    <option value="corrosive">Anti-Corrosive Paint</option>
                                                    <option value="rubber">Synthetic Rubber Paint</option>
                                                    <option value="cement">Cement Paint</option>
                                                    <option value="special">Speciality Home Paint</option>
                                                </select>
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Price<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" id="last-name" required="required" class="form-control" name="price">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Item Quantity<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" id="last-name" required="required" class="form-control" name="quantity">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">												
												<button class="btn btn-primary" type="reset">Cancel</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									<?=form_close();?>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>