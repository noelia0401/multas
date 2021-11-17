<?php
include 'head.php';
session_start();
if (isset($_REQUEST['insertar']))
{
  $matricula=$_REQUEST['matricula'];
  $radar=$_REQUEST['identificador'];
  $velocidad=$_REQUEST['velocidad'];
  $fecha=$_REQUEST['fecha_hora'];
  $pagado="NO";
  $cuantia=0;
  $limite=0;

  foreach (($_SESSION['radares']) as $clave=>$valor)
  {
    if ($clave==$radar){
      $cuantia= ($velocidad - $valor)*10 + 50 ;
      $limite=90;
    }
  }

  switch ($radar){
    case "Radar 1": $numero_radar=1;
    break;
    case "Radar 2": $numero_radar=2;
    break;
    case "Radar 3": $numero_radar=3;
    break;
    case "Radar 4": $numero_radar=4;
    break;
  }

  
  $contar_antes=count($_SESSION['multas']);
  $_SESSION['multas'][]=array('matricula' => $matricula ,'radar' => $numero_radar,'limite' => $limite,'velocidad' => $velocidad,
  'cuantia'=>$cuantia,'fecha_hora' => $fecha,'pagada'=> $pagado);
  $contar_despues=count($_SESSION['multas']);
  if ($contar_antes =! $contar_despues)
  {
    echo "<br>Se ha añadido con exito<br>";
  }
  print_r($_SESSION['multas']);


}

echo'<br>Introduce los siguientes datos de la Multa<mark>(2 Puntos)<br><br>
                                     
              <div   class="postcontent">
              <form action="" method="post">
                    <table align="center" class="content-layout">
                    <tr>
                      <td align="right"><strong>Matricula:</strong></td>
                      <td>
                        <input type="text" name="matricula" size="10" required/>
                      </td>
                     </tr>
                    <tr>
                        <td align="right"><strong>Selecciona el Radar :</strong></td>
                        <td>
                          <div align="left">
                                <select name="identificador">
                                  <option value="Radar 1">Radar 1</option>
                                  <option value="Radar 2">Radar 2</option>
                                  <option value="Radar 3">Radar 3</option>
                                  <option value="Radar 4">Radar 4</option>
                                 
                                </select>
                           </div>
                          </td>
                    </tr>
                    
                     <tr>
                      <td align="right"><strong>Velocidad:</strong></td>
                      <td>
                        <input type="number" name="velocidad" size="5" required />
                      </td>
                     </tr>
                     
                     <tr>
                      <td align="right"><strong>Fecha y Hora :</strong></td>
                      <td>
                        <input  type="datetime-local" name="fecha_hora" size="20" />
                      </td>
                     </tr>
                     
                    
                    
                    
                    <tr>
                        <td colspan="2">
                          <div align="center"><strong>
                            <input name="insertar" type="submit" id="insertar" value="Insertar"/>
                            </strong>
                          </div>
                        </td>
                    </tr>
                    </table>
        </form>';


include 'pie.php';
