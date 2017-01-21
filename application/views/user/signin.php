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
                <h1>Sign in</h1>
                </br>
                <form action="login" method="post" class="form-horizontal">
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
                    
                  <button type="submit" class="btn btn-default">Signin</button>
                </div>
              </div>
            </form>
            </div>
                <hr/>
                
                <a href="/codetest/index.php/login/signup"> <button type="link" class="btn btn-success btn-lg">Signup</button></a>
                </div>
        </div>

    </div>
</div>

