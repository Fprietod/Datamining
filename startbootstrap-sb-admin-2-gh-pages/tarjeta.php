<?php

require 'conexion.php';
require 'funcs.php';
$errors = array();

if(!empty($_POST)){
	$boletos = $mysqli->real_escape_string($_POST['boletos']);
      $tarjeta = $mysqli->real_escape_string($_POST['tarjeta']);
      $evento = $mysqli->real_escape_string($_POST['tarjeta']);

      if(vacio($boletos,$tarjeta,$evento))
      {
           $errors[] = "Debe llenar todos los campos";
      }
      if(count($errors) == 0)
      {
      	$registro = registraCompra($boletos, $tarjeta, $evento);

      	if($registro >0){
      		echo "Se ha hecho la compra";
      	}else {
      		$errors[] = "Error al Registrar";
      	}     
      }
}



?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Compra boletos para eventos</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>

	<div id="wrapper">
		 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Price Ticket</div>
      </a>		 
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Eventos próximos</span></a>
      </li>		
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Hoy
      </div>
			<!-- Nav Item - Pages Collapse Menu -->
			      <li class="nav-item">
			        <a class="nav-link collapsed" href="www.google.com.mx" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			          <i class="fas fa-fw fa-cog"></i>
			          <span>Conciertos</span>
			        </a>
			        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			          <div class="bg-white py-2 collapse-inner rounded">
			            <h6 class="collapse-header">Custom Components:</h6>
			            <a class="collapse-item" href="buttons.html">Buttons</a>
			            <a class="collapse-item" href="cards.html">Cards</a>
			          </div>
			        </div>
			      </li>

				<!-- Nav Item - Pages Collapse Menu -->
				     <!--  <li class="nav-item">
				        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				          <i class="fas fa-fw fa-cog"></i>
				          <span>Deportes</span>
				        </a>
				        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				          <div class="bg-white py-2 collapse-inner rounded">
				            <h6 class="collapse-header">Custom Components:</h6>
				            <a class="collapse-item" href="buttons.html">Buttons</a>
				            <a class="collapse-item" href="cards.html">Cards</a>
				          </div>
				        </div>
				      </li> -->

				<!-- Nav Item - Pages Collapse Menu -->
				      <li class="nav-item">
				        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				          <i class="fas fa-fw fa-cog"></i>
				          <span>Teatro y culturales</span>
				        </a>
				        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				          <div class="bg-white py-2 collapse-inner rounded">
				            <h6 class="collapse-header">Custom Components:</h6>
				            <a class="collapse-item" href="buttons.html">Buttons</a>
				            <a class="collapse-item" href="cards.html">Cards</a>
				          </div>
				        </div>
				      </li>
				<!-- Nav Item - Pages Collapse Menu -->
				     <!--  <li class="nav-item">
				        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				          <i class="fas fa-fw fa-cog"></i>
				          <span>Familiares</span>
				        </a>
				        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				          <div class="bg-white py-2 collapse-inner rounded">
				            <h6 class="collapse-header">Custom Components:</h6>
				            <a class="collapse-item" href="buttons.html">Buttons</a>
				            <a class="collapse-item" href="cards.html">Cards</a>
				          </div>
				        </div>
				      </li> -->

				<!-- Nav Item - Pages Collapse Menu -->
				      <li class="nav-item">
				        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				          <i class="fas fa-fw fa-cog"></i>
				          <span>Especiales</span>
				        </a>
				        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				          <div class="bg-white py-2 collapse-inner rounded">
				            <h6 class="collapse-header">Custom Components:</h6>
				            <a class="collapse-item" href="buttons.html">Buttons</a>
				            <a class="collapse-item" href="cards.html">Cards</a>
				          </div>
				        </div>
				      </li>

			<!-- Divider -->
    	  <hr class="sidebar-divider d-none d-md-block">

      			<!-- Sidebar Toggler (Sidebar) -->
      			<div class="text-center d-none d-md-inline">
        		<button class="rounded-circle border-0" id="sidebarToggle"></button>
      			</div>

    		</ul>
    		<!-- End of Sidebar -->

    		 <!-- Content Wrapper -->
    		<div id="content-wrapper" class="d-flex flex-column">

      		<!-- Main Content -->
      		<div id="content">

        	<!-- Topbar -->
        	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->
          				 <div class="topbar-divider d-none d-sm-block"></div>
						 <!-- Nav Item - User Information -->
			            <li class="nav-item dropdown no-arrow">
			              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><a href="login.html" class="mr-2 d-none d-lg-inline text-gray-600 small"> </a> </span>
			                <!-- <img class="img-profile rounded-circle" src="" width="30" height="30"> -->
			              </a>
			              <!-- Dropdown - User Information -->
			              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
			                <a class="dropdown-item" href="#">
			                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
			                  Profile
			                </a>
			                <a class="dropdown-item" href="#">
			                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
			                  Settings
			                </a>
			                <a class="dropdown-item" href="#">
			                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
			                  Activity Log
			                </a>
			                <div class="dropdown-divider"></div>
			                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
			                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
			                  Logout
			                </a>
			              </div>
			            </li>
          <!-- Topbar Navbar -->
          <!-- <ul class="navbar-nav ml-auto"> -->

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!-- <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a> -->
              <!-- Dropdown - Messages -->
              <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">	
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li> -->

          </ul> <!-- termina navbar   --> 
      </nav>
      			<!-- termina topbar   --> 


       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
            
          </div>
           <div class="row">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Bienvenido, recuerda que solo aceptamos tarjeta 
                  de débito y credito.</h6>
                </div>
                <div class="card-body">
                  <p>Bienvenido, a Price Ticket
                   La página número 1 para la venta de boletos nacional.
                      Por favor indique a que evento desea ir.
                      Seguido de cuantos boletos desea.
                      Después ingrese su tarjeta de credito. </p>
                   <div class="col-auto">
                     
                      <i><img src="../imagenes\monalaferte.jpg" height="60" width="60" class="img-profile rounded-circle"></i>
                    </div>
                </div>
                 <div class="form-group">
                <label for="evento" class="col-md-3 control-label"></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="evento" placeholder="¿Qué evento ira?" value="<?php if(isset($evento)) echo $evento; ?>" required >
                </div>
              </div>
                 <div class="form-group">
                <label for="boletos" class="col-md-3 control-label"></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="boletos" placeholder="¿Cúantos boletos desea?" value="<?php if(isset($boletos)) echo $boletos; ?>" required >
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-md-3 control-label"></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="tarjeta" placeholder="Por favor inserte su tarjeta" value="<?php if(isset($tarjeta)) echo $tarjeta; ?>" required >
                </div>
              </div>
              <div class="form-group">                                      
                <div class="col-md-offset-3 col-md-9">
                  <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Comprar</button> 
                </div>
              </div>
              
              </div>








           </div>
</body>
</html>