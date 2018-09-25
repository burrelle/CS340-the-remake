<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Arizona', 'Cardinals', 'University of Phoenix Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Chicago', 'Bears', 'Soldier Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Green Bay', 'Packers', 'Lambeau Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['New York', 'Giants', 'MetLife Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Detroit', 'Lions', 'Ford Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Washington', 'Redskins', 'FedEx Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Philadephia', 'Eagles', 'Lincoln Financial Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Pittsburgh', 'Steelers', 'Heinz Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Los Angeles', 'Rams', 'Los Angeles Memorial Coliseum']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['San Fransisco', '49ers', 'Levi\'s Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Cleveland', 'Browns', 'FirstEnergy Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Indianapolis', 'Colts', 'Lucas Oil Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Dallas', 'Cowboys', 'AT&T Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Kansas City', 'Cheifs', 'Arrowhead Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Los Angeles', 'Chargers', 'StubHub Center']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Denver', 'Broncos', 'Sports Authority Field at Mile High']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['New York', 'Jets', 'MetLife Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['New England', 'Patriots', 'Gillette Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Oakland', 'Raiders', 'Oakland–Alameda County Coliseum']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Tennessee', 'Titans', 'Nissan Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Buffalo', 'Bills', 'New Era Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Minnesota', 'Vikings', 'US Bank Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Atlanta', 'Falcons', 'Mercedes-Benz Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Miami', 'Dolphins', 'Hard Rock Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['New Orleans', 'Saints', 'Mercedes-Benz Superdome']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Cincinnati', 'Bengals', 'Paul Brown Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Seattle', 'Seahawks', 'Century Link Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Tampa Bay', 'Buccaneers', 'Raymond James Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Carolina', 'Panthers', 'Bank of America Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Jacksonville', 'Jaguars', 'EverBank Field']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Baltimore', 'Ravens', 'M&T Bank Stadium']
        );
        DB::insert(
            'insert into teams (city, mascot, stadium) values (?, ?, ?)',
            ['Houston', 'Texans', 'NRG Stadium']
        );
    }
}
