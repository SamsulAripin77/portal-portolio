<?php

namespace Database\Factories;

use App\Models\Magang;
use Illuminate\Database\Eloquent\Factories\Factory;

class MagangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Magang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // ['user_id','judul','deskripsi','institusi', 'tgl_mulai','tgl_selesai','status', 'komentar'];

        return [
            'user_id' => $this->faker->randomElement([2,3,4,5,6,7,8]),
            'judul' => $this->faker->randomElement(['programmer','technical support','network engineer','dev Ops','Web Develover', 'Android Developer']),
            'deskripsi' => $this->faker->text,
            'institusi' => $this->faker->randomElement(['perusahaan A','Perusahaan B', 'Perusahaan C','Perusahaan D','Perusahaan F']),
            'tgl_mulai' => $this->faker->date(),
            'tgl_selesai' => $this->faker->date()
        ];
    }
}
