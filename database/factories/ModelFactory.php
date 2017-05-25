<?php

use App\Models\Project;
use Faker\Generator as Faker;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->safeEmail,
//         'password' => bcrypt(str_random(10)),
//         'remember_token' => str_random(10),
//     ];
// });

<<<<<<< HEAD
/*DEFINE PROJECT*/
$factory->define(Project, function(Faker $faker){
  return[
=======
$factory->define(Project::class, function(Faker  $faker){
  return [
>>>>>>> 8f5dcd71ba1445e662a3ff499dedf54653ad6e58
    'video_id' => str_random(6),
    'title' => $faker->sentence(),
    'description' => $faker->paragraph(),
  ];
});
