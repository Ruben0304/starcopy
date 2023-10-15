<?php 
include ("coneccion.php"  );
if (isset($_POST['aa'])) {
	
    $cosafea = $_POST['aa'];
    if ($cosafea =!"fndfnjdnfjdfndjfndjfndfdjfjj") {
        echo '';
        exit();
    }
}
   
   
   
	
	
	
else if (isset($_POST['userl'])) {
	
		$us= $_POST['userl'];
		$ps= $_POST['pass'];
	
		$con="SELECT * from loginform where usuario = '".$us."' AND contraseña = '".$ps."' limit 1 ";
		$resultado= mysqli_query($consulta,$con);

		if (mysqli_num_rows($resultado)==1) {

        }
       
        
        else {
          echo"Nombre o contraseña incorrectos";
          exit();
        }
        
        
    }
    else {
        echo"";
        exit();
      }
      
       
        ?><!DOCTYPE html>
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
                      
                      <a href="#" class="active"  onclick="document.forms[0].submit()">
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
                      
                      <a href="#"   onclick="document.forms[4].submit()">
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
                  <li class="sub-menu">
	<form action="facturas.php" method="POST">
			<input type="hidden" name="aa" value="fndfnjdnfjdfndjfndjfndfdjfjj">   
		
		<a href="#"   onclick="document.forms[7].submit()">
			<i class="fa fa-cogs"></i>
			<span>Facturas</span>
		</a>
	</form>
	</li>
                          </ul>
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
            
                         
                            
                                    
                                
                                  <!--CUSTOM CHART START -->
                                  <div class="border-head">
                                      <h3>VISITS</h3>
                                  </div>
                                  <div class="custom-bar-chart">
                                      <ul class="y-axis">
                                      
                                          <li><span>500</span></li>
                                          <li><span>200</span></li>
                                          <li><span>100</span></li>
                                          <li><span>50</span></li>
                                          <li><span>10</span></li>
                                          <li><span>0</span></li>
                                      </ul>
                                      <div class="bar">
                                          <div class="title">Hoy</div>
                                          <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                                      </div>
                                      <div class="bar ">
                                          <div class="title">Ayer</div>
                                          <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                                      </div>
                                      <div class="bar ">
                                          <div class="title"> 3 dias</div>
                                          <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                                      </div>
                                      <div class="bar ">
                                          <div class="title">3 dias</div>
                                          <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                                      </div>
                                      <div class="bar">
                                          <div class="title">3 dias</div>
                                          <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                                      </div>
                                      <div class="bar ">
                                          <div class="title">3 dias</div>
                                          <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                                      </div>
                                      <div class="bar">
                                          <div class="title">3 dias</div>
                                          <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                                      </div>
                                  </div>
                                  <!--custom chart end-->
                                </div><!-- /row -->	
                                
                              </div><!-- /col-lg-9 END SECTION MIDDLE -->
                             
                              <div class="col-md-12 mt">
                              <div class="content-panel">
                                  <table class="table table-hover">
                                      <h4><i class="fa fa-angle-right"></i> Hover Table</h4>
                                      <hr>
                                      <thead>
                                      <tr>
                                          <th>#</th>
                                         
                                          <th>Busqueda</th>
                                          <th>Cantidad de veces</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>1</td>
                                         
                                          <td>Casa de Papel</td>
                                          <td>20</td>
                                      </tr>
                                      <tr>
                                      <td>1</td>
                                     
                                      <td>Casa de Papel</td>
                                      <td>20</td>
                                  </tr>
                                  <tr>
                                  <td>1</td>
                                 
                                  <td>Casa de Papel</td>
                                  <td>20</td>
                              </tr>
                                     
                                     
                                      </tbody>
                                  </table>
                                </div>
                          </div>
                              
            
                     
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
              </section>
            
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
            </html>';


