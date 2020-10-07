<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'domicilio' => $this->faker->streetName,
            'numero_exterior' => $this->faker->numberBetween($min = 100, $max = 999),
            'colonia' => $this->faker->city,
            'cp' => $this->faker->numberBetween($min = 10000, $max = 99999),
            'ciudad' => $this->faker->state,
            'user_id' => function() {
                $user = User::factory(1)->create();
                return $user[0]->id;
            }
        ];
    }
}
