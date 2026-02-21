@php
    // Data is now passed from PortfolioController
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
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <script>
            // Immediate theme check to prevent flash
            (function() {
                if (localStorage.getItem('theme') === 'light') {
                    document.documentElement.classList.add('light');
                }
            })();
        </script>

        <!-- Tailwind Play CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                            outfit: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            'dark-bg': '#0b011d',
                            'accent-purple': '#8b5cf6',
                            'accent-pink': '#ec4899',
                        },
                        backgroundImage: {
                            'primary-gradient': 'linear-gradient(135deg, #8b5cf6 0%, #ec4899 100%)',
                        }
                    }
                }
            }
        </script>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            @keyframes slide-down {
                from { transform: translateY(-100%); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            @keyframes slide-up {
                from { transform: translateY(100%); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            @keyframes zoom-in {
                from { transform: scale(0.9); opacity: 0; }
                to { transform: scale(1); opacity: 1; }
            }
            .animate-slide-down { animation: slide-down 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
            .animate-slide-up { animation: slide-up 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
            .animate-zoom { animation: zoom-in 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards; }

            :root {
                --primary-bg: #05010d;
                --accent-purple: #8b5cf6;
                --accent-pink: #ec4899;
                --card-bg: rgba(30, 30, 46, 0.4);
                --text-main: #ffffff;
                --text-muted: rgba(255, 255, 255, 0.4);
                --border-color: rgba(255, 255, 255, 0.05);
                --glass-nav: rgba(5, 1, 13, 0.7);
            }

            html.light {
                --primary-bg: #FAFAF9; /* Stone 50 */
                --card-bg: rgba(255, 255, 255, 0.8); /* Higher opacity for better contrast */
                --text-main: #0a0a0a; /* Almost Black */
                --text-muted: #525252; /* Neutral 600 - Readable gray */
                --border-color: rgba(0, 0, 0, 0.15); /* Visible separators */
                --glass-nav: rgba(250, 250, 249, 0.95);
            }

            body { 
                background-color: var(--primary-bg);
                color: var(--text-main);
                font-family: 'Outfit', sans-serif;
                overflow-x: hidden;
                background-image: 
                    radial-gradient(circle at 10% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 40%),
                    radial-gradient(circle at 90% 80%, rgba(236, 72, 153, 0.1) 0%, transparent 40%);
                background-attachment: fixed;
                transition: background-color 0.5s cubic-bezier(0.4, 0, 0.2, 1), color 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .text-gradient {
                background: linear-gradient(to right, var(--accent-purple), var(--accent-pink));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .bg-accent-gradient {
                background: linear-gradient(135deg, var(--accent-purple), var(--accent-pink));
            }

            .glass-nav {
                background: var(--glass-nav);
                backdrop-filter: blur(20px);
                border-bottom: 1px solid var(--border-color);
                transition: 0.5s;
            }

            .btn-glow-purple {
                border: 1px solid rgba(139, 92, 246, 0.5);
                box-shadow: 0 0 15px rgba(139, 92, 246, 0.2);
                transition: 0.3s;
            }
            .btn-glow-purple:hover {
                box-shadow: 0 0 25px rgba(139, 92, 246, 0.4);
                background: rgba(139, 92, 246, 0.1);
            }

            .btn-glow-pink {
                border: 1px solid rgba(236, 72, 153, 0.5);
                box-shadow: 0 0 15px rgba(236, 72, 153, 0.2);
                transition: 0.3s;
            }
            .btn-glow-pink:hover {
                box-shadow: 0 0 25px rgba(236, 72, 153, 0.4);
                background: rgba(236, 72, 153, 0.1);
            }

            /* Typing animation cursor */
            .typing-cursor::after {
                content: '|';
                animation: blink 1s step-end infinite;
            }
            @keyframes blink {
                from, to { color: transparent }
                50% { color: var(--accent-pink) }
            }

            .animate-pulse-subtle {
                animation: pulse-subtle 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            }
            @keyframes pulse-subtle {
                0%, 100% { opacity: 1; transform: scale(1); }
                50% { opacity: 0.8; transform: scale(1.05); }
            }

            @keyframes pulse-green {
                0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.4); }
                70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
                100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
            }
            .animate-pulse-green {
                animation: pulse-green 2s infinite;
            }

            @keyframes zoom {
                from { transform: scale(0.9); opacity: 0; }
                to { transform: scale(1); opacity: 1; }
            }
            .animate-zoom { animation: zoom 0.3s ease-out forwards; }

            @keyframes float {
                0%, 100% { transform: translateY(0) translateX(0) rotate(0); }
                33% { transform: translateY(-10px) translateX(5px) rotate(1deg); }
                66% { transform: translateY(5px) translateX(-5px) rotate(-1deg); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }

            /* Fix for select options visibility */
            select option {
                background-color: #1a0b2e; /* Solid dark color for options */
                color: #ffffff;
            }
            @keyframes contentFade {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-content-fade {
                animation: contentFade 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            }
        </style>


        </style>
    </head>
    <body class="antialiased selection:bg-accent selection:text-white">
        
        <!-- Navbar -->
        <header class="fixed top-0 left-0 w-full px-6 md:px-[9%] py-6 flex justify-between items-center z-50 glass-nav">
            <div class="flex flex-col leading-none">
                <a href="#" class="text-xl font-bold text-[var(--text-main)] flex items-center gap-1">
                    <span class="text-accent-pink">&lt;</span>JohnDev<span class="text-accent-pink">/&gt;</span>
                </a>
                <span class="text-[8px] tracking-[0.3em] font-bold text-[var(--text-muted)] mt-1 uppercase">BS in Information Technology</span>
            </div>
            
            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8 text-[var(--text-main)]">
                <a href="#home" class="text-sm font-medium text-[var(--text-muted)] hover:text-[var(--text-main)] transition py-2 px-4 rounded-full bg-accent-purple/10 border border-accent-purple/20">Home</a>
                <a href="#about" class="text-sm font-medium text-[var(--text-muted)] hover:text-[var(--text-main)] transition">About</a>
                <a href="#edu" class="text-sm font-medium text-[var(--text-muted)] hover:text-[var(--text-main)] transition">Education</a>
                <a href="#skills" class="text-sm font-medium text-[var(--text-muted)] hover:text-[var(--text-main)] transition">Skills</a>
                <a href="#projects" class="text-sm font-medium text-[var(--text-muted)] hover:text-[var(--text-main)] transition">Projects</a>
                <a href="#certs" class="text-sm font-medium text-[var(--text-muted)] hover:text-[var(--text-main)] transition">Certificates</a>
                
                <div class="flex items-center gap-6 ml-4">
                    <button id="theme-toggle" class="text-[var(--text-main)] hover:text-accent-pink transition w-10 h-10 flex items-center justify-center rounded-xl bg-[var(--card-bg)] border border-[var(--border-color)]" onclick="toggleTheme()">
                        <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line></svg>
                    </button>
                    <a href="#contact" class="hidden md:inline-flex px-6 py-2 border border-accent-purple rounded-full text-sm font-bold text-accent-purple hover:bg-accent-purple hover:text-white transition shadow-[0_0_15px_rgba(139,92,246,0.3)]">
                        Contact Me
                    </a>
                </div>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center gap-4">
                <button id="theme-toggle-mobile" class="text-[var(--text-main)] hover:text-accent-pink transition w-10 h-10 flex items-center justify-center rounded-xl bg-[var(--card-bg)] border border-[var(--border-color)]" onclick="toggleTheme()">
                    <svg id="theme-icon-mobile" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line></svg>
                </button>
                <button id="menu-btn" class="text-[var(--text-main)] hover:text-accent-pink transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>

            <!-- Mobile Nav Container -->
            <div id="mobile-menu" class="fixed top-[88px] left-0 w-full bg-[var(--primary-bg)]/95 backdrop-blur-xl border-b border-[var(--border-color)] flex flex-col items-center py-10 gap-6 transform -translate-y-full opacity-0 pointer-events-none transition-all duration-300 md:hidden z-40 text-[var(--text-main)]">
                <a href="#home" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Home</a>
                <a href="#about" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">About</a>
                <a href="#edu" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Education</a>
                <a href="#skills" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Skills</a>
                <a href="#projects" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Projects</a>
                <a href="#certs" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Certificates</a>
                <a href="#contact" class="px-8 py-3 bg-accent-purple rounded-full text-sm font-bold shadow-lg text-white" onclick="toggleMenu()">Contact Me</a>
            </div>
        </header>

        <script>
            function toggleMenu() {
                const menu = document.getElementById('mobile-menu');
                const isOpen = !menu.classList.contains('-translate-y-full');
                
                if (isOpen) {
                    menu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
                } else {
                    menu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
                }
            }

            document.getElementById('menu-btn').addEventListener('click', toggleMenu);
        </script>

        <!-- Hero Section -->
        <section id="home" class="relative min-h-screen flex items-center px-6 md:px-[9%] py-12 md:py-20 overflow-hidden">
            <!-- Background Nebula Effect -->
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-accent-purple/10 to-transparent pointer-events-none"></div>

            <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-[1.1fr_0.9fr] items-center gap-8 md:gap-12 relative z-10">
                <div class="space-y-10 order-2 lg:order-1 relative z-10 flex flex-col items-center text-center lg:items-start lg:text-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-xl bg-[var(--card-bg)] border border-[var(--border-color)] animate-fade-in w-fit">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-purple opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-accent-purple"></span>
                        </span>
                        <span class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-[0.2em]">Available for Freelance</span>
                    </div>

                    <!-- Main Heading -->
                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-[var(--text-main)] leading-[0.9] tracking-tighter">
                            <span class="block">Creative Solutions</span>
                            <span class="block text-gradient">Digital World</span>
                        </h1>
                        
                        <div class="text-lg md:text-xl font-medium text-[var(--text-muted)]">
                            I am a <span id="typing-text" class="text-accent-purple border-r-2 border-accent-purple pr-1"></span>
                        </div>

                        <p class="text-sm md:text-base text-[var(--text-muted)] max-w-md leading-relaxed mt-4">
                            Transforming complex challenges into elegant technical solutions. Specializing in high-performance system architecture and modern web experiences.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6">
                        <a href="#projects" class="px-10 py-5 bg-accent-purple text-white rounded-2xl font-black text-xs uppercase tracking-widest hover:scale-105 transition-all duration-300 shadow-xl shadow-accent-purple/20 active:scale-95 flex items-center gap-3">
                            View Portfolio
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="translate-x-0 group-hover:translate-x-1 transition"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="#about" class="px-10 py-5 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl font-black text-xs text-[var(--text-main)] uppercase tracking-widest hover:bg-[var(--border-color)] transition-all duration-300 flex items-center gap-3">
                            About Me
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-[var(--text-muted)]"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </a>
                    </div>

                    
                </div>
                
                <div class="relative order-1 lg:order-2">
                    <div class="relative rounded-[3rem] overflow-hidden border border-[var(--border-color)] group shadow-2xl max-w-[80%] mx-auto lg:ml-auto">
                        <img src="{{ $profile->image }}" alt="John" class="w-full aspect-[4/5] object-cover transition duration-1000 group-hover:scale-105">
                    </div>

                    <!-- Floating Terminal Card -->
                    <div class="absolute -bottom-10 -left-4 md:-left-20 w-64 md:w-72 p-4 md:p-6 rounded-2xl bg-[#1e1e2e]/90 backdrop-blur-xl border border-white/5 shadow-2xl animate-float lg:block hidden" style="animation-delay: 0.5s;">
                        <div class="flex gap-2 mb-4">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                        </div>
                        <div class="space-y-2 font-mono text-xs">
                            <p class="text-blue-400">const <span class="text-white">developer</span> = {</p>
                            <p class="pl-4 text-white/50">name: <span class="text-accent-pink">'Uriel John'</span>,</p>
                            <p class="pl-4 text-white/50">passion: <span class="text-accent-pink">'Web Development'</span></p>
                            <p class="text-blue-400">};</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="about" class="py-16 md:py-32 px-6 md:px-[9%] border-y border-[var(--border-color)] relative overflow-hidden">
            <div class="max-w-7xl mx-auto w-full relative z-10">
                <div class="text-center space-y-2 mb-16">
                    <p class="text-accent-purple text-xs font-bold tracking-[0.4em] uppercase">Overview</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-[var(--text-main)]">About The <span class="text-gradient">Developer</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Who Am I Card -->
                    <div class="md:col-span-2 md:row-span-2 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 hover:border-accent-purple/30 transition duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-accent-purple/20 flex items-center justify-center text-accent-purple">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                            <h3 class="text-xl font-bold text-[var(--text-main)]">Who Am I?</h3>
                        </div>
                        <div class="space-y-4 text-[var(--text-muted)] leading-relaxed text-sm md:text-base">
                          <p class="text-justify">
                            Hi! I'm <span class="text-[var(--text-main)] font-bold">Uriel John</span>, a dedicated <span class="text-accent-pink font-bold">Web Developer</span> based in the Philippines. 
                            I build modern web applications that are fast, secure, and easy to use, focusing on systems that work smoothly and give users a good experience.
                            </p>

                            <p class="text-justify">
                                I have strong skills in both backend and frontend development. I create secure APIs, manage databases, design responsive layouts, and improve performance to make reliable and scalable web solutions. 
                            </p> 

                            <p class="text-justify">
                                I continue to learn and improve my skills to become a better developer. I enjoy solving real-world problems through code, efficient system design, and simple user experiences, aiming to build web applications that are useful, maintainable, and impactful. 
                            </p>
                        </div>
                    </div>

                    <!-- Experience Stats Card -->
                    <div class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 flex flex-col justify-center items-center text-center hover:border-accent-purple/30 transition duration-500">
                        
                        <div class="space-y-2">
                            <h4 class="text-5xl font-bold text-[var(--text-main)]">4</h4>
                            <p class="text-[10px] tracking-[0.2em] font-black text-[var(--text-muted)] uppercase">Projects Done</p>
                        </div>
                    </div>

                    <!-- Current Focus Card -->
                    <div class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 hover:border-accent-pink/30 transition duration-500">
                        <h3 class="text-lg font-bold text-[var(--text-main)] mb-4">Current Focus</h3>
                        <p class="text-[var(--text-muted)] text-sm mb-6">Deep diving into <span class="text-accent-purple">Web3</span> & <span class="text-accent-pink">AI Integration</span>.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-accent-purple/10 border border-accent-purple/20 rounded-md text-[10px] font-bold text-accent-purple">Laravel</span>
                            <span class="px-3 py-1 bg-accent-pink/10 border border-accent-pink/20 rounded-md text-[10px] font-bold text-accent-pink">Cloud</span>
                        </div>
                    </div>

                    <!-- Base Station Card -->
                    <div class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 flex items-center justify-between hover:border-green-500/30 transition duration-500">
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-[var(--text-main)]">Base Station</h3>
                            <p class="text-[var(--text-muted)] text-[10px] font-bold uppercase tracking-widest">Davao City, PH (GMT+8)</p>
                            <p class="local-time text-xs font-bold text-[var(--text-main)]"></p>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <div class="flex items-center gap-2">
                                <span class="relative flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                </span>
                                <span class="text-[10px] font-bold text-green-500 uppercase tracking-widest">Open for Work</span>
                            </div>
                            <div class="text-[var(--text-muted)] opacity-20">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Core Stack Card -->
                    <div class="md:col-span-2 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 hover:border-accent-purple/30 transition duration-500">
                        <h3 class="text-lg font-bold text-[var(--text-main)] mb-6">Core Stack</h3>
                        <div class="flex flex-wrap items-center gap-8">
                            <div class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-xl bg-[var(--border-color)] flex items-center justify-center group-hover:bg-accent-purple group-hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3v12"></path><path d="M18 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path><path d="M6 21a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path><path d="M15 6a9 9 0 0 0-9 9"></path></svg>
                                </div>
                                <span class="text-xs font-bold text-[var(--text-muted)] uppercase tracking-widest">PHP</span>
                            </div>
                            <div class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-xl bg-[var(--border-color)] flex items-center justify-center group-hover:bg-accent-pink group-hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                </div>
                                <span class="text-xs font-bold text-[var(--text-muted)] uppercase tracking-widest">Tailwind</span>
                            </div>
                            <div class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-xl bg-[var(--border-color)] flex items-center justify-center group-hover:bg-blue-400 group-hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                                </div>
                                <span class="text-xs font-bold text-[var(--text-muted)] uppercase tracking-widest">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="edu" class="py-16 md:py-32 px-6 md:px-[9%] border-t border-[var(--border-color)]">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="text-center space-y-2">
                    <p class="text-accent-purple text-xs font-bold tracking-[0.4em] uppercase">The Roadmap</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-[var(--text-main)]">Strategic <span class="text-gradient">Evolution</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                    @foreach($experiences as $exp)
                    <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2.5rem] p-10 hover:border-{{ $exp->color }}/50 hover:shadow-[0_0_50px_rgba(139,92,246,0.1)] transition-all duration-700 overflow-hidden">
                        <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-{{ $exp->color }}/5 rounded-full blur-3xl group-hover:bg-{{ $exp->color }}/10 transition-colors duration-700"></div>
                        
                        <div class="relative z-10 space-y-10">
                            <div class="flex justify-between items-start">
                                <span class="inline-block px-5 py-2 rounded-2xl bg-{{ $exp->color }}/10 border border-{{ $exp->color }}/10 text-[10px] font-black text-{{ $exp->color }} uppercase tracking-[0.3em]">{{ $exp->year }}</span>
                                <div class="w-14 h-14 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl flex items-center justify-center text-[var(--text-muted)] group-hover:text-{{ $exp->color }} group-hover:bg-{{ $exp->color }}/10 transition-all duration-700">
                                    {!! $exp->icon !!}
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="space-y-1">
                                    <h3 class="text-2xl font-bold text-[var(--text-main)] group-hover:text-{{ $exp->color }} transition duration-500">{{ $exp->role }}</h3>
                                    <p class="text-[var(--text-muted)] text-xs font-bold uppercase tracking-[0.2em]">{{ $exp->company }}</p>
                                </div>
                                <p class="text-[var(--text-muted)] text-sm leading-relaxed">{{ $exp->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Certificates Section -->
        <section id="certs" class="py-16 md:py-32 px-6 md:px-[9%] border-t border-[var(--border-color)] overflow-hidden">
            <div class="max-w-7xl mx-auto w-full space-y-20">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                    <div class="space-y-4">
                        <p class="text-accent-pink text-xs font-bold tracking-[0.5em] uppercase">Verified Expertise</p>
                        <h2 class="text-4xl md:text-6xl font-black text-[var(--text-main)] leading-none">The <span class="text-gradient">Vault</span></h2>
                    </div>
                    <p class="text-[var(--text-muted)] text-sm max-w-xs font-medium leading-relaxed">A collection of industry-recognized certifications and technical validations.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($certificates as $cert)
                    <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-4 hover:border-{{ $cert->color }}/30 transition-all duration-700 cursor-pointer overflow-hidden" onclick="openZoom('{{ $cert->image }}', '{{ $cert->title }}')">
                        <!-- Decorative Background Gradient -->
                        <div class="absolute inset-0 bg-{{ $cert->color }}/0 group-hover:bg-{{ $cert->color }}/5 transition-colors duration-700"></div>
                        
                        <div class="relative space-y-4">
                            <!-- Certificate Image Container -->
                            <div class="relative aspect-[4/3] rounded-[1.5rem] overflow-hidden border border-[var(--border-color)] group-hover:border-{{ $cert->color }}/20 transition-all duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                                <img src="{{ $cert->image }}" alt="{{ $cert->title }}" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition duration-1000">
                                
                                <div class="absolute inset-0 flex items-center justify-center z-20 opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-700">
                                    <div class="w-14 h-14 rounded-full bg-white/20 backdrop-blur-xl flex items-center justify-center text-white scale-90 group-hover:scale-100 hover:bg-{{ $cert->color }} transition duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6"></path><path d="M10 14L21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="px-4 pb-4 space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-[10px] font-black text-{{ $cert->color }} uppercase tracking-[0.2em]">{{ $cert->year }}</span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-{{ $cert->color }}/40 group-hover:scale-150 transition-transform duration-700 shadow-[0_0_10px_{{ $cert->color }}]"></span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[var(--text-main)] group-hover:text-{{ $cert->color }} transition duration-500 line-clamp-1">{{ $cert->title }}</h3>
                                    <p class="text-[var(--text-muted)] text-[8px] font-bold uppercase tracking-widest">{{ $cert->administered_by }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="skills" class="py-16 md:py-32 px-6 md:px-[9%] border-t border-[var(--border-color)]">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="text-center space-y-2">
                    <p class="text-accent-pink text-xs font-bold tracking-[0.4em] uppercase">Tech Stack</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-[var(--text-main)]">Tools & <span class="text-gradient">Workflow</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($tools as $tool)
                    <div onclick="openToolModal({{ json_encode($tool) }})" class="group bg-[var(--card-bg)] border border-[var(--border-color)] p-8 rounded-3xl flex items-center gap-6 hover:border-{{ $tool->color }}/30 transition-all duration-300 cursor-pointer">
                        <div class="w-14 h-14 rounded-2xl bg-{{ $tool->color }}/10 flex items-center justify-center text-{{ $tool->color }} group-hover:bg-{{ $tool->color }} group-hover:text-{{ $tool->color == 'yellow-500' ? 'black' : 'white' }} transition-all duration-300">
                            {!! $tool->icon !!}
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-bold text-lg text-[var(--text-main)]">{{ $tool->name }}</h3>
                            <p class="text-[var(--text-muted)] text-xs font-bold uppercase tracking-wider">{{ $tool->category }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section (Selected Works) -->
        <section id="projects" class="py-16 md:py-32 px-6 md:px-[9%] border-t border-[var(--border-color)]">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                    <div class="space-y-2">
                        <p class="text-accent-purple text-xs font-bold tracking-[0.4em] uppercase">Portfolio</p>
                        <h2 class="text-4xl md:text-5xl font-bold text-[var(--text-main)]">Selected <span class="text-gradient">Works</span></h2>
                    </div>
                    <a href="{{ route('projects') }}" class="text-sm font-bold text-[var(--text-muted)] hover:text-[var(--text-main)] transition flex items-center gap-2 group">
                        View All
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    @foreach($projects as $project)
                    <div class="group bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[3rem] overflow-hidden hover:border-accent-purple/30 transition-all duration-700 hover:shadow-[0_30px_100px_rgba(0,0,0,0.3)]">
                        <!-- Image Section -->
                        <div class="relative aspect-[16/10] overflow-hidden m-4 rounded-[2rem]">
                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-105 group-hover:scale-110 transition duration-1000">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-10 pt-4 space-y-8">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-3xl font-black text-[var(--text-main)] group-hover:text-accent-purple transition-colors duration-500 tracking-tight">{{ $project->title }}</h3>
                                    <div class="h-px flex-1 mx-6 bg-[var(--border-color)]"></div>
                                    <span class="text-[10px] font-black text-accent-pink uppercase tracking-widest">Featured</span>
                                </div>
                                <p class="text-[var(--text-muted)] text-[13px] leading-relaxed font-medium uppercase tracking-wider">
                                    {{ $project->description }}
                                </p>
                            </div>
                            
                            <div class="flex items-center gap-6">
                                @if(isset($project->demo_id))
                                <button onclick="openProjectDemo('{{ $project->demo_id }}')" class="px-8 py-3.5 bg-[var(--primary-bg)] border border-accent-purple/30 text-[var(--text-main)] rounded-2xl text-[10px] font-black uppercase tracking-widest hover:scale-105 hover:border-accent-purple hover:shadow-[0_0_30px_rgba(139,92,246,0.3)] transition-all duration-300">
                                    View Project Case Study
                                </button>
                                @endif
                                
                                <div class="flex items-center gap-4">
                                    @if(isset($project->github_link) && $project->github_link !== '#')
                                    <a href="{{ $project->github_link }}" target="_blank" class="w-12 h-12 rounded-2xl bg-[var(--text-main)]/5 border border-[var(--border-color)] flex items-center justify-center text-[var(--text-main)] hover:bg-[var(--text-main)] hover:text-[var(--primary-bg)] group/link transition-all" title="View Source on GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="group-hover/link:scale-110 group-hover/link:rotate-12 transition-all"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                                    </a>
                                    @elseif(isset($project->github_link))
                                    <div class="w-12 h-12 rounded-2xl bg-[var(--text-main)]/5 border border-[var(--border-color)] flex items-center justify-center text-[var(--text-muted)] cursor-not-allowed" title="Private Repository">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Contact Section -->
        <section id="contact" class="py-16 md:py-32 px-6 md:px-[9%] border-t border-[var(--border-color)] overflow-hidden">
            <div class="max-w-7xl mx-auto w-full space-y-20">
                <div class="text-center space-y-4">
                    <p class="text-accent-purple text-xs font-bold tracking-[0.5em] uppercase">Get In Touch</p>
                    <h2 class="text-5xl md:text-7xl font-black text-[var(--text-main)] leading-tight">Let's <span class="text-gradient">Connect</span></h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    <!-- Left: Info Cards -->
                    <div class="lg:col-span-4 flex flex-col gap-4 h-full">
                        <!-- Email Card -->
                        <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-6 hover:border-accent-purple/50 transition-all duration-500 overflow-hidden flex-1 flex flex-col justify-center">
                            <div class="relative z-10 space-y-4">
                                <div class="w-10 h-10 rounded-xl bg-accent-purple/10 flex items-center justify-center text-accent-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-[0.2em]">EMAIL ADDRESS</p>
                                    <div class="flex items-center justify-between gap-4">
                                        <h4 id="email-address" class="text-sm font-bold text-[var(--text-main)] truncate">{{ $profile->email }}</h4>
                                        <button onclick="copyEmail()" class="text-[var(--text-muted)] hover:text-[var(--text-main)] transition group/copy">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/copy:scale-110 transition"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Card -->
                        <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-6 hover:border-accent-pink/50 transition-all duration-500 overflow-hidden flex-1 flex flex-col justify-center">
                            <div class="relative z-10 space-y-4">
                                <div class="w-10 h-10 rounded-xl bg-accent-pink/10 flex items-center justify-center text-accent-pink">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-[0.2em]">BASE LOCATION</p>
                                    <h4 class="text-lg font-bold text-[var(--text-main)]">{{ $profile->address }}</h4>
                                </div>
                            </div>
                        </div>

                        <!-- University Card -->
                        <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-6 hover:border-accent-purple/50 transition-all duration-500 overflow-hidden flex-1 flex flex-col justify-center">
                            <div class="relative z-10 space-y-4">
                                <div class="w-10 h-10 rounded-xl bg-accent-purple/10 flex items-center justify-center text-accent-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-[0.2em]">UNIVERSITY</p>
                                    <h4 class="text-lg font-bold text-[var(--text-main)]">University of Mindanao</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Separator -->
                        <div class="h-px w-full bg-gradient-to-r from-transparent via-[var(--border-color)] to-transparent my-2"></div>

                        <!-- Social Cards Row -->
                        <div class="flex flex-wrap gap-4">
                            <a href="https://www.linkedin.com/in/urieljohn-chavez-b9a010398/" target="_blank" class="group flex-1 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl p-4 flex items-center justify-center hover:border-blue-400/50 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[var(--text-muted)] group-hover:text-blue-400 transition-colors duration-500"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                            <a href="https://github.com/uriel2203" target="_blank" class="group flex-1 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl p-4 flex items-center justify-center hover:border-white/30 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[var(--text-muted)] group-hover:text-white transition-colors duration-500"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                            </a>
                            <a href="https://www.facebook.com/urieljohn.chavez.9" target="_blank" class="group flex-1 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl p-4 flex items-center justify-center hover:border-blue-600/50 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[var(--text-muted)] group-hover:text-blue-600 transition-colors duration-500"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </a>
                            <a href="https://www.instagram.com/urieljohn_c/" target="_blank" class="group flex-1 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl p-4 flex items-center justify-center hover:border-accent-pink/50 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[var(--text-muted)] group-hover:text-accent-pink transition-colors duration-500"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Contact Form -->
                    <div class="lg:col-span-8 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[3rem] p-6 md:p-8 space-y-10 relative overflow-hidden backdrop-blur-xl">
                        <div class="absolute top-0 right-0 p-8 flex gap-2">
                             <div class="w-2.5 h-2.5 rounded-full bg-red-500/50"></div>
                             <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/50"></div>
                             <div class="w-2.5 h-2.5 rounded-full bg-green-500/50"></div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-3xl font-black tracking-tight text-[var(--text-main)]">Send Message<span class="text-accent-purple animate-pulse">_</span></h3>
                        </div>

                        <form id="contact-form" action="https://formsubmit.co/ajax/urieljohnchavez@gmail.com" method="POST" class="grid md:grid-cols-2 gap-6">
                            <!-- FormSubmit Configuration -->
                            <input type="hidden" name="_subject" value="New Portfolio Message!">
                            <input type="hidden" name="_template" value="table">
                            <input type="hidden" name="_captcha" value="false">

                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-widest ml-2">Name</label>
                                <input type="text" name="name" placeholder="John Doe" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] text-sm focus:outline-none focus:border-accent-purple/50 focus:bg-accent-purple/5 transition duration-300 placeholder:opacity-50">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-widest ml-2">Email Address</label>
                                <input type="email" name="email" placeholder="john@example.com" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] text-sm focus:outline-none focus:border-accent-purple/50 focus:bg-accent-purple/5 transition duration-300 placeholder:opacity-50">
                            </div>
                            <div class="md:col-span-2 space-y-2">
                                <label class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-widest ml-2">Select Project Type</label>
                                <div class="relative">
                                    <select name="category" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] text-sm focus:outline-none focus:border-accent-purple/50 focus:bg-accent-purple/5 transition duration-300 appearance-none">
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="web">Web Development</option>
                                        <option value="infrastructure">IT Infrastructure</option>
                                        <option value="consulting">Consulting</option>
                                    </select>
                                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-[var(--text-muted)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-2 space-y-2">
                                <label class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-widest ml-2">Message</label>
                                <textarea name="message" placeholder="Tell me about your project..." rows="5" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] text-sm focus:outline-none focus:border-accent-purple/50 focus:bg-accent-purple/5 transition duration-300 placeholder:opacity-50 resize-none"></textarea>
                            </div>
                            <div class="md:col-span-2 pt-4">
                                <button type="submit" class="w-full lg:w-fit group h-14 px-8 bg-accent-purple hover:bg-accent-purple/90 text-white rounded-xl font-black text-xs uppercase tracking-widest hover:scale-[1.02] active:scale-95 transition-all duration-300 flex items-center justify-center gap-3 shadow-[0_0_20px_rgba(139,92,246,0.3)] hover:shadow-[0_0_30px_rgba(139,92,246,0.5)]">
                                    Send Message
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="translate-x-0 group-hover:translate-x-1 transition"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-32 px-6 overflow-hidden relative">
            <div class="absolute inset-0 bg-gradient-to-b from-accent-purple/5 to-transparent"></div>
            <div class="max-w-7xl mx-auto w-full relative z-10 text-center space-y-10">
                <p class="text-[var(--text-muted)] text-[10px] font-bold tracking-[0.5em] uppercase">What's Next?</p>
                <div class="space-y-4">
                    <h2 class="text-5xl md:text-8xl font-black text-[var(--text-main)] leading-tight">Let's build something <br> <span class="text-gradient">legendary together.</span></h2>
                </div>
                <div class="pt-6">
                    <a href="mailto:{{ $profile->email }}" class="group relative inline-flex items-center gap-4 text-xl md:text-3xl font-bold text-[var(--text-main)] hover:text-accent-pink transition-colors duration-500">
                        {{ $profile->email }}
                        <div class="w-10 h-10 rounded-full bg-[var(--card-bg)] flex items-center justify-center text-[var(--text-muted)] group-hover:text-white group-hover:bg-accent-pink transition-all duration-500">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                        <div class="absolute -bottom-2 left-0 w-full h-px bg-[var(--border-color)] group-hover:bg-accent-pink transition-colors duration-500"></div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Redesigned Footer -->
        <footer class="py-16 px-[9%] border-t border-[var(--border-color)]">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="flex flex-col md:flex-row justify-between items-center gap-12">
                    <!-- Brand -->
                    <div class="flex flex-col items-center md:items-start leading-none">
                        <a href="#" class="text-2xl font-bold text-[var(--text-main)] flex items-center gap-1">
                            <span class="text-accent-pink">&lt;</span>JohnDev<span class="text-accent-pink">/&gt;</span>
                        </a>
                        <p class="text-[8px] tracking-[0.3em] font-bold text-[var(--text-muted)] mt-3 uppercase">Pioneering Technical solutions</p>
                    </div>

                    <!-- NavLinks -->
                    <div class="flex flex-wrap justify-center gap-x-10 gap-y-4">
                        <a href="#home" class="text-[10px] font-bold text-[var(--text-muted)] hover:text-[var(--text-main)] transition uppercase tracking-widest">Home</a>
                        <a href="#about" class="text-[10px] font-bold text-[var(--text-muted)] hover:text-[var(--text-main)] transition uppercase tracking-widest">About</a>
                        <a href="#projects" class="text-[10px] font-bold text-[var(--text-muted)] hover:text-[var(--text-main)] transition uppercase tracking-widest">Projects</a>
                        <a href="#contact" class="text-[10px] font-bold text-[var(--text-muted)] hover:text-[var(--text-main)] transition uppercase tracking-widest">Contact</a>
                    </div>


                </div>

                <div class="pt-16 border-t border-[var(--border-color)] flex flex-col md:flex-row justify-between items-center gap-6">
                    <p class="text-[10px] font-bold tracking-widest uppercase text-[var(--text-muted)]">© {{ date('Y') }} JohnDev. Built with ❤️ & Code.</p>
                    <div class="flex items-center gap-8">
                        <div class="flex items-center gap-2">
                            <span class="text-[var(--text-muted)] text-[10px] font-bold tracking-widest uppercase">Local time:</span>
                            <span class="local-time text-[var(--text-main)] text-[10px] font-bold tracking-widest uppercase">--:-- --</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_10px_#22c55e]"></span>
                            <span class="text-[var(--text-main)] text-[10px] font-bold tracking-widest uppercase">Online Status</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Certificate Zoom Modal -->
        <div id="certificateZoom" class="fixed inset-0 z-[150] hidden flex flex-col items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/95 backdrop-blur-xl" onclick="closeZoom()"></div>
            
            <!-- Drive-style Header -->
            <div class="relative w-full max-w-7xl flex items-center justify-between px-8 py-6 z-[160] translate-y-[-100%] animate-slide-down">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-[var(--card-bg)] flex items-center justify-center text-accent-pink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                    </div>
                    <div>
                        <h4 id="zoomTitle" class="text-sm font-bold text-white tracking-wide">Certificate_Preview.jpg</h4>
                        <p class="text-[8px] text-white/50 uppercase tracking-[0.2em]">Verified Credential System</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <button onclick="closeZoom()" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white/70 hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>

            <div class="relative max-w-5xl w-full h-[75vh] flex items-center justify-center z-[160]">
                <img id="zoomedImage" src="" alt="Certificate" class="max-w-full max-h-full object-contain shadow-[0_30px_100px_rgba(0,0,0,0.5)] rounded-2xl animate-zoom">
            </div>

            <!-- Bottom Action Bar -->
            <div class="relative z-[160] mt-10 translate-y-[100%] animate-slide-up">
                <a id="zoomDownload" href="#" download class="px-8 py-3 bg-white/10 border border-white/20 rounded-2xl text-[10px] font-black text-white hover:bg-white hover:text-black transition duration-500 uppercase tracking-widest flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    Download Certificate
                </a>
            </div>
        </div>

        <!-- Project Demo Full-Screen View -->
        <div id="projectDemoModal" class="fixed inset-0 z-[300] hidden bg-[var(--primary-bg)] flex flex-col transition-colors duration-500">
            <!-- Navigation Header -->
            <div class="sticky top-0 w-full px-6 md:px-12 py-6 border-b border-[var(--border-color)] bg-[var(--primary-bg)]/80 backdrop-blur-2xl z-[310] flex items-center justify-between transition-colors duration-500">
                <button onclick="closeProjectDemo()" class="flex items-center gap-3 group px-4 py-2 rounded-xl hover:bg-[var(--text-main)]/5 transition-all duration-300">
                    <div class="w-10 h-10 rounded-lg bg-[var(--text-main)]/5 flex items-center justify-center text-[var(--text-main)] group-hover:-translate-x-1 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    </div>
                    <div class="text-left">
                        <p class="text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-[0.2em] leading-none mb-1">Return to</p>
                        <p class="text-xs font-black text-[var(--text-main)] uppercase tracking-widest leading-none">Main Portfolio</p>
                    </div>
                </button>

                <div class="hidden md:flex items-center gap-4">
                    <div class="text-right">
                        <h2 id="demoTitle" class="text-lg font-black text-[var(--text-main)] uppercase tracking-tighter">Project Showcase</h2>
                        <p id="demoSubtitle" class="text-[8px] font-bold text-accent-purple uppercase tracking-[0.2em]">Detailed Case Study & Experience</p>
                    </div>
                    <div class="w-px h-8 bg-[var(--border-color)]"></div>
                    <div class="w-10 h-10 rounded-xl bg-accent-purple/20 flex items-center justify-center text-accent-purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a 9 9 0 0 1 0 18 9 9 0 0 1 0 -18Z"></path><path d="M7 12 l5 5 l10-10"></path></svg>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="flex-1 overflow-y-auto custom-scrollbar">
                <div class="max-w-7xl mx-auto px-6 md:px-12 py-16 md:py-24">
                    <div id="demoContent" class="animate-content-fade text-[var(--text-main)]">
                        <!-- Content will be injected via JavaScript -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Tool Detail Modal -->
        <div id="toolModal" class="fixed inset-0 z-[200] hidden flex items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/80 backdrop-blur-md" onclick="closeToolModal()"></div>
            <div class="relative bg-[var(--primary-bg)] border border-[var(--border-color)] rounded-[2.5rem] w-full max-w-2xl overflow-hidden shadow-2xl animate-zoom">
                <!-- Close Button -->
                <button onclick="closeToolModal()" class="absolute top-8 right-8 text-[var(--text-muted)] hover:text-[var(--text-main)] transition group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>

                <div class="p-8 md:p-12 space-y-10">
                    <!-- Header -->
                    <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left gap-4 md:gap-6">
                        <div id="modalIcon" class="w-16 h-16 rounded-2xl flex items-center justify-center shadow-lg shrink-0">
                            <!-- Icon will be injected here -->
                        </div>
                        <div>
                            <h3 id="modalName" class="text-2xl md:text-3xl font-bold tracking-tight"></h3>
                            <p id="modalCategory" class="text-xs font-bold opacity-40 uppercase tracking-[0.2em] mt-1"></p>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <div class="flex border-b border-[var(--border-color)] relative">
                        <button onclick="switchToolTab('overview')" id="tab-overview" class="flex-1 py-4 text-sm font-bold tracking-widest uppercase transition relative group text-[var(--text-main)]">
                            Overview
                            <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent-purple shadow-[0_0_8px_rgba(139,92,246,0.8)] scale-x-100 transition-transform duration-300 origin-left" id="tab-indicator-overview"></div>
                        </button>
                        <button onclick="switchToolTab('certificate')" id="tab-certificate" class="flex-1 py-4 text-sm font-bold tracking-widest uppercase transition relative group text-[var(--text-muted)] hover:text-[var(--text-main)]">
                            Application
                            <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent-purple shadow-[0_0_8px_rgba(139,92,246,0.8)] scale-x-0 transition-transform duration-300 origin-left" id="tab-indicator-certificate"></div>
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="min-h-[200px]">
                        <!-- Overview Content -->
                        <div id="content-overview" class="space-y-8">
                            <p id="modalDescription" class="text-[var(--text-muted)] leading-relaxed text-sm md:text-base"></p>
                            
                            <div class="space-y-4">
                                <h4 class="text-[10px] font-black opacity-30 uppercase tracking-[0.3em]">Key Proficiency</h4>
                                <div id="modalProficiencies" class="flex flex-wrap gap-3">
                                    <!-- Badges will be injected here -->
                                </div>
                            </div>
                        </div>

                        <!-- Application Content -->
                        <div id="content-certificate" class="hidden space-y-6">
                            <div class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl p-6 flex items-center justify-between group hover:border-accent-purple/30 transition">
                                <div class="space-y-1">
                                    <h5 id="modalCertName" class="font-bold"></h5>
                                    <p class="text-[10px] opacity-30 uppercase tracking-widest">Typical Application</p>
                                </div>
                                <a id="modalLink" href="#" target="_blank" class="w-10 h-10 rounded-full bg-accent-purple/10 flex items-center justify-center text-accent-purple group-hover:bg-accent-purple group-hover:text-white transition cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 22 3 22 10"></polyline><line x1="10" y1="14" x2="22" y2="2"></line></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Typing Effect
            const typingText = document.getElementById('typing-text');
            const words = ["Problem Solver", "Web Developer", "Software Architect"];
            let wordIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let typeSpeed = 100;

            function type() {
                const currentWord = words[wordIndex];
                if (isDeleting) {
                    typingText.textContent = currentWord.substring(0, charIndex - 1);
                    charIndex--;
                    typeSpeed = 50;
                } else {
                    typingText.textContent = currentWord.substring(0, charIndex + 1);
                    charIndex++;
                    typeSpeed = 150;
                }

                if (!isDeleting && charIndex === currentWord.length) {
                    isDeleting = true;
                    typeSpeed = 1500; // Pause at the end
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                    typeSpeed = 500;
                }

                setTimeout(type, typeSpeed);
            }

            document.addEventListener('DOMContentLoaded', type);

            function toggleMenu() {
                const menu = document.getElementById('mobile-menu');
                const isOpen = !menu.classList.contains('-translate-y-full');
                
                if (isOpen) {
                    menu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
                } else {
                    menu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
                }
            }

            function openToolModal(tool) {
                const modal = document.getElementById('toolModal');
                const name = document.getElementById('modalName');
                const category = document.getElementById('modalCategory');
                const icon = document.getElementById('modalIcon');
                const description = document.getElementById('modalDescription');
                const proficiencies = document.getElementById('modalProficiencies');
                const certName = document.getElementById('modalCertName');
                const link = document.getElementById('modalLink');

                name.textContent = tool.name;
                category.textContent = tool.category;
                icon.innerHTML = tool.icon;
                
                // Color specific styling
                icon.className = `w-16 h-16 rounded-2xl flex items-center justify-center shadow-lg bg-${tool.color}/10 text-${tool.color}`;
                if(tool.color === 'yellow-500') icon.classList.add('text-yellow-500'); // Ensure visibility

                description.textContent = tool.description;
                certName.textContent = tool.usage;
                
                // Set Link
                if (tool.link) {
                    link.href = tool.link;
                    link.style.display = 'flex';
                } else {
                    link.style.display = 'none';
                }

                // Proficiencies
                proficiencies.innerHTML = '';
                tool.proficiencies.forEach(p => {
                    const span = document.createElement('span');
                    span.className = `px-4 py-2 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-xl text-[10px] font-bold text-[var(--text-muted)] uppercase tracking-widest hover:text-[var(--text-main)] hover:border-[var(--border-color)] transition`;
                    span.textContent = p;
                    proficiencies.appendChild(span);
                });

                // Reset tabs
                switchToolTab('overview');

                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeToolModal() {
                const modal = document.getElementById('toolModal');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            function switchToolTab(tab) {
                const overviewContent = document.getElementById('content-overview');
                const certContent = document.getElementById('content-certificate');
                const overviewIndicator = document.getElementById('tab-indicator-overview');
                const certIndicator = document.getElementById('tab-indicator-certificate');
                const overviewText = document.getElementById('tab-overview');
                const certText = document.getElementById('tab-certificate');

                if (tab === 'overview') {
                    overviewContent.classList.remove('hidden');
                    certContent.classList.add('hidden');
                    overviewIndicator.classList.replace('scale-x-0', 'scale-x-100');
                    certIndicator.classList.replace('scale-x-100', 'scale-x-0');
                    overviewText.classList.replace('text-[var(--text-muted)]', 'text-[var(--text-main)]');
                    certText.classList.replace('text-[var(--text-main)]', 'text-[var(--text-muted)]');
                } else {
                    overviewContent.classList.add('hidden');
                    certContent.classList.remove('hidden');
                    overviewIndicator.classList.replace('scale-x-100', 'scale-x-0');
                    certIndicator.classList.replace('scale-x-0', 'scale-x-100');
                    overviewText.classList.replace('text-[var(--text-main)]', 'text-[var(--text-muted)]');
                    certText.classList.replace('text-[var(--text-muted)]', 'text-[var(--text-main)]');
                }
            }

            function openZoom(image, title) {
                const modal = document.getElementById('certificateZoom');
                const zoomedImg = document.getElementById('zoomedImage');
                const zoomTitle = document.getElementById('zoomTitle');
                const zoomDownload = document.getElementById('zoomDownload');

                zoomedImg.src = image;
                zoomTitle.textContent = title + ".jpg";
                zoomDownload.href = image;

                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeZoom() {
                const modal = document.getElementById('certificateZoom');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            function copyEmail() {
                const emailAddress = document.getElementById('email-address').textContent;
                navigator.clipboard.writeText(emailAddress).then(() => {
                    const button = document.querySelector('button[onclick="copyEmail()"]');
                    const originalIcon = button.innerHTML;
                    button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>';
                    setTimeout(() => {
                        button.innerHTML = originalIcon;
                    }, 2000);
                });
            }

            function updateTime() {
                const now = new Date();
                const timeString = now.toLocaleTimeString('en-US', { 
                    hour12: true, 
                    hour: '2-digit', 
                    minute: '2-digit'
                });
                const timeElements = document.querySelectorAll('.local-time');
                timeElements.forEach(el => {
                    el.textContent = timeString + ' PHT';
                });
            }

            setInterval(updateTime, 1000);
            updateTime();

            // Contact Form AJAX Submission
            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const form = this;
                const button = form.querySelector('button[type="submit"]');
                const originalContent = button.innerHTML;
                
                // Set sending state
                button.disabled = true;
                button.innerHTML = `
                    Sending...
                    <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
                `;

                const formData = new FormData(form);
                const data = {};
                formData.forEach((value, key) => data[key] = value);

                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    // Success state
                    button.innerHTML = `
                        Message Sent!
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    `;
                    form.reset();
                    
                    setTimeout(() => {
                        button.disabled = false;
                        button.innerHTML = originalContent;
                    }, 3000);
                })
                .catch(error => {
                    console.error('Error:', error);
                    button.disabled = false;
                    button.innerHTML = originalContent;
                    alert('Something went wrong. Please try again.');
                });
            });

            function toggleTheme() {
                const html = document.documentElement;
                const icon = document.getElementById('theme-icon');
                const iconMobile = document.getElementById('theme-icon-mobile');
                const isLight = html.classList.toggle('light');
                
                localStorage.setItem('theme', isLight ? 'light' : 'dark');
                
                const moonIcon = '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>';
                const sunIcon = '<circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line>';

                if (isLight) {
                    if(icon) icon.innerHTML = moonIcon;
                    if(iconMobile) iconMobile.innerHTML = moonIcon;
                } else {
                    if(icon) icon.innerHTML = sunIcon;
                    if(iconMobile) iconMobile.innerHTML = sunIcon;
                }
            }

            // Initialize theme UI elements
            document.addEventListener('DOMContentLoaded', () => {
                const icon = document.getElementById('theme-icon');
                const iconMobile = document.getElementById('theme-icon-mobile');
                const moonIcon = '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>';
                const sunIcon = '<circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line>';

                if (document.documentElement.classList.contains('light')) {
                    if(icon) icon.innerHTML = moonIcon;
                    if(iconMobile) iconMobile.innerHTML = moonIcon;
                } else {
                    if(icon) icon.innerHTML = sunIcon;
                    if(iconMobile) iconMobile.innerHTML = sunIcon;
                }
            });

            function openProjectDemo(demoId) {
                const modal = document.getElementById('projectDemoModal');
                const content = document.getElementById('demoContent');
                const title = document.getElementById('demoTitle');
                
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                if (demoId === 'sellio-demo') {
                    title.textContent = 'Sellio Marketplace';
                    content.innerHTML = `
                        <div class="space-y-20 pb-20">
                            <!-- Hero Section -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                                <div class="space-y-8">
                                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-accent-purple/10 border border-accent-purple/20">
                                        <img src="{{ asset('image/logo.png') }}" class="w-6 h-6 object-contain">
                                        <span class="text-[10px] font-black uppercase tracking-widest text-accent-purple">Capstone Project 2024</span>
                                    </div>
                                    <div class="space-y-4">
                                        <h3 class="text-5xl font-black text-white leading-tight">Sellio: <span class="text-gradient">Blockchain</span> Marketplace</h3>
                                        <p class="text-white/60 text-lg leading-relaxed max-w-xl">A decentralized Android ecosystem designed to eliminate transaction fraud through smart contracts and peer-to-peer transparency. This capstone project redefines trust in digital trade.</p>
                                    </div>
                                    
                                    <div class="flex flex-wrap gap-4">
                                        <div class="px-6 py-4 rounded-[2rem] bg-white/5 border border-white/5 backdrop-blur-sm">
                                            <h4 class="text-accent-pink text-[8px] font-black uppercase tracking-widest mb-1">My Strategic Role</h4>
                                            <p class="text-white font-bold text-sm">System Analyst & Architecture</p>
                                        </div>
                                        <div class="px-6 py-4 rounded-[2rem] bg-white/5 border border-white/5 backdrop-blur-sm">
                                            <h4 class="text-cyan-400 text-[8px] font-black uppercase tracking-widest mb-1">Architecture</h4>
                                            <p class="text-white font-bold text-sm">Web3 & Node.js Microservices</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative group">
                                    <div class="absolute -inset-4 bg-accent-purple/20 blur-3xl opacity-50 group-hover:opacity-100 transition duration-1000"></div>
                                    <div class="relative aspect-video rounded-[3rem] overflow-hidden border border-white/10 shadow-2xl">
                                        <img src="{{ asset('image/sellio.jpg') }}" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-8">
                                            <div class="flex items-center gap-4">
                                                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center p-2 shadow-xl">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Google_Play_Arrow_logo.svg" class="w-full h-full">
                                                </div>
                                                <div>
                                                    <p class="text-white font-black text-[10px] uppercase tracking-widest">Available on</p>
                                                    <p class="text-white/50 text-[8px] uppercase tracking-[0.3em]">Google Play Store (Project Build)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- App Showcase: Category 1 -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-white uppercase tracking-tighter">I. Platform Experience</h4>
                                    <div class="w-20 h-1 bg-accent-purple mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                    ${createAppFrame('login.jpg', 'Secure Authentication', 'Encrypted entry point ensuring user data integrity from the first interaction.')}
                                    ${createAppFrame('home.jpg', 'Intuitive Discovery', 'Personalized marketplace feed with smart category filtering and trending items.')}
                                    ${createAppFrame('details.jpg', 'Deep Insights', 'Immersive product overview with high-fidelity visuals and technical specifications.')}
                                </div>
                            </div>

                            <!-- App Showcase: Category 2 -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-white uppercase tracking-tighter">II. Marketforce Hub</h4>
                                    <div class="w-20 h-1 bg-accent-pink mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                                    ${createAppFrame('offer.jpg', 'Smart Bidding', 'Almost real-time offer system allowing users to negotiate value dynamically.')}
                                    ${createAppFrame('bidders.jpg', 'Live Auction Board', 'Transparent leaderboard showing active interest and competitive bids.')}
                                    ${createAppFrame('chat.jpg', 'P2P Messaging', 'Secure almost real-time negotiation channel between buyers and sellers.')}
                                    ${createAppFrame('location.jpg', 'Geospatial Context', 'Precise distance matrix visualization for localized trade optimization.')}
                                </div>
                            </div>

                            <!-- App Showcase: Category 3 -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-white uppercase tracking-tighter">III. Safety & Blockchain Integrity</h4>
                                    <div class="w-20 h-1 bg-cyan-400 mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                    ${createAppFrame('location_shared.jpg', 'Proximity Trust', 'Secure location synchronization for safe physical transaction meeting points.')}
                                    ${createAppFrame('report.jpg', 'Vigilance System', 'Advanced reporting mechanisms to maintain a high-quality community environment.')}
                                    ${createAppFrame('review.jpg', 'Reputation Score', 'Multi-dimensional user feedback system to drive reliable interactions.')}
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mt-8">
                                    ${createAppFrame('blockchain_review.jpg', 'Immutable Ledger Reviews', 'Blockchain-stored feedback that cannot be altered or falsified by third parties.', true)}
                                    ${createAppFrame('transaction_details.jpg', 'Public Audit Trail', 'Complete cryptographic record of all successful transaction milestones.', true)}
                                </div>
                            </div>
                        </div>
                    `;
                } else if (demoId === 'welfare-demo') {
                    title.textContent = 'Social Welfare System';
                    content.innerHTML = `
                        <div class="space-y-20 pb-20">
                            <!-- Hero Section (Welfare) -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                                <div class="space-y-8">
                                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-accent-pink/10 border border-accent-pink/20">
                                        <svg class="text-accent-pink" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                        <span class="text-[10px] font-black uppercase tracking-widest text-accent-pink">Cloud-Based Web Solution</span>
                                    </div>
                                    <div class="space-y-4">
                                        <h3 class="text-5xl font-black text-[var(--text-main)] leading-tight">Social <span class="text-gradient">Welfare</span> Distribution</h3>
                                        <p class="text-[var(--text-muted)] text-lg leading-relaxed max-w-xl">A mission-critical platform engineered for high-integrity public service. Streamlining the lifecycle of assistance from initial application to final verification with full back-end transparency.</p>
                                    </div>
                                    
                                    <div class="flex flex-wrap gap-4">
                                        <div class="px-6 py-4 rounded-[2rem] bg-[var(--text-main)]/5 border border-[var(--border-color)] backdrop-blur-sm">
                                            <h4 class="text-cyan-400 text-[8px] font-black uppercase tracking-widest mb-1">My Component</h4>
                                            <p class="text-[var(--text-main)] font-bold text-sm">Back-end Developer</p>
                                        </div>
                                        <div class="px-6 py-4 rounded-[2rem] bg-[var(--text-main)]/5 border border-[var(--border-color)] backdrop-blur-sm">
                                            <h4 class="text-accent-purple text-[8px] font-black uppercase tracking-widest mb-1">Deployment</h4>
                                            <p class="text-[var(--text-main)] font-bold text-sm">Enterprise Web Scalability</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative group">
                                    <div class="absolute -inset-4 bg-accent-pink/20 blur-3xl opacity-50 group-hover:opacity-100 transition duration-1000"></div>
                                    <div class="relative aspect-video rounded-[3rem] overflow-hidden border border-[var(--border-color)] shadow-2xl bg-[#0b011d]">
                                        <img src="{{ asset('image/social welfare.jpg') }}" class="w-full h-full object-cover object-top hover:scale-110 transition-transform duration-700">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-8">
                                            <p class="text-white font-black text-[10px] uppercase tracking-widest">Welfare Management Suite</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Showcase: Infrastructure -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-[var(--text-main)] uppercase tracking-tighter">I. Core Infrastructure</h4>
                                    <div class="w-20 h-1 bg-accent-pink mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    ${createWebFrame('loginwelfare.png', 'Authentication Gateway', 'Secure portal for administrative and professional access points.')}
                                    ${createWebFrame('dashboard.png', 'Operations Dashboard', 'Almost real-time overview of system metrics and current help requests.')}
                                </div>
                            </div>

                            <!-- Showcase: Operations -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Operational Intelligence</h4>
                                    <div class="w-20 h-1 bg-cyan-400 mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    ${createWebFrame('applicant.png', 'Entity Management', 'Comprehensive user profiles tracking history and eligibility.')}
                                    ${createWebFrame('application.png', 'Case Workflow', 'Dynamic processing system for assistance requests and approvals.')}
                                </div>
                            </div>

                            <!-- Showcase: Resources -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-[var(--text-main)] uppercase tracking-tighter">III. Resource Orchestration</h4>
                                    <div class="w-20 h-1 bg-accent-purple mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    ${createWebFrame('consultation.png', 'Service Logging', 'Detailed auditing of interactions and professional consultations.')}
                                    ${createWebFrame('stocks.png', 'Inventory Logic', 'Back-end management for physical resource distribution.')}
                                </div>
                            </div>

                            <!-- Showcase: Verification -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-[var(--text-main)] uppercase tracking-tighter">IV. Document Integrity</h4>
                                    <div class="w-20 h-1 bg-accent-pink mx-auto rounded-full"></div>
                                </div>
                                <div class="max-w-4xl mx-auto">
                                    ${createWebFrame('certficate.png', 'Credential Generation', 'Automated issuance of high-trust verification and eligibility documents.', true)}
                                </div>
                            </div>
                        </div>
                    `;
                } else if (demoId === 'news-demo') {
                    title.textContent = 'Global News Pulse';
                    content.innerHTML = `
                        <div class="space-y-20 pb-20">
                            <!-- Hero Section -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                                <div class="space-y-8">
                                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-cyan-400/10 border border-cyan-400/20">
                                        <svg class="text-cyan-400" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 20l-7-7-7 7V4h14v16z"></path></svg>
                                        <span class="text-[10px] font-black uppercase tracking-widest text-cyan-400">Web Platform Project</span>
                                    </div>
                                    <div class="space-y-4">
                                        <h3 class="text-5xl font-black text-[var(--text-main)] leading-tight">Global <span class="text-gradient">News Pulse</span></h3>
                                        <p class="text-[var(--text-muted)] text-lg leading-relaxed max-w-xl">A sophisticated web discovery engine that aggregates almost real-time intelligence from thousands of global sources. Architected for speed, responsiveness, and seamless navigation.</p>
                                    </div>
                                    
                                    <div class="flex flex-wrap gap-4">
                                        <div class="px-6 py-4 rounded-[2rem] bg-[var(--text-main)]/5 border border-[var(--border-color)] backdrop-blur-sm">
                                            <h4 class="text-accent-pink text-[8px] font-black uppercase tracking-widest mb-1">Architecture</h4>
                                            <p class="text-[var(--text-main)] font-bold text-sm">Frontend Web Stack</p>
                                        </div>
                                        <div class="px-6 py-4 rounded-[2rem] bg-[var(--text-main)]/5 border border-[var(--border-color)] backdrop-blur-sm">
                                            <h4 class="text-accent-purple text-[8px] font-black uppercase tracking-widest mb-1">System Type</h4>
                                            <p class="text-[var(--text-main)] font-bold text-sm">Responsive Web Application</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative group">
                                    <div class="absolute -inset-4 bg-cyan-400/20 blur-3xl opacity-50 group-hover:opacity-100 transition duration-1000"></div>
                                    <div class="relative aspect-video rounded-[3rem] overflow-hidden border border-[var(--border-color)] shadow-2xl bg-[#0b011d]">
                                        <img src="{{ asset('image/news_api.jpg') }}" class="w-full h-full object-cover object-top hover:scale-110 transition-transform duration-700">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-8">
                                            <p class="text-white font-black text-[10px] uppercase tracking-widest">Interactive Web Dashboard</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Showcase: Fundamentals -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-[var(--text-main)] uppercase tracking-tighter">I. Platform Fundamentals</h4>
                                    <div class="w-20 h-1 bg-cyan-400 mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    ${createWebFrame('loginpage.jpg', 'Authentication Portal', 'Modern login architecture designed for a secure and smooth user onboarding experience.')}
                                    ${createWebFrame('news_api.jpg', 'Discovery Engine', 'Responsive grid system that handles massive data streams with elegant usability.')}
                                </div>
                            </div>

                            <!-- Showcase: Intelligent Discovery -->
                            <div class="space-y-12">
                                <div class="text-center space-y-2">
                                    <h4 class="text-2xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Sector Intelligence</h4>
                                    <div class="w-20 h-1 bg-accent-purple mx-auto rounded-full"></div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    ${createWebFrame('technology.jpg', 'Technology Focus', 'Optimized reading view for technical news and software development updates.')}
                                    ${createWebFrame('sports.jpg', 'Sports Arena', 'High-impact layout for dynamic sports coverage and almost real-time event updates.')}
                                    ${createWebFrame('business.jpg', 'Business Insights', 'Clean, data-focused interface for corporate headlines and market trends.')}
                                    ${createWebFrame('health.jpg', 'Health & Science', 'Dedicated space for wellness breakthroughs and medical news discovery.')}
                                </div>
                            </div>
                        </div>
                    `;
                }
            }

            function createAppFrame(img, title, desc, isHighlight = false) {
                const borderClass = isHighlight ? 'border-accent-purple' : 'border-[var(--border-color)]';
                return `
                    <div class="group/frame space-y-6">
                        <div class="aspect-[9/16] rounded-[2.5rem] overflow-hidden border ${borderClass} bg-black shadow-2xl relative transition-all duration-700 hover:scale-[1.02] hover:shadow-accent-purple/20">
                            <img src="{{ asset('image/') }}/${img}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover/frame:opacity-100 transition duration-500 flex items-end p-6">
                                <p class="text-[10px] font-bold text-white uppercase tracking-widest"></p>
                            </div>
                        </div>
                        <div class="px-2 space-y-2">
                            <h5 class="text-[var(--text-main)] font-black text-xs uppercase tracking-widest flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-purple"></span>
                                ${title}
                            </h5>
                            <p class="text-[10px] text-[var(--text-muted)] leading-relaxed font-medium uppercase tracking-wider">${desc}</p>
                        </div>
                    </div>
                `;
            }

            function createWebFrame(img, title, desc, isHighlight = false) {
                const borderClass = isHighlight ? 'border-accent-purple shadow-accent-purple/20' : 'border-[var(--border-color)]';
                return `
                    <div class="group/frame space-y-6">
                        <div class="aspect-video rounded-[2rem] overflow-hidden border ${borderClass} bg-[#0b011d] shadow-2xl relative transition-all duration-700 hover:scale-[1.03] hover:shadow-cyan-400/10">
                            <img src="{{ asset('image/') }}/${img}" class="w-full h-full object-cover object-top transition duration-1000 group-hover/frame:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover/frame:opacity-100 transition duration-500 flex items-end p-8">
                                <p class="text-[10px] font-bold text-white uppercase tracking-widest border-b border-cyan-400 pb-1">View Full Screen Preview</p>
                            </div>
                        </div>
                        <div class="px-4 space-y-3">
                            <h5 class="text-[var(--text-main)] font-black text-sm uppercase tracking-widest flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-cyan-400 shadow-[0_0_10px_rgba(34,211,238,0.5)]"></span>
                                ${title}
                            </h5>
                            <p class="text-[11px] text-[var(--text-muted)] leading-relaxed font-medium uppercase tracking-[0.05em]">${desc}</p>
                        </div>
                    </div>
                `;
            }

            function closeProjectDemo() {
                const modal = document.getElementById('projectDemoModal');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            document.getElementById('menu-btn').addEventListener('click', toggleMenu);
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
