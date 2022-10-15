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
                'name' => 'Interoperable E-Health Solution Prototype', 
                'type' => 'Personal',
                'description' => 'Prototyped a solution based on components within the open e-health space(Medical Record System, Information Mediator and Registries). As a proof of concept that information transfer can occur between heterogeneous health information systems. Leveraged docker and kubernetes to containerize the open e-health components and APIs to allow easy deployment, shipping and scalability.',
                'skills' => 'MongoDB, Node.js, Java(Maven, SpringBoot), Unix, Git, JavaScript(React), Software Design, Microservices',
            ]
        );

        Project::create(
            [
                'name' => 'Ecommerce Web Application ', 
                'type' => 'Personal',
                'description' => 'Wrote a dynamic full-stack application with React framework and Django-based REST APIs enabling an admin user to carry out CRUD operations on PostgreSQL database and user to add to cart, make purchases and leave reviews and ratings. Learned how to merge the application files add to AWS S3 Buckets and deploy to Digital Ocean and Heroku.',
                'skills' => 'Unix, Git, Django, React.js, Cascading Style Sheets, HTML5, Python, PostgreSQL JavaScript, MVC, Software Development'
            ]
        );

        Project::create(
            [
                'name' => 'Path Finding Algorithm', 
                'type' => 'Personal',
                'description' => 'Created a demonstration application using graph traversal algorithms(A-star, Depth-First Search and Breadth-First Search) to find the shortest path between various towns in Kenya, and to render real-time animation(Spanning tree) showing the differences between the three algorithms using the JavaFX FXML graphics library.',
                'skills' => 'Java, Unix, Git, Cascading Style Sheets, OOP, MVC, Software Development',
            ]
        );

        // /*** Experience */
        

        Experience::create(
            [
                'name' => 'Jubilee Insurance Holdings', 
                'description' => 'Insurtech company with the largest economy in East Africa Community with a market share of 20 percent. Implemented real time notification feature bases on queues and jobs to log and dispatch emails to both agents and customers when insurance product purchases are made using laravel framework, thereby making efficient the notification process and logging of information for reporting purposes. Designed REST API endpoints for authentication and information on various insurance products like Jikimu using Postman and PHP laravel framework.',
                'position' => 'Graduate Software Engineering Internship',
                'contact' => '(+254) 709 901 000',
                'from' => "09-2022",
                'to' => "Present"
            ]
        );

        Experience::create(
            [
                'name' => 'Cloud Factory', 
                'description' => 'Lead a team of 20 cloud workers in leveraging the Dataloop platform to carry out data labelling on images and videos used in training Machine Learning models.',
                'position' => 'Cloud Worker',
                'contact' => 'cloudtalent@cloudfactory.com',
                'from' => "11-2021",
                'to' => "08-2022"
            ]
        );
        
        Experience::create(
            [
                'name' => 'Vista Prime Solutions', 
                'description' => 'Learnt the various modules within the Sage 300, an accounting platform for integrated operational management and financial reporting. Worked with Microsoft Excel functionalities to prepare and preprocess data. Worked with Pervasive SQL to carry out updates on Inventory data.',
                'position' => 'Internship',
                'contact' => '(+254) 020 2171131',
                'from' => "02-2021",
                'to' => "05-2021"
            ]
        );

        

       

        /*** Skill */
        Skill::create(
            [
                'name' => 'React & Vue JS Frontend Framewoks', 
                'level' => 80
            ]
        );

        Skill::create(
            [
                'name' => 'Laravel and Django Backend Framework', 
                'level' => 90
            ]
        );

        Skill::create(
            [
                'name' => 'Agile and Azure DevOps', 
                'level' => 80
            ]
        );

        Skill::create(
            [
                'name' => 'Microservices (docker and kubernetes )', 
                'level' => 80
            ]
        );

        Skill::create(
            [
                'name' => 'HTML, CSS and Javascript', 
                'level' => 100
            ]
        );

        Skill::create(
            [
                'name' => 'Version Control (Git) and Unix', 
                'level' => 100
            ]
        );

        Skill::create(
            [
                'name' => 'SQL and NoSQL', 
                'level' => 80
            ]
        );

        Skill::create(
            [
                'name' => 'Java, PHP, Python and C++', 
                'level' => 80
            ]
        );

        Skill::create(
            [
                'name' => 'Java, PHP, Python and C++', 
                'level' => 80
            ]
        );
    }
}
