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
                          <th>#</th>
                          <th>Header</th>
                          <th>Header</th>
                          <th>Header</th>
                          <th>Header</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1,001</td>
                          <td>Lorem</td>
                          <td>ipsum</td>
                          <td>dolor</td>
                          <td>sit</td>
                        </tr>
                        <tr>
                          <td>1,002</td>
                          <td>amet</td>
                          <td>consectetur</td>
                          <td>adipiscing</td>
                          <td>elit</td>
                        </tr>
                        <tr>
                          <td>1,003</td>
                          <td>Integer</td>
                          <td>nec</td>
                          <td>odio</td>
                          <td>Praesent</td>
                        </tr>
                        <tr>
                          <td>1,003</td>
                          <td>libero</td>
                          <td>Sed</td>
                          <td>cursus</td>
                          <td>ante</td>
                        </tr>
                        <tr>
                          <td>1,004</td>
                          <td>dapibus</td>
                          <td>diam</td>
                          <td>Sed</td>
                          <td>nisi</td>
                        </tr>
                        <tr>
                          <td>1,005</td>
                          <td>Nulla</td>
                          <td>quis</td>
                          <td>sem</td>
                          <td>at</td>
                        </tr>
                        <tr>
                          <td>1,006</td>
                          <td>nibh</td>
                          <td>elementum</td>
                          <td>imperdiet</td>
                          <td>Duis</td>
                        </tr>
                        <tr>
                          <td>1,007</td>
                          <td>sagittis</td>
                          <td>ipsum</td>
                          <td>Praesent</td>
                          <td>mauris</td>
                        </tr>
                        <tr>
                          <td>1,008</td>
                          <td>Fusce</td>
                          <td>nec</td>
                          <td>tellus</td>
                          <td>sed</td>
                        </tr>
                        <tr>
                          <td>1,009</td>
                          <td>augue</td>
                          <td>semper</td>
                          <td>porta</td>
                          <td>Mauris</td>
                        </tr>
                        <tr>
                          <td>1,010</td>
                          <td>massa</td>
                          <td>Vestibulum</td>
                          <td>lacinia</td>
                          <td>arcu</td>
                        </tr>
                        <tr>
                          <td>1,011</td>
                          <td>eget</td>
                          <td>nulla</td>
                          <td>Class</td>
                          <td>aptent</td>
                        </tr>
                        <tr>
                          <td>1,012</td>
                          <td>taciti</td>
                          <td>sociosqu</td>
                          <td>ad</td>
                          <td>litora</td>
                        </tr>
                        <tr>
                          <td>1,013</td>
                          <td>torquent</td>
                          <td>per</td>
                          <td>conubia</td>
                          <td>nostra</td>
                        </tr>
                        <tr>
                          <td>1,014</td>
                          <td>per</td>
                          <td>inceptos</td>
                          <td>himenaeos</td>
                          <td>Curabitur</td>
                        </tr>
                        <tr>
                          <td>1,015</td>
                          <td>sodales</td>
                          <td>ligula</td>
                          <td>in</td>
                          <td>libero</td>
                        </tr>
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