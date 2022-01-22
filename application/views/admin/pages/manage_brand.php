<!-- start: Content -->
<div id="content" class="span10">

        <div class="page-title">
            <div class="title_left">
            <h3>Brand</h3>
            </div>

            <!-- <div class="title_right">
            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
                </div>
            </div>
            </div> -->
        </div>
    <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Brand</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <style type="text/css">
                        #result{color:red;padding:5px}
                        #result p{color:red}
                    </style>
                    <div id="result">
                        <p><?php echo $this->session->flashdata('message'); ?></p>
                    </div>
                  <div class="x_content">

                    <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                    <div class="table-responsive">
                    <div class="col-md-12" align="right">
                        <a class="btn btn-primary" href="<?php echo base_url('add/brand')?>" type="button"><i class="fa fa-plus"></i> Add Brand</a>
                    </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>No.</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                        $i = 0;
                        foreach($all_brand as $single_brand){
                            $i++;
                            ?>
                            <tr class="<?php echo ($i%2) ? 'even':'odd' ?> pointer">
                                <td><?php echo $i; ?></td>
                                <td class="center"><?php echo $single_brand->brand_name;?></td>
                                <td class="center"><?php echo $single_brand->brand_description;?></td>
                                <td class="center">
                                    <?php if ($single_brand->publication_status == 1) { ?>
                                        <span class="badge badge-success">Published</span>
                                    <?php } else {
                                        ?>
                                        <span class="badge badge-danger">Unpublished</span>
                                        <?php }
                                    ?>
                                </td>
                                <td class="center">
                                    <?php if ($single_brand->publication_status == 0) { ?>
                                        <a class="btn btn-success" href="<?php echo base_url('published/brand/' . $single_brand->brand_id); ?>">
                                            <i class="fa fa-hand-o-up"></i>
                                        </a>
                                    <?php } else {
                                        ?>
                                        <a class="btn btn-primary" href="<?php echo base_url('unpublished/brand/' . $single_brand->brand_id); ?>">
                                            <i class="fa fa-hand-o-down"></i>  
                                        </a>
                                        <?php }
                                    ?>

                                    <a class="btn btn-info" href="<?php echo base_url('edit/brand/' . $single_brand->brand_id); ?>">
                                        <i class="fa fa-edit"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo base_url('delete/brand/' . $single_brand->brand_id); ?>">
                                        <i class="fa fa-trash-o"></i> 
                                    </a>
                                </td>

                            </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
</div><!--/.fluid-container-->

<!-- end: Content -->