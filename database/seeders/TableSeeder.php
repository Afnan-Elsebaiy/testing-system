<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Emptying Tables Before Populating them
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('statuses')->truncate();
        DB::table('priorities')->truncate();
      

        //tables population
        DB::statement("INSERT INTO `statuses` (`title` , `description`) VALUES
        ('Pending Reviewal','Current Status: Pending Reviewal'),
        ('Pending Redesign','Current Status: Pending Redesign'),
        ('Pending Execution','Current Status: Pending Execution'),
        ('Pass','Current Status: Pass'),
        ('Fail','Current Status: Fail');");
        DB::statement("INSERT INTO `priorities` (`title`) VALUES
        ('High'),
        ('Medium'),
        ('Low');");
    }
}
