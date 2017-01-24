<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li><a href="#">Dashboard</a></li>
        <li class="active"><a href="category">Category<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Create new</a></li>
      </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">   
        <div class="row">
            <div class="col-md-8">
                <h1 class="page-header">Category</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="col-md-1" style="text-align: center;">SL.</th>
                          <th class="col-md-5">Name</th>
                          <th class="col-md-2" style="text-align: center;">Action</th>
                          <th class="col-md-2" style="text-align: center;">Mute/Unmute</th>
                          <th class="col-md-2" style="text-align: center;">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($category as $cat_item): ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $cat_item['id']; ?></td>
                            <td><?php echo $cat_item['name']; ?></td>
                            <td style="text-align: center;"><a href="edit/<?php echo $cat_item['id']; ?>"><button type="button" class="btn btn-sm btn-info"> Edit </button></a>
                            </td>
                            <td style="text-align: center;"><?php if($cat_item['status']==1){ ?>
                                <a href="mute/<?php echo $cat_item['id']; ?>"><button type="button" class="btn btn-warning" data-dismiss="modal">Mute</button></a>
                            <?php }
                            else
                            {
                                ?>
                                <a href="unmute/<?php echo $cat_item['id']; ?>"><button type="button" class="btn btn-success" data-dismiss="modal">Unmute</button></a>
                            <?php
                            }
                            ?>    
                            
                            </td>
                            <td style="text-align: center;"><button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $cat_item['id']; ?>">Delete</button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete<?php echo $cat_item['id']; ?>" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Category</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete <?php echo $cat_item['name']; ?></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                  </div>
                                </div>

                              </div>
                            </div></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <h1 class="page-header">Add Category</h1>
                <?php
                    if(validation_errors())
                { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong><?php echo validation_errors(); ?>
                </div>
                <?php } ?>
                    <?php
                    if($flag==true)
                { ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong></strong><?php echo cat($this->input->post("catName")); ?>
                </div>
                <?php } ?>
                <form class="form-horizontal" action="add" method="post">
                    <div class="form-group">
                      <label class="control-label col-md-3">
                        Name
                      </label>
                      <div class="col-md-9">
                          <input class="col-md-12" placeholder="" name="catName" type="text">
                      </div>
                    </div>
                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                          Add
                      </button>
                      <div class="clearfix">
                      </div>
                    </div>
                  </form>
            </div>
            
        </div>
    </div>
  </div>
</div>