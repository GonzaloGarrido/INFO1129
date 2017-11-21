<script>
	function RegistrarAdmin() {
		var formAdmin = document.getElementById("form-r-ad");
		var usuario = $("#FRM-usuario").val();
		var clave = $("#FRM-clave").val();
		var sucursal = $("#FRM-sucursal").val();
		var email = $("#FRM-email").val();
		if(usuario!="" && clave!="" && sucursal!="" && email!="") {
			formAdmin.submit();
			alert("Administrador Registrado");
		}
		else { alert("Complete todos los datos"); }
	}
</script>

<div class="container">
	<center><div class="jumbotron" style="margin-top: 100px; width: 500px;">
		<form action="index.php?m=nuevo_admin" method="POST" name="form" id="form-r-ad">
			<div>
				<center><h2><b>REGISTRO ADMINISTRADORES</b></h2></center>
			</div><br>
			<div>
				<img src="./style/img/administrador_nuevo.png" width="180px" height="180px"/>
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-user"></span>
				</span>
				<input class="form-control" type="text" id="FRM-usuario" name="FRMusuario" placeholder="Usuario" autofocus="" required="">
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input class="form-control" type="password" id="FRM-clave" name="FRMclave" placeholder="Clave" required="">
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-home"></span>
				</span>
				<select class="form-control" id="FRM-sucursal" name="FRMsucursal" required="">
  					<option value="1">Angol</option>
  					<option value="2">Temuco</option>
  					<option value="3">Victoria</option>
				</select>
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-envelope"></span>
				</span>
				<input class="form-control" type="email" id="FRM-email" name="FRMemail" placeholder="Email" required="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
			</div><br>
			<center><input type="button" class="btn btn-success" name="login" value="Registrar" onclick="RegistrarAdmin()"></center>
			<div class="input-text"><h6><center><a href="index.php?m=administrador" id="recover-pass">Iniciar sesión</a></center></h6></div>
		</form>
	</div></center>
</div>	