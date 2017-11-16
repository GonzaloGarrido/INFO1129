<script>
	function IngresoAdmin() {
		var formAdmin = document.getElementById("form-in-ad-ad");
		var usuario = document.getElementById("FRM-usuario");
		var clave = document.getElementById("FRM-clave");
		if(usuario!=null && clave!=null) {
			formAdmin.submit();
			alert("Sesion Iniciada");
		}
		else { alert("Complete los datos"); }
	}
</script>
<div class="container">
	<center><div class="jumbotron" style="margin-top: 100px; width: 500px;">
		<form action="index.php?m=ingreso_admin" method="POST" name="form" id="form-in-ad">
			<div>
				<center><h2><b>ADMINISTRADOR</b></h2></center>
			</div><br>
			<div>
				<img src="./style/img/administrador.png" width="180px" height="180px"/>
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
			<center><input type="submit" class="btn btn-success" name="login" value="Ingresar al sistema" onclick="IngresoAdmin()"></center>
			<div class="input-text"><h6><center><a href="index.php?m=registro_admin" id="recover-pass">Registrarse como nuevo administrador</a></center></h6></div>
		</form>
	</div></center>
</div>	