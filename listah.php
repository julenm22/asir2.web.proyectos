<?php
  $dia= date("N");
  $hora= date("G");
  $horario = array
  (
  array("Gestores de Bases de Datos","Empresa e Iniciativa Emprendedora","Administracion de Sistemas Operativos","Administracion de Sistemas Operativos","Implantacion de Aplicaciones Web","Implantacion de Aplicaciones Web"),
  array("Implantacion de Aplicaciones Web","Seguridad Informatica","Servicios de Red e Internet","Servicios de Red e Internet","Gestores de Bases de Datos","Gestores de Bases de Datos"),
  array("Seguridad Informatica","Seguridad Informatica","Administracion de Sistemas Operativos","Administracion de Sistemas Operativos","Empresa e Iniciativa Emprendedora","Empresa e Iniciativa Emprendedora"),
  array("Servicios de Red e Internet","Servicios de Red e Internet","Administracion de Sistemas Operativos","Administracion de Sistemas Operativos","Implantacion de Aplicaciones Web","Implantacion de Aplicaciones Web"),
  array("Seguridad Informatica","Seguridad Informatica","Servicios de Red e Internet","Servicios de Red e Internet","Ingles","Ingles"),
  );


echo $horario[$dia-1][$hora-10]."<br>--------------------------------------------------------------<br>";
foreach ($horario as $d){
    foreach ($d as $asig){
echo $asig."<br>";
}
echo "--------------------------------------------------------------<br>";
}
  ?>