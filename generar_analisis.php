<?php
session_start();
include 'head.php';


$r1=0;
$r2=0;
$r3=0;
$r4=0;

foreach ($_SESSION['multas'] as $clave)
 {
   foreach ($clave as $valor=>$dato)
   {
      if ($valor=="radar"){
        switch ($dato){
          case 1: $r1++;
          break;
          case 2: $r2++;
          break;
          case 3: $r3++;
          break;
          case 4: $r4++;
          break;
        }
      }
   }
 }


echo'Analisis de las Multas por Radares <mark>(1.5 Puntos)<br><br>
<table>
  <thead>
    <tr>
      <th>Radar 1</th>
      <th>Radar 2</th>
      <th>Radar 3</th>
      <th>Radar 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>'.$r1.'</td>
      <td>'.$r2.'</td>
      <td>'.$r3.'</td>
      <td>'.$r4.'</td>
    </tr>
    
  </tfoot>
</table>

';
include 'pie.php';

