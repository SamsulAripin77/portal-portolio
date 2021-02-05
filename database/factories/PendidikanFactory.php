<?php

namespace Database\Factories;

use App\Models\Pendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendidikanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pendidikan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $table->unSignedBigInteger('user_id');
        // $table->string('nama_sd');
        // $table->string('tahun_sd');
        // $table->string('nama_smp');
        // $table->string('tahun_smp');
        // $table->string('nama_sma');
        // $table->string('tahun_sma');
        // $table->enum('status',['menunggu','diterima','ditolak'])->nullable();
        // $table->string('komentar')->nullable();
        return [
       
        ];
    }
}
