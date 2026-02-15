<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\Profile;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Profile
        Profile::create([
            'name' => 'Uriel John G. <br> <span class="italic font-serif">Chavez.</span>',
            'title' => 'Information Technology Student',
            'bio' => 'Specialize in developing complex IT infrastructures and technical solutions that bridge high-performance engineering with modern digital efficiency.',
            'image' => '/image/uriell.jpg',
            'cv_link' => '#',
            'facebook_link' => '#',
            'instagram_link' => '#',
            'linkedin_link' => '#',
            'github_link' => '#',
            'email' => 'urieljohnchavez@gmail.com',
            'phone' => '+63 907 8700 119',
            'address' => 'Maa, Davao City',
        ]);

        // Experiences
        Experience::create([
            'role' => 'Senior IT Specialist',
            'company' => 'METROPOLIS SYSTEMS',
            'company_location' => null,
            'year' => '2022 - PRES',
            'description' => 'Leading the technical vision for high-scale IT infrastructures. Bridging the gap between stakeholders and technical teams.'
        ]);

        // Certificates
        Certificate::create([
            'title' => 'HTML and CSS',
            'year' => '2024',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH'
        ]);

        Certificate::create([
            'title' => 'Databases',
            'year' => '2024',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH'
        ]);

        Certificate::create([
            'title' => 'Java',
            'year' => '2022',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH'
        ]);

        Certificate::create([
            'title' => 'Python for IT',
            'year' => '2023',
            'administered_by' => 'CERTIPORT',
            'language' => 'ENGLISH'
        ]);

        Certificate::create([
            'title' => 'Network Security',
            'year' => '2023',
            'administered_by' => 'CISCO ACADEMY',
            'language' => 'ENGLISH'
        ]);

        Certificate::create([
            'title' => 'Cloud Foundations',
            'year' => '2024',
            'administered_by' => 'AWS ACADEMY',
            'language' => 'ENGLISH'
        ]);

        // Projects
        Project::create([
            'title' => 'Core Systems Architecture',
            'subtitle' => 'Archive / 2024 • 01',
            'description' => 'A high-performance backend engine designed for large-scale enterprise data management.',
            'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc51?q=80&w=1000&auto=format&fit=crop'
        ]);

        Project::create([
            'title' => 'Cloud Workspace OS',
            'subtitle' => 'Archive / 2024 • 02',
            'description' => 'Redefining for digital workspace through modular system architecture.',
            'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1000&auto=format&fit=crop'
        ]);

        Project::create([
            'title' => 'Aether Protocol',
            'subtitle' => 'Archive / 2024 • 03',
            'description' => 'A decentralized mesh protocol for low-latency network recovery. Active cloud cryptographic security with an integrated interface, allowing and ...',
            'image' => 'https://images.unsplash.com/photo-1639322537228-f710d846310a?q=80&w=1000&auto=format&fit=crop'
        ]);

        // Note: For certificates, we'll use a generic certificate placeholder
        $certPlaceholder = 'https://images.unsplash.com/photo-1589330694653-ded6df03f754?q=80&w=1000&auto=format&fit=crop';
        
        Certificate::where('id', '>', 0)->update(['image' => $certPlaceholder]);
    }
}
