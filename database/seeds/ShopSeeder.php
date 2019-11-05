<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $excel_file = resource_path('assets/data/shop_list.xlsx');

        /**
         * @var \Maatwebsite\Excel\Collections\RowCollection
         */
        $rows = Excel::load( $excel_file )->get();


        foreach ( $rows as $row ) {

            $shop = new \App\Shop();

            $shop->region = $row->region;
            $shop->{'name:en'} = $row->name_en;
            $shop->{'address:en'} = $row->address_en;
            $shop->{'name:tc'} = $row->name_tc;
            $shop->{'address:tc'} = $row->address_tc;
            $shop->phone = $row->phone;
            $shop->latitude = $row->latitude ;
            $shop->longitude = $row->longitude;
            $shop->save( );

        }

    }
}
