<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\students;

class SeederStundents extends Seeder{

    public function run(): void{
        $student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez1daw@gmail.com";
        $student->course_id=1;
        $student->save();
        $student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez2daw@gmail.com";
        $student->course_id=1;
        $student->save();$student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez3daw@gmail.com";
        $student->course_id=1;
        $student->save();$student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez4daw@gmail.com";
        $student->course_id=1;
        $student->save();$student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez5daw@gmail.com";
        $student->course_id=1;
        $student->save();$student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez6daw@gmail.com";
        $student->course_id=1;
        $student->save();
        $student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez7daw@gmail.com";
        $student->course_id=1;
        $student->save();
        $student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez8daw@gmail.com";
        $student->course_id=1;
        $student->save();
        $student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez9daw@gmail.com";
        $student->course_id=1;
        $student->save();
        $student=new students();
        $student->name="Lucas";
        $student->email="lucasgonzalez10daw@gmail.com";
        $student->course_id=1;
        $student->save();
    }
}
