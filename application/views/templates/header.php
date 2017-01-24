<html>
        <head>

            <link href="/codetest/css/bootstrap.css" rel="stylesheet">
            <link href="/codetest/css/style.css" rel="stylesheet">
            <link href="/codetest/css/dashboard.css" rel="stylesheet">
            <script src="/codetest/js/jquery.js"></script>
            <script src="/codetest/js/bootstrap.js"></script>
            <title><?php echo $title; ?></title>
        </head>
        <body>
     <nav class="navbar navbar-wrapper navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

            <a class="navbar-brand" href="#"><?php echo $title; ?></a>        
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php if (isset($this->session->userdata['logged_in'])){ ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php 
            $username = ($this->session->userdata['logged_in']['username']);
            echo $username;
            ?></a></li>
            
            <li><a href="<?php echo site_url('login/logout'); ?>"><span class="glyphicon glyphicon-off" aria-hidden="true"> </span> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        <?php
        }
        else
        { 
        ?>
       <ul class="nav navbar-nav navbar-right">
           <li><a href="<?php echo site_url('login'); ?>">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        <?php 
            }
        ?>
      </div>
    </nav>
