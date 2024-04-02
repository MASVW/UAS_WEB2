<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Info>
 */
class InfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'infoName' => "What is Event Hub",
                "info"=> "A platform that makes it easy for users from all walks of life to register and access upcoming events. From seminars to concerts, Event HUB is here to serve everything. With just an email, you can register for interesting events. Come on, what are you waiting for? Register and enjoy Event HUB's events!",
        ];
    }
}
