@php
    // Data is passed from PortfolioController
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects Showcase | Uriel John G. Chavez</title>
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <script>
            // Immediate theme check to prevent flash
            (function() {
                const theme = localStorage.getItem('theme');
                if (theme === 'light') {
                    document.documentElement.classList.remove('dark');
                } else {
                    document.documentElement.classList.add('dark');
                }
            })();
        </script>

        <!-- Tailwind Play CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                            outfit: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            'dark-bg': '#030712',
                            'accent-primary': '#0ea5e9',
                            'accent-secondary': '#06b6d4',
                            'accent-vibrant': '#f59e0b',
                        },
                        backgroundImage: {
                            'primary-gradient': 'linear-gradient(135deg, #0ea5e9 0%, #06b6d4 100%)',
                        }
                    }
                }
            }
        </script>

        <style>
            :root {
                --primary-bg: #f9fafb;
                --accent-primary: #0284c7;
                --accent-secondary: #0891b2;
                --accent-vibrant: #f59e0b;
                --card-bg: rgba(255, 255, 255, 0.7);
                --text-main: #111827;
                --text-muted: #4b5563;
                --border-color: rgba(0, 0, 0, 0.18);
                --glass-nav: rgba(249, 250, 251, 0.9);
            }

            .dark {
                --primary-bg: #030712;
                --accent-primary: #0ea5e9;
                --accent-secondary: #06b6d4;
                --accent-vibrant: #f59e0b;
                --card-bg: rgba(17, 24, 39, 0.4);
                --text-main: #f9fafb;
                --text-muted: #9ca3af;
                --border-color: rgba(255, 255, 255, 0.08);
                --glass-nav: rgba(3, 7, 18, 0.8);
            }

            body { 
                background-color: var(--primary-bg);
                color: var(--text-main);
                font-family: 'Outfit', sans-serif;
                overflow-x: hidden;
                background-image: 
                    radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.03) 0%, transparent 40%),
                    radial-gradient(circle at 90% 80%, rgba(113, 113, 122, 0.03) 0%, transparent 40%);
                background-attachment: fixed;
                transition: background-color 0.5s cubic-bezier(0.4, 0, 0.2, 1), color 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .text-gradient {
                background: linear-gradient(to right, var(--accent-primary), var(--accent-secondary));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.02);
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: var(--accent-primary);
                border-radius: 10px;
                opacity: 0.3;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: var(--accent-secondary);
            }

            #scroll-progress {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(to right, var(--accent-primary), var(--accent-secondary));
                transform-origin: 0%;
                z-index: 100;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/motion@11.11.13/dist/motion.js"></script>
    </head>
    <body class="antialiased selection:bg-accent-primary selection:text-white custom-scrollbar">
        <div id="scroll-progress"></div>
        
        <!-- Minimal Nav -->
        <header class="fixed top-0 left-0 w-full px-6 md:px-[9%] py-6 flex justify-between items-center z-50 backdrop-blur-xl border-b border-[var(--border-color)] bg-[var(--primary-bg)]/80">
            <a href="/" class="text-xl font-bold text-[var(--text-main)] flex items-center gap-1 hover:opacity-80 transition">
                <span class="text-accent-secondary">&lt;</span>Back to Portfolio<span class="text-accent-secondary">/&gt;</span>
            </a>
            <div class="flex items-center gap-6">
                <!-- Theme Toggle -->
                <button onclick="toggleTheme()" class="w-12 h-12 rounded-2xl bg-[var(--card-bg)] border border-[var(--border-color)] flex items-center justify-center text-[var(--text-main)] hover:border-accent-primary transition duration-300">
                    <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></svg>
                </button>
                <div class="hidden md:block">
                    <span class="text-[10px] font-black text-accent-primary uppercase tracking-[0.3em]">Project Archive</span>
                </div>
            </div>
        </header>

        <main class="pt-32 pb-20 px-6 md:px-[9%] space-y-32">
            <!-- Header -->
            <div class="max-w-4xl mx-auto text-center space-y-6">
                <p class="text-accent-primary text-xs font-bold tracking-[0.5em] uppercase animate-fade-in">Comprehensive Showcase</p>
                <h1 class="text-4xl md:text-7xl font-black text-[var(--text-main)] tracking-tighter">My <span class="text-gradient">Professional</span> Works</h1>
                <p class="text-[var(--text-muted)] text-lg max-w-2xl mx-auto leading-relaxed">
                    A detailed look into the systems I've built, ranging from cloud infrastructures to mobile marketplaces. Each project represents a unique challenge solved through technical precision.
                </p>
            </div>

            <!-- Projects Vertical List -->
            <div class="space-y-40">
                @foreach($projects as $index => $project)
                <section id="{{ $project->demo_id }}" class="relative scroll-mt-32">
                    <!-- Project Backdrop -->
                    <div class="absolute -inset-10 bg-gradient-to-{{ $index % 2 == 0 ? 'r' : 'l' }} from-accent-primary/5 to-transparent blur-3xl rounded-[5rem] pointer-events-none"></div>

                    <div class="relative z-10 grid lg:grid-cols-[1fr_1.5fr] gap-12 lg:gap-20 items-start">
                        <!-- Info Panel -->
                        <div class="space-y-8 lg:sticky lg:top-32">
                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-accent-primary font-mono text-sm underline underline-offset-8">0{{ $index + 1 }}</span>
                                    <div class="h-px flex-1 bg-gradient-to-r from-accent-primary/30 to-transparent"></div>
                                </div>
                                <h2 class="text-3xl md:text-5xl font-black text-[var(--text-main)] tracking-tight">{{ $project->title }}</h2>
                                <p class="text-[var(--text-muted)] text-sm md:text-base leading-relaxed text-justify">
                                    {{ $project->description }}
                                </p>
                            </div>

                            <div class="flex flex-wrap gap-4 pt-4">
                                @if(isset($project->github_link))
                                <a href="{{ $project->github_link }}" target="_blank" class="px-6 py-3 bg-[var(--card-bg)] border border-[var(--border-color)] text-[var(--text-main)] rounded-xl text-xs font-bold uppercase tracking-widest hover:border-accent-primary transition flex items-center gap-3 group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[var(--text-muted)] group-hover:text-white transition"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                    Source Repository
                                </a>
                                @endif
                                <button onclick="scrollToDemo('{{ $project->demo_id }}-gallery')" class="h-12 px-8 bg-accent-primary/10 border border-accent-primary/30 text-accent-primary rounded-xl text-xs font-bold uppercase tracking-widest hover:bg-accent-primary hover:text-white transition flex items-center gap-3 hover:shadow-[0_0_20px_rgba(14,165,233,0.3)]">
                                    View Showcase
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="rotate-90"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </button>
                            </div>
                        </div>

                        <!-- Content Panel / Showcase -->
                        <div id="{{ $project->demo_id }}-gallery" class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2.5rem] md:rounded-[3rem] p-4 md:p-12 space-y-12 md:space-y-20 relative overflow-hidden backdrop-blur-sm">
                            <div class="absolute top-0 right-0 p-8 flex gap-2">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-400/30"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-yellow-400/30"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-green-400/30"></div>
                            </div>

                            <div id="{{ $project->demo_id }}-content" class="project-content-area">
                                <!-- Dynamic content will be injected here via JS for consistency with the main page demos -->
                                <div class="flex items-center justify-center py-20">
                                    <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-accent-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endforeach
            </div>
        </main>

        <footer class="py-12 px-6 md:px-[9%] border-t border-[var(--border-color)] text-center">
            <p class="text-[var(--text-muted)] text-[10px] font-black uppercase tracking-[0.5em]">
                &copy; {{ date('Y') }} Uriel Chavez. All Projects Reserved.
            </p>
        </footer>

        <script>
            // Helper functions for frame generation (identical to welcome.blade.php for consistency)
            function createAppFrame(img, title, desc, isHighlight = false) {
                const borderClass = isHighlight ? 'border-accent-primary' : 'border-[var(--border-color)]';
                return `
                    <div class="group/frame space-y-6">
                        <div class="aspect-[9/16] rounded-[2.5rem] overflow-hidden border ${borderClass} bg-black shadow-2xl relative transition-all duration-700 hover:scale-[1.02] hover:shadow-accent-primary/20">
                            <img src="{{ asset('image/') }}/${img}" class="w-full h-full object-cover">
                        </div>
                        <div class="px-2 space-y-2">
                            <h5 class="text-[var(--text-main)] font-black text-xs uppercase tracking-widest flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-accent-primary"></span>
                                ${title}
                            </h5>
                            <p class="text-[10px] text-[var(--text-muted)] leading-relaxed font-medium uppercase tracking-wider">${desc}</p>
                        </div>
                    </div>
                `;
            }

            function createWebFrame(img, title, desc, isHighlight = false) {
                const borderClass = isHighlight ? 'border-accent-primary shadow-accent-primary/20' : 'border-[var(--border-color)]';
                return `
                    <div class="group/frame space-y-6">
                        <div class="aspect-video rounded-[2rem] overflow-hidden border ${borderClass} bg-[#0b011d] shadow-2xl relative transition-all duration-700 hover:scale-[1.03] hover:shadow-accent-primary/10">
                            <img src="{{ asset('image/') }}/${img}" class="w-full h-full object-cover object-top transition duration-1000 group-hover/frame:scale-105">
                        </div>
                        <div class="px-4 space-y-3">
                            <h5 class="text-[var(--text-main)] font-black text-xs uppercase tracking-widest flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-accent-primary shadow-[0_0_10px_rgba(14,165,233,0.5)]"></span>
                                ${title}
                            </h5>
                            <p class="text-[10px] text-[var(--text-muted)] leading-relaxed font-medium uppercase tracking-[0.05em]">${desc}</p>
                        </div>
                    </div>
                `;
            }

            function scrollToDemo(id) {
                const el = document.getElementById(id);
                if (el) {
                    el.scrollIntoView({ behavior: 'smooth' });
                }
            }



            // Project Data Injected Content
            const projects = {
                'welfare-demo': `
                    <div class="space-y-24">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">I. Core Infrastructure</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('loginwelfare.png', 'Authentication Gateway', 'Secure portal for administrative and professional access points.')}
                            ${createWebFrame('dashboard.png', 'Operations Dashboard', 'Almost real-time overview of system metrics and current help requests.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Operational Intelligence</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('applicant.png', 'Entity Management', 'Comprehensive user profiles tracking history and eligibility.')}
                            ${createWebFrame('application.png', 'Case Workflow', 'Dynamic processing system for assistance requests and approvals.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">III. Resource Orchestration</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('consultation.png', 'Service Logging', 'Detailed auditing of interactions and professional consultations.')}
                            ${createWebFrame('stocks.png', 'Inventory Logic', 'Back-end management for physical resource distribution.')}
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">IV. Document Integrity</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="max-w-4xl mx-auto">
                            ${createWebFrame('certficate.png', 'Digital Credentials', 'Verified document generation for social welfare eligibility.', true)}
                        </div>
                    </div>
                `,
                'sellio-demo': `
                    <div class="space-y-24">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">I. Platform Experience</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            ${createAppFrame('login.jpg', 'Secure Authentication', 'Encrypted entry point ensuring user data integrity.')}
                            ${createAppFrame('home.jpg', 'Intuitive Discovery', 'Personalized marketplace feed with smart category filtering.')}
                            ${createAppFrame('details.jpg', 'Deep Insights', 'Immersive product overview with high-fidelity visuals.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Marketforce Hub</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            ${createAppFrame('offer.jpg', 'Smart Bidding', 'Almost real-time offer system allowing users to negotiate value.')}
                            ${createAppFrame('bidders.jpg', 'Live Auction Board', 'Transparent leaderboard showing active interest.')}
                            ${createAppFrame('chat.jpg', 'P2P Messaging', 'Secure almost real-time negotiation channel.')}
                            ${createAppFrame('location.jpg', 'Geospatial Context', 'Precise distance matrix visualization.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">III. Safety & Blockchain Integrity</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            ${createAppFrame('location_shared.jpg', 'Proximity Trust', 'Secure location synchronization for safe transaction points.')}
                            ${createAppFrame('report.jpg', 'Vigilance System', 'Advanced reporting mechanisms to maintain quality.')}
                            ${createAppFrame('review.jpg', 'Reputation Score', 'Multi-dimensional user feedback system.')}
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                            ${createAppFrame('blockchain_review.jpg', 'Immutable Ledger Reviews', 'Blockchain-stored feedback that cannot be altered.', true)}
                            ${createAppFrame('transaction_details.jpg', 'Public Audit Trail', 'Complete cryptographic record of all successful milestones.', true)}
                        </div>
                    </div>
                `,
                'news-demo': `
                    <div class="space-y-24">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">I. Global Hub</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('loginpage.jpg', 'Authentication Portal', 'Modern login architecture designed for a secure user experience.')}
                            ${createWebFrame('news_api.jpg', 'Discovery Engine', 'Responsive grid system that handles massive data streams.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Sector Intelligence</h3>
                            <div class="w-20 h-1 bg-accent-primary rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('technology.jpg', 'Technology Focus', 'Optimized reading view for technical news.')}
                            ${createWebFrame('sports.jpg', 'Sports Arena', 'High-impact layout for dynamic sports coverage.')}
                            ${createWebFrame('business.jpg', 'Business Insights', 'Clean, data-focused interface for corporate headlines.')}
                            ${createWebFrame('health.jpg', 'Health & Science', 'Dedicated space for wellness breakthroughs.')}
                        </div>
                    </div>
                `
            };

            // Initialize all project contents
            document.addEventListener('DOMContentLoaded', () => {
                Object.keys(projects).forEach(id => {
                    const container = document.getElementById(id + '-content');
                    if (container) {
                        container.innerHTML = projects[id];
                    }
                });

                // Initialize theme UI
                const icon = document.getElementById('theme-icon');
                const moonIcon = '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>';
                const sunIcon = '<circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line>';

                if (!document.documentElement.classList.contains('dark')) {
                    if(icon) icon.innerHTML = moonIcon;
                } else {
                    if(icon) icon.innerHTML = sunIcon;
                }
            });

            function toggleTheme() {
                const html = document.documentElement;
                const icon = document.getElementById('theme-icon');
                const isDark = html.classList.toggle('dark');
                
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
                
                const moonIcon = '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>';
                const sunIcon = '<circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line>';

                if (!isDark) {
                    if(icon) icon.innerHTML = moonIcon;
                } else {
                    if(icon) icon.innerHTML = sunIcon;
                }
            }

            // Motion Animations
            const { animate, scroll, inView } = Motion;
            
            // 1. Scroll Progress
            scroll(animate("#scroll-progress", { scaleX: [0, 1] }));

            // 2. Horizontal Entry for Titles
            document.querySelectorAll('h2').forEach(title => {
                inView(title, ({ target }) => {
                    animate(
                        target,
                        { opacity: [0, 1], x: [-50, 0] },
                        { duration: 1, easing: "ease-out" }
                    );
                });
            });

            // 3. Staggered reveal for projects
            inView("section", ({ target }) => {
                animate(
                    target,
                    { opacity: [0, 1], y: [50, 0] },
                    { duration: 0.8, easing: "ease-out" }
                );
            });
        </script>
    </body>
</html>
