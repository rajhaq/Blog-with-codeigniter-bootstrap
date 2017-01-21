<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="blogframe">
                                <?php
                                if(validation_errors())
                                { ?>
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Error!</strong><?php echo validation_errors(); ?>
                                    </div>
                                <?php } ?>
                <div class="blog50">
                <h1>Sign up</h1>

                </br>
            <form action="create" class="form-horizontal" method="post" enctype="multipart/form-data">
             <div class="form-group">
                <label class="control-label col-sm-3"  for="name">Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  value="<?php echo set_value('name'); ?>" name="name" id="name" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="email">Email:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" name="email" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Password: </label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd2">Confirm Password: </label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-3" for="sex">
                      Sex
                </label>
                <div class="col-sm-9">
                      <select class="form-control"  name="sex" id="sex">
                      <option  value="1">Male</option>
                      <option value="0">Female</option>
                      </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="bio">Bio:</label>
                <div class="col-sm-9">
                <textarea name="bio" class="form-control" placeholder="Write some text..." id="bio" style="height: 150px"><?php echo set_value('bio'); ?></textarea>
                </div>
              </div>                

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Sign Up</button>
                </div>
              </div>
            </form>
            </div>
                </div>
        </div>
    </div>
</div>