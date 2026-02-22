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
            'image' => asset('image/uriell.jpg'),
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
                'color' => 'sky-500',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="m2 12 10 5 10-5"/></svg>'
            ],
            (object)[
                'role' => 'Enterprise Engineering',
                'company' => 'Full-Stack Developer Transition',
                'year' => '2027 - 2029',
                'description' => 'Scaling digital experiences through modular system design and cloud-native application development for complex industrial environments.',
                'color' => 'cyan-500',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'
            ],
            (object)[
                'role' => 'Professional Integration',
                'company' => 'Industrial Immersion & Internship',
                'year' => '2026 - 2027',
                'description' => 'Bridging technical expertise with commercial environments, focusing on cross-functional collaboration and agile development workflows.',
                'color' => 'emerald-500',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>'
            ],
            (object)[
                'role' => 'Technical Specialization',
                'company' => 'Advanced Project Development',
                'year' => '2024 - 2025',
                'description' => 'Developed high-stakes systems mastered security-first backend architecture and database logic.',
                'color' => 'orange-500',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>'
            ],
            (object)[
                'role' => 'Academic Foundation',
                'company' => 'BS in Information Technology',
                'year' => '2022 - 2026',
                'description' => 'Forging a strong foundation in networking, system operations, and technical logic at the University of Mindanao.',
                'color' => 'amber-500',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>'
            ]
        ];

        $certificates = [
            (object)[
                'title' => 'Cybersecurity',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2025',
                'color' => 'accent-secondary',
                'image' => asset('image/cybersecurity.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Network Security',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2025',
                'color' => 'accent-secondary',
                'image' => asset('image/networksecurity.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Networking',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2024',
                'color' => 'accent-secondary',
                'image' => asset('image/networking.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'HTML and CSS',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2024',
                'color' => 'accent-secondary',
                'image' => asset('image/HTML CSS.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Databases',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2024',
                'color' => 'accent-secondary',
                'image' => asset('image/database.jpg'),
                'verify_link' => '#'
            ],
            (object)[
                'title' => 'Java',
                'administered_by' => 'UNIVERSITY OF MINDANAO',
                'year' => '2022',
                'color' => 'accent-secondary',
                'image' => asset('image/java.jpg'),
                'verify_link' => '#'
            ],
        ];

        $tools = [
            (object)[
                'name' => 'Laravel',
                'category' => 'PHP Framework',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full"><path d="M21.2 13.9c-.3-.2-.5-.4-.7-.6-.1 0-.2-.1-.2-.1h-.1c-.1-.1-.1-.1-.2-.2-.2-.2-.4-.3-.7-.5l-.4-.2c-.3-.1-.5-.3-.8-.4l-.5-.2c-.3-.1-.5-.2-.8-.3l-.5-.2c-.3-.1-.5-.2-.8-.3s-.6-.2-.9-.3l-.5-.2c-.3-.1-.7-.2-1-.3l-.5-.1c-.3-.1-.7-.2-1-.2H11c-.3.1-.7.2-1 .2l-.5.1c-.3.1-.7.2-1 .3l-.5.2c-.3.1-.6.2-.9.3l-.5.2c-.3.1-.5.2-.8.3l-.5.2c-.3.1-.5.3-.8.4l-.4.2c-.3.2-.5.3-.7.5-.1.1-.1.1-.2.2h-.1c0 0-.1.1-.2.1-.2.2-.4.4-.7.6l-.3.3c-.2.2-.4.5-.6.7l-.2.3c-.2.2-.3.5-.5.7s-.3.5-.4.8l-.2.4c-.1.3-.2.5-.3.8-.1.3-.2.5-.3.8l-.1.5c-.1.3-.1.7-.2 1s-.1.7-.1 1c0 .4.1.7.1 1.1s.1.7.2 1.1l.1.5c.1.3.2.7.3 1s.2.7.4.8l.2.4c.1.3.3.5.4.8l.2.3c.2.2.3.5.5.7s.4.5.6.7l.3.3c.2.2.5.4.7.6s.4.3.7.5l.2.1h.1c.1.1.1.1.2.2.3.2.5.3.8.4l.4.2c.3.1.5.3.8.4l.5.2c.3.1.5.2.8.3l.5.2c.3.1.5.2.8.3l.9.3c.3.1.7.2 1 .3l.5.1c.3.1.7.2 1 .2h.1c.3 0 .7-.1 1-.2s.7-.1 1-.2L15.3 28c.3-.1.7-.2 1-.3l.5-.2c.3-.1.5-.2.8-.3s.5-.2.8-.3l.5-.2c.3-.1.5-.3.8-.4l.4-.2c.3-.2.5-.3.8-.4.1-.1.1-.1.2-.2h.1l.2-.1c.3-.2.5-.4.7-.5l.3-.3c.2-.2.4-.5.6-.7l.2-.3c.2-.2.3-.5.5-.7s.3-.5.4-.8l.2-.4c.1-.3.2-.5.3-.8s.2-.5.3-.8l.1-.5c.1-.3.1-.7.2-1l.1-1c0-.4-.1-.7-.1-1.1s-.1-.7-.2-1.1l-.1-.5c-.1-.3-.2-.7-.3-1s-.2-.7-.4-.8l-.2-.4c-.1-.3-.3-.5-.4-.8l-.3-.3c-.2-.2-.3-.5-.5-.7s-.3-.5-.6-.7L21.5 14.2c-.1-.1-.2-.2-.3-.3zm-9.2 14.1c-1.3-.4-2.2-.9-3-.9s-1.4.3-2.1.8c.7-.5 1.4-.8 2.1-.8s1.6.4 3 .9c1.3.4 2.2.9 3 .9s1.4-.3 2.1-.8c-.7.5-1.4.8-2.1.8s-1.8-.5-3-.9zm-.5-10l-.4-.4h7.5c.2 0 .4.2.4.4v7.4l-3.3-3.3V18l-4.2 4.2v-4.2zm-12.2.3c-2.3-2.3-2.3-6.1 0-8.5s6.1-2.3 8.5 0 2.3 6.1 0 8.5-6.1 2.3-8.5 0z"/></svg>',
                'description' => 'I specialize in building robust and scalable backend systems using Laravel. Expertise in Eloquent ORM, service providers, and architecting complex business logic.',
                'proficiencies' => ['Eloquent ORM', 'API Development', 'Middleware', 'Security'],
                'usage' => 'Backend Core & Enterprise logic',
                'color' => 'orange-500',
                'link' => 'https://laravel.com'
            ],
            (object)[
                'name' => 'Tailwind CSS',
                'category' => 'Utility-first Framework',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 1.8-4.2 1.8-.913.228-1.565-.89-2.288-1.624C9.663 13.382 8.302 12 5.328 12h.673z"/></svg>',
                'description' => 'I specialize in building highly responsive and visually stunning layouts using Tailwind CSS. Expertise in extending the theme and building multi-brand design systems.',
                'proficiencies' => ['Responsive Design', 'JIT Engine', 'Custom Configurations', 'CSS Variables'],
                'usage' => 'Rapid UI Development & Styling',
                'color' => 'cyan-400',
                'link' => 'https://tailwindcss.com'
            ],
            (object)[
                'name' => 'JavaScript',
                'category' => 'Programming Language',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full"><path d="M0 0h24v24H0V0zm22.034 18.268c-.175-1.095-.888-2.015-3.003-2.873-.738-.345-1.304-.555-1.304-.915 0-.345.255-.585.69-.585.45 0 .81.18 1.155.63l1.92-1.215c-.51-.885-1.38-1.5-2.61-1.68-1.62-.24-2.91.435-2.91 1.905 0 1.95 2.58 2.25 2.58 3.555 0 .435-.45.54-.764.54-.585 0-.9-.375-1.125-.795l-1.92 1.2c.495 1.17 1.335 1.845 2.82 1.845 2.025 0 3.09-1.02 2.88-2.61zM10.156 12h2.235v9h-2.235v-9zm-1.89 0h2.235v9h-2.235v-9z"/></svg>',
                'description' => 'Strong foundation in modern JavaScript, focusing on performance, asynchronous programming, and clean code principles.',
                'proficiencies' => ['Async/Await', 'ESM', 'DOM Manipulation', 'Functional Programming'],
                'usage' => 'Client-side Logic & Interactivity',
                'color' => 'yellow-400',
                'link' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript'
            ],
            (object)[
                'name' => 'Figma',
                'category' => 'Web Developer Tool',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full"><path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM8.5 6H12V9.5H8.5C7.39543 9.5 6.5 8.60457 6.5 7.5C6.5 6.39543 7.39543 5.5 8.5 5.5V6ZM12 9.5H15.5C16.6046 9.5 17.5 8.60457 17.5 7.5C17.5 6.39543 16.6046 5.5 15.5 5.5C14.3954 5.5 13.5 6.39543 13.5 7.5V9.5ZM17.5 12C17.5 13.1046 16.6046 14 15.5 14H12V10H15.5C16.6046 10 17.5 10.8954 17.5 12ZM12 14.5V18C12 19.1046 11.1046 20 10 20C8.89543 20 8 19.1046 8 18V14.5H12ZM8 14H11.5V10H8C6.89543 10 6 10.8954 6 12C6 13.1046 6.89543 14 8 14Z"/></svg>',
                'description' => 'Expert in hi-fi prototyping, design systems, and vector editing. Bridging the gap between conceptual design and frontend implementation.',
                'proficiencies' => ['Prototyping', 'Auto-Layout', 'Design Systems', 'Variants'],
                'usage' => 'Prototyping & Visual Design',
                'color' => 'sky-500',
                'link' => 'https://www.figma.com'
            ],
            (object)[
                'name' => 'HTML5',
                'category' => 'Frontend Foundation',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>',
                'description' => 'Expertise in architecting accessible, SEO-optimized, and semantic structures for high-performance web applications.',
                'proficiencies' => ['Semantic HTML', 'Accessibility (A11y)', 'SEO Best Practices', 'Web Components'],
                'usage' => 'Structural Foundation',
                'color' => 'orange-500',
                'link' => 'https://developer.mozilla.org/en-US/docs/Web/HTML'
            ],
            (object)[
                'name' => 'MySQL',
                'category' => 'Relational Database',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><ellipse cx="12" cy="11" rx="5" ry="3"/><path d="M7 11v3.5l5 2.5 5-2.5V11"/></svg>',
                'description' => 'Proficient in designing efficient schemas, optimizing complex queries, and managing relational data integrity for scalable systems.',
                'proficiencies' => ['Schema Design', 'Query Optimization', 'Joins & Relationships', 'ACID Compliance'],
                'usage' => 'Data Persistence & Architecture',
                'color' => 'blue-600',
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
            (object)[
                'title' => 'Happy Day',
                'description' => 'A delightful platform for personalized occasion-based greetings. Whether it\'s a birthday, holiday, or special milestone, this site helps you celebrate with the perfect visual message.',
                'image' => asset('image/homepage.jpg'),
                'github_link' => 'https://github.com/uriel2203/happyday',
                'live_link' => 'https://happyday-vert.vercel.app/',
                'demo_id' => 'happy-day-demo'
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
