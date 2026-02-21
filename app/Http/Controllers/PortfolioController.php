<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getData()
    {
        $profile = (object)[
            'name' => 'Uriel <br> <span class="italic">John.</span>',
            'title' => 'Information Technology Student',
            'bio' => 'Specialize in developing complex IT infrastructures and technical solutions that bridge high-performance engineering with modern digital efficiency.',
            'image' => asset('image/uriell.png'),
            'cv_link' => '#',
            'facebook_link' => '#',
            'instagram_link' => '#',
            'linkedin_link' => '#',
            'github_link' => '#',
            'email' => 'urieljohnchavez@gmail.com',
            'phone' => '+63 907 8700 119',
            'address' => 'Maa, Davao City',
        ];

        $experiences = [
            (object)[
                'role' => 'Infrastructure Leadership',
                'company' => 'System Architect & Engineering',
                'year' => '2030 - BEYOND',
                'description' => 'Architecting enterprise-scale network resilience and leading technical teams toward secure, high-availability infrastructure solutions.',
                'color' => 'emerald-400',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="m2 12 10 5 10-5"/></svg>'
            ],
            (object)[
                'role' => 'Enterprise Engineering',
                'company' => 'Full-Stack Developer Transition',
                'year' => '2027 - 2029',
                'description' => 'Scaling digital experiences through modular system design and cloud-native application development for complex industrial environments.',
                'color' => 'accent-pink',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'
            ],
            (object)[
                'role' => 'Professional Integration',
                'company' => 'Industrial Immersion & Internship',
                'year' => '2026 - 2027',
                'description' => 'Bridging technical expertise with commercial environments, focusing on cross-functional collaboration and agile development workflows.',
                'color' => 'cyan-400',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>'
            ],
            (object)[
                'role' => 'Technical Specialization',
                'company' => 'Advanced Project Development',
                'year' => '2024 - 2025',
                'description' => 'Developed high-stakes systems like the Social Welfare Distribution platform, Sellio Android App, News API, and E-commerce platform,mastering security-first backend architecture and database logic.',
                'color' => 'accent-purple',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>'
            ],
            (object)[
                'role' => 'Academic Foundation',
                'company' => 'BS in Information Technology',
                'year' => '2022 - 2026',
                'description' => 'Forging a strong foundation in networking, system operations, and technical logic at the University of Mindanao.',
                'color' => 'blue-500',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>'
            ]
        ];

        $certificates = [
            (object)[
                'title' => 'Cybersecurity',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2025',
                'color' => 'blue-500',
                'image' => asset('image/cybersecurity.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Network Security',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2025',
                'color' => 'accent-purple',
                'image' => asset('image/networksecurity.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Networking',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2024',
                'color' => 'cyan-400',
                'image' => asset('image/networking.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'HTML and CSS',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2024',
                'color' => 'accent-pink',
                'image' => asset('image/HTML CSS.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Databases',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2024',
                'color' => 'emerald-400',
                'image' => asset('image/database.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Java',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2022',
                'color' => 'orange-400',
                'image' => asset('image/java.jpg'),
                'verify_link' => '#'
            ],
        ];

        $tools = [
            (object)[
                'name' => 'Laravel',
                'category' => 'PHP Framework',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>',
                'description' => 'I specialize in building robust and scalable backend systems using Laravel. Expertise in Eloquent ORM, service providers, and architecting complex business logic.',
                'proficiencies' => ['Eloquent ORM', 'API Development', 'Middleware', 'Security'],
                'usage' => 'Backend Core & Enterprise logic',
                'color' => 'red-500',
                'link' => 'https://laravel.com'
            ],
            (object)[
                'name' => 'Tailwind CSS',
                'category' => 'Utility-first Framework',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>',
                'description' => 'I specialize in building highly responsive and visually stunning layouts using Tailwind CSS. Expertise in extending the theme and building multi-brand design systems.',
                'proficiencies' => ['Responsive Design', 'JIT Engine', 'Custom Configurations', 'CSS Variables'],
                'usage' => 'Rapid UI Development & Styling',
                'color' => 'accent-pink',
                'link' => 'https://tailwindcss.com'
            ],
            (object)[
                'name' => 'JavaScript',
                'category' => 'Programming Language',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10 2 6 6-6 6-6-6Z"/><path d="m14 10 6 6-6 6-6-6Z"/></svg>',
                'description' => 'Strong foundation in modern JavaScript, focusing on performance, asynchronous programming, and clean code principles.',
                'proficiencies' => ['Async/Await', 'ESM', 'DOM Manipulation', 'Functional Programming'],
                'usage' => 'Client-side Logic & Interactivity',
                'color' => 'yellow-500',
                'link' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript'
            ],
            (object)[
                'name' => 'Figma',
                'category' => 'Web Developer Tool',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"/><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"/><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"/><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v7H8.5A3.5 3.5 0 0 1 5 19.5z"/><path d="M8.5 16h3.5v7H8.5a3.5 3.5 0 1 1 0-7z"/></svg>',
                'description' => 'Expert in hi-fi prototyping, design systems, and vector editing. Bridging the gap between conceptual design and frontend implementation.',
                'proficiencies' => ['Prototyping', 'Auto-Layout', 'Design Systems', 'Variants'],
                'usage' => 'Prototyping & Visual Design',
                'color' => 'accent-purple',
                'link' => 'https://www.figma.com'
            ],
            (object)[
                'name' => 'HTML5 & Semantic Web',
                'category' => 'Frontend Foundation',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 18-5-6 5-6"/><path d="m17 6 5 6-5 6"/><path d="m13 6-2 12"/></svg>',
                'description' => 'Expertise in architecting accessible, SEO-optimized, and semantic structures for high-performance web applications.',
                'proficiencies' => ['Semantic HTML', 'Accessibility (A11y)', 'SEO Best Practices', 'Web Components'],
                'usage' => 'Structural Foundation',
                'color' => 'orange-500',
                'link' => 'https://developer.mozilla.org/en-US/docs/Web/HTML'
            ],
            (object)[
                'name' => 'MySQL',
                'category' => 'Relational Database',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><ellipse cx="12" cy="11" rx="5" ry="3"/><path d="M7 11v3.5l5 2.5 5-2.5V11"/></svg>',
                'description' => 'Proficient in designing efficient schemas, optimizing complex queries, and managing relational data integrity for scalable systems.',
                'proficiencies' => ['Schema Design', 'Query Optimization', 'Joins & Relationships', 'ACID Compliance'],
                'usage' => 'Data Persistence & Architecture',
                'color' => 'blue-400',
                'link' => 'https://www.mysql.com'
            ],
        ];

        $projects = [
            (object)[
                'title' => 'Social Welfare Distribution',
                'description' => 'An online platform for efficient management and transparent distribution of social welfare assistance. I am one of the developers (Back-end) for this reliable, cloud-based solution.',
                'image' => asset('image/social welfare.jpg'),
                'github_link' => 'https://github.com/KEmsss11/NEW-FINAL-16',
                'demo_id' => 'welfare-demo'
            ],
            (object)[
                'title' => 'Sellio: Android Marketplace',
                'description' => 'A blockchain-integrated marketplace for secure peer-to-peer transactions. Served as the System Analyst for this Capstone project, ensuring technical feasibility and architectural integrity.',
                'image' => asset('image/home.jpg'),
                'github_link' => 'https://github.com/uriel2203/Sellio-master',
                'demo_id' => 'sellio-demo'
            ],
            (object)[
                'title' => 'Global News Pulse',
                'description' => 'A dynamic news aggregation platform powered by the News API. Features almost real-time headline fetching with advanced filtering capabilities by category, language, and country.',
                'image' => asset('image/news_api.jpg'),
                'github_link' => 'https://github.com/uriel2203/News',
                'demo_id' => 'news-demo'
            ],
        ];

        return compact('profile', 'experiences', 'certificates', 'tools', 'projects');
    }

    public function index()
    {
        return view('welcome', $this->getData());
    }

    public function projects()
    {
        return view('projects', $this->getData());
    }
}
