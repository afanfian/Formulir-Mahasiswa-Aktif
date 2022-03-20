<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;

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

        // // Article 
        // Article::create([
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'title' => 'Web Development-Surabaya, East Java, Indonesia',
        //     'slug' => 'Article-Web-Development-Staff',
        //     'author' => 'Fian Awamiry Maulana',
        //     'body' => 'The Society of Petroleum Engineers is a non-profit professional association whose more than 158,000 members in 143 countries are involved in oil and gas exploration and production. SPE is the premier resource for technical knowledge providing publications, events, training courses, and online resources.',
        //     'excerpt' => 'Here I learned to create, and maintain the web using HTML, CSS, SCSS, PHP, and the Laravel 8 Framework.',
        //     'published_at' => '2022-08-03 18:10:22'
        // ]);
        // Article::create([
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'title' => 'Front-end Developer-Semarang, Central Java, Indonesia',
        //     'slug' => 'Article-Front-End-developer-Internship',
        //     'author' => 'Fian Awamiry Maulana',
        //     'body' => 'Mentoringg.id is an edutech start-up, and is happy to help students determine their path to higher education and employment. In addition, Mentoringg.id helps them to develop their hard and soft skills through our program. We hope they can grow and make an impact in their immediate environment. Mentoringg.id is a community in 2019, and a start-up in 2021. This internship at mentoringg.id, learns new things by creating a web using the laravel 8 framework and using Lumen. Internships at mentoringg.id, I often coordinate with the UI/UX division regarding the creation of the web design, and the Back-end developer division regarding the appearance of data that will be displayed on the website.',
        //     'excerpt' => 'This internship at mentoringg.id, learns new things by creating a web using the laravel 8 framework and using Lumen.',
        //     'published_at' => '2022-08-03 18:21:21'
        // ]);
        // Article::create([
        //     'category_id' => '3',
        //     'user_id' => '3',
        //     'title' => 'DevOps Engineer-Bandung, West Java, Indonesia',
        //     'slug' => 'Article-DevOps-Engineer-Internship',
        //     'author' => 'Fian Awamiry Maulana',
        //     'body' => 'Akademis.id is an educational start-up platform that provides many products for Indonesian students with higher education. Now, Akademis.id has more than 200,000 active users and 143,000 followers on Instagram. Usually make and make their own every two weeks for High School TryOut students to prepare for their exam trip to university. Teach students about geography virtually every two weeks and engage more than 200 participants. Here I learn to check for bugs or errors in try out or exam questions that have been uploaded on the Akademis.id website and fix the bugs. Internships at akademis.id, I often coordinate with the front-end developer division, and the question-making division. The website of Akademis.id can be seen as follows: https://akademis.id/',
        //     'excerpt' => 'Here I learn to check for bugs or errors in try out or exam questions that have been uploaded on the Akademis.id website and fix the bugs.',
        //     'published_at' => '2022-08-03 19:12:21'
        // ]);
        // Article::create([
        //     'category_id' => '4',
        //     'user_id' => '4',
        //     'title' => 'Information Technology Support Technician',
        //     'slug' => 'Article-Information-Technology-Support-Technician-Internship',
        //     'author' => 'Fian Awamiry Maulana',
        //     'body' => 'Here I learned new things, such as configuration related to IP addresses, assembling laptops, computers, and tools used to connect users wifi to wifi servers, and working well with workers at Nusa.net. For the work and knowledge that I gained during my internship as follows: Wifi installation using fiber optic, Assemble and configure powerbeam and litebeam, and Configure wifi and mikrotik.',
        //     'excerpt' => 'or the work and knowledge that I gained during my internship as follows',
        //     'published_at' => '2022-08-03 19:28:09'
        // ]);
        // Article::create([
        //     'category_id' => '4',
        //     'user_id' => '4',
        //     'title' => 'Information Technology Support Technician',
        //     'slug' => 'Article-Information-Technology-Support-Technician',
        //     'author' => 'Fian Awamiry Maulana',
        //     'body' => 'Here I got new knowledge that I didnt know, besides that I also got new relationships with workers and internships in various offices, then I also got motivated to continue to high school or college, because it will be very useful for the future for me and my family. For the work and knowledge that I gained during my internship as follows: Live guest photographer at LPPL Radio Suara Lumajang 104.1 FM, Input data related to LPPL Sound Radio Lumajang 104.1 FM, and Participate in helping coverage workers or seek information directly, with big or interesting events in the city of Lumajang, East Java.',
        //     'excerpt' => 'Live guest photographer at LPPL Radio Suara Lumajang 104.1 FM',
        //     'published_at' => '2022-08-03 19:32:14'
        // ]);
        // // Category
        Category::create([
            'name' => 'Afanfian Web Development',
            'slug' => 'Afanfian-Web-Development'
        ]);
        Category::create([
            'name' => 'Afanfian Front-end Developer',
            'slug' => 'Afanfian-Front-end'
        ]);
        Category::create([
            'name' => 'Afanfian DevOps Engineer',
            'slug' => 'Afanfian-DevOps-Engineer'
        ]);
        Category::create([
            'name' => 'Afanfian Information Technology Support Technician',
            'slug' => 'Afanfian-Information-Technology Support-Technician'
        ]);
        // // User
        // User::create([
        //     'name' => 'Fian Awamiry Maulana',
        //     'email' => 'Afanfian14@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'XINNN',
        //     'email' => 'XINNN@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'VYNNN',
        //     'email' => 'VYNNN@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'REKT',
        //     'email' => 'REKT@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        //Menggunakan dan membuka user faker 
        User::factory(4)->create();

        //membuat factory atau faker Article
        Article::factory(20)->create();
    }
}
