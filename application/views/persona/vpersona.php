<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Cargó persona</h1>
<form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
	<table>
		<tr>
			<td><label>DNI</label></td>
			<td><Input type="text" id="dni" name="txtDNI" maxlenght="2"></td>
		</tr>
		<tr>
			<td><label>Nombre</label></td>
			<td><Input type="text" name="txtNombre">	</td>
		</tr>
		<tr>
			<td><label>Ap Paterno</label></td>
			<td><Input type="text" name="txtApPaterno">	</td>
		</tr>
		<tr>
			<td><label>Ap Materno</label></td>
			<td><Input type="text" name="txtApMaterno">	</td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><Input type="Email" name="txtEmail">	</td>
		</tr>
				<tr>
			<td><label>Fec. Nac.</label></td>
			<td><Input type="date" name="datFecNac">	</td>
		</tr>
		<tr>
			<td colspan="2"><label>Usuario</label></td>
		</tr>
		<tr>
			<td><label>Usuario</label></td>
			<td><Input type="text" name="txtUsuario">	</td>
		</tr>
				<tr>
			<td><label>Clave</label></td>
			<td><Input type="password" name="txtClave">	</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Guardar"></td>
			
		</tr>
	</table>
</form>
</body>
</html>
