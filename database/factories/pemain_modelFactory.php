<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pemain_modelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'idpemain' => $this->faker->randomElement([001, 002, 003]),
            'namapemain'=>$this->faker->randomElement(['pemain', 'sepak bola', 'arhan_pratama']),
            ''=>$this->faker->name(),
            'nopunggung' => $this->faker->randomElement([01, 02, 07]),
            'posisi'=>$this->faker->randomElement(['keeper', 'aduh gatau bola', 'asal aja kali ya']),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime()];
    }
}
