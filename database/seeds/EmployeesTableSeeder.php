<?php

use App\Employee;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i<10; $i++) {

            $employee = new Employee();
            $employee->name = $faker->name();
            $employee->lastname = $faker->lastName();
            $employee->badge_number = $faker->bothify('?????-#####');
            $employee->email = $faker->email();
            $employee->role = $faker->randomElement(['segretario', 'capoprogetto', 'programmatore']);
            $employee->photo = null;
            $employee->level = $faker->randomDigitNotNull();
            $employee->save();

        }

    }
}
