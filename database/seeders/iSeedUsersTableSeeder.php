<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class iSeedUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Eden Block',
                'email' => 'ablick@example.org',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => '6KxY1SI6N3',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Miss Jennie Boehm MD',
                'email' => 'keara.powlowski@example.net',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'fckS65BQnS',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Forrest Kemmer',
                'email' => 'schaden.justine@example.net',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'L7XTuirOVb',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Prof. Amira Reichel IV',
                'email' => 'price.geoffrey@example.com',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'y55u5VVT8P',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Dagmar Krajcik',
                'email' => 'tristin.bogan@example.org',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'WAGe4wVvIh',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Eliane Hamill',
                'email' => 'emile.hahn@example.org',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'DnlOjRONJ0',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mr. Derek Kihn MD',
                'email' => 'cnitzsche@example.com',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'WGGI0eNiNh',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Dr. Eliseo Friesen DVM',
                'email' => 'cpfeffer@example.org',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'VhlCD42o6c',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Rodrigo Ankunding',
                'email' => 'nkrajcik@example.net',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'WgBOllUPBm',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Asia Hirthe',
                'email' => 'hagenes.malvina@example.net',
                'email_verified_at' => '2024-01-04 14:33:46',
                'password' => '$2y$12$pZXlZROq1oNphjbyVRI4l.rqaqRElcXL.hoNZrc8WcGVKtS7EkAVG',
                'remember_token' => 'Bcum907stT',
                'created_at' => '2024-01-04 14:33:46',
                'updated_at' => '2024-01-04 14:33:46',
            ),
        ));
        
        
    }
}