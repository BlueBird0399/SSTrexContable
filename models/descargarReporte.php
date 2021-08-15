<?php
include("crudreporte.php");
$respuesta=$conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
	<h1 style="text-align: center;">Productos <?php echo $tit; ?></h1>
        <table style="border-style: solid;border-radius: 5px;width: 700px;;height: 200px;; margin-left: auto;margin-right: auto;" >
        
            <tr>
			<td style="font-weight: bold;margin-right: 20%;border-style: solid;border-radius: 5px;" >ID</td>	
            <td style="font-weight: bold;margin-right: 20%;border-style: solid;border-radius: 5px;"  >Nombre</td>
            <td style="font-weight: bold;margin-right: 20%;border-style: solid;border-radius: 5px;"  >Marca</td>
            <td style="font-weight: bold;margin-right: 20%;border-style: solid;border-radius: 5px;"  >Cantidad</td>
			</tr>   
        <?php while($row=$respuesta->fetch_assoc()) { ?> 
            <tr>
                <td style="border-right-style: solid;border-right-style: solid;border-right-width: 1px;"> <?php  echo $row['ID_PRO']; ?>  </td>
                <td style="border-right-style: solid;border-right-width: 1px;"> <?php  echo $row['NOM_PRO']; ?>  </td>
                <td style="border-right-style: solid;border-right-width: 1px;"> <?php  echo $row['MAR_PRO']; ?>  </td>
                <td style="border-right-style: solid;border-right-width: 1px;"> <?php  echo $row['CANT']; ?>  </td>
            </tr>
        <?php  } ?>
        </tbody>
        </table>
</body>
</html>

<?php
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'reporte '.$tit.'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>