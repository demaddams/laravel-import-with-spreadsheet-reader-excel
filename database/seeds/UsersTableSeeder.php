<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('started at '. \Carbon\Carbon::now());
        $no_of_rows = 1000000;
        $range=range( 1, $no_of_rows );
        $chunksize=10000;
        foreach( array_chunk( $range, $chunksize ) as $chunk ){
            $user_data = array();/* array is re-initialised each major iteration */
            foreach( $chunk as $i ){
                $user_data[] = factory(User::class)->raw();
            }
            User::insert( $user_data );
        }

        $this->command->info('finish at '. \Carbon\Carbon::now());
    }
}
