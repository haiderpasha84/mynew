<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['cname' => 'php' , 'slug' => 'php' , 'created_at' => $now, 'updated_at' => $now],
            ['cname' => 'java' , 'slug' => 'java' , 'created_at' => $now, 'updated_at' => $now],
            ['cname' => 'python' , 'slug' => 'python' , 'created_at' => $now, 'updated_at' => $now],


        ]);
    }
}
