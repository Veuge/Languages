<?php

use Illuminate\Database\Seeder;

class StatTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stat_types')->delete();
        $types = [
            array('type' => 'Bytes'),
            array('type' => 'Repositories'),
        ];

        DB::table('stat_types')->insert($types);

        DB::table('github_stats')->delete();
        $types = [
            array('lang_id' => 22, 'type_id' => 1, 'quantity' => 29619820895320),
            array('lang_id' => 69, 'type_id' => 1, 'quantity' => 7074387490921),
            array('lang_id' => 23, 'type_id' => 1, 'quantity' => 5829285919326),
            array('lang_id' => 67, 'type_id' => 1, 'quantity' => 4132033849660),
            array('lang_id' => 95, 'type_id' => 1, 'quantity' => 3297873280514),
            array('lang_id' => 100,'type_id' => 1,  'quantity' => 1759941502444),
            array('lang_id' => 24, 'type_id' => 1, 'quantity' => 1395589957928),
            array('lang_id' => 106,'type_id' => 1,  'quantity' => 667135013238),
            array('lang_id' => 94, 'type_id' => 1, 'quantity' => 295787222413),
            array('lang_id' => 54, 'type_id' => 1, 'quantity' => 197196627117),
            array('lang_id' => 110,'type_id' => 1,  'quantity' => 162154137245),
            array('lang_id' => 41, 'type_id' => 1, 'quantity' => 112751835871),
            array('lang_id' => 48, 'type_id' => 1, 'quantity' => 109549930390),
            array('lang_id' => 77, 'type_id' => 1, 'quantity' => 106599429129),
            array('lang_id' => 120,'type_id' => 1,  'quantity' => 93576729859),
            array('lang_id' => 107,'type_id' => 1,  'quantity' => 72089343138),
            array('lang_id' => 93, 'type_id' => 1, 'quantity' => 71293613771),
            array('lang_id' => 36, 'type_id' => 1, 'quantity' => 69954540750),
            array('lang_id' => 80, 'type_id' => 1, 'quantity' => 40112071998),
            array('lang_id' => 57, 'type_id' => 1, 'quantity' => 39423513503),
            array('lang_id' => 101,'type_id' => 1,  'quantity' => 32606334561),
            array('lang_id' => 115,'type_id' => 1,  'quantity' => 26600020595),
            array('lang_id' => 119,'type_id' => 1,  'quantity' => 24470548129),
            array('lang_id' => 118,'type_id' => 1,  'quantity' => 24040456410),
            array('lang_id' => 32, 'type_id' => 1, 'quantity' => 23910255508),
            array('lang_id' => 88, 'type_id' => 1, 'quantity' => 23598722971),
            array('lang_id' => 59, 'type_id' => 1, 'quantity' => 21607525476),
            array('lang_id' => 111,'type_id' => 1,  'quantity' => 19076658035),
            array('lang_id' => 98, 'type_id' => 1, 'quantity' => 18806229056),
            array('lang_id' => 37, 'type_id' => 1, 'quantity' => 17702999379),
            array('lang_id' => 102,'type_id' => 1,  'quantity' => 16650100415),
            array('lang_id' => 46, 'type_id' => 1, 'quantity' => 14366353127),
            array('lang_id' => 27, 'type_id' => 1, 'quantity' => 12333318197),
            array('lang_id' => 31, 'type_id' => 1, 'quantity' => 8530610435),
            array('lang_id' => 68, 'type_id' => 1, 'quantity' => 8007520302),
            array('lang_id' => 39, 'type_id' => 1, 'quantity' => 6914499172),
            array('lang_id' => 60, 'type_id' => 1, 'quantity' => 6828685674),
            array('lang_id' => 117,'type_id' => 1,  'quantity' => 6295763833),

            array('lang_id' => 1, 'type_id' => 2, 'quantity' => 23304),
            array('lang_id' => 2, 'type_id' => 2, 'quantity' => 1682),
            array('lang_id' => 8, 'type_id' => 2, 'quantity' => 89),
            array('lang_id' => 9, 'type_id' => 2, 'quantity' => 24862),
            array('lang_id' => 12, 'type_id' => 2, 'quantity' => 485804),
            array('lang_id' => 22, 'type_id' => 2, 'quantity' => 652326),
            array('lang_id' => 23, 'type_id' => 2, 'quantity' => 798446),
            array('lang_id' => 24, 'type_id' => 2, 'quantity' => 755315),
            array('lang_id' => 27, 'type_id' => 2, 'quantity' => 47019),
            array('lang_id' => 36, 'type_id' => 2, 'quantity' => 8053),
            array('lang_id' => 37, 'type_id' => 2, 'quantity' => 8009),
            array('lang_id' => 38, 'type_id' => 2, 'quantity' => 122),
            array('lang_id' => 39, 'type_id' => 2, 'quantity' => 556),
            array('lang_id' => 40, 'type_id' => 2, 'quantity' => 22206),
            array('lang_id' => 41, 'type_id' => 2, 'quantity' => 19046),
            array('lang_id' => 43, 'type_id' => 2, 'quantity' => 119),
            array('lang_id' => 46, 'type_id' => 2, 'quantity' => 9094),
            array('lang_id' => 47, 'type_id' => 2, 'quantity' => 482),
            array('lang_id' => 48, 'type_id' => 2, 'quantity' => 9696),
            array('lang_id' => 54, 'type_id' => 2, 'quantity' => 188762),
            array('lang_id' => 59, 'type_id' => 2, 'quantity' => 59827),
            array('lang_id' => 67, 'type_id' => 2, 'quantity' => 2980426),
            array('lang_id' => 68, 'type_id' => 2, 'quantity' => 8814),
            array('lang_id' => 69, 'type_id' => 2, 'quantity' => 3359846),
            array('lang_id' => 74, 'type_id' => 2, 'quantity' => 12730),
            array('lang_id' => 77, 'type_id' => 2, 'quantity' => 77729),
            array('lang_id' => 80, 'type_id' => 2, 'quantity' => 77683),
            array('lang_id' => 87, 'type_id' => 2, 'quantity' => 388542),
            array('lang_id' => 93, 'type_id' => 2, 'quantity' => 16401),
            array('lang_id' => 94, 'type_id' => 2, 'quantity' => 126432),
            array('lang_id' => 95, 'type_id' => 2, 'quantity' => 1167226),
            array('lang_id' => 98, 'type_id' => 2, 'quantity' => 7259),
            array('lang_id' => 100,'type_id' => 2,  'quantity' => 1590615),
            array('lang_id' => 101,'type_id' => 2,  'quantity' => 197204),
            array('lang_id' => 106,'type_id' => 2,  'quantity' => 1217437),
            array('lang_id' => 118,'type_id' => 2,  'quantity' => 243539),
            array('lang_id' => 120,'type_id' => 2,  'quantity' => 31954),
        ];

        DB::table('github_stats')->insert($types);
    }
}
