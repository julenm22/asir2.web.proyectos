<!DOCTYPE html>
<html>
<body>

<?php
echo "<br><br><br><br><br>";
$dia= date("N");
$hora= date("H");
$h=$hora-=5;
$D=$dia-=1;
$H = array
  (
  array("Lunes","Martes","Miercoles","Jueves","Viernes"),
  array("Gestores de Bases de Datos","Implantacion de Aplicaciones Web","Seguridad Informatica","Servicios de Red e Internet","Seguridad Informatica"),
  array("Empresa e Iniciativa Emprendedora","Seguridad Informatica","Seguridad Informatica","Servicios de Red e Internet","Seguridad Informatica"),
  array("Administracion de Sistemas Operativos","Servicios de Red e Internet","Administracion de Sistemas Operativos","Administracion de Sistemas Operativos","Servicios de Red e Internet"),
  array("Administracion de Sistemas Operativos","Servicios de Red e Internet","Administracion de Sistemas Operativos","Administracion de Sistemas Operativos","Servicios de Red e Internet"),
  array("Implantacion de Aplicaciones Web","Gestores de Bases de Datos","Empresa e Iniciativa Emprendedora","Implantacion de Aplicaciones Web","Ingles"),
  array("Implantacion de Aplicaciones Web","Gestores de Bases de Datos","Empresa e Iniciativa Emprendedora","Implantacion de Aplicaciones Web","Ingles"),
  );
  echo "<table border=1 align=center>";
foreach ($H as $i=>$dia) {
  echo "<tr>";
  foreach ($dia as $j=>$asig) {
    if ($H[$i][$j]==$H[0][$j])
    {echo "<th>".$asig."</th>";}
    else {
    if ($i==$h && $j==$D)
      {echo "<th>".$asig."</th>";}
    else
      {echo "<td>".$asig."</td>";}
  }
}
  echo "</tr>";
}echo "</table>";

?>

</body>
</html>