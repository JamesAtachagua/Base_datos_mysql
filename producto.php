<?php
require_once 'producto.entidad.php';
require_once 'producto.model.php';

// Logica
$alm = new Producto();
$model = new ProductoModel();

if(isset($_REQUEST['action']))
{

	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$alm->__SET('id',              $_REQUEST['id']);
			$alm->__SET('descripcion',     $_REQUEST['descripcion']);
			$alm->__SET('precio',        $_REQUEST['precio']);
			$alm->__SET('stock',          $_REQUEST['stock']);
			$alm->__SET('imagen',        $_REQUEST['imagen']);

			$model->Actualizar($alm);
			header('Location: producto.php');
			break;

		case 'registrar':
			$alm->__SET('id',              $_REQUEST['id']);
			$alm->__SET('descripcion',     $_REQUEST['descripcion']);
			$alm->__SET('precio',        $_REQUEST['precio']);
			$alm->__SET('stock',          $_REQUEST['stock']);
			$alm->__SET('imagen',        $_REQUEST['imagen']);

			$model->Registrar($alm);
			header('Location: producto.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['id']);
			header('Location: producto.php');
			break;

		case 'editar':
			$alm = $model->Obtener($_REQUEST['id']);
			break;
	}
}

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Mantenimiento</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->codigo > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="codigo" value="<?php echo $alm->__GET('codigo'); ?>" />
                    
                    <table style="width:500px;">
                    	<tr>
                            <th style="text-align:left;">Codigo</th>
                            <td><input type="text" name="codigo" value="<?php echo $alm->__GET('codigo'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Creditos</th>
                            <td><input type="text" name="creditos" value="<?php echo $alm->__GET('creditos'); ?>" style="width:100%;" /></td>
                        </tr>
                        
                    
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">Codigo</th>
                            <th style="text-align:left;">Nombre</th>
                            <th style="text-align:left;">Creditos</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('codigo'); ?></td>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('creditos'); ?></td>
                            <td>
                                <a href="?action=editar&codigo=<?php echo $r->codigo; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&codigo=<?php echo $r->codigo; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>