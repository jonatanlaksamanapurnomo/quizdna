<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Task::class, static function (Faker\Generator $faker) {
    return [
        'body' => $faker->text(),
        'score' => $faker->randomNumber(5),
        'isCorrect' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Task::class, static function (Faker\Generator $faker) {
    return [
        'body' => $faker->text(),
        'answer' => $faker->text(),
        'score' => $faker->randomNumber(5),
        'isCorrect' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Task::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text(),
        'answer' => $faker->text(),
        'score' => $faker->randomNumber(5),
        'isCorrect' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Task::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text(),
        'answer' => $faker->text(),
        'score' => $faker->randomNumber(5),
        'quiz_id' => $faker->randomNumber(5),
        'isCorrect' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Quiz::class, static function (Faker\Generator $faker) {
    return [
        'quiz_id' => $faker->sentence,
        'quiz_name' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
