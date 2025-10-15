<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $familyNames = ['Бат', 'Дорж', 'Сүх', 'Пүрэв', 'Цэрэн', 'Ням', 'Ган', 'Жаргал', 'Отгон', 'Дулмаа'];
        $firstNames = ['Эрдэнэ', 'Энх', 'Саруул', 'Мөнх', 'Оюун', 'Болд', 'Төгөлдөр', 'Хангай', 'Номин', 'Тамир'];
        $ethnicity = ['Халх', 'Буриад', 'Дарьганга', 'Баяд', 'Өөлд', 'Урианхай', 'Дөрвөд'];

        $gender = $this->faker->randomElement(['эрэгтэй', 'эмэгтэй']);
        $lastname = $this->faker->randomElement($familyNames);
        $firstname = $this->faker->randomElement($firstNames);

        return [
            'profile' => null,
            'family_name' => $lastname,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'nationality' => 'Монгол',
            'ethnicity' => $this->faker->randomElement($ethnicity),
            'gender' => $gender,
            'birth_date' => $this->faker->dateTimeBetween('-50 years', '-20 years')->format('Y-m-d'),
            'date_of_employment' => $this->faker->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'registration_number' => strtoupper(substr($lastname, 0, 2)) .
                $this->faker->numberBetween(10000000, 99999999),
            'address' => $this->faker->address(),
            'temp_address' => $this->faker->optional()->address(),
            'phone_number' => '99' . $this->faker->numberBetween(100000, 999999),
            'taxpayer_number' => $this->faker->optional()->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'account_bank_name' => $this->faker->randomElement(['Хаан банк', 'Голомт банк', 'Төрийн банк', 'Худалдаа хөгжлийн банк']),
            'account_number' => $this->faker->numerify('##########'),
            'occupation' => $this->faker->randomElement([
                'Нягтлан бодогч', 'Менежер', 'Хөгжүүлэгч', 'Багш', 'Инженер', 'Маркетингийн мэргэжилтэн', 'Хүний нөөцийн ажилтан'
            ]),
        ];
    }
}
