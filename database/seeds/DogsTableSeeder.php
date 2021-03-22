<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dog;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $razze = ['Siberian Husky', 'Alano', 'Alaskan Malamute', 'Golden Retriever'];

        foreach ($razze as $razza) {
            $newDog = new Dog();
            $newDog->razza = $razza;
            $newDog->taglia = $faker->randomElement(['piccola', 'medio-piccola', 'media', 'medio-grande', 'grande']);
            $newDog->origine = $faker->country();
            $newDog->save();
        }

    }
}
