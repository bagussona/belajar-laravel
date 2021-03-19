<?php

use App\Santri;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Santri::create(
            ['nama' => 'Bagus Sonarangga',
            'divisi' => 'Backend Programmer',
            'alamat' => 'Garut'
            ]);

            Santri::create(
                ['nama' => 'Gema',
                'divisi' => 'Backend Programmer',
                'alamat' => 'Bekasi'
                ]);

                Santri::create(
                    ['nama' => 'Hana',
                    'divisi' => 'Backend Programmer',
                    'alamat' => 'Semarang'
                    ]);

                    Santri::create(
                        ['nama' => 'Fariz',
                        'divisi' => 'Backend Programmer',
                        'alamat' => 'Bogor'
                        ]);


    }
}
