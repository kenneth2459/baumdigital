<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Baum Digital</title>
	<link rel="stylesheet" href="<?php echo PATH ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<?php wp_head(); ?>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Navbar</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="<?php echo HOMELINK; ?>">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="<?php echo HOMELINK; ?>/festivales">Festivales y eventos</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				    </form>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</header>