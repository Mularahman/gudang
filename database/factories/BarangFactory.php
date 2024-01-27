<?php

namespace Database\Factories;

use App\Models\Log;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategori = Kategori::pluck('id')->toArray();
        $Log = Log::pluck('id')->toArray();
        return [
            'kategori_id' => $this->faker->randomElement($kategori),
            'log_id' => $this->faker->randomElement($Log),
            'nama_barang' => $this->faker->name(),
            'jenis_barang' => $this->faker->name(),
            'kode_barang' => $this->faker->name(),
            'kondisi' => $this->faker->randomElement(['Baik','Rusak']),
        ];
    }
}
