<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 	 ]>    <html class="ie" lang="en"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
<head>
	<?php include('header.php'); ?>
</head>
<body>
<!--Side Menu-->
<?php include('sidemenu.php'); ?>

	<!--Top Menu-->
	<?php include('topmenu.php'); ?>
	<!--main-->
	<div class="main" role="main">		
		<div class="wrap clearfix">
			<!--main content-->
			<div class="content clearfix">
				<!--breadcrumbs-->
				 	<?php include('sections/aboutus-breadcrumbs.php'); ?>	
				<!--//breadcrumbs-->
						
				<!--About Us three-fourth content-->
				<section class="three-fourth">
					<?php include('sections/aboutus-left-content.php'); ?>	
				</section>
				<!--//About Us  content-->
				
				<!--sidebar-->
					<?php include('sections/aboutus-right-content.php'); ?>
				<!--//sidebar-->
			</div>
			<!--//main content-->
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<?php include('footer.php'); ?>
	<script>
		// Initiate selectnav function
		selectnav();
	</script>
	</body>
</html>