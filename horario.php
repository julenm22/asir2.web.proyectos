<!DOCTYPE html>
<html>
<body>
<?php
$fecha= date("N");
$hora= date("H");
//$M= date("i");
$hora= $hora+= 2;
define("GBD", "Tenemos Gestores de Bases de Datos");
define("EIE", "Tenemos Empresa e Iniciativa Emprendedora");
define("ASO", "Tenemos Administracion de Sistemas Operativos");
define("IAW", "Tenemos Implantacion de Aplicaciones Web");
define("SEG", "Tenemos Seguridad Informatica");
define("SRI", "Tenems Servicios de Red e Internet");
define("ING", "Tenemos Ingles");

/*$cars = array( "Gestores de Bases de Datos" , "Empresa e Iniciativa Emprendedora", "Administracion de Sistemas Operativos", "Implantacion de Aplicaciones Web", "Seguridad Informatica", "Ingles");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";*/
//echo ($hora);
if ($fecha= 1)
{
    echo ("Lunes "."<br><br>");
    
    if ($hora== 8)
    {
        echo GBD;
    }
    else if ($hora== 9)
    {
        echo EIE;
    }
    else if ($hora== 10)
    {
        echo ASO;
    }
    else if ($hora== 11)
    {
        echo ASO;
    }
    else if ($hora== 12)
    {
        echo IAW;
    }
    else if ($hora== 13)
    {
        echo IAW;
    }
    else
    {
        echo ("pacasa cruck");
    }
}

else if ($fecha= 2)
{
    echo ("Martes");
    
    if ($hora== 8)
    {
        echo IAW;
    }
    else if ($hora== 9)
    {
        echo SEG;
    }
    else if ($hora== 10)
    {
        echo SRI;
    }
    else if ($hora== 11)
    {
        echo SRI;
    }
    else if ($hora== 12)
    {
        echo GBD;
    }
    else if ($hora== 13)
    {
        echo GBD;
    }
    else
    {
        echo ("pacasa cruck");
    }
}


else if ($fecha= 3)
{
    echo ("Miercoles");
    
    if ($hora== 8)
    {
        echo SEG;
    }
    else if ($hora== 9)
    {
        echo SEG;
    }
    else if ($hora== 10)
    {
        echo ASO;
    }
    else if ($hora== 11)
    {
        echo ASO;
    }
    else if ($hora== 12)
    {
        echo EIE;
    }
    else if ($hora== 13)
    {
        echo EIE;
    }
    else
    {
        echo ("pacasa cruck");
    }
}


else if ($fecha= 4)
{
    echo ("Jueves");
    
    if ($hora== 8)
    {
        echo SRI;
    }
    else if ($hora== 9)
    {
        echo SRI;
    }
    else if ($hora== 10)
    {
        echo ASO;
    }
    else if ($hora== 11)
    {
        echo ASO;
    }
    else if ($hora== 12)
    {
        echo IAW;
    }
    else if ($hora== 13)
    {
        echo IAW;
    }
    else
    {
        echo ("pacasa cruck");
    }
}


else if ($fecha= 5)
{
    echo ("Viernes");
    
    if ($hora== 8)
    {
        echo SEG;
    }
    else if ($hora== 9)
    {
        echo SEG;
    }
    else if ($hora== 10)
    {
        echo SRI;
    }
    else if ($hora== 11)
    {
        echo SRI;
    }
    else if ($hora== 12)
    {
        echo ING;
    }
    else if ($hora== 13)
    {
        echo ING;
    }
    else
    {
        echo ("pacasa cruck");
    }
}

else
{
    echo ("No tienes clase");
}
?>

</body>
</html>