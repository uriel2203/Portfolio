@php
    $profile = (object)[
        'name' => 'Uriel John G. <br> <span class="italic">Chavez.</span>',
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
            'role' => 'Senior IT Specialist',
            'company' => 'METROPOLIS SYSTEMS',
            'year' => '2022 - PRES',
            'description' => 'Leading the technical vision for high-scale IT infrastructures. Bridging the gap between stakeholders and technical teams.'
        ]
    ];

    $certificates = [
        (object)[
            'title' => 'Cybersecurity',
            'year' => '2025',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH',
            'image' => asset('image/cybersecurity.jpg')
        ],
        (object)[
            'title' => 'Network Security',
            'year' => '2025',
            'administered_by' => 'CISCO ACADEMY',
            'language' => 'ENGLISH',
            'image' => asset('image/networksecurity.jpg')
        ],
        (object)[
            'title' => 'Networking',
            'year' => '2024',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH',
            'image' => asset('image/networking.jpg')
        ],
        (object)[
            'title' => 'HTML and CSS',
            'year' => '2024',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH',
            'image' => asset('image/HTML CSS.jpg')
        ],
        (object)[
            'title' => 'Databases',
            'year' => '2024',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH',
            'image' => asset('image/database.jpg')
        ],
        (object)[
            'title' => 'Java',
            'year' => '2022',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'language' => 'ENGLISH',
            'image' => asset('image/java.jpg')
        ],
    ];

    $projects = [
        (object)[
            'title' => 'Core Systems Architecture',
            'subtitle' => 'Archive / 2024 • 01',
            'description' => 'A high-performance backend engine designed for large-scale enterprise data management.',
            'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc51?q=80&w=1000&auto=format&fit=crop'
        ],
        (object)[
            'title' => 'Cloud Workspace OS',
            'subtitle' => 'Archive / 2024 • 02',
            'description' => 'Redefining for digital workspace through modular system architecture.',
            'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1000&auto=format&fit=crop'
        ],
        (object)[
            'title' => 'Aether Protocol',
            'subtitle' => 'Archive / 2024 • 03',
            'description' => 'A decentralized mesh protocol for low-latency network recovery.',
            'image' => 'https://images.unsplash.com/photo-1639322537228-f710d846310a?q=80&w=1000&auto=format&fit=crop'
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uriel John G. Chavez | Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Instrument+Serif:ital@0;1&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

        <!-- Tailwind Play CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            serif: ['"Instrument Serif"', 'serif'],
                            sans: ['"Instrument Sans"', 'sans-serif'],
                            outfit: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            accent: '#0ef',
                            bg: '#1f242d',
                            'bg-lighter': '#323946',
                        },
                    }
                }
            }
        </script>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            :root {
                --accent: #0ef;
                --bg: #1f242d;
                --bg-lighter: #323946;
            }
            body { 
                background-color: var(--bg);
                color: #ffffff;
                font-family: 'Instrument Sans', sans-serif;
                overflow-x: hidden;
            }
            .font-outfit { font-family: 'Outfit', sans-serif; }
            .text-accent { color: var(--accent); }
            .bg-accent { background-color: var(--accent); }
            
            .glass-nav {
                background: rgba(31, 36, 45, 0.85);
                backdrop-filter: blur(15px);
                border-bottom: 2px solid rgba(0, 238, 255, 0.1);
            }

            .hex-frame {
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                background: var(--accent);
                position: relative;
                transition: 0.5s;
                filter: drop-shadow(0 0 15px rgba(0, 238, 255, 0.3));
            }
            .hex-frame::before {
                content: '';
                position: absolute;
                inset: 4px;
                background: var(--bg);
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                z-index: 1;
            }
            .hex-frame img {
                position: relative;
                z-index: 2;
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                width: calc(100% - 12px);
                height: calc(100% - 12px);
                margin: 6px;
                object-fit: cover;
                transition: 0.5s;
                filter: grayscale(20%);
            }
            .hex-frame:hover {
                box-shadow: 0 0 50px var(--accent);
                transform: scale(1.02);
            }
            .hex-frame:hover img {
                filter: grayscale(0%);
            }

            .btn-neon {
                background: var(--accent);
                box-shadow: 0 0 10px rgba(0, 238, 255, 0.5);
                transition: 0.5s;
                border: none;
                color: #000;
                font-weight: 700;
            }
            .btn-neon:hover {
                box-shadow: 0 0 30px var(--accent);
                filter: brightness(1.1);
            }
            
            .card-glass {
                background: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.05);
                transition: 0.3s;
            }
            .card-glass:hover {
                background: rgba(255, 255, 255, 0.05);
                border-color: var(--accent);
                transform: translateY(-5px);
            }


        </style>
    </head>
    <body class="antialiased selection:bg-accent selection:text-white">
        
        <!-- Navbar -->
        <header class="fixed top-0 left-0 w-full px-[9%] py-7 flex justify-between items-center z-50 glass-nav">
            <a href="#" class="text-2xl font-bold text-white cursor-default">Portfolio<span class="text-accent">.</span></a>
            
            <nav class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-lg font-medium text-white hover:text-accent transition">Home</a>
                <a href="#about" class="text-lg font-medium text-white hover:text-accent transition">About</a>
                <a href="#certificates" class="text-lg font-medium text-white hover:text-accent transition">Certificates</a>
                <a href="#projects" class="text-lg font-medium text-white hover:text-accent transition">Portfolio</a>
                <a href="#experience" class="text-lg font-medium text-white hover:text-accent transition">Journey</a>
                
                <div class="flex items-center gap-4 ml-4">
                    <a href="#contact" class="px-7 py-2 btn-neon rounded-full text-sm uppercase tracking-wider">
                        Contact
                    </a>
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <section id="home" class="relative min-h-screen flex items-center bg-bg px-[9%] py-10">
            <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 lg:items-center gap-12 pt-20">
                <div class="space-y-6">
                    <h3 class="text-3xl font-bold text-white">Hello, It's Me</h3>
                    <h1 class="text-6xl md:text-8xl font-bold leading-tight text-white mb-2">{!! $profile->name !!}</h1>
                    <h3 class="text-3xl font-bold text-white">And I'm a <span class="text-accent">{{ $profile->title }}</span></h3>
                    
                    <p class="text-lg text-white/70 max-w-xl leading-relaxed">
                        {{ $profile->bio }}
                    </p>

                    <div class="flex gap-4 mb-8">
                        @if($profile->facebook_link)
                        <a href="{{ $profile->facebook_link }}" target="_blank" class="w-11 h-11 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        @endif
                        @if($profile->instagram_link)
                        <a href="{{ $profile->instagram_link }}" target="_blank" class="w-11 h-11 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        @endif
                        @if($profile->linkedin_link)
                        <a href="{{ $profile->linkedin_link }}" target="_blank" class="w-11 h-11 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        @endif
                        @if($profile->github_link)
                        <a href="{{ $profile->github_link }}" target="_blank" class="w-11 h-11 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                        @endif
                    </div>

                    <a href="{{ $profile->cv_link ?? '#' }}" class="inline-block px-10 py-3 btn-neon rounded-full text-lg">Download CV</a>
                </div>
                
                <div class="flex justify-center lg:justify-end">
                    <div class="hex-frame w-80 h-80 md:w-[450px] md:h-[450px]">
                        <img src="{{ $profile->image ?? asset('image/uriell.jpg') }}" alt="{{ strip_tags($profile->name) }}">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="bg-bg-lighter py-32 px-[9%] border-y border-white/5">
            <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-2 lg:items-center gap-16 lg:gap-32">
                <div class="flex justify-center lg:justify-start order-2 lg:order-1">
                    <div class="hex-frame w-72 h-72 md:w-[400px] md:h-[400px]">
                        <img src="{{ $profile->image ?? asset('image/uriell.jpg') }}" alt="About {{ strip_tags($profile->name) }}">
                    </div>
                </div>

                <div class="space-y-8 order-1 lg:order-2">
                    <h2 class="text-6xl font-bold text-white mb-4">About <span class="text-accent">Me</span></h2>
                    <h3 class="text-2xl font-bold text-white tracking-wide">{{ $profile->title }} Specialist!</h3>
                    
                    <div class="space-y-6 text-white/70 text-lg leading-relaxed italic font-medium">
                        <p>{{ $profile->bio }}</p>
                    </div>
                    <a href="#" class="inline-block px-10 py-3 btn-neon rounded-full text-lg mt-4">Read More</a>
                </div>
            </div>
        </section>

        <!-- Credentials Section (Certificates) - SHORTER LAYOUT -->
        <section id="certificates" class="bg-bg py-32 px-[9%]">
            <div class="max-w-7xl mx-auto w-full text-center space-y-16">
                <h2 class="text-6xl font-bold text-white"><span class="text-white">ITS</span> <span class="text-accent">Certificates</span></h2>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    @foreach($certificates as $certificate)
                    <div onclick="zoomCertificate('{{ $certificate->image ?? asset('image/uriell.jpg') }}')" class="relative rounded-[1.5rem] overflow-hidden group border border-white/10 hover:border-accent transition duration-500 shadow-xl h-48 bg-white/[0.03] backdrop-blur-xl cursor-pointer">
                        <!-- Background Image -->
                        <img src="{{ $certificate->image ?? asset('image/uriell.jpg') }}" alt="{{ $certificate->title }}" class="w-full h-full object-contain filter grayscale-0 brightness-100 group-hover:brightness-[0.1] group-hover:blur-[2px] group-hover:scale-105 transition duration-700">
                        
                        <!-- Hover Overlay Details -->
                        <div class="absolute inset-0 flex flex-col justify-end p-4 opacity-0 group-hover:opacity-100 transition duration-500 bg-black/40 backdrop-blur-md">
                            <p class="text-[8px] uppercase tracking-[0.2em] text-accent font-black mb-1 drop-shadow-md">ITS Certificate</p>
                            <h3 class="text-sm font-serif italic font-bold text-white leading-tight mb-2 line-clamp-2 drop-shadow-md">{{ $certificate->title }}</h3>
                            
                            <div class="grid grid-cols-2 gap-2 mb-2 border-t border-accent/30 pt-2">
                                <div class="space-y-0.5">
                                    <p class="text-[6px] uppercase tracking-widest text-accent/80 font-bold">Provider</p>
                                    <p class="text-[8px] text-white font-bold uppercase truncate shadow-black drop-shadow-sm">{{ $certificate->administered_by ?? 'UNIVERSITY' }}</p>
                                </div>
                                <div class="space-y-0.5 text-right">
                                    <p class="text-[6px] uppercase tracking-widest text-accent/80 font-bold">Language</p>
                                    <p class="text-[8px] text-white font-bold uppercase truncate shadow-black drop-shadow-sm">{{ $certificate->language ?? 'ENGLISH' }}</p>
                                </div>
                            </div>
                            
                            <div class="flex justify-between items-center w-full">
                                <span class="text-[10px] text-accent font-black tracking-widest drop-shadow-md">{{ $certificate->year }}</span>
                                <div class="w-6 h-6 bg-accent/10 border border-accent/20 rounded-md flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-black transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>



        <!-- Projects Section -->
        <section id="projects" class="bg-bg-lighter py-32 px-[9%] border-y border-white/5">
            <div class="max-w-7xl mx-auto w-full text-center space-y-16">
                <h2 class="text-6xl font-bold text-white">Latest <span class="text-accent">Projects</span></h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                    <div class="relative rounded-[2.5rem] overflow-hidden group border border-white/10 hover:border-accent transition duration-500 shadow-2xl h-80 bg-bg">
                        <img src="{{ $project->image ?? asset('image/uriell.jpg') }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale brightness-50 group-hover:grayscale-0 group-hover:brightness-100 group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent flex flex-col justify-end p-10 transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
                            <p class="text-white/70 text-sm mb-6 line-clamp-2">{{ $project->description }}</p>
                            <div class="flex items-center justify-start">
                                <a href="#" class="w-11 h-11 bg-accent rounded-2xl flex items-center justify-center text-black hover:scale-110 transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Journey Section -->
        <section id="experience" class="bg-bg py-32 px-[9%] border-t border-white/5">
            <div class="max-w-7xl mx-auto w-full">
                <div class="grid lg:grid-cols-12 gap-16">
                    <!-- Left Sidebar Header -->
                    <div class="lg:col-span-4 space-y-8 lg:sticky lg:top-40 h-fit">
                        <p class="text-[11px] uppercase tracking-[0.5em] text-accent font-bold">The Journey</p>
                        <h2 class="text-6xl font-serif italic text-white leading-tight">Building the <br> future through <br> technology.</h2>
                    </div>

                    <!-- Experience List -->
                    <div class="lg:col-span-8 space-y-20">
                        @foreach($experiences as $experience)
                        <div class="grid md:grid-cols-12 gap-8 group">
                            <div class="md:col-span-3">
                                <p class="text-sm font-medium text-white/40 group-hover:text-accent transition duration-500 pt-2">{{ $experience->year }}</p>
                            </div>
                            <div class="md:col-span-9 space-y-4">
                                <div class="flex justify-between items-baseline">
                                    <h3 class="text-3xl font-bold text-white group-hover:text-accent transition duration-500">{{ $experience->role }}</h3>
                                    <span class="text-[10px] uppercase tracking-widest text-white/30 font-bold group-hover:text-white/60 transition duration-500">{{ $experience->company }}</span>
                                </div>
                                <div class="border-l border-white/10 pl-8 transition duration-500 group-hover:border-accent/30 py-2">
                                    <p class="text-white/50 leading-relaxed italic font-medium text-lg">
                                        {{ $experience->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-bg-lighter py-32 px-[9%] border-t border-white/5">
            <div class="max-w-7xl mx-auto w-full">
                <div class="grid lg:grid-cols-2 gap-24 items-start">
                    <div class="space-y-20">
                        <div class="space-y-8">
                            <p class="text-[11px] uppercase tracking-[0.5em] text-accent font-bold">Establish Contact</p>
                            <h2 class="text-7xl font-serif italic text-white leading-tight">Let's create the <br> extraordinary.</h2>
                        </div>

                        <div class="space-y-12">
                            <div class="space-y-4">
                                <p class="text-[10px] uppercase tracking-[0.5em] text-white/30 font-bold">The Studio</p>
                                <div class="space-y-2">
                                    <p class="text-xl text-white font-medium hover:text-accent transition cursor-pointer">{{ $profile->email }}</p>
                                    <p class="text-xl text-white font-medium">{{ $profile->phone }}</p>
                                    <p class="text-xl text-white font-medium">{{ $profile->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative pt-12">
                        <form action="#" class="space-y-16">
                            <div class="grid md:grid-cols-2 gap-16">
                                <div class="relative group">
                                    <input type="text" id="name" required class="w-full bg-bg-lighter border-b border-white/10 py-4 focus:outline-none focus:border-accent transition-colors peer text-white placeholder-transparent">
                                    <label for="name" class="absolute left-0 top-4 text-[11px] uppercase tracking-widest text-white/30 font-black transition-all peer-focus:-top-4 peer-focus:text-accent peer-[:not(:placeholder-shown)]:-top-4 peer-[:not(:placeholder-shown)]:text-accent">Full Name</label>
                                </div>
                                <div class="relative group">
                                    <input type="text" id="office" required class="w-full bg-bg-lighter border-b border-white/10 py-4 focus:outline-none focus:border-accent transition-colors peer text-white placeholder-transparent">
                                    <label for="office" class="absolute left-0 top-4 text-[11px] uppercase tracking-widest text-white/30 font-black transition-all peer-focus:-top-4 peer-focus:text-accent peer-[:not(:placeholder-shown)]:-top-4 peer-[:not(:placeholder-shown)]:text-accent">Digital Office</label>
                                </div>
                            </div>
                            <div class="relative group">
                                <textarea id="message" rows="1" required class="w-full bg-bg-lighter border-b border-white/10 py-4 focus:outline-none focus:border-accent transition-colors peer text-white placeholder-transparent resize-none overflow-hidden"></textarea>
                                <label for="message" class="absolute left-0 top-4 text-[11px] uppercase tracking-widest text-white/30 font-black transition-all peer-focus:-top-4 peer-focus:text-accent peer-[:not(:placeholder-shown)]:-top-4 peer-[:not(:placeholder-shown)]:text-accent">Brief Outline</label>
                            </div>

                            <div class="flex justify-end pt-8">
                                <button type="submit" class="group flex items-center gap-6 bg-white text-black px-12 py-5 rounded-full font-bold uppercase tracking-widest text-[11px] hover:bg-accent transition-all duration-500 overflow-hidden relative">
                                    <span class="relative z-10">Initiate Brief</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="relative z-10 transition-transform group-hover:translate-x-2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-bg py-10 px-[9%] border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 relative">
            <p class="text-white/50 text-sm">Copyright &copy; {{ date('Y') }} by Uriel Chavez | All Rights Reserved.</p>
            
            <a href="#home" class="w-11 h-11 bg-accent rounded-xl flex items-center justify-center text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
            </a>
        </footer>


        <!-- Certificate Zoom Modal -->
        <div id="certificateZoom" class="fixed inset-0 z-[150] hidden flex items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/95 backdrop-blur-xl" onclick="closeZoom()"></div>
            <div class="relative max-w-5xl w-full h-[85vh] flex items-center justify-center">
                <button onclick="closeZoom()" class="absolute -top-12 right-0 text-white/50 hover:text-white transition group flex items-center gap-2">
                    <span class="text-[10px] uppercase font-black tracking-widest">Close Esc</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
                <img id="zoomedImage" src="" alt="Certificate" class="max-w-full max-h-full object-contain shadow-2xl rounded-lg animate-zoom">
            </div>
        </div>

        <script>

            function zoomCertificate(imageUrl) {
                const modal = document.getElementById('certificateZoom');
                const image = document.getElementById('zoomedImage');
                image.src = imageUrl;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeZoom() {
                const modal = document.getElementById('certificateZoom');
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }

            // Close zoom on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') closeZoom();
            });
        </script>

        <style>
            .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.02);
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(0, 238, 255, 0.2);
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: rgba(0, 238, 255, 0.4);
            }
        </style>
    </body>
</html>
