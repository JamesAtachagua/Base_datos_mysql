<!-- <!DOCTYPE html>
<html lang="es">
	<head>
		<title>Mantenimientos</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">

<div>
    <a href="alumno.php">Alumnos</a>
</div>

<div>
<a href="usuario.php">usuarios</a>
</div>
              
<div>
<a href="usuario.php">USER</a>
</div>

<div>
<a href="curso.php">Curso</a>
</div>

<div>
<a href="producto.php">Producto</a>
</div>
         

    </body>
</html> -->

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Mantenimiento</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="validar.php" method="post"  style="margin-bottom:30px;">
                    
                    <table style="width:500px;">
                    	<tr>
                            <th style="text-align:left;">ID</th>
                            <td><input type="text" name="usuario" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Contraseña</th>
                            <td><input type="text" name="clave" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Ingresar</button>
                            </td>
                        </tr>

                    </table>
                </form>

                
              
            </div>
        </div>

    </body>
</html>