
<?php
$html_code = "<h1>My first PHP file</h1>";
 
echo $html_code;

$first_name = 'tunde';

$surname = 'Enakele';

$year_of_birth = 1981;

$height = 186;

define('SERVER_SOFTWARE', 'Apache');

$first_name_int = (integer)$first_name;
var_dump($first_name_int);
echo '<br>';

$first_name_bool = (boolean)$first_name;
var_dump($first_name_bool);
echo '<br>';

?>

first name: <?php echo $first_name ?>

Surname: <?php echo $surname ?>

Year of birth: <?= $year_of_birth ?>

height: <?= $height ?> <br>