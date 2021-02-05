<?php

namespace Database\Factories;

use App\Models\Organisasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organisasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement([2,3,4,5,6,7,8]),
            'nama' => $this->faker->randomElement(['Menwa','Ganas','BNN','VTB','PMI','HiMPUNAN']),
            'jabatan' => $this->faker->randomElement(['ketua','sekertaris','anggota']),
            'tahun' => '2020',
            'bukti' => '/bukti/organisasi/img1.jpg',
        ];
    }
}
