<?
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<jdoc:include type="head" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="icon" href="../../favicon.ico">
<!-- Bootstrap core CSS -->
<link href="./templates/jhct/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="./templates/jhct/css/bootstrap-theme.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="./templates/jhct/css/theme.css" rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="./templates/jhct/js/ie-emulation-modes-warning.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
		<a href="/"><img src="./templates/jhct/img/logo.png"/></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <jdoc:include type="modules" name="menu" style="none" />
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="container theme-showcase" role="main">
		<jdoc:include type="modules" name="carousel" style="none" />
      
      <div class="row">
        <jdoc:include type="modules" name="row-1" style="none" />
      </div>
	  <div class="row">
        <jdoc:include type="modules" name="row-2" style="none" />
      </div>
	  <div class="row">
        <jdoc:include type="modules" name="row-3" style="none" />
      </div>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./templates/jhct/js/bootstrap.min.js"></script>
    <script src="./templates/jhct/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./templates/jhct/js/ie10-viewport-bug-workaround.js"></script>
 </body>
</html>
