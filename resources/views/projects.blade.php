@php
    // Data is passed from PortfolioController
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects Showcase | Uriel John G. Chavez</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">

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
                    }
                }
            }
        </script>

        <style>
            :root {
                --primary-bg: #05010d;
                --accent-purple: #8b5cf6;
                --accent-pink: #ec4899;
                --card-bg: rgba(30, 30, 46, 0.4);
                --text-main: #ffffff;
                --text-muted: rgba(255, 255, 255, 0.4);
                --border-color: rgba(255, 255, 255, 0.05);
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
            }
            
            .text-gradient {
                background: linear-gradient(to right, var(--accent-purple), var(--accent-pink));
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
                background: rgba(139, 92, 246, 0.2);
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: rgba(139, 92, 246, 0.4);
            }
        </style>
    </head>
    <body class="antialiased selection:bg-accent-purple selection:text-white custom-scrollbar">
        
        <!-- Minimal Nav -->
        <header class="fixed top-0 left-0 w-full px-6 md:px-[9%] py-6 flex justify-between items-center z-50 backdrop-blur-xl border-b border-[var(--border-color)]">
            <a href="/" class="text-xl font-bold text-[var(--text-main)] flex items-center gap-1 hover:opacity-80 transition">
                <span class="text-accent-pink">&lt;</span>Back to Portfolio<span class="text-accent-pink">/&gt;</span>
            </a>
            <div class="hidden md:block">
                <span class="text-[10px] font-black text-accent-purple uppercase tracking-[0.3em]">Project Archive</span>
            </div>
        </header>

        <main class="pt-32 pb-20 px-6 md:px-[9%] space-y-32">
            <!-- Header -->
            <div class="max-w-4xl mx-auto text-center space-y-6">
                <p class="text-accent-purple text-xs font-bold tracking-[0.5em] uppercase animate-fade-in">Comprehensive Showcase</p>
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
                    <div class="absolute -inset-10 bg-gradient-to-{{ $index % 2 == 0 ? 'r' : 'l' }} from-accent-purple/5 to-transparent blur-3xl rounded-[5rem] pointer-events-none"></div>

                    <div class="relative z-10 grid lg:grid-cols-[1fr_1.5fr] gap-12 lg:gap-20 items-start">
                        <!-- Info Panel -->
                        <div class="space-y-8 sticky top-32">
                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-accent-purple font-mono text-sm underline underline-offset-8">0{{ $index + 1 }}</span>
                                    <div class="h-px flex-1 bg-gradient-to-r from-accent-purple/30 to-transparent"></div>
                                </div>
                                <h2 class="text-3xl md:text-5xl font-black text-[var(--text-main)] tracking-tight">{{ $project->title }}</h2>
                                <p class="text-[var(--text-muted)] text-sm md:text-base leading-relaxed text-justify">
                                    {{ $project->description }}
                                </p>
                            </div>

                            <div class="flex flex-wrap gap-4 pt-4">
                                @if(isset($project->github_link))
                                <a href="{{ $project->github_link }}" target="_blank" class="px-6 py-3 bg-[var(--card-bg)] border border-[var(--border-color)] text-[var(--text-main)] rounded-xl text-xs font-bold uppercase tracking-widest hover:border-accent-purple transition flex items-center gap-3 group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[var(--text-muted)] group-hover:text-white transition"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                    Source Repository
                                </a>
                                @endif
                                <button onclick="scrollToDemo('{{ $project->demo_id }}-gallery')" class="px-6 py-3 bg-accent-purple/10 border border-accent-purple/30 text-accent-purple rounded-xl text-xs font-bold uppercase tracking-widest hover:bg-accent-purple hover:text-white transition flex items-center gap-3">
                                    View Showcase
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="rotate-90"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </button>
                            </div>
                        </div>

                        <!-- Content Panel / Showcase -->
                        <div id="{{ $project->demo_id }}-gallery" class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[3rem] p-8 md:p-12 space-y-20 relative overflow-hidden backdrop-blur-sm">
                            <div class="absolute top-0 right-0 p-8 flex gap-2">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-400/30"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-yellow-400/30"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-green-400/30"></div>
                            </div>

                            <div id="{{ $project->demo_id }}-content" class="project-content-area">
                                <!-- Dynamic content will be injected here via JS for consistency with the main page demos -->
                                <div class="flex items-center justify-center py-20">
                                    <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-accent-purple"></div>
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
                const borderClass = isHighlight ? 'border-accent-purple' : 'border-[var(--border-color)]';
                return `
                    <div class="group/frame space-y-6">
                        <div class="aspect-[9/16] rounded-[2.5rem] overflow-hidden border ${borderClass} bg-black shadow-2xl relative transition-all duration-700 hover:scale-[1.02] hover:shadow-accent-purple/20">
                            <img src="{{ asset('image/') }}/${img}" class="w-full h-full object-cover">
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
                        <div class="aspect-video rounded-[2rem] overflow-hidden border ${borderClass} bg-[#0b011d] shadow-2xl relative transition-all duration-700 hover:scale-[1.03] hover:shadow-accent-purple/10">
                            <img src="{{ asset('image/') }}/${img}" class="w-full h-full object-cover object-top transition duration-1000 group-hover/frame:scale-105">
                        </div>
                        <div class="px-4 space-y-3">
                            <h5 class="text-[var(--text-main)] font-black text-xs uppercase tracking-widest flex items-center gap-3">
                                <span class="w-2 h-2 rounded-full bg-accent-purple shadow-[0_0_10px_rgba(139,92,246,0.5)]"></span>
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
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('social welfare.jpg', 'Modern Dashboard', 'Real-time overview of distribution metrics and case management systems.')}
                            ${createWebFrame('register.jpg', 'Secure Enrollment', 'Multi-factor authentication and identity verification portal for beneficiaries.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Operational Intelligence</h3>
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('assistance.jpg', 'Resource Mapping', 'Geospatial distribution tracking and logistics automation.')}
                            ${createWebFrame('history.jpg', 'Audit Trail', 'End-to-end transparency log for every transaction and distribution event.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">III. Resource Orchestration</h3>
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('announcement.jpg', 'Public Relations', 'Centralized notification engine for scheduled distributions and updates.')}
                            ${createWebFrame('feedback.jpg', 'Citizen portal', 'Encrypted feedback loop for service quality and grievance handling.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">IV. Document Integrity</h3>
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('certficate.png', 'Digital Credentials', 'Verified document generation for social welfare eligibility.')}
                            ${createWebFrame('id.jpg', 'Beneficiary ID', 'Secure digital identification system with QR-base verification.')}
                        </div>
                    </div>
                `,
                'sellio-demo': `
                    <div class="space-y-24">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">I. Mobile Experience</h3>
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            ${createAppFrame('home.jpg', 'Core Marketplace', 'Fluid navigation and product discovery engine with smart category filtering.', true)}
                            ${createAppFrame('product.jpg', 'Visual Listing', 'High-impact product presentation with detailed technical specifications.')}
                            ${createAppFrame('profile.jpg', 'Merchant Center', 'Comprehensive dashboard for sellers to monitor performance and earnings.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Transactional Security</h3>
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createAppFrame('order.jpg', 'Order Fulfillment', 'Dynamic tracking of transaction states and logistics updates.')}
                            ${createAppFrame('details.jpg', 'Secure Checkout', 'Encrypted payment gateways and integrated marketplace escrow logic.')}
                        </div>
                    </div>
                `,
                'news-demo': `
                    <div class="space-y-24">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">I. Global Hub</h3>
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('news_api.jpg', 'Intelligence Feed', 'Real-time headline aggregation with advanced semantic filtering.', true)}
                            ${createWebFrame('global.jpg', 'Global Discovery', 'Country-specific news nodes and language-localized content delivery.')}
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-[var(--text-main)] uppercase tracking-tighter">II. Sector Intelligence</h3>
                            <div class="w-20 h-1 bg-accent-purple rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            ${createWebFrame('technology.jpg', 'Technology Focus', 'Optimized reading view for technical news and software development updates.')}
                            ${createWebFrame('sports.jpg', 'Sports Arena', 'High-impact layout for dynamic sports coverage and news updates.')}
                            ${createWebFrame('business.jpg', 'Business Insights', 'Clean, data-focused interface for corporate headlines and market trends.')}
                            ${createWebFrame('health.jpg', 'Health & Science', 'Dedicated space for wellness breakthroughs and medical news discovery.')}
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
            });
        </script>
    </body>
</html>
