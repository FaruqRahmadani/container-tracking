<?php

use Faker\Generator as Faker;

$factory->define(App\Rekanan::class, function (Faker $faker) {
  return [
    'nama' => $faker->name(),
    'alamat' => $faker->address,
    'nomor_telepon' => $faker->phoneNumber,
    'email' => $faker->safeEmail,
    'penanggung_jawab' => $faker->name(),
    'telepon_penanggungjawab' => $faker->phoneNumber
  ];
});
