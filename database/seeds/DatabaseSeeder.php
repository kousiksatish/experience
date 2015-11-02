<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interns_cols')->insert([
                "col_no" => "1",
                "col_name" => "Name of the Internship/scholarship",
            ]);
        DB::table('interns_cols')->insert([
                "col_no" => "2",
                "col_name" =>"Name and place of university/industry"
            ]);
        DB::table('interns_cols')->insert([
                "col_no" => "3",
                "col_name" =>"Research project topic"
            ]);
        DB::table('interns_cols')->insert([
                "col_no" => "4",
                "col_name" =>"Duration of the project"
            ]);
        DB::table('interns_cols')->insert([
                "col_no" => "5",
                "col_name" =>"How was your work experience?"
            ]);
        DB::table('interns_cols')->insert([
                "col_no" => "6",
                "col_name" =>"Other experiences worth sharing (travel,food,culture,etc.)"
            ]);
        DB::table('interns_cols')->insert([
                "col_no" => "7",
                "col_name" =>"What qualities of yours – educational / otherwise, you feel helped you in having an edge over the selection process?"
            ]);
        $this->call(ExamsTableSeeder::class);
    }
}
