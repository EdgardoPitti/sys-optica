<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title', 'Opticentro Vega - Su optica amiga')</title>	
	{{ HTML::style('assets/css/bootstrap.css', array('media'=>'screen', 'rel' => 'stylesheet')) }}	
	{{ HTML::style('assets/css/font-awesome.min.css', array('media' => 'screen', 'rel' => 'stylesheet')) }}
	{{ HTML::style('assets/css/style.css', array('media' => 'screen', 'rel' => 'stylesheet')) }}
	{{ HTML::style('assets/css/base.css', array('media' => 'screen', 'rel' => 'stylesheet')) }}
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{ HTML::script('assets/js/html5shiv.js') }}
      {{ HTML::script('assets/js/respond.min.js') }}
    <![endif]-->
</head>
<body>
	<div id="wrap">		
		<div id="main" class="clearf">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-banner">
                    <a href="#" class="navbar-brand">Opticentro Vega</a>                        
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-left toggle-menu menu-left push-body" data-toggle="collapse" data-target="#nav-left">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="dropdown">
					  <button id="dLabel" type="button" class="navbar-toggle navbar-toggle-right dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
					  	<i class="glyphicon glyphicon-cog"></i>
					  </button>
					  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel" style="margin:48px 5px 0px 0px;">
					    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a></li>                            
					  </ul>
					</div>
                   		
                </div>
                <div class="navbar-collapse collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="nav-left">
                	{{--Ocultar navegacion izquierda--}}
                	<ul class="nav navbar-nav nav-left-hide">
                	  <li class="menu">Menu</li>
                	  <li class="dropdown open">
                	  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sliders icon"></i> Mantenimiento <span class="caret"></span></a>
                	  	<ul class="dropdown-menu" role="menu">
                	  		<li class="active"><a href="#">Historia Clínico</a></li>
                            <li><a href="#">Paciente Externo</a></li>
                            <li><a href="#">Reorganización</a></li>
                	  	</ul>
                	  </li>		 
                	  <li class="dropdown">
                	  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-question-circle icon"></i> Reconsultas <span class="caret"></span></a>
                	  	<ul class="dropdown-menu" role="menu">
                	  		<li><a href="#">menu 2</a></li>
                            <li><a href="#">menu 2</a></li>
                            <li><a href="#">menu 2</a></li>
                	  	</ul>
                	  </li>
                	  <li class="dropdown">
                	  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart icon"></i> Reportes <span class="caret"></span></a>
                	  	<ul class="dropdown-menu" role="menu">
                            <li><a href="#">Listado Gral. de Pacientes</a></li>
                            <li><a href="#">Listado de Pacientes Atendidos</a></li>
                            <li><a href="#">Listado de Pacientes (Fecha Ingreso)</a></li>
                            <li><a href="#">Receta</a></li>
                            <li><a href="#">Pacientes Referidos Por</a></li>
                            <li><a href="#">Pacientes Referidos A</a></li>
                            <li><a href="#">Listado de Trabajos Terminados</a></li>
                            <li><a href="#">Listado de Trabajos Pendientes</a></li>
                            <li><a href="#">Listado de Ficha Clínica</a></li>
                            <li><a href="#">Listado de Historia Clínica</a></li>
                	  	</ul>
                	  </li>	            
		            </ul>
                    <ul class="nav navbar-nav navbar-right sign-hide">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenido, Usuario <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a></li>                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
                    
                        <div class="list-group" id="accordion"  aria-multiselectable="false">
                          <div class="panel panel-default mg-panel" >
                              <a data-toggle="collapse" class="list-group-item" href="#collapseOne" data-parent="#accordion" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fa fa-sliders icon"></i> Mantenimiento
                                <i class="glyphicon glyphicon-chevron-down  pull-right"></i> 
                              </a>                                
                              <ul id="collapseOne" class="nav nav-pills submenu nav-stacked panel-collapse collapse"  role="tabpanel"  aria-labelledby="collapseOne">
                                <li class="activo"><a href="#">Historia Clínico</a></li>
                                <li><a href="#">Paciente Externo</a></li>
                                <li><a href="#">Reorganización</a></li>
                              </ul>
                          </div>
                          <div class="panel panel-default mg-panel" >
                              <a data-toggle="collapse" class="list-group-item" href="#collapseTwo" data-parent="#accordion" aria-expanded="false" aria-controls="collapseTwo">
                                 <i class="fa fa-question-circle icon"></i> Reconsultas 
                                 <i class="glyphicon glyphicon-chevron-down  pull-right"></i>
                              </a>                                
                              <ul id="collapseTwo" class="nav nav-pills submenu nav-stacked panel-collapse collapse" role="tabpanel" aria-labelledby="collapseTwo">
                                    <li><a href="#">Menu Item 1</a></li>
                                    <li><a href="#">Menu Item 2</a></li>
                                    <li><a href="#">Menu Item 3</a></li>
                              </ul>
                          </div>
                          <div class="panel panel-default mg-panel">
                              <a data-toggle="collapse" class="list-group-item" href="#collapseThree" data-parent="#accordion" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-bar-chart icon"></i> Reportes 
                                <i class="glyphicon glyphicon-chevron-down  pull-right"></i>
                              </a>
                              <ul id="collapseThree" class="nav nav-pills submenu nav-stacked panel-collapse collapse" role="tabpanel" aria-labelleby="collapseThree">
                                    <li><a href="#">Listado Gral. de Pacientes</a></li>
                                    <li><a href="#">Listado de Pacientes Atendidos</a></li>
                                    <li><a href="#">Listado de Pacientes (Fecha Ingreso)</a></li>
                                    <li><a href="#">Receta</a></li>
                                    <li><a href="#">Pacientes Referidos Por</a></li>
                                    <li><a href="#">Pacientes Referidos A</a></li>
                                    <li><a href="#">Listado de Trabajos Terminados</a></li>
                                    <li><a href="#">Listado de Trabajos Pendientes</a></li>
                                    <li><a href="#">Listado de Ficha Clínica</a></li>
                                    <li><a href="#">Listado de Historia Clínica</a></li>
                               </ul>
                          </div>
                        </div>                    	
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    	<div class="row fecha">
                    		<div class="col-xs-12">
		                    	<div class="pull-right" id="tiempo">
		                    		{{-- fecha actual --}}
		                    	</div>
                    		</div>
                    	</div>
                    	
                    	@yield('contenido')
                    	<h2 class="titulo">Mantenimientos</h2>
                    	<div class="panel panel-default">
                    		<div class="panel-heading">
                    			<h4 class="panel-title"><i class="fa fa-book"></i> Historia Clínica</h4>
                    		</div>
                    		<div class="panel-body">
                        	asdasdasdadsadasd<br>	asdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoaf			                       
                    		</div>
                    	</div>
                    	<div class="panel panel-default">
                    		<div class="panel-heading">
                    			<h4 class="panel-title"><i class="fa fa-book"></i> Historia Clínica</h4>
                    		</div>
                    		<div class="panel-body">
                        	asdasdasdadsadasd<br>	asdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoafasdasdafoajfoajsfoajsfoajfoajfoajfoaf			                       
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
		</div>
	</div>
		<div id="footer">
			footer
		</div>
	{{ HTML::script('assets/js/jquery.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	{{ HTML::script('assets/js/jPushMenu.js') }}
    {{ HTML::script('assets/js/v2p.js') }}
    <script type="text/javascript">
      //<![CDATA[
      $(document).ready(function(){
        $('.toggle-menu').jPushMenu({closeOnClickLink: false});
        $('.dropdown-toggle').dropdown();

      });
      //]]>
    </script>
    <script language="javascript">
		var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
		var f = new Date();		
		$("#tiempo").html(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
	</script>

</body>
</html>
