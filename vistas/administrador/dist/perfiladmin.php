<?php
session_start();
?>

<!--Codigo de actualizar datos Admin-->
<?php
require_once '../../../conexion.php';

if (isset($_POST['actualizar'])) 
{  
  
    $usuario=$_POST['usuario'];
    $psw=$_POST['psw'];
    

    $sql = $cnnPDO->prepare(
        'UPDATE administrador SET usuario = :usuario, psw = :psw WHERE usuario = :usuario'
    );
        
    $sql->bindParam(':usuario',$usuario);
    $sql->bindParam(':psw',$psw);
    $sql->execute();
    unset($sql);
    unset($cnnPDO);

    header("location:logout.php");
}
?>
<!--Termina Codigo de actualizar datos Admin-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pagina Admin - Style Clothing</title>
    <link href="../../../assets/img/clothes-hanger.png" rel="icon">
    <!--CDN SWEET ALERT-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--TERMINA CDN SWEET ALERT-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">
    <link rel="icon" href="assets/images/" type="image/x-icon">
    <!-- font css -->
    <link rel="stylesheet" href="assets/fonts/feather.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/material.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css" id="main-style-link">

</head>

<body class="">
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="assets/images/logo.svg" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="index.php" class="b-brand">
					<img src="../../../assets/img/styleclothingr.png" alt="" class="logo logo-lg"  width="70%">
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>Navegación</label>
					</li>
					<li class="pc-item">
						<a href="index.php" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">home</i></span><span class="pc-mtext">Tablero</span></a>
					</li>
					<li class="pc-item pc-caption">
						<label>Elementos</label>
						<span>Herramientas administrador</span>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">business_center</i></span><span class="pc-mtext">Basicas</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="../index.php">Agregar productos</a></li>
						</ul>
					</li>
					
					<li class="pc-item pc-caption">
						<label>Ver</label>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">edit</i></span><span class="pc-mtext">Clientes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="datosclientes.php">Ver clientes registrados</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
			<div class="mr-auto pc-mob-drp">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item">
						<a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							Administrador
						</a>
						<div class="dropdown-menu pc-h-dropdown">
							<a href="perfiladmin.php" class="dropdown-item">
								<i class="material-icons-two-tone">account_circle</i>
								<span>Perfil Admin</span>
							</a>
							</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="ml-auto">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="material-icons-two-tone">search</i>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
							<form class="px-3">
								<div class="form-group mb-0 d-flex align-items-center">
									<i data-feather="search"></i>
									<input type="search" class="form-control border-0 shadow-none" placeholder="Buscar">
								</div>
							</form>
						</div>
					</li>
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="assets/images/user/administrador.png" alt="user-image" class="user-avtar">
							<span>
								<span class="user-name"><?php echo $_SESSION['usuario'];?></span>
								<span class="user-desc"><?php echo $_SESSION['descripcion'];?></span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
							<div class=" dropdown-header">
								<h5 class="text-overflow m-0"><span class="badge bg-light-primary"><a href="#" target="_blank">Opciones</a></span></h5>
							</div>
				
							<a href="#" class="dropdown-item" >
								<i class="material-icons-two-tone" >chrome_reader_mode</i>
								<span> <button type="submit" id="cerrar" name="cerrar"> Cerrar sesión</button></span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>
<div class="pc-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tablero</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        
            <div class="col-xl-6 col-md-12">
            <div class="login-form">
                <h1>Solo puede actualizar la contraseña</h1>
                    <form method="post">
                        <div class="form-group">
                            <label>Usuario:</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['usuario'];?>" id="usuario" name="usuario">
                        </div> 
                        <div class="form-group">
                            <label>Descripcion:</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['descripcion'];?>">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['psw'];?>" id="psw" name="psw">
                        </div>
                        <button type="submit" name="actualizar" id="actualizar">Actualizar datos</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    <!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
    <!-- <script src="assets/js/uikit.min.js"></script> -->

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-sale.js"></script>
</body>

</html>



<script type="text/javascript">
    $(document).ready(function(){
       

        $('#cerrar').click(function(){
            
          
            Swal.fire({
              //position: 'top-end',
              icon: 'success',
              title: 'Cerro sesión correctamente',
              showConfirmButton: false,
              timer: 1500
             
                }).then(function(){
                    window.location="logout.php"
                });

        return false;
      
        });

    });
</script>
