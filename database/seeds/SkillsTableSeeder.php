<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'id' => 1,
                'name' => 'Environment & Widlife Conservation',
            ],
            [
                'id' => 2,
                'name' => 'Driving Safety',
            ],
            [
                'id' => 3,
                'name' => '	Women Protection & Empowerment',
            ],
            [
                'id' => 4,
                'name' => 'Literacy and Education',
            ],
            [
                'id' => 5,
                'name' => '	Social Injustice/ Human Rights Support',
            ]
            ,
            [
                'id' => 6,
                'name' => '	Mental Health Support',
            ]
            ,
            [
                'id' => 7,
                'name' => '	Refugee/ Displaced Population Aid',
            ]
            ,
            [
                'id' => 8,
                'name' => '	Child Care and Protection',
            ]
            ,
            [
                'id' => 9,
                'name' => '	Elderly Care',
            ]
            ,
            [
                'id' => 10,
                'name' => '	Disaster Relief',
            ]
            ,
            [
                'id' => 11,
                'name' => '	Health & Medical Services',
            ]
            ,
            [
                'id' => 12,
                'name' => 'Humanitarian Aid & Poverty Relief',
            ]
        ];

        Skill::insert($skills);
    }
}
