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

        $gender = fake()->randomElement(['эрэгтэй', 'эмэгтэй']);
        $lastname = fake()->randomElement($familyNames);
        $firstname = fake()->randomElement($firstNames);

        return [
            'profile' => null,
            'family_name' => $lastname,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'nationality' => 'Монгол',
            'ethnicity' => fake()->randomElement($ethnicity),
            'gender' => $gender,
            'birth_date' => fake()->dateTimeBetween('-50 years', '-20 years')->format('Y-m-d'),
            'date_of_employment' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'registration_number' => strtoupper(substr($lastname, 0, 2)) .
                fake()->numberBetween(10000000, 99999999),
            'address' => fake()->address(),
            'temp_address' => fake()->optional()->address(),
            'phone_number' => '99' . fake()->numberBetween(100000, 999999),
            'taxpayer_number' => fake()->optional()->numerify('##########'),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'account_bank_name' => fake()->randomElement([
                'Хаан банк', 'Голомт банк', 'Төрийн банк', 'Худалдаа хөгжлийн банк'
            ]),
            'account_number' => fake()->numerify('##########'),
            'occupation' => fake()->randomElement([
                'Нягтлан бодогч',
                'Менежер',
                'Хөгжүүлэгч',
                'Багш',
                'Инженер',
                'Маркетингийн мэргэжилтэн',
                'Хүний нөөцийн ажилтан'
            ]),
        ];
    }
}
