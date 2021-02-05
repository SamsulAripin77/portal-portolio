<?php

namespace Database\Factories;

use App\Models\Sertifikasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class SertifikasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sertifikasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // ['user_id','nama','deskripsi','institusi','tingkat','tanggal','bukti'];
            'user_id' => $this->faker->randomElement([2,3]),
            'nama' => $this->faker->randomElement(['junior web programmer', 'dicoding','IT Solution','Digitalent','Google Certificate']),
            'deskripsi' => $this->faker->text,
            'institusi' => $this->faker->randomElement(['kominfo','dicoding','kemenristek','kemenparekraf','kemnaker']),
            'tingkat' => $this->faker->randomElement(['regional','nasional','internasional']),
            'tanggal' =>  $this->faker->randomElement(['2021-08-06','2020-11-10','2019-02-01']),
            'bukti' => 'bukti\sertifikasi\img1.jpg',
        ];
    }
}
