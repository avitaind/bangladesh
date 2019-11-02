<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // Read CSV file.

        $file_path = resource_path('assets/data/country_list.csv');

        $file = fopen( $file_path, 'r');
        $all_data = array();

        $header = true;

        $keys = null;

        while ( $line = fgetcsv( $file, 1000, ",") ){

            if ( !$keys ) {
                $keys = $line;
            } else {

                $line = array_combine( $keys, $line );

                Country::updateOrCreate($line, ['id' => $line['id']]);


            }

        }
    }

}
