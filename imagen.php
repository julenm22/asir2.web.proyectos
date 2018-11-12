<html>
<body>
<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('Ampharos2.jpg')->resize(200, 300)->save('Ampharos3.jpg', 100);

echo '<img src="Ampharos2.jpg" alt=""/>';
echo '<img src="Ampharos3.jpg" alt=""/>';
echo '<img src="Ampharos2.jpg" alt=""/>';
echo '<img src="Ampharos3.jpg" alt=""/>';
echo '<img src="Ampharos2.jpg" alt=""/>';
echo '<img src="Ampharos3.jpg" alt=""/>';
echo '<img src="Ampharos2.jpg" alt=""/>';
echo '<img src="Ampharos3.jpg" alt=""/>';
echo '<img src="Ampharos2.jpg" alt=""/>';


?>
</body>
</html>


