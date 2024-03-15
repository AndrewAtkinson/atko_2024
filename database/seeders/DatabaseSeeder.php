<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Education::factory()->create([
            'course' => 'Master of Science in Digital Forensics',
            'university' => 'Teesside University',
            'description' => 'A program focusing on computer science principles within the context of a cyber investigation. Emphasizes collecting, examining, and interpreting digital evidence. Includes practical sessions using industry-standard software and practices.',
            'date' => '2010-07-01',
        ]);

        Education::factory()->create([
            'course' => 'Bachelor of Science in Applied Computing',
            'university' => 'Northumbria University',
            'description' => 'Covers a wide range of topics, from systems development and strategic systems management to social and current issues in computing, and professional management and practice.',
            'date' => '2009-07-01',
        ]);

        Experience::factory()->create([
            'company' => 'Visualsoft',
            'title' => 'Lead Engineer',
            'description' => 'Lead engineer role with responsibilities including overseeing project development and ensuring technical excellence.',
            'start_date' => '2022-01-01',
            'end_date' => null
        ]);

        Experience::factory()->create([
            'company' => 'Visualsoft',
            'title' => 'EPOS Team Lead',
            'description' => 'Managed a dedicated EPOS team, focused on supporting and developing EPOS integrations with the VS3 Platform.',
            'start_date' => '2019-01-01',
            'end_date' => '2022-01-01',
        ]);

        Experience::factory()->create([
            'company' => 'Visualsoft',
            'title' => 'Enterprise Senior Developer',
            'description' => 'Worked on complex projects for our biggest Enterprise clients, providing high-quality software solutions.',
            'start_date' => '2017-07-01',
            'end_date' => '2019-01-01',
        ]);

        Experience::factory()->create([
            'company' => 'Visualsoft',
            'title' => 'Senior Developer',
            'description' => 'Contributed to client and internal features for our world-leading ecommerce platform, focusing on delivering high-performance solutions.',
            'start_date' => '2016-10-01',
            'end_date' => '2017-07-01',
        ]);

        Experience::factory()->create([
            'company' => 'Visualsoft',
            'title' => 'Developer',
            'description' => 'Developed client and internal features for our world-leading ecommerce platform, contributing to its continuous improvement.',
            'start_date' => '2011-07-01',
            'end_date' => '2016-10-01',
        ]);

        Experience::factory()->create([
            'company' => 'Xbite Ltd',
            'title' => 'Web Developer',
            'description' => 'Developed new and existing functionality for Xbite\'s retail websites across multiple countries, ensuring a seamless user experience.',
            'start_date' => '2010-11-01',
            'end_date' => '2011-07-01',
        ]);

        Skill::factory()->create([
            'name' => 'PHP',
            'percent' => '90',
            'description' => 'PHP is a widely-used open source general-purpose scripting language known for its flexibility and ease of use.',
        ]);
        Skill::factory()->create([
            'name' => 'MySQL',
            'percent' => '80',
            'description' => 'MySQL is a popular relational database management system known for its reliability and performance.',
        ]);
        Skill::factory()->create([
            'name' => 'Data Migration',
            'percent' => '80',
            'description' => 'Data migration involves moving data from one location to another or from one format to another, ensuring data integrity and consistency.',
        ]);
        Skill::factory()->create([
            'name' => 'HTML',
            'percent' => '85',
            'description' => 'HTML (Hypertext Markup Language) is the standard markup language for creating web pages and web applications.',
        ]);
        Skill::factory()->create([
            'name' => 'JavaScript',
            'percent' => '50',
            'description' => 'JavaScript is a programming language commonly used for creating interactive effects within web browsers.',
        ]);
        Skill::factory()->create([
            'name' => 'API',
            'percent' => '50',
            'description' => 'An API (Application Programming Interface) is a software intermediary that allows two applications to communicate with each other.',
        ]);
    }
}
