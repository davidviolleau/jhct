<?
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html>
<head>
	<jdoc:include type="head" />
	<? JHtml::_('bootstrap.framework') ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./templates/jhctbootstrap23/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="./templates/jhctbootstrap23/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="./templates/jhctbootstrap23/css/style.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Federo" rel="stylesheet" type="text/css">
	
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<?php /*include_once("analyticstracking.php")*/ ?>
<!-- Wrap navbar and caroussel together to align the navbar at the bottom of the carousel -->
<div class="header-wrapper">
	<!-- NAVBAR
	================================================== -->
	<div class="navbar-wrapper">
		<!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
		<div class="container">
			<div class="logo navbar">
				<div class="navbar-inner">
					<a href="<?php echo $this->baseurl ?>">
						<img src="./templates/jhctbootstrap23/img/fermedelafutaie_transp.png">
						<h3>Ferme de la Futaie</h3>
					</a>
				</div>
			</div>
			<div class="navbar">
				<div class="navbar-inner">
					<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="<?php echo $this->baseurl ?>">Ferme de la Futaie</a>
					<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
					<div class="nav-collapse collapse">				
						<jdoc:include type="modules" name="menu" style="none" />
					</div><!--/.nav-collapse -->
				</div><!-- /.navbar-inner -->
			</div><!-- /.navbar -->
		</div> <!-- /.container -->
	</div><!-- /.navbar-wrapper -->
	<!-- Carousel
	================================================== -->
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
<? for ($x = 1; $x <= 15; $x++) { ?>	
			<div class="car item">
				<img src="./templates/jhctbootstrap23/img/slide-<?echo sprintf("%02d", $x);?>.jpg" alt="" class="carouselimg">
			</div>			
<? } ?>
		</div>
	</div><!-- /.carousel -->
</div><!-- /.header-wrapper -->
<!-- main container -->
<div id="mainwrap">
<div class='container'>
	<!-- mid container - includes main content area and left/right sidebars -->
	<div class='row'>
		<!-- determine module sizes -->
		<? if ($this->countModules('left') and $this->countModules('right'))
				{$x=2; $y=6; $z=4;}
			else if ($this->countModules('right'))
				{$x=0; $y=7; $z=5;}
			else
				{$x=0; $y=12; $z=0;}
		?>
		<!-- /determine module sizes -->
		<!-- left sidebar -->
		<? if ($x>0) : ?>
			<div class='span<?echo $x;?> bs-docs-sidebar' id='leftness'>
				<jdoc:include type="modules" name="left" style="none" />
			</div>
		<? endif; ?>
		<!-- /left sidebar -->
		<!-- articles -->
		<div class='span<?echo $y;?>'>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
			</div>
		<!-- /articles -->
		<!-- right<body onload="mymessage()"> sidebar -->
		<? if ($z>0) : ?>
			<div class='span<?echo $z;?>' id='rightness'>
				<jdoc:include type="modules" name="right" style="none" />
			</div>
		<? endif; ?>
	</div>
</div>
</div>
<script>
!function ($) {
	$('.car').eq(Math.floor((Math.random() * $('.car').length))).addClass("active");
$(window).bind("load", function() {
		var $howhigh = $( "#myCarousel" ).height();
		// carousel
		$('#myCarousel').carousel({pause: "false" , interval: 6000})
		// side bar
		$('.bs-docs-sidenav').affix({
			offset: { 
				top: $howhigh
			}
		});
		// to top scrolling
		$("a[href='#main']").click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
});
}(window.jQuery)

</script>
</body>
</html>
