<?php

use Illuminate\Database\Seeder;
use App\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            "title"=>"Wash your hands"
        ]);
        DB::table('tasks')->insert([
            "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            "title"=>"Eat well"
        ]);
        DB::table('tasks')->insert([
            "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            "title"=>"Wear a mask"
        ]);
        DB::table('tasks')->insert([
            "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            "title"=>"Love laravel"
        ]);
        DB::table('tasks')->insert([
            "created_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            "title"=>"Have fun"
        ]);
    }
}
