<!DOCTYPE html>
<html>
<head>
    <title>Citas Médicas</title>
    <meta charset="UTF-8">
    <style type="text/css">
    	html, body{
			height:100%;    	
    	}
    	body{
			margin:-20px;			
			padding: 20px;
			border-style:double;
			border-radius:6px;    	
    	}    	
    	h1, h2,h3,h4,h5,h6,p{
			margin: 0px;    	
    	}
    	h4{
    		padding-left: 23px;
    	}
    	div .texto{
    		position:absolute;
    		top:28%;
    		left:10%;
    		font-size:16px;
    		font-weight:bold;    	
    	}
    	.resultados{
		   width:40%;	    
    	}

        .titulo{
            width: 100%;
            margin-bottom: 20px;
            position: relative;
        }
        .titulo h1{
            text-align: center;
            paddi ng-top: 20px;
        }
        .titulo img{
            height: 90px;
            width: 18%;
            position: absolute;
            left: 30px;
            top: -15px;
        }
        .datos{
            width: 100%;
            margin-top: 12px;
        }
        .datos p{
            display: inline;
        }
        .datos label{
            font-weight: bold;
        }
        .datos .table{
            font-size: 13px;
            margin: 20px 0px;
            width: 100%;
        }
        .table th{
            background: #efefef;
        }
        .table th,.table td{
            border: 1px solid #3d3d3d;   
            margin: 0px;
            padding:5px 0px; 
            width: 12.5%;
            text-align: center;
        }
    </style>    
</head>
<body>
    <div class="titulo">
        <img src="{{URL::to('img/opticentro-vega-logo.jpg')}}">
        <h1>Dr. Miguel A. Molina Vega</h1>
    </div>
    <div style="position:relative;left:0px;font-size:11px;text-align:center;width:25%;padding-top:10px;">
        <p><b>Dr. Miguel A. Molina Vega</b></p>
        <p>Cirujano Oftalmólogo</p>
        <p>Registro 8415 Cód. m-897</p>
    </div>
    <div style="position:absolute;top:70px;right:0px;font-size:11px;text-align:left;width:25%;padding-top:10px;">
        <p><b>Tels.:</b> </p>
        <div style="margin-left:22px;">
            <p>7754560</p>
            <p>7740128 Ext. 2200 (Hospital)</p>
        </div>
        <p><b>Cel.:</b></p>
        <div style="margin-left:22px;">
            <p>66702122</p>
        </div>
    </div>
    <br>
    <div class="datos">
        <table width="100%">
            <tr>
                <td colspan="3" style="text-align:right">
                    <p><label>Fecha de Consulta:</label> {{ $cita->fecha_consulta }}</p>
                </td>
            </tr>
            <tr>
                <td><p><label>Nombre:</label> {{ $paciente->nombre }}</p></td>                
            </tr>
            <tr>
                <td><p><label>Cédula:</label> {{ $paciente->cedula }}</p></td>
                <td><p><label>Edad:</label> {{ $paciente->edad }} años</p></td>
                <td><p><label>Sexo:</label> {{ $paciente->sexo }}</p></td>
            </tr>
        </table>
    </div>
    <div class="datos">
        <table class="table" cellspacing="0px">
            <thead>
                <tr>                            
                    <th></th>
                    <th>Esf.</th>
                    <th>Cil y Eje</th>
                    <th>Add.</th>
                    <th>D.I.</th>
                    <th>Prisma</th>
                    <th>Alt.O</th>
                    <th>Color Lente/Tipo</th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <th>O.D.</th>
                    <td>{{ $cita->od_esf }}</td>
                    <td>{{ $cita->od_cil_eje }}</td>
                    <td>{{ $cita->od_add }}</td>
                    <td>{{ $cita->od_di }}</td>
                    <td>{{ $cita->od_prisma}}</td>
                    <td>{{ $cita->od_alt}}</td>
                    <td>{{ $cita->od_color }}</td>
                </tr>
                <tr>
                    <th>O.I.</th>
                    <td>{{ $cita->oi_esf }}</td>
                    <td>{{ $cita->oi_cil_eje }}</td>
                    <td>{{ $cita->oi_add }}</td>
                    <td>{{ $cita->oi_di }}</td>
                    <td>{{ $cita->oi_prisma }}</td>
                    <td>{{ $cita->oi_alt }}</td>
                    <td>Bif. {{ $cita->oi_tipo }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="datos">
        <p><label>OBSERVACIONES: </label> {{ $cita->observaciones }}</p>
    </div>
	<div class="datos">
        <table width="100%" cellspacing="0" style="font-size:14px;">
            <tr>
                <td width="50%">
                    <table width="100%" cellspacing="0">
                        <tr>
                            <td><label>Endurecido:</label> {{ $cita->endurecido }}</td>
                        </tr>
                        <tr>
                            <td><label>Tratam. U.V.:</label> {{ $cita->tratam_uv }}</td>
                        </tr>
                        <tr>
                            <td><label>Tratam. Anti-Rayas:</label> {{ $cita->tratam_anti_rayas }}</td>
                        </tr>
                        <tr>
                            <td><label>Tratam. Anti-Reflejante:</label>{{ $cita->tratam_anti_reflejos }}</td>
                        </tr>
                    </table>
                </td>
                
                <td width="50%">
                    <table width="180px" cellspacing="0">
                        <tr>
                            <td ><label>Hi-Index:</label> {{ $cita->hi_index }}</td>
                        </tr>
                        <tr>
                            <td ><label>Hi-Lite:</label> {{ $cita->hi_lite }}</td>
                        </tr>
                        <tr>
                            <td ><label>Seg. Bif.:</label> {{ $cita->seg_bif }}</td>
                        </tr>
                        <tr>    
                            <td ><label>Aro: </label> {{ $cita->aro }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
