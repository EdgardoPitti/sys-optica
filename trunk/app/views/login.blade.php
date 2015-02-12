@extends('layout')

@section('title')
	Iniciar Sesión
@stop

@section('contenido')
	<div class="login-body">
	    <article class="container-login center-block">
			<section>
				<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
					<div id="login-access" class="tab-pane fade active in">
						<h2><i class="fa fa-sign-in"></i> Accesso</h2>
						@if(isset($error_login))
		                    <div class="alert alert-danger" role="alert" style="text-align:center;margin-top:13px;"><strong>{{ $error_login }}</strong></div>    
		                @endif		
						{{ Form::open(array('url'=>'sigin', 'method'=>'POST', 'class' => 'form-horizontal' ), array('role' => 'form')) }}			
							<div class="form-group @if ($errors->has('user')) has-error @endif">
								{{ Form::label('user', 'Usuario', array('class' => 'sr-only'))}}
								{{ Form::text('user', null, array('placeholder' => 'Usuario', 'class' => 'form-control', 'required' => 'required'))}}		
								{{ $errors->first("user", "<p style='color:#f00;text-align:center;'>:message </p>") }}														
							</div>
							<div class="form-group @if ($errors->has('password')) has-error @endif">
								{{ Form::label('password', 'Contraseña', array('class' => 'sr-only'))}}
								{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'required'))}}	
								{{ $errors->first("password", "<p style='color:#f00;text-align:center;'>:message</p>") }}     							
							</div>
							<br/>
							<div class="form-group ">				
								<button type="submit" id="submit" class="btn btn-lg btn-primary">Ingresar</button>
							</div>
						{{ Form::close() }}		
					</div>
				</div>
			</section>
		</article>
	</div>
@stop