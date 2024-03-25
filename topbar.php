<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
	background-image:url('./assets/img/dbs.jpeg');
	background-repeat:no-repeat;
	background-size:cover;
}
</style>

<nav class="navbar navbar-dark bg-white fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<i class="fa fa-poll-h" style="opacity:0;"></i>

  			</div>
  		</div>
	  	<div class="col-md-2 float-right text-dark">
	  		<a href="ajax.php?action=logout" class="text-dark"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>