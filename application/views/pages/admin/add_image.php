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
									<h2>Item Image</h2>									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />									
                                        <?=form_open(base_url()."save_image",array('class' => 'form-horizontal form-label-left','enctype' => 'multipart/form-data'));?>
                                        <input type="hidden" name="id" value="<?=$item['id'];?>">
                                        <input type="hidden" name="code" value="<?=$item['code'];?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Item<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="file" class="form-control">
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