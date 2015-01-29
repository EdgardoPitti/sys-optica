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
			border:1px solid #000;
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
    </style>    
</head>
<body>
	{{ $paciente->cedula }}
	{{ $cita->fecha_consulta}}

</body>
</html>
