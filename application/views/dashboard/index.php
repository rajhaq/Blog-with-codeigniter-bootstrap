<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="#">Dashboard<span class="sr-only">(current)</span></a></li>
        <li><a href="category">Category</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Create new</a></li>
      </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Dashboard</h1>

      <div class="row placeholders">
        <div class="col-md-12 placeholder">
            <div class="centeronly">
                <div class="blog33">
          <img src="/codetest/images/user.png" class="img-responsive"  width="200px" height="200px">
          <h4><?php 
            $username = ($this->session->userdata['logged_in']['username']);
            echo $username;
            ?></h4>
          <span class="text-muted"><?php 
            $username = ($this->session->userdata['logged_in']['email']);
            echo $username;
            ?></span>
                </div>
            </div>
        </div>
      </div>

      <h2 class="sub-header">Today's Log</h2>
    </div>
  </div>
</div>