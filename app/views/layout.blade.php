<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="{{URL::to('img/favicon.ico')}}" type="image/x-icon">
	<title>@yield('title', 'Opticentro Vega - Su optica amiga')</title>
	{{ HTML::style('assets/css/bootstrap.css', array('media'=>'screen', 'rel' => 'stylesheet')) }}
	{{ HTML::style('assets/css/style.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/datepicker3.css') }}
	{{ HTML::style('assets/css/sweet-alert.css') }}
	{{ HTML::style('assets/css/font-awesome.min.css', array('media' => 'screen')) }}
	{{ HTML::style('assets/css/base.css', array('media' => 'screen')) }}
	<!-- Latest compiled and minified CSS -->
   {{ HTML::style('assets/css/bootstrap-table.min.css') }}
   {{ HTML::style('assets/css/bootstrap-toggle.min.css') }}
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{ HTML::script('assets/js/html5shiv.js') }}
      {{ HTML::script('assets/js/respond.min.js') }}
    <![endif]-->
    {{ HTML::script('assets/js/modernizr.js') }}
		<script type="text/javascript">
			window.onload = function() {
			    // get the form and its input elements
			    var form = document.forms[0],
			        inputs = form.elements;

			    // if no autofocus, put the focus in the first field
			    if (!Modernizr.input.autofocus) {
			        inputs[0].focus();
			    }
			    // if required not supported, emulate it
			    if (!Modernizr.input.required) {
			        form.onsubmit = function() {
			            var required = [], att, val;
			            // loop through input elements looking for required
			            for (var i = 0; i < inputs.length; i++) {
			                att = inputs[i].getAttribute('required');
			                // if required, get the value and trim whitespace
			                if (att != null) {
			                    val = inputs[i].value;
			                    // if the value is empty, add to required array
			                    if (val.replace(/^\s+|\s+$/g, '') == '') {
			                        required.push(inputs[i].name);
			                    }
			                }
			            }
			            // show alert if required array contains any elements
			            if (required.length > 0) {
			                alert('ERROR: Existen campos requeridos');
			            	 // prevent the form from being submitted
			                return false;
			            }
			        };
			    }
			}
		</script>
</head>
<body>
	<div id="wrap">
		<div id="main" class="clearf">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav">
              <div class="navbar-header">
                <div class="navbar-banner">
                    <a href="{{URL::to('/')}}" class="navbar-brand navbar-brand-centered"><img src="{{URL::to('img/optica_vega.jpg')}}" style="width:120px"></a>
                </div>
              </div>
				@if(Auth::check())
                <div class="navbar-header">
                    <!--button type="button" class="navbar-toggle navbar-toggle-left toggle-menu menu-left push-body" data-toggle="collapse" data-target="#nav-left">
                        <i class="fa fa-bars fa-1x"></i>
                    </button-->
                    <div class="dropdown">
      					  <button id="dLabel" type="button" class="navbar-toggle navbar-toggle-right dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
      					  	<i class="glyphicon glyphicon-cog"></i>
      					  </button>
      					  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel" style="margin:48px 5px 0px 0px;">
      					    <li><a href="{{ URL::to('logout') }}"><i class="fa fa-fw fa-power-off fa-1x"></i> Cerrar Sesión</a></li>
      					  </ul>
            	    </div>
                </div>
				@endif

                <div class="navbar-collapse collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="nav-left">

                  {{-- urls.txt --}}
		           @if(Auth::check())
                    <ul class="nav navbar-nav navbar-right sign-hide">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenido, {{ Auth::user()->user }} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::to('logout') }}"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                   @endif
               </div>
            </nav>
           <div class="container">
                <div class="row">
                	{{-- urls laterales --}}

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							@if(Auth::check())
                    	<div class="row fecha">
                    		<div class="col-xs-12">
		                    	<div class="pull-right" id="tiempo">
		                    		{{-- fecha actual --}}
		                    	</div>
                    		</div>
                    	</div>
							@endif
						{{-- Contenido --}}
                    	@yield('contenido')

                    </div>
                </div>
            </div>
		</div>
	</div>
	@if(Auth::check())
		<div id="footer">
			Derechos Reservados &copy; 2015
		</div>
	@endif
	{{ HTML::script('assets/js/jquery.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	<!-- PLUGINS PARA LA APLICACION -->
	{{ HTML::script('assets/js/bootstrap-datepicker.js') }}
	{{ HTML::script('assets/js/locales/bootstrap-datepicker.es.js') }}
	<script type="text/javascript">
		$(document).ready(function () {
			$('.datepicker').datepicker({
			    language: "es",
			    format: 'yyyy-mm-dd',
			    todayBtn: "linked",
			    todayHighlight: true,
			    autoclose: false
			});
		});
	</script>
 	{{ HTML::script('assets/js/overthrow/overthrow-detect.js') }}
  {{ HTML::script('assets/js/overthrow/overthrow-init.js') }}
  {{ HTML::script('assets/js/overthrow/overthrow-polyfill.js') }}
  {{ HTML::script('assets/js/overthrow/overthrow-toss.js') }}
  {{ HTML::script('assets/js/jPushMenu.js') }}
  {{ HTML::script('assets/js/v2p.js') }}
  {{ HTML::script('assets/js/jquery-scrolltofixed-min.js') }}
  {{ HTML::script('assets/js/bootstrap-toggle.min.js') }}
  {{ HTML::script('assets/js/script.js') }}
  {{ HTML::script('assets/js/sweet-alert.js') }}
  {{ HTML::script('assets/js/bootstrap-table.min.js') }}
  {{ HTML::script('assets/js/bootstrap-table-es-AR.min.js') }}
  {{ HTML::script('assets/js/dataGrid.js') }}
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
