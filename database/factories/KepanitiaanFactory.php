<?php

namespace Database\Factories;

use App\Models\Kepanitiaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KepanitiaanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kepanitiaan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement([2,3,4,5,6,7,8]),
            'nama' => $this->faker->randomElement(['mabim','osjur','seminar ICCED','Panitian Wisuda','Panitia LKBB Menwa','Panitian Seminar anti Narkoba']),
            'deskripsi' => $this->faker->text,
            'institusi' => $this->faker->name,
            'jabatan' => $this->faker->randomElement(['ketua','sekertaris','bendahara','anggota']),
            'tingkat' => $this->faker->randomElement(['regional','nasional','internasional']),
            'no_sk' => 'sk/kep-/'.$this->faker->numberBetween(10,1100),
            'tgl_mulai' => $this->faker->date(),
            'tgl_selesai' => $this->faker->date(),
            'bukti' => '/bukti/kepanitiaan/img1.jpg',
        ];
    }
}
