<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Антон',
                'surname' => 'Гагарин',
                'email' => 'gagarin@mail.ru'
            ],
            [
                'name' => 'Владимир',
                'surname' => 'Пушкин',
                'email' => 'pushkin@mail.ru'
            ],
            [
                'name' => 'Руслан',
                'surname' => 'Леонардов',
                'email' => 'leonardov@mail.ru'
            ],
        ];

        DB::table('suppliers')->insert($data);
    }
}
