<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$title;?></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <?=form_open(base_url()."search_item_list");?>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="description">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go!</button>
                    </span>
                  </div>
                  <?=form_close();?>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>            
            <div class="row">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-6 col-sm-12  text-center">
                        <ul class="pagination pagination-split">
                          <li><a href="<?=base_url();?>item_list" style="<?=$oil;?>">Oil</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/emulsion" style="<?=$emulsion;?>">Emulsion</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/enamel" style="<?=$enamel;?>">Enamel</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/bituminous" style="<?=$bituminous;?>">Bituminous</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/aluminum" style="<?=$aluminum;?>">Aluminum</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/corrosive" style="<?=$corrosive;?>">Anti-Corrosive</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/rubber" style="<?=$rubber;?>">Synthetic Rubber</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/cement" style="<?=$cement;?>">Cement</a></li>
                          <li>|</li>
                          <li><a href="<?=base_url();?>category_list/special" style="<?=$special;?>">Special</a></li>                          
                        </ul>
                      </div>
                      <div class="col-md-6 col-sm-12" align="right">
                        <a href="<?=base_url();?>add_new_item" class="btn btn-success btn-sm text-white" style="border-radius:50px;"><i class="fa fa-plus"></i> Add Item</a>                                                    
                      </div>

                      <div class="clearfix"></div>
                      <?php
                      if(count($items) > 0){
                        foreach($items as $item){                    
                      ?>
                      <div class="col-md-3 col-sm-3  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?=$item['code'];?></i></h4>
                            <div class="left col-md-7 col-sm-7">
                              <h2><?=$item['name'];?></h2>
                              <p><strong>About: </strong> <?=$item['description'];?> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-money"></i> Price: <?=number_format($item['price'],2);?></li>
                                <li><i class="fa fa-cubes"></i> Qty: <?=$item['quantity'];?></li>
                              </ul>
                            </div>
                            <div class="right col-md-5 col-sm-5 text-center">
                              <?php
                              $add_image="";
                              $remove_image="";
                              if($item['image'] <> ""){
                                $add_image="style='display:none;'";
                              ?>
                              <img src="<?=base_url();?>design/images/items/<?=$item['image'];?>" alt="" class="img-circle img-fluid">
                              <?php
                              }else{
                                $remove_image="style='display:none;'";
                                ?>
                                <img src="<?=base_url();?>design/admin/images/user.png" alt="" class="img-circle img-fluid">
                                <?php
                              }
                              ?>
                            </div>
                          </div>
                          <div class=" profile-bottom text-center">
                            <!-- <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div> -->
                            <div class=" col-sm-12 emphasis">
                              <table width="100%">
                                <tr>
                                  <td><a href="<?=base_url();?>edit_item/<?=$item['id'];?>" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit Item </a></td>
                                  <td align="right"><a href="<?=base_url();?>add_image/<?=$item['id'];?>" class="btn btn-success btn-sm" <?=$add_image;?>><i class="fa fa-user"></i> Add Image </a></td>
                                  <td align="right"><a href="<?=base_url();?>remove_image/<?=$item['id'];?>" class="btn btn-danger btn-sm" <?=$remove_image;?> onclick="return confirm('Do you wish to remove this image?');return false;"> <i class="fa fa-times"></i> Remove Image </a></td>                                  
                                </tr>
                              </table>                                                                                        
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                        }
                    }else{
                        echo "<h3>No Item found!";
                    }
                        ?>
                  </div>
                </div>
            </div>
          </div>
        </div>