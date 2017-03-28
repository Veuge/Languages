<?php

use Illuminate\Database\Seeder;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();
        $uses = [
            array('description' => 'Application'),
            array('description' => 'Artificial Intelligence'),
            array('description' => 'Automation'),
            array('description' => 'Business'),
            array('description' => 'Client-side'),
            array('description' => 'Data processing'),
            array('description' => 'Databases'),
            array('description' => 'Distributed'),
            array('description' => 'Domain specific'),
            array('description' => 'Education'),
            array('description' => 'Embedded'),
            array('description' => 'Expert system'),
            array('description' => 'Game'),
            array('description' => 'General'),
            array('description' => 'Inference'),
            array('description' => 'IoT'),
            array('description' => 'Mobile'),
            array('description' => 'Numerical Computing'),
            array('description' => 'Parallel application'),
            array('description' => 'RAD'),
            array('description' => 'Realtime'),
            array('description' => 'Research'),
            array('description' => 'Scripting'),
            array('description' => 'Server-side'),
            array('description' => 'Shell'),
            array('description' => 'Statistics'),
            array('description' => 'Symbolic computing'),
            array('description' => 'System development'),
            array('description' => 'Technical Computing'),
            array('description' => 'Web')
        ];

        DB::table('uses')->insert($uses);
    }
}
