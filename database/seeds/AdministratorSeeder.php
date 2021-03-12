<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new App\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "administrator@mail.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("larastore");
        $administrator->address = "Jl. Bunga Matahari, No.11 Gomong Lama, Mataram.";
        $administrator->phone = "6281939448487";

        $administrator->save();

        $this->command->info("Admin successfully added");
    }
}
