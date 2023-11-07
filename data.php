<?php
include_once("load_data.php");
require_once("vendor/autoload.php");
$faker = Faker\Factory::create('en_PH');

for ($i = 0; $i < 200; $i++) {
    $lastname = $faker->lastName;
    $firstname = $faker->firstName;
    $address = $faker->address;
    $sql = "INSERT INTO  employee(lastname, firstname, address) VALUES ('$lastname', '$firstname', '$address')";
}

for ($i = 0; $i < 50; $i++) {
    $name = $faker->name;
    $contactnum = $faker->phoneNumber;
    $email = $faker->email;
    $address = $faker->address;
    $city = $faker->city;
    $country = $faker->country;
    $postal = $faker->postcode;
    $sql = "INSERT INTO  office(name, contactnum, email, address, city, country, postal) VALUES ('$name', '$contactnum', '$email', '$address', '$city', '$country', '$postal')";
}
for ($i = 0; $i < 500; $i++) {
    $datelog = $faker->date;
    $action = $faker->randomElement(["in", "out"]);
    $remarks = $faker->words;
    $documentcode = $faker->randomNumber([4,5,6,7,8,9]);
    $sql = "INSERT INTO  transaction(datelog, action, remarks, documentcode) VALUES ('$datelog', '$action', '$remarks', '$documentcode')";
}
?>