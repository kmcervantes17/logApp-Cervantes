
<?php
require('../vendor/autoload.php');
$faker = Faker\Factory::create();
require('../config/config.php');
require('../config/db.php');


for ($i = 0; $i <= 10; $i++) {
    $sql = "INSERT INTO logapp.person(lastname, firstname, address, logdt) values('" . $faker->lastName . "','" . $faker->firstName . "', '" . $faker->address . "', '" . $faker->date($format = 'Y-m-d H:i:s', $max = 'now') . "')";
    mysqli_query($conn, $sql);
}

