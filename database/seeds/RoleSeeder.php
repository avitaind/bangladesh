<?php

use Illuminate\Database\Seeder;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // Create Roles

        Bouncer::allow('admin')->to('manage-users');
        Bouncer::allow('marketing-staff')->to('manage-marketing-data');
        Bouncer::allow('services-staff')->to('manage-service-data');




    }
}
