<!-- start: Content -->
<div id="content" class="span10">

<!-- 
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('edit/category/'.$category_info_by_id->id)?>">Edit Category</a>
        </li>
    </ul> -->

    <div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Edit Category</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<!-- <li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li> -->
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('update/category/'.$category_info_by_id->id);?>" method="post">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Category Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?php echo $category_info_by_id->category_name;?>" id="category_name" name="category_name" type="text" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category-description">Category Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">												
                                            <textarea class="form-control" id="category_description" name="category_description" rows="3" placeholder="Category Description"><?php echo $category_info_by_id->category_description;?></textarea>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Publication Status</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" data-toggle="buttons">
                                                <p style="margin-top: 8px;">
                                                    Published 
                                                    <input type="radio" class="flat" id="publication_status" <?if($category_info_by_id->publication_status==1){ echo 'checked';}?> name="publication_status" value="1" /> 
                                                    UnPublished:
                                                    <input type="radio" class="flat" id="publication_status" <?if($category_info_by_id->publication_status==0){ echo 'checked';}?> name="publication_status" value="0" />
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

<!-- end: Content -->