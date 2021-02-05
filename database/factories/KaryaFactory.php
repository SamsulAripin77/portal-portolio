<?php

namespace Database\Factories;

use App\Models\Karya;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

class KaryaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Karya::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // ['nama','deskripsi','tanggal','bukti','tautan','status','komentar'];
            'user_id' => $this->faker->randomElement([2,3,4,5,6,7,8]),
            'nama' => $this->faker->randomElement(['apliasi android','website sekolah','buku','hardware','mesin']),
            'deskripsi' => $this->faker->text,
            'tanggal' =>  $this->faker->date(),
            'bukti' => '/bukti/karya/img1.jpg',
            'tautan' => 'wwww.dev.to',
        ];
    }
}
