<?php

$factory->define(App\Http\Models\Cap::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(),
        'name' => $faker->name,
        'description' => $faker->text,
        'image' => $faker->word,
        'price' => $faker->randomFloat(),
        'category_id' => $faker->randomNumber(),
        'supplier_id' => $faker->randomNumber(),
        'category_id' => function () {
             return factory(App\Http\Models\Category::class)->create()->id;
        },
        'supplier_id' => function () {
             return factory(App\Http\Models\Category::class)->create()->id;
        },        
    ];
});

$factory->define(App\Http\Models\CartItem::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(),
        'count' => $faker->randomNumber(),
        'cap_id' => function () {
            return factory(App\Http\Models\Cap::class)->create()->id;
       },        
    ];
});

$factory->define(App\Http\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(),
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});

$factory->define(App\Http\Models\Order::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(),
        'firstName' => $faker->word,
        'lastName' => $faker->word,
        'address' => $faker->word,
        'city' => $faker->city,
        'postalCode' => $faker->word,
        'state' => $faker->word,
        'phoneNumber' => $faker->word,
        'orderDate' => $faker->word,
        'subtotal' => $faker->randomFloat(),
        'gst' => $faker->randomFloat(),
        'grandtotal' => $faker->randomFloat(),
        'status' => $faker->word,
        'user_id' => function () {
             return factory(App\Http\Models\User::class)->create()->id;
        },
    ];
});

$factory->define(App\Http\Models\OrderItem::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(),
        'quantity' => $faker->randomNumber(),   
        'order_id' => function () {
             return factory(App\Http\Models\Order::class)->create()->id;
        },
        'cap_id' => function () {
            return factory(App\Http\Models\Cap::class)->create()->id;
       },
    ];
});

$factory->define(App\Http\Models\Supplier::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(),
        'name' => $faker->name,
        'phoneNumber' => $faker->word,
        'email' => $faker->safeEmail,
    ];
});

$factory->define(App\Http\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'remember_token' => str_random(10),
    ];
});

