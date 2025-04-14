<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BeneficiariesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'status'=>$this->shuffleStatus(),
            'email'=>fake()->email(),
            'registration_date'=>fake()->date(),
        ];
    }

    public function shuffleStatus() : string {
        //Array of different status
        $status = ['active','approved','rejected','suspended','pending'];
        shuffle($status);
        return array_pop($status);
    }
}
