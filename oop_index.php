<?php 
include_once '.\src\donarList\Chandpur\A_negative.php';
include_once '.\src\donarList\Chandpur\A_positive.php';

use app\donarList\chandpur\A_negative;
use app\donarList\chandpur\A_positive;


spl_autoload_register(function ($class) {
    $prefix = 'donarList\\';
    $base_dir = __DIR__ . '/src/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});


$chandpur = new A_negative();
$chandpur = new A_positive();





$chandpur->name = "Eyasin";
$chandpur->adress = "chandpur";
$chandpur->age = 24;
$chandpur->phone = 016414000000;
$chandpur->blood_group = "A+";


echo $chandpur->name;
echo "<hr>";
echo $chandpur->adress;
echo "<hr>";
echo $chandpur->age;
echo "<hr>";
echo $chandpur->phone;
echo "<hr>";
echo $chandpur->blood_group;
echo "<hr>";

