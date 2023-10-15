<?php
include("coneccion.php");
if (isset($_POST['clientea'])) {
	
	$nm= $_POST['clientea'];
	$sl= $_POST['saldo'];
	$con="INSERT INTO $saldo(`cliente`,`saldo`) VALUES ('$nm','$sl')";
	mysqli_query($consulta,$con);
	header("Refresh0");

	}
  else if (isset($_POST['cliente'])) {
	
		$nm= $_POST['cliente'];
	$sl= $_POST['saldo'];
	
		$cona="UPDATE $saldo SET  `saldo`='$sl' WHERE `cliente`='$nm'";
		mysqli_query($consulta,$cona);
		header("Refresh0");
	
		}
       else if (isset($_POST['clientem'])) {
	
			$ie= $_POST['clientem'];
		
		
			$el="DELETE from $maspedido where cliente = '$ie'";
			mysqli_query($consulta,$el);
			header("Refresh0");
		
			}
           else if (isset($_POST['aa'])) {
	
                $cosafea = $_POST['aa'];
                if ($cosafea =! "fndfnjdnfjdfndjfndjfndfdjfjj") {
					echo '';
					exit();
}
}
else {
	echo '';
	exit();
}
?>
<!DOCTYPE html>
			<html lang="en">
			  <head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="description" content="">
				<meta name="author" content="Dashboard">
				<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
			
				<title>Panel de Administración</title>
			
				<!-- Bootstrap core CSS -->
				<link href="assets/css/bootstrap.css" rel="stylesheet">
				<!--external css-->
				<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
				<link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
				<link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
				<link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
				
				<!-- Custom styles for this template -->
				<link href="assets/css/style.css" rel="stylesheet">
				<link href="assets/css/style-responsive.css" rel="stylesheet">
			
				<script src="assets/js/chart-master/Chart.js"></script>
				
				<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!--[if lt IE 9]>
				  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			  </head>
			
			  <body>
			
			  <section id="container" >
				  <!-- **********************************************************************************************************************************************************
				  TOP BAR CONTENT & NOTIFICATIONS
				  *********************************************************************************************************************************************************** -->
				  <!--header start-->
				  <header class="header black-bg">
						  <div class="sidebar-toggle-box">
							  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
						  </div>
						<!--logo start-->
						<a href="index.html" class="logo"><b>Starcopy Admin</b></a>
						<!--logo end-->
						<div class="nav notify-row" id="top_menu">
							<!--  notification start -->
							
							<!--  notification end -->
						</div>
						<div class="top-menu">
							<ul class="nav pull-right top-menu">
								<li><a class="logout" href="javascript:history.back()">Salir</a></li>
							</ul>
						</div>
					</header>
				  <!--header end-->
				  
				  <!-- **********************************************************************************************************************************************************
				  MAIN SIDEBAR MENU
				  *********************************************************************************************************************************************************** -->
				  <!--sidebar start-->
				  <aside>
					  <div id="sidebar"  class="nav-collapse ">
						  <!-- sidebar menu start-->
						  <ul class="sidebar-menu" id="nav-accordion">
						  
								
									
                          <li class="mt">
                          <form action="panel.php" method="POST">
                              <input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
                          
                          <a href="#"   onclick="document.forms[0].submit()">
                              <i class="fa fa-dashboard"></i>
                              <span>Principal</span>
                          </a>
                          </form>
                      </li>
                     
                    
                      <li class="sub-menu">
                          <form action="estrenos.php" method="POST">
                              
                          <input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
                      <a href="#"   onclick="document.forms[1].submit()" >
                              <i class="fa fa-desktop"></i>
                              <span>Estrenos</span>
                          </a>
                          </form>
                      </li>
                     
                      <li class="sub-menu">
                      <form action="ddp.php" method="POST">
                              <input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
                          
                          <a href="#"   onclick="document.forms[2].submit()">
                              <i class="fa fa-cogs"></i>
                              <span>Pronto</span>
                          </a>
                      </form>
                      </li>
                      <li class="sub-menu">
                      <form action="masp.php" method="POST">
                              <input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
                          
                          <a  href="#"   onclick="document.forms[3].submit()">
                              <i class="fa fa-book"></i>
                              <span>Mas pedido</span>
                          </a>
                      </form>
                      </li>
                      <li class="sub-menu">
                      <form action="massaldo.php" method="POST">
                              <input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
                          
                          <a href="#"  class="active" onclick="document.forms[4].submit()">
                              <i class="fa fa-money"></i>
                              <span>Añadir saldo</span>
                          </a>
                      </form>
                      </li>
                     
                      <li class="sub-menu">
                      <form action="otroadmin.php" method="POST">
                              <input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
                          
                          <a href="#"   onclick="document.forms[5].submit()">
                              <i class="fa fa-plus"></i>
                              <span>Agregar admin</span>
                          </a>
                      </form>
                      </li>
    
                      <li class="sub-menu">
                      <form action="actcatalogo.php" method="POST">
                              <input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
                          
                          <a href="#"   onclick="document.forms[6].submit()">
                              <i class="fa fa-cogs"></i>
                              <span>Actualizar Catálogo</span>
                          </a>
                      </form>
                      </li>
						  </ul>
						  <li class="sub-menu">
	<form action="facturas.php" method="POST">
			<input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
		
		<a href="#"   onclick="document.forms[7].submit()">
			<i class="fa fa-cogs"></i>
			<span>Facturas</span>
		</a>
	</form>
	</li>
						  <!-- sidebar menu end-->
					  </div>
					  
                 
				  </aside>
				  <!--sidebar end-->
				  
				  <!-- **********************************************************************************************************************************************************
				  MAIN CONTENT
				  *********************************************************************************************************************************************************** -->
				  <!--main content start-->
				  <section id="main-content">
				  <section class="wrapper">
			<div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Agregar Cliente</h4>
                      <form class="form-inline" role="form" method="POST">
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Cliente</label>
                              <input type="text" class="form-control" name ="clientea" id="exampleInputEmail2" placeholder="Cliente">
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Saldo</label>
                              <input type="text" class="form-control" name ="saldo" id="exampleInputEmail2" placeholder="Saldo">
                              </div>
                          <button type="submit" class="btn btn-success">Agregar</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
            </div>
			  <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Actualizar Cliente</h4>
                      <form class="form-inline" role="form" method="POST">
					 
					  <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Cliente</label>
                              <input type="text" class="form-control" name ="cliente" id="exampleInputEmail2" placeholder="Cliente">
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Saldo</label>
                              <input type="text" class="form-control" name ="saldo" id="exampleInputEmail2" placeholder="Saldo">
                          </div>
                         
                          <button type="submit" class="btn btn-primary">Actualizar</button>
                      </form>

          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div>
			  <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Eliminar Cliente</h4>
                      <form class="form-inline" role="form" method="POST">
					  <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail2">Cliente</label>
                              <input type="text" class="form-control" name ="clientem" id="exampleInputEmail2" placeholder="cliente">
                          </div>  
					 
                          <button type="submit" class="btn btn-danger">Eliminar
						  </button>
                      </form>
					  
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div>
			  <div class="row mt">
						  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Saldo</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  
                                  <th class="hidden-phone"><i ></i> Cliente</th>
                                  <th><i ></i> Saldo</th>
                                 
                                  
                              </tr>
                              </thead>
                              <tbody>
							  <?php
								 
								  
								 
								  $Seleccionar = mysqli_query($consulta,"SELECT * from $saldo") ;
								  while ($obtener = mysqli_fetch_array($Seleccionar)) {
									
								
								   echo'
                             
							
							 <tr>
                                  
                                  <td  class="hidden-phone">'.$obtener['cliente'].'</td>
                                  <td>'.$obtener['saldo'].'</td>
                                 
                              
                              </tr>
							';
							} ?>
			  </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
						 
				 
		</section>
              
    </section>
				  <!--main content end-->
				  <!--footer start-->
				  <footer class="site-footer">
					  <div class="text-center">
						 2021 Starcopy Management
						  <a href="index.html#" class="go-top">
							  <i class="fa fa-angle-up"></i>
						  </a>
					  </div>
				  </footer>
				  <!--footer end-->
			  </section>';
          
            
				<!-- js placed at the end of the document so the pages load faster -->
				<script src="assets/js/jquery.js"></script>
				<script src="assets/js/jquery-1.8.3.min.js"></script>
				<script src="assets/js/bootstrap.min.js"></script>
				<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
				<script src="assets/js/jquery.scrollTo.min.js"></script>
				<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
				<script src="assets/js/jquery.sparkline.js"></script>
			
			
				<!--common script for all pages-->
				<script src="assets/js/common-scripts.js"></script>
				
				<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
				<script type="text/javascript" src="assets/js/gritter-conf.js"></script>
			
				<!--script for this page-->
				<script src="assets/js/sparkline-chart.js"></script>    
				<script src="assets/js/zabuto_calendar.js"></script>	
				
				<script type="text/javascript">
					$(document).ready(function () {
					var unique_id = $.gritter.add({
					
					});
			
					return false;
					});
				</script>
				
				<script type="application/javascript">
					$(document).ready(function () {
						$("#date-popover").popover({html: true, trigger: "manual"});
						$("#date-popover").hide();
						$("#date-popover").click(function (e) {
							$(this).hide();
						});
					
						$("#my-calendar").zabuto_calendar({
							action: function () {
								return myDateFunction(this.id, false);
							},
							action_nav: function () {
								return myNavFunction(this.id);
							},
							ajax: {
								url: "show_data.php?action=1",
								modal: true
							},
							legend: [
								{type: "text", label: "Special event", badge: "00"},
								{type: "block", label: "Regular event", }
							]
						});
					});
					
					
					function myNavFunction(id) {
						$("#date-popover").hide();
						var nav = $("#" + id).data("navigation");
						var to = $("#" + id).data("to");
                        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
					}
				</script>
			  
			
			  </body>
			</html>