<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellido_p' => $this->faker->lastname,
            'apellido_m' => $this->faker->lastname,
            'fecha_nacimiento' => $this->faker->dateTimeBetween($startDate = '-1000 month',$endDate = 'now +6 month'),
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->numberBetween($min = 120000, $max = 20000000),
            'celular' => $this->faker->numberBetween($min = 120000, $max = 20000000),
            
            // 'telefono' => $this->faker->PhoneNumber,
        ];
    }
}
