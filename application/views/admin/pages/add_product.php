
<!-- start: Content -->
<div id="content" class="span10">
    <div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Product</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                                    <style type="text/css">
                                        #result{color:red;padding: 5px}
                                        #result p{color:red}
                                    </style>
                                    <div id="result">
                                        <p><?php echo $this->session->flashdata('message');?></p>
                                    </div>
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('save/product');?>" method="post" enctype="multipart/form-data">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Product Title <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="product_title" id="product_title"  type="text" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-description">Product Short Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">												
                                            <textarea class="form-control" id="product_short_description" name="product_short_description" rows="3" placeholder="Product Short Description"></textarea>
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-description">Product Long Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">												
                                            <textarea class="form-control" id="product_long_description" name="product_long_description" rows="3" placeholder="Product Long Description"></textarea>
											</div>
										</div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Product Image</label>
                                            <div class="controls">
                                                <input class="span6 typeahead" name="product_image" id="fileInput" type="file"/>
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Product Price <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="product_price" id="product_price"  type="text" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Product Quantity <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="product_quantity" id="product_quantity"  type="text" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Product Category</label>
                                            <div class="controls">
                                                <select id="product_category" class="form-control" name="product_category">
                                                    <?php foreach($all_published_category as $single_category){?>
                                                    <option value="<?php echo $single_category->id;?>"><?php echo $single_category->category_name;?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div> 
                                        
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Product Brand</label>
                                            <div class="controls">
                                                <select id="product_brand" class="form-control" name="product_brand">
                                                    <?php foreach($all_published_brand as $single_brand){?>
                                                    <option value="<?php echo $single_brand->brand_id;?>"><?php echo $single_brand->brand_name;?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div> 
                                        
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Product Featured</label>
                                            <div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" data-toggle="buttons">
                                                <p style="margin-top: 8px;">
                                                    Published 
                                                    <input type="radio" class="flat" id="product_feature" name="product_feature" value="1" /> 
                                                    UnPublished:
                                                    <input type="radio" class="flat" id="product_feature" name="product_feature" value="0" />
                                                </p>
												</div>
											</div>
                                        </div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Publication Status</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" data-toggle="buttons">
                                                <p style="margin-top: 8px;">
                                                    Published 
                                                    <input type="radio" class="flat" id="publication_status" name="publication_status" value="1" /> 
                                                    UnPublished:
                                                    <input type="radio" class="flat" id="publication_status"  name="publication_status" value="0" />
                                                </p>
												</div>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a href="<?php echo base_url('manage/product')?>" class="btn btn-primary" type="button">Cancel</a>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>  
    
</div><!--/.fluid-container-->

<!-- end: Content -->