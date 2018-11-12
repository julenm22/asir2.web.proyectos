<!DOCTYPE html>
<html>
<body>

<?php
echo "<br><br><br><br><br>";
$dia= date("N");
$hora= date("H");
$hora=$hora-=5;
$dia=$dia-=1;
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
for ($row = 0; $row <= 6; $row++) {
  echo "<tr>";
  for ($col = 0; $col <= 4; $col++) {
    if ($H[$row][$col]==$H[0][$col])
    {echo "<th>".$H[$row][$col]."</th>";}
    else {
    if ($hora==$row && $dia==$col)
      {echo "<th>".$H[$row][$col]."</th>";}
    else
      {echo "<td>".$H[$row][$col]."</td>";}
  }
}
  echo "</tr>";
}echo "</table>";

?>

</body>
</html>