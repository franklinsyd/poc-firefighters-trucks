<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POC Equipment Check List</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  

  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a>
	  <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">User Registration Panel</a>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.php" class="sidebar-link text-muted"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
			  <li class="sidebar-list-item"><a href="add_user.php"class="sidebar-link text-muted active"><i class="o-survey-1 mr-3 text-gray"></i><span>Register</span></a></li>
			  

        </ul>
  
      </div>
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <!--<div class="row ">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between bg-hover-gradient-green">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-green"></div>
                    <div class="text">
                     <button type="button" class="btn btn-default" style="color:black">User Registration</button>
                    </div>
                  </div>
                  <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                </div>
              </div>
            </div> -->
          </section>
         
         
          <section>
            <div class="row">
              <div class="col-lg-8">
                <div class="card mb-5 mb-lg-0">         
                  <div class="card-header">
                    <h2 class="h6 mb-0 text-uppercase">Enter Your Details in the form below</h2>
                  </div>
                  <div class="card-body">

                     <form class="form-horizontal" action="core/register_user.php"method="POST">
						<?php
							if(isset($_GET['status'])){
							$status = $_GET['status'];
							if ($status==1){
								echo '<div class="form-group row">';
								echo '<div class="alert alert-success" role="alert">';
								echo   'The user has been successfully added';
								echo '</div>';
								echo '</div>';
							}
							else if ($status==0) {
								echo '<div class="form-group row">';
								echo '<div class="alert alert-danger" role="alert">';
								echo   'Enter the correct details and try again !';
								echo '</div>';
								echo '</div>';
							}
							
						}	
												
						?>
					  <div class="form-group row">
                        <label class="col-md-3 form-control-label">Surname</label>
                        <div class="col-md-9">
                          <input id="inputHorizontalSuccess" name="surname"  class="form-control form-control-success">
                        </div>
                      </div>
					 <div class="form-group row">
                        <label class="col-md-3 form-control-label">Initials</label>
                        <div class="col-md-9">
                          <input id="initials" name="initials"  class="form-control form-control-success">
                        </div>
                      </div>
					 <div class="form-group row">
                        <label class="col-md-3 form-control-label">ID Number</label>
                        <div class="col-md-9">
                          <input id="id_no" name="id_no"  class="form-control form-control-success">
                        </div>
                      </div>
					  <div class="form-group row">
                        <label class="col-md-3 form-control-label">Cellphone Number</label>
                        <div class="col-md-9">
                          <input id="cell_no" name="cell_no"  class="form-control form-control-success">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Email</label>
                        <div class="col-md-9">
                          <input id="email" name="email" type="email" placeholder="youremail@domain.com" class="form-control form-control-success">
                        </div>
                      </div>
                      <div class="form-group row">       
                        <div class="col-md-9 ml-auto">
                          <input type="submit" value="Register" class="btn btn-primary">
                        </div>
                      </div>
                    </form>
                 </div>
              </div>
            </div>
          </section>
         
        </div>

        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">POC Equipment Check List&copy; 2019</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Built by SMK </a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>