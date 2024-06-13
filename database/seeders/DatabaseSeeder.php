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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Project::create(
            [
                'name' => 'Ecommerce Web Application ', 
                'type' => 'Personal',
                'description' => 'Wrote a dynamic full-stack application with React framework and Django-based REST APIs enabling an admin user to carry out CRUD operations on PostgreSQL database and user to add to cart, make purchases and leave reviews and ratings. Learned how to merge the application files add to AWS S3 Buckets and deploy to Digital Ocean.',
                'skills' => 'Unix, Git, Django, React.js, Cascading Style Sheets, HTML5, Python, PostgreSQL JavaScript, MVC, Software Development',
                'link' => 'https://qodisha.com/'
            ]
        );

        Project::create(
            [
                'name' => 'Health Mediator Prototype', 
                'type' => 'Personal',
                'description' => 'Prototyped a solution based on components within the open e-health space(Medical Record System, Information Mediator and Registries). As a proof of concept that information transfer can occur between heterogeneous health information systems. Leveraged docker and kubernetes to containerize the open e-health components and APIs to allow easy deployment, shipping and scalability.',
                'skills' => 'MongoDB, Node.js, Java(Maven, SpringBoot), Unix, Git, JavaScript(React), Software Design, Microservices, Docker, Kubernetes, Nginx',
                'link' => 'Ongoing'
            ]
        );

        // /*** Experience */
        Experience::create(
            [
                'name' => 'Jubilee Insurance', 
                'description' => 'Designed, deployed, and maintained containerized applications using Kubernetes and Docker, improving
                deployment speed by 40%. Implemented CI/CD pipelines using Jenkins, Azure Pipeline, Github Action and AWS Code Pipeline, reducing
                integration issues and deployment time by 30%. Developed and managed cloud infrastructure on AWS and Azure, ensuring high availability and scalability. 
                Monitored system performance and resolved issues using Prometheus, Grafana, and Azure Monitor, improving
                system reliability by 25%. Integrated shift left tools like Snyk, SonarCloud/SonarQube, Mend(WhiteSource), Orca as part of our CI pipeline to Scan
                Vulnerabilities and Code Smells improving code quality. Collaborated with development and operations teams to establish best practices for infrastructure as code (IaC)
                using YAML, Terraform and Ansible.',
                'position' => 'Developer|Operation|Cloud',
                'contact' => '(+254) 709 901 000',
                'from' => "09-2022",
                'to' => "03-2023"
            ]
        );
        

        Experience::create(
            [
                'name' => 'Jubilee Insurance', 
                'description' => 'Developed and Maintained a consent collection engine that saw a rise in consent collected from 30% to 78.87% in
                6 months. Designed scalable APIs and background workers for efficient notification processes. Build and Integrated an e-commerce platform with new bank APIs, which has done over ksh 4,000, 000 in sales. Contributed to CI/CD pipeline integration and load/stress testing.',
                'position' => 'Internship',
                'contact' => '(+254) 709 901 000',
                'from' => "03-2023",
                'to' => "Present"
            ]
        );

        // Experience::create(
        //     [
        //         'name' => 'Cloud Factory', 
        //         'description' => 'Lead a team of 20 cloud workers in leveraging the Dataloop platform to carry out data labelling on images and videos used in training Machine Learning models.',
        //         'position' => 'Cloud Worker',
        //         'contact' => 'cloudtalent@cloudfactory.com',
        //         'from' => "11-2021",
        //         'to' => "08-2022"
        //     ]
        // );
        
        // Experience::create(
        //     [
        //         'name' => 'Vista Prime Solutions', 
        //         'description' => 'Learnt the various modules within the Sage 300, an accounting platform for integrated operational management and financial reporting. Worked with Microsoft Excel functionalities to prepare and preprocess data. Worked with Pervasive SQL to carry out updates on Inventory data.',
        //         'position' => 'Internship',
        //         'contact' => '(+254) 020 2171131',
        //         'from' => "02-2021",
        //         'to' => "05-2021"
        //     ]
        // );

        

       

        /*** Skill */
        Skill::create(
            [
                'name' => 'Programming/Scripting Languages: Java, Python, JavaScript, Bash, YAML', 
                'level' => 90
            ]
        );

        Skill::create(
            [
                'name' => 'Libraries, Services and Tools: Git, Docker, Kubernetes, Jenkins, Terraform, Azure Pipelines, Ansible', 
                'level' => 90
            ]
        );

        Skill::create(
            [
                'name' => 'Cloud Platforms: AWS, Azure, GCP', 
                'level' => 80
            ]
        );

        Skill::create(
            [
                'name' => 'Operating Systems: Linux (Ubuntu, CentOS, Red Hat), Windows', 
                'level' => 90
            ]
        );

        Skill::create(
            [
                'name' => 'Knowledge of servers, networking concepts and protocols: Nginx, Apache, IIS, DNS, TCP/IP, DHCP, HTTPS', 
                'level' => 90
            ]
        );

        Skill::create(
            [
                'name' => 'Version Control (Git)', 
                'level' => 100
            ]
        );

        Skill::create(
            [
                'name' => 'SQL and NoSQL', 
                'level' => 80
            ]
        );
    }
}
