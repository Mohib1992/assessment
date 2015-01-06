<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 12/23/2014
 * Time: 9:29 PM
 */

class MenuSeeder extends Seeder{

    public function run()
    {
        DB::table('translation')->where('translation_key_id','<','11')->delete();

        $home = Translation::create([

            'translation_key_id' => '1',
            'content' => 'Home',
            'language_id' => Language::english()
        ]);

        $this->command->info('Menu Crated');

    }

}