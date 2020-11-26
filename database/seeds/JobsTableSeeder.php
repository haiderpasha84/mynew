<?php

use App\Job;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 10; $i++){
        Job::create([

            'jname' => 'Accountant' . $i,
            'slug' => 'Accountant' . $i,
            'jtype' => 'Part-Time',
            //'jcategory' => rand(0,4),
            'jdescription' => 'This job is related to Accountant Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s ',
            'jaddress' => 'walk street 123' . $i,
            'jsalary_min' => rand(1000,15000), 
            'jsalary_max' => rand(10000,150000),
            'jdeadline' => Carbon::now(),
            'jexperience' => '2 Years',

        ])->categories()->attach(1);
        }

        for($i = 1; $i <= 10; $i++){
            Job::create([
    
                'jname' => 'PHP developer' . $i,
                'slug' => 'PHP' . $i,
                'jtype' => 'Part-Time',
                //'jcategory' => rand(0,4),
                'jdescription' => 'This job is related to Accountant Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s ',
                'jaddress' => 'walk street 123' . $i,
                'jsalary_min' => rand(1000,15000), 
                'jsalary_max' => rand(10000,150000),
                'jdeadline' => Carbon::now(),
                'jexperience' => '2 Years',
    
            ])->categories()->attach(2);
            }

            for($i = 1; $i <= 10; $i++){
                Job::create([
        
                    'jname' => 'Database Manager' . $i,
                    'slug' => 'Database' . $i,
                    'jtype' => 'Part-Time',
                    //'jcategory' => rand(0,4),
                    'jdescription' => 'This job is related to Accountant Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s ',
                    'jaddress' => 'walk street 123' . $i,
                    'jsalary_min' => rand(1000,15000), 
                    'jsalary_max' => rand(10000,150000),
                    'jdeadline' => Carbon::now(),
                    'jexperience' => '2 Years',
        
                ])->categories()->attach(3);

                }

                $job = Job::find(2);
                $job->categories()->attach(3);
       
    }
}
