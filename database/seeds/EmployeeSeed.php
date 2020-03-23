<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee =new Employee([
           'name'=>'Pawan Kumar',
           'email'=>'pawan@gmail.com',
           'designation'=>'Electrician',
           'salary'=>'30000'
        ]);
        $employee->save();

        $employee =new Employee([
            'name'=>'Nishant Yadav',
            'email'=>'nishant@gmail.com',
            'designation'=>'Plumber',
            'salary'=>'40000'
         ]);
         $employee->save();

         $employee =new Employee([
            'name'=>'Aakash Gupta',
            'email'=>'aakash@gmail.com',
            'designation'=>'Carpenter',
            'salary'=>'35000'
         ]);
         $employee->save();


         $employee =new Employee([
            'name'=>'krishna Prajapati',
            'email'=>'krishna@gmail.com',
            'designation'=>'Painter',
            'salary'=>'45000'
         ]);
         $employee->save();

         $employee =new Employee([
            'name'=>'Ranjit Kumar',
            'email'=>'ranjit@gmail.com',
            'designation'=>'Ac Repair',
            'salary'=>'60000'
         ]);
         $employee->save();

         $employee =new Employee([
            'name'=>'Deepak Singh',
            'email'=>'deepak@gmail.com',
            'designation'=>'Pest Control',
            'salary'=>'25000'
         ]);
         $employee->save();

         $employee =new Employee([
            'name'=>'Sarthak Yadav',
            'email'=>'sarthak@gmail.com',
            'designation'=>'Cleaning',
            'salary'=>'550000'
         ]);
         $employee->save();


    }
}
