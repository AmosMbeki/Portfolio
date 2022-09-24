<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        /*** Project */
        Project::create(
            [
                'name' => 'Shortest Path Finder', 
                'type' => 'Middleware Integration IL',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit.',
                'skills' => 'Docker, Java, JavaScript',
            ]
        );

        Project::create(
            [
                'name' => 'Ecommerce Application', 
                'type' => 'Middleware Integration IL',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit.',
                'skills' => 'Docker, Java, JavaScript',
            ]
        );

        Project::create(
            [
                'name' => 'Middleware Integration IL', 
                'type' => 'Middleware Integration IL',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit.',
                'skills' => 'Docker, Java, JavaScript',
            ]
        );

        // /*** Experience */
        Experience::create(
            [
                'name' => 'Devmasters', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit.',
                'position' => 'Full Stack Developer',
                'contact' => '444444-4444',
                'from' => 2015,
                'to' => 2018
            ]
        );

        Experience::create(
            [
                'name' => '123 Designs', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit.',
                'position' => 'Web Designer',
                'contact' => '222222-2222',
                'from' => 2013,
                'to' => 2015
            ]
        );

        Experience::create(
            [
                'name' => 'Web Designer Pros', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit.',
                'position' => 'Web Designer',
                'contact' => '333333-3333',
                'from' => 2018,
                'to' => 2022
            ]
        );

        /*** Skill */
        Skill::create(
            [
                'name' => 'HTML', 
                'level' => 100
            ]
        );

        Skill::create(
            [
                'name' => 'CSS', 
                'level' => 100
            ]
        );

        Skill::create(
            [
                'name' => 'JavaScript', 
                'level' => 90
            ]
        );

        Skill::create(
            [
                'name' => 'Bootstrap', 
                'level' => 80
            ]
        );

        Skill::create(
            [
                'name' => 'PHP', 
                'level' => 80
            ]
        );
    }
}
