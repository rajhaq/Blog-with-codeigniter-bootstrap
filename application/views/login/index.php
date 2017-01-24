<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="blogframe">
                
                <?php echo $this->session->flashdata('notification'); ?>
                
                <div class="blog50">
                 <h1>Sign in</h1>
                    </br>
                    <form action="<?php echo site_url('login'); ?>" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="pwd">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="hidden" name="trigger" value="do_login" />
                                <button type="submit" class="btn btn-default">Signin</button>
                                </form> <a href="<?php echo site_url('login/signup'); ?>" class="btn btn-success">Signup</a>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>
        
    </div>
</div>

