<?php

use Faker\Generator as Faker;

$factory->define(App\Barang::class, function (Faker $faker) {
  return [
    'nomor_kontainer' => $faker->bothify('???? ###### #/???? ######'),
    'pengirim' => $faker->name(),
    'nama' => $faker->name(),
    'tanggal_terima' => $faker->date(),
    'keterangan' => $faker->paragraph(),
    'rekanan_id' => App\Rekanan::inRandomOrder()->first()->id,
  ];
});
