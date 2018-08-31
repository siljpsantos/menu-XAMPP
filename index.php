<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>InforWay</title>
		
		<link rel="stylesheet" type="text/css"  href="/dashboard/stylesheets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/dashboard/stylesheets/bootstrap-3.3.7/dist/css/bootstrap-theme.min.css">
		
		<!-- JS Libraries -->
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="_cdn/bootstrap.min.js"></script>

        <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />
		
		<style>
			.borda {
				/*outline: 1px solid grey;
				outline-offset: -3px;*/
			}
		</style>

    </head>

    <body>
        
		<nav id="menu_esconder" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<ul class="nav navbar-nav" id="logo_menu">
						<li>
							<a href="./" class="pull-left navbar-brand">HOME</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse">

					<ul class="nav navbar-nav navbar-right" id="bs-example-navbar-collapse-1">

						<li>
							<a href="../phpmyadmin/">PHPMyAdmin</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		
		<br /><br /><br />
		
		<div class="container" >
			<div class="content">
				<div class="row">
					<div class="col-md-12">
						<center>
							<h1 class='text-success'>Menu Localhost</h1>
							<br />
						</center>
					</div>
				</div>
				<?php

				$dir = "../*";
				$dir = glob($dir);

				echo '<div class="row">';
				foreach($dir as $file){
					$filename = ucwords(substr(str_replace(array('_', '-')," ",$file), 3));
					if($filename != 'Index.php' && $filename != 'Index.html' && $filename != 'Dashboard' && $filename != 'Img' 
					   && $filename != 'Webalizer' && $filename != 'Xampp' && $filename != 'Applications.html' && $filename != 'Bitnami.css'
					   && $filename != 'Favicon.ico'){
						   
						echo "<div style='margin-bottom: 10px; padding: 5px 5px;' class='col-md-4 borda'><a href='./$file' class='btn btn-success btn-block'>$filename</a></div>";
						
					}
				}
				echo '</div>';
				
				?>
			<div>
		</div>

    </body>
</html>
