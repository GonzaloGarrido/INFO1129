<script>
	function RegistrarAyuda() {
		var formAyuda = document.getElementById("form-ayuda");
		var nombre = $("#FRM-nombre").val();
		var email = $("#FRM-email").val();
		var asunto = $("#FRM-asunto").val();
		var sucursal = $("#FRM-sucursal").val();
		var comentario = $("#FRM-comentario").val();

		if(nombre!="" && email!="" && asunto!="" && sucursal!="" && comentario!="") {
			formAyuda.submit();
			//alert("Tu comentario ha sido enviado");
		}
		else {
			alert("Completa todos los datos");
		}
	}
</script>

<div class="container">
	<div class="jumbotron cuadrito" style="margin: 10px auto; width: 700px; align-content: left; margin-top: 100px;">
		<center><h2 style="color:blue"><b>Formulario de Ayuda</b></h2></center><br>
		<label style="color:red"><b>La misión de Speed Cars Chile es hacerte llegar un mejor servicio, y para ello te traemos otro medio donde puedes entregarnos tu opinión acerca de nuestra empresa, tu comentario, dudas, consultas, sugerencias, reclamos u otros. Para todo lo anterior te pedimos que completes el siguiente formulario, esta información es confidencial y solo será usada con fines administrativos. Atenderemos lo más prontamente tu mensaje y te responderemos vía correo electrónico</b></label><br><br>
		<form action="index.php?m=registrar_ayuda" method="POST" id="form-ayuda">
			<div>
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-user"></span>
				</span>
				<input class="form-control" type="text" id="FRM-nombre" name="FRMnombre" placeholder="Nombre Completo" autofocus="" required="">
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-envelope"></span>
				</span>
				<input class="form-control" type="email" id="FRM-email" name="FRMemail" placeholder="Email" required="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-eye-open"></span>
				</span>
				<input class="form-control" type="text" id="FRM-asunto" name="FRMasunto" placeholder="Asunto" required="">
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-home"></span>
				</span>
				<select class="form-control" id="FRM-sucursal" name="FRMsucursal" required="">
					<option value="2">Sucursal Destino...</option>
  					<option value="1">Angol</option>
  					<option value="2">Temuco</option>
  					<option value="3">Victoria</option>
				</select>
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-comment"></span>
				</span>
				<textarea class="form-control" rows="5" cols="40" id="FRM-comentario" name="FRMcomentario" placeholder="Comentario" required="" maxlength="500"></textarea>
			</div><br>
			<center><input class="btn btn-success" value="Enviar Formulario" onclick="RegistrarAyuda()"></center>
			<div class="input-text"><h6><center><a href="index.php" id="recover-pass">Ir a página principal</a></center></h6></div>
		</form>
	</div>
</div>	