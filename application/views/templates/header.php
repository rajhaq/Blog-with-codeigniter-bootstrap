<html>
        <head>

            <link href="/codetest/css/bootstrap.css" rel="stylesheet">
            <link href="/codetest/css/style.css" rel="stylesheet">
            <script src="/codetest/js/jquery.js"></script>
            <script src="/codetest/js/bootstrap.js"></script>
            <title><?php echo $title ?></title>
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

          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
