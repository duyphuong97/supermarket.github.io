<?php

use Illuminate\Database\Seeder;

class itemseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $uFN = "ancaksbcilAUVscysvcasci";


            for ($j=0; $j < 2000; $j++) {
                $name     = $uFN;
                array_push($list, [
                    'id'        => $j,
                    'name'     => $name,
                ]);
            }
        DB::table('items')->insert($list);
    }
}
