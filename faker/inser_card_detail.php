
<?php
require('../vendor/autoload.php');
$faker = Faker\Factory::create();
require('../config/config.php');
require('../config/db.php');


for ($i = 0; $i <= 100; $i++) {
    $sql = "INSERT INTO logapp.card_details(ccid, credit_card_type, credit_card_number, credit_card_exp_date, user_id_number) values('" . $faker->email . "','" . $faker->creditCardType . "','" . $faker->creditCardNumber . "', '" . $faker->creditCardExpirationDateString . "', '" . $i . "')";
    mysqli_query($conn, $sql);
}
