<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();
        $projects = [
            array('name' => 'Google','description' => 'The most used search engine'),
            array('name' => 'Facebook','description' => 'The most visited social networking site'),
            array('name' => 'Youtube','description' => 'The most used visited video sharing site'),
            array('name' => 'Yahoo','description' => 'News and mail provider system'),
            array('name' => 'Amazon','description' => 'Internet shopping site'),
            array('name' => 'Wikipedia','description' => 'Free encyclopedia'),
            array('name' => 'Twitter','description' => '140 characters social media'),
            array('name' => 'Bing','description' => 'Microsoft search engine'),
            array('name' => 'EBay','description' => 'Online auction site'),
            array('name' => 'MSN','description' => 'An email client, for simple use. Mostly known as messenger'),
            array('name' => 'Microsoft','description' => 'Software company'),
            array('name' => 'LinkedIn','description' => 'Proffessional social network'),
            array('name' => 'Pinterest','description' => 'Images network site'),
            array('name' => 'WordPress','description' => 'Blog provider')
        ];

        DB::table('projects')->insert($projects);


        DB::table('language_project')->delete();
        $lprojects = [
            array('project_id' => 1, 'lang_id' => 69),
            array('project_id' => 1, 'lang_id' => 22),
            array('project_id' => 1, 'lang_id' => 23),
            array('project_id' => 1, 'lang_id' => 54),
            array('project_id' => 1, 'lang_id' => 67),
            array('project_id' => 1, 'lang_id' => 100),
            array('project_id' => 2, 'lang_id' => 95),
            array('project_id' => 2, 'lang_id' => 100),
            array('project_id' => 2, 'lang_id' => 23),
            array('project_id' => 2, 'lang_id' => 67),
            array('project_id' => 2, 'lang_id' => 41),
            array('project_id' => 2, 'lang_id' => 36),
            array('project_id' => 2, 'lang_id' => 59),
            array('project_id' => 3, 'lang_id' => 22),
            array('project_id' => 3, 'lang_id' => 23),
            array('project_id' => 3, 'lang_id' => 100),
            array('project_id' => 3, 'lang_id' => 67),
            array('project_id' => 3, 'lang_id' => 54),
            array('project_id' => 4, 'lang_id' => 95),
            array('project_id' => 5, 'lang_id' => 67),
            array('project_id' => 5, 'lang_id' => 23),
            array('project_id' => 5, 'lang_id' => 94),
            array('project_id' => 6, 'lang_id' => 95),
            array('project_id' => 7, 'lang_id' => 23),
            array('project_id' => 7, 'lang_id' => 67),
            array('project_id' => 7, 'lang_id' => 110),
            array('project_id' => 7, 'lang_id' => 106),
            array('project_id' => 8, 'lang_id' => 121),
            array('project_id' => 9, 'lang_id' => 67),
            array('project_id' => 9, 'lang_id' => 69),
            array('project_id' => 9, 'lang_id' => 110),
            array('project_id' => 10, 'lang_id' => 121),
            array('project_id' => 11, 'lang_id' => 121),
            array('project_id' => 12, 'lang_id' => 67),
            array('project_id' => 12, 'lang_id' => 69),
            array('project_id' => 12, 'lang_id' => 110),
            array('project_id' => 13, 'lang_id' => 100),
            array('project_id' => 13, 'lang_id' => 4),
            array('project_id' => 14, 'lang_id' => 95),
            array('project_id' => 14, 'lang_id' => 69),
        ];

        DB::table('language_project')->insert($lprojects);
    }
}
