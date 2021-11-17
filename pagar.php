<?php

include 'head.php';
if (isset($_REQUEST['pagar']))
{
  $fecha= $_REQUEST['fecha_hora'];
  echo $fecha;
 
}

echo' 
Introduce los datos de la Multa a Pagar <mark>(1.5 Puntos)<br><br>
                         
<div   class="postcontent"><form action="" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
  <td align="right">
  <strong>Matricula :</strong></td><td>
  <div align="left">
        <input type="text" name="matricula" size="10"/>
  </div>
  </td>
  </tr>
  <tr>
    <td align="right"><strong>Fecha y Hora :</strong></td>
     <td>
        <input  type="datetime-local" name="fecha_hora" size="20" required />
     </td>
  </tr>
  
 <tr>
  <td colspan="2">
    <div align="center">
       <input name="pagar" type="submit"  value="Pagar Multa"/>
    </div>
  </td>
</tr>
</table>
</form>
</div>';              
include 'pie.php';
