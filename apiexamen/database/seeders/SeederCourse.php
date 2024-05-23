<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\course;

class SeederCourse extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $student=new course();
        $student->name="name";
        $student->price=10;
        $student->save();
        $student=new course();
        $student->name="name2";
        $student->price=10;
        $student->save();
        $student=new course();
        $student->name="name3";
        $student->price=10;
        $student->save();
        $student=new course();
        $student->name="name4";
        $student->price=10;
        $student->save();
        $student=new course();
        $student->name="name5";
        $student->price=10;
        $student->save();
    }
}
