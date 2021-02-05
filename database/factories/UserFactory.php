<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'username' => $this->faker->unique()->name,
            'password' => Hash::make('password'),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika','Teknik Mesin','Teknik Sipil','Hukum','Manajemen']),
            'website' => 'samsularipin77.github.io',
            'role' => 'user',
            'ipk' =>  $this->faker->randomElement(['2.23','3.33','2.8','3.6']),
        ];
    }
}
