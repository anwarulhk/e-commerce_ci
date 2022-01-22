
<div id="content" class="span10">

    <div class="page-title">
						<div class="title_left">
							<h3>Form Category</h3>
						</div>

						<!-- <div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div> -->
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Category</h2>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('save/category');?>" method="post">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Category Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="category_name" name="category_name" type="text" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-description">Category Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">												
                                            <textarea class="form-control" id="category_description" name="category_description" rows="3" placeholder="Category Description"></textarea>
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
                                                    <input type="radio" class="flat" id="publication_status" name="publication_status" value="0" />
                                                </p>
												</div>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
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