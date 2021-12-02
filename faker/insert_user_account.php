
<?php
require('../vendor/autoload.php');
$faker = Faker\Factory::create();
require('../config/config.php');
require('../config/db.php');

echo 'SUCESSFULLY Insert to Database';
echo "<table>
<th>Email</th>
<th>Lastname/th>
<th>Firstname</th>
<th>Username</th>
<tbody>";
for ($i = 0; $i <= 100; $i++) {
    $sql = "INSERT INTO logapp.user_accounts(email, lastname, firstname, username, password) values('" . $faker->email . "','" . $faker->lastName  . "','" . $faker->firstName . "', '" . $faker->userName . "', '" . $faker->password . "')";
    mysqli_query($conn, $sql);

    if ($i < 21) {
        $sql = "INSERT INTO logapp.card_details(ccid, credit_card_type, credit_card_number, credit_card_exp_date, user_id_number) values('" . $faker->email . "','" . $faker->creditCardType . "','" . $faker->creditCardNumber . "', '" . $faker->creditCardExpirationDateString . "', '" . $conn->insert_id . "')";
        mysqli_query($conn, $sql);
    }

    echo "<tr>
        <td>" . $faker->email . "</td>
        <td>" . $faker->lastName . "</td>
        <td> " . $faker->firstName . "</td>
        <td> " . $faker->userName . "</td>
    </tr>";
}
echo "</tbody></table>";
echo 'SUCESSFULLY Insert to Database';
