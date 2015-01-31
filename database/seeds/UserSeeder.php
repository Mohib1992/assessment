<?php
/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 2/1/2015
 * Time: 12:48 AM
 */

class UserSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            'email'=>'abcd@abdc.com',
            'password'=> Hase::make(1234)
        ]);

        $this->command->info('user created');
    }
}