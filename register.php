<!DOCTYPE html>
<html>
<head>
	<title>Register - SiteB.S.Cosméticos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?>
    <center>
    	
    	<br>

    	<h1>Resgistre-se</h1>
    	<br>

    	<div class="panel">
    		
    		<form method="POST">
    			<table width="50%">
    				<tr>
    					<td style="float: right; width: 50%">Nome:</td>
    					<td><input type="name" name="nome"></td>
    				</tr>
    				<tr>
    					<td style="float: right; width: 50%">E-mail:</td>
    					<td><input type="E-mail" name="E-mail"></td>
    				</tr>
    				<tr>
    					<td style="float: right; width: 50%">Apelido:</td>
    					<td><input type="name" name="apelido"></td>
    				</tr>
    				<tr>
    					<td style="float: right; width: 50%">Senha:</td>
    					<td><input type="password" name="pass"></td>
    				</tr>
    				<tr>
    					<td style="float: right; width: 50%">Confirme a Senha:</td>
    					<td><input type="password" name="cpass"></td>
    				</tr>
    				<tr>
    					<td style="float: right; width: 50%">Receber novidades no E-mail:</td>
    					<td><input type="checkbox" name="notify"></td>
    				</tr>
    				
    			</table>
                <input type="submit" name="registrar" value="Registrar" style="width: 50%">
    		</form>
    		
    	</div>
    </center>
</body>
</html>
