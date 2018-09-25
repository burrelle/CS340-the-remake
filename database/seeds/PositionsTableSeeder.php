<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['QB', '1']);
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['RB', '1']);
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['WR', '1']);
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['DB', '2']);
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['DE', '2']);
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['LB', '2']);
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['K', '3']);
        DB::insert('insert into positions (position, positionGroupId) values (?, ?)', ['P', '3']);
    }
}
