<?php

use Illuminate\Database\Seeder;

class PositionGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into position_groups (positionGroup) values (?)', ['Offense']);
        DB::insert('insert into position_groups (positionGroup) values (?)', ['Defense']);
        DB::insert('insert into position_groups (positionGroup) values (?)', ['Special Teams']);
    }
}
