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

<<<<<<< HEAD
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

=======
>>>>>>> 980d4da (Project)
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            :root {
<<<<<<< HEAD
                --accent: #0ef;
                --bg: #1f242d;
                --bg-lighter: #323946;
=======
                --accent: #C19A6B;
                --bg: #050505;
                --bg-lighter: #0A0A0A;
>>>>>>> 980d4da (Project)
            }
            body { 
                background-color: var(--bg);
                color: #ffffff;
                font-family: 'Instrument Sans', sans-serif;
                overflow-x: hidden;
            }
            .font-serif { font-family: 'Instrument Serif', serif; }
            .font-outfit { font-family: 'Outfit', sans-serif; }
            .text-accent { color: var(--accent); }
            .bg-accent { background-color: var(--accent); }
            
            .glass-nav {
<<<<<<< HEAD
                background: rgba(31, 36, 45, 0.8);
                backdrop-filter: blur(10px);
                border-bottom: 2px solid rgba(0, 238, 255, 0.1);
            }

            .hex-frame {
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                background: var(--accent);
                position: relative;
                transition: 0.5s;
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
            }
            .hex-frame:hover {
                box-shadow: 0 0 50px var(--accent);
            }

            .btn-neon {
                background: var(--accent);
                box-shadow: 0 0 10px var(--accent);
                transition: 0.5s;
            }
            .btn-neon:hover {
                box-shadow: 0 0 30px var(--accent);
            }

            .italic { font-style: italic; }
=======
                background: rgba(10, 10, 10, 0.4);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .watermark {
                position: absolute;
                top: 50%;
                left: -5%;
                transform: translateY(-50%);
                font-size: 20vw;
                font-family: 'Instrument Serif', serif;
                font-style: italic;
                color: rgba(255, 255, 255, 0.02);
                line-height: 1;
                pointer-events: none;
                white-space: nowrap;
                z-index: 0;
            }

            .hero-line {
                display: inline-block;
                width: 40px;
                height: 1px;
                background-color: rgba(255, 255, 255, 0.1);
                vertical-align: middle;
                margin-left: 15px;
            }
>>>>>>> 980d4da (Project)
        </style>
    </head>
    <body class="antialiased selection:bg-accent selection:text-white">
        
<<<<<<< HEAD
        <header class="fixed top-0 left-0 w-full px-[9%] py-8 flex justify-between items-center z-50 glass-nav">
            <a href="#" class="text-2xl font-bold text-white cursor-default">Portfolio<span class="text-accent">.</span></a>
            
            <nav class="flex items-center gap-8">
                <a href="#home" class="text-lg font-medium text-white hover:text-accent transition active">Home</a>
                <a href="#about" class="text-lg font-medium text-white hover:text-accent transition">About</a>
                <a href="#certificates" class="text-lg font-medium text-white hover:text-accent transition">Certificates</a>
                <a href="#projects" class="text-lg font-medium text-white hover:text-accent transition">Projects</a>
                <a href="#experience" class="text-lg font-medium text-white hover:text-accent transition">Experience</a>
                <a href="#contact" class="px-7 py-2 btn-neon text-black font-bold text-sm uppercase rounded-full hover:brightness-110 transition ml-4">
                    Contact
                </a>
=======
        <!-- Navigation -->
        <header class="fixed top-8 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-50">
            <nav class="glass-nav rounded-full px-8 py-4 flex items-center justify-between">
                <div class="text-2xl font-serif tracking-tight">UJ<span class="text-accent">.</span></div>
                
                <div class="hidden lg:flex items-center gap-10">
                    <a href="#home" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Home</a>
                    <a href="#about" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">About</a>
                    <a href="#certificates" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Certificates</a>
                    <a href="#projects" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Projects</a>
                    <a href="#experience" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Experience</a>
                </div>

                <div class="flex items-center gap-6">
                    <a href="#contact" class="px-8 py-3 bg-accent text-black font-bold text-[10px] uppercase tracking-[0.2em] rounded-full hover:brightness-110 transition">
                        Contact
                    </a>
                    <div class="text-gray-600 hover:text-white cursor-pointer transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-40 hover:opacity-100 transition"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </div>
                </div>
>>>>>>> 980d4da (Project)
            </nav>
        </header>

        <!-- Hero Section -->
<<<<<<< HEAD
        <div id="home" class="relative min-h-screen flex items-center bg-bg px-[9%] py-10">
            <main class="max-w-7xl mx-auto w-full">
                <div class="grid lg:grid-cols-2 lg:items-center gap-12">
                    <div class="space-y-6">
                        <h3 class="text-3xl font-bold text-white">Hello, It's Me</h3>
                        <h1 class="text-6xl md:text-7xl font-bold leading-tight text-white mb-2">Uriel John G. <br> <span class="italic">Chavez.</span></h1>
                        <h3 class="text-3xl font-bold text-white">And I'm a <span class="text-accent">Information Technology Student</span></h3>
                        
                        <p class="text-lg text-white/70 max-w-xl leading-relaxed">
                            Bachelor of Science in Information Technology student, focusing on technical IT solutions and complex system infrastructures.
                        </p>

                        <div class="flex gap-4 mb-8">
                            <a href="#" class="w-10 h-10 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.493-1.1-1.1s.493-1.1 1.1-1.1 1.1.493 1.1 1.1-.493 1.1-1.1 1.1zm8 6.891h-2v-3.418c0-.847-.019-1.938-1.181-1.938-1.181 0-1.362.922-1.362 1.876v3.48h-2v-6h1.92v.82h.028c.267-.506.92-1.038 1.89-1.038 2.022 0 2.396 1.332 2.396 3.064v3.254z"/></svg>
                            </a>
                        </div>

                        <a href="#" class="inline-block px-10 py-3 btn-neon text-black font-bold text-lg rounded-full hover:brightness-110 transition">Download CV</a>
                    </div>
                    
                    <div class="flex justify-center lg:justify-end">
                        <div class="hex-frame w-80 h-80 md:w-96 md:h-96">
                            <img src="{{ asset('image/uriell.jpg') }}" alt="Uriel John Chavez">
=======
        <div id="home" class="relative min-h-screen flex items-center">
            <div class="watermark select-none">CHAVEZ</div>
            
            <main class="max-w-7xl mx-auto px-10 w-full relative z-10 py-32">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-20">
                    <div class="flex-1 space-y-12">
                        <div class="space-y-6">
                            <p class="text-[10px] uppercase tracking-[0.6em] text-gray-500 font-bold font-outfit">Bachelor of Science in Information Technology</p>
                            <h1 class="text-7xl md:text-[110px] font-serif leading-[0.85] tracking-tight">
                                Uriel John G. <br> 
                                <span class="italic font-serif">Chavez</span><span class="text-accent">.</span>
                            </h1>
                        </div>
                        
                        <p class="text-xl text-gray-500 max-w-lg italic font-medium leading-[1.6]">
                            Bachelor of Science in Information Technology student, focusing on technical IT solutions and complex system infrastructures.
                        </p>
                        
                        <div class="flex items-center gap-12 pt-4">
                            <a href="#projects" class="px-12 py-5 bg-accent text-black font-bold text-[11px] uppercase tracking-[0.2em] rounded-full hover:scale-105 transition transform shadow-2xl shadow-accent/20">
                                The Collection
                            </a>
                            <div class="flex items-center group cursor-pointer">
                                <a href="#about" class="text-[11px] uppercase tracking-[0.2em] font-bold text-white group-hover:text-accent transition">Learn More</a>
                                <div class="hero-line group-hover:bg-accent group-hover:w-16 transition-all duration-500"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hero Image Card -->
                    <div class="relative w-full lg:w-[450px]">
                        <div class="aspect-[4/5] rounded-[2rem] overflow-hidden relative border-[12px] border-white/5 shadow-2xl bg-gray-900/50">
                            <img src="{{ asset('image/uriell.jpg') }}" alt="Uriel John Chavez" class="w-full h-full object-cover grayscale-[20%] brightness-90">
                            <div class="absolute inset-x-0 bottom-0 p-12 bg-gradient-to-t from-black via-black/80 to-transparent">
                                <p class="text-[10px] uppercase tracking-[0.5em] text-accent font-black mb-1 opacity-70">Practicum</p>
                                <h3 class="text-3xl font-serif text-white uppercase tracking-[0.1em]">Portfolio</h3>
                            </div>
>>>>>>> 980d4da (Project)
                        </div>
                    </div>
                </div>
            </main>
        </div>

<<<<<<< HEAD
        <!-- About Section -->
        <div id="about" class="bg-bg-lighter py-32 px-[9%] border-y border-white/5">
            <main class="max-w-7xl mx-auto w-full">
                <div class="grid lg:grid-cols-2 lg:items-center gap-16 lg:gap-32">
                    <div class="flex justify-center lg:justify-start order-2 lg:order-1">
                        <div class="hex-frame w-72 h-72 md:w-80 md:h-80 lg:w-96 lg:h-96">
                            <img src="{{ asset('image/uriell.jpg') }}" alt="About Uriel John Chavez">
                        </div>
                    </div>

                    <div class="space-y-10 order-1 lg:order-2">
                        <div class="space-y-6">
                            <h2 class="text-5xl font-bold text-white">About <span class="text-accent">Me</span></h2>
                            <h3 class="text-2xl font-bold text-white tracking-tight">Frontend Developer!</h3>
                        </div>
                        
                        <div class="space-y-6 text-white/70 text-lg leading-relaxed italic font-medium">
                            <p>In the rapidly evolving world of IT, I believe in the power of structured logic. Success is about the precision of every detail, from the backend architecture to the network scalability.</p>
                            <p>I build digital systems that are not only efficient—where every line of code and system configuration has a clear purpose. High-performance IT meets strong infrastructure design.</p>
                        </div>
                        <a href="#" class="inline-block px-10 py-3 btn-neon text-black font-bold text-lg rounded-full hover:brightness-110 transition">Read More</a>
                    </div>
                </div>
            </main>
        </div>

        <!-- Credentials Section -->
        <div id="certificates" class="bg-bg py-32 px-[9%]">
            <main class="max-w-7xl mx-auto w-full">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-20 gap-6">
                    <div class="space-y-4 text-left">
                        <p class="text-[10px] uppercase tracking-[0.5em] text-accent font-bold font-outfit">CREDENTIALS</p>
                        <h2 class="text-6xl font-serif italic text-white uppercase tracking-tight leading-none">ITS Certificates</h2>
                    </div>
                    <a href="#" class="text-[10px] uppercase tracking-[0.2em] text-white/30 hover:text-accent transition font-bold flex items-center gap-2 border-b border-white/5 pb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        MANAGE CREDENTIALS
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($certificates as $certificate)
                    <div class="bg-[#111111] p-10 rounded-[2.5rem] border border-white/5 group hover:border-accent/30 transition-all duration-500 flex flex-col h-full shadow-2xl">
                        <div class="bg-[#1a1a1a] rounded-3xl p-4 mb-10 group-hover:bg-[#222222] transition-colors border border-white/5 flex items-center justify-center">
                            <div class="aspect-video w-full rounded-2xl overflow-hidden shadow-inner relative">
                                <img src="{{ $certificate->image ?? asset('image/uriell.jpg') }}" alt="{{ $certificate->title }}" class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000 scale-105 group-hover:scale-110">
                            </div>
                        </div>
                        
                        <div class="space-y-8 flex-1 flex flex-col">
                            <h3 class="text-4xl font-serif italic text-white leading-tight min-h-[1.2em]">{{ $certificate->title }}</h3>
                            
                            <div class="space-y-6 flex-1">
                                <div class="space-y-2">
                                    <p class="text-[9px] uppercase tracking-[0.2em] text-white/40 font-bold">ADMINISTERED BY: <span class="text-white/60 ml-2 tracking-normal uppercase">{{ $certificate->administered_by ?? 'UNIVERSITY OF MINDANAO' }}</span></p>
                                    <p class="text-[9px] uppercase tracking-[0.2em] text-white/40 font-bold">LANGUAGE: <span class="text-white/60 ml-2 tracking-normal uppercase uppercase">{{ $certificate->language ?? 'ENGLISH' }}</span></p>
                                </div>
                                
                                <div class="w-full h-[1px] bg-white/5"></div>
                                
                                <div class="space-y-1">
                                    <p class="text-[10px] uppercase tracking-[0.2em] text-white/50 font-black">Information Technology Specialist</p>
                                    <p class="text-sm text-white/30 font-medium">{{ $certificate->year }}</p>
                                </div>
                            </div>
                            
                            <div class="pt-8 border-t border-white/5 mt-auto flex justify-between items-center group/btn cursor-pointer">
                                <span class="text-[10px] uppercase tracking-[0.3em] text-white group-hover:text-accent font-bold transition">VERIFY CREDENTIAL</span>
                                <div class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/30 group-hover:text-accent group-hover:border-accent transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
=======
        <!-- Manifesto Section -->
        <div id="about" class="bg-[#0A0A0A] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="grid lg:grid-cols-2 gap-32 items-start">
                    <div class="space-y-10">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">The Manifesto</p>
                        <h2 class="text-6xl md:text-7xl font-serif leading-tight">
                            "Clarity is the <br> foundation of <br> Information <br> Technology."
                        </h2>
                        <div class="space-y-8 text-gray-500 text-lg leading-relaxed max-w-lg italic font-medium">
                            <p>In the rapidly evolving world of IT, I believe in the power of structured logic. Success is about the precision of every detail, from the backend architecture to system scalability.</p>
                            <p>I build digital systems that are not only efficient but also intuitive—where every line of code has a clear purpose.</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-6 mt-16">
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Years</span>
                            <h4 class="text-6xl font-serif">10+</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Experience</p>
                        </div>
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Projects</span>
                            <h4 class="text-6xl font-serif">120+</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Delivered</p>
                        </div>
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Awards</span>
                            <h4 class="text-6xl font-serif">04</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Excellence</p>
                        </div>
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Clients</span>
                            <h4 class="text-6xl font-serif">45+</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Global Leaders</p>
                        </div>
                    </div>
>>>>>>> 980d4da (Project)
                </div>
            </main>
        </div>

        <!-- Experience Section -->
<<<<<<< HEAD
        <div id="experience" class="bg-bg-lighter py-32 px-[9%] border-b border-white/5">
            <main class="max-w-7xl mx-auto w-full">
                <div class="text-center space-y-4 mb-20">
                    <h2 class="text-5xl font-bold text-white">My <span class="text-accent">Experience</span></h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($experiences as $experience)
                    <div class="bg-bg-lighter p-10 rounded-3xl border border-white/5 hover:border-accent hover:scale-105 transition duration-500 group flex flex-col justify-between h-auto shadow-xl">
                        <div class="space-y-6">
                            <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-black transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white">{{ $experience->role }}</h3>
                            <p class="text-[11px] uppercase tracking-[0.2em] text-accent font-bold">{{ $experience->company }} | {{ $experience->year }}</p>
                            <p class="text-white/60 leading-relaxed text-sm">
                                {{ $experience->description }}
                            </p>
                        </div>
                        <a href="#" class="inline-block mt-8 px-8 py-2.5 btn-neon text-black font-bold text-sm rounded-full text-center">Details</a>
                    </div>
                    @endforeach
=======
        <div id="experience" class="bg-[#050505] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="grid lg:grid-cols-12 gap-16">
                     <div class="lg:col-span-4 space-y-8 lg:sticky lg:top-40 h-fit">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">Journey</p>
                        <h2 class="text-6xl font-serif italic text-white/95 leading-tight">Professional <br> Experience</h2>
                        <p class="text-gray-500 text-lg leading-relaxed max-w-sm italic font-medium">A timeline of my technical growth and professional focus.</p>
                    </div>

                    <div class="lg:col-span-8 space-y-20">
                        @php $experience = [
                            ['role' => 'Practicum Student', 'company' => 'IT Department', 'year' => '2024 - Present', 'desc' => 'Implementing system architectures and managing database infrastructures for academic projects.'],
                            ['role' => 'Technical Lead', 'company' => 'Project Alpha', 'year' => '2023 - 2024', 'desc' => 'Led a team of 5 in developing a microservices-based workspace solution.'],
                        ]; @endphp
                        
                        @foreach($experience as $exp)
                        <div class="group flex gap-12">
                             <div class="w-24 pt-2 text-[10px] uppercase tracking-[0.3em] font-bold text-gray-600 group-hover:text-accent transition duration-500">{{ $exp['year'] }}</div>
                             <div class="flex-1 space-y-6 pb-20 border-l border-white/5 pl-16 relative">
                                 <div class="absolute -left-[1px] top-4 w-[2px] h-8 bg-accent/20 group-hover:bg-accent group-hover:h-full transition-all duration-700"></div>
                                 <h4 class="text-4xl font-serif italic text-white/90">{{ $exp['role'] }}</h4>
                                 <p class="text-[10px] uppercase tracking-[0.3em] text-accent font-black">{{ $exp['company'] }}</p>
                                 <p class="text-gray-400 text-lg leading-relaxed italic max-w-2xl font-medium">{{ $exp['desc'] }}</p>
                             </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>

        <!-- Certificates -->
        <div id="certificates" class="bg-[#0A0A0A] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="space-y-24">
                    <div class="space-y-6">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">Credentials</p>
                        <h2 class="text-6xl md:text-7xl font-serif italic text-white/95">ITS Certificates</h2>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-10">
                        @php $certificates = [
                            ['title' => 'HTML and CSS', 'year' => '2024'],
                            ['title' => 'Databases', 'year' => '2024'],
                            ['title' => 'Java', 'year' => '2022']
                        ]; @endphp
                        @foreach($certificates as $cert)
                        <div class="bg-[#050505] p-10 rounded-[2.5rem] border border-white/5 space-y-10 group hover:border-accent/40 transition duration-500">
                            <div class="aspect-video bg-white/5 rounded-2xl overflow-hidden flex items-center justify-center p-3">
                                 <div class="w-full h-full bg-gray-900/50 rounded-xl flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform duration-700">
                                     <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest text-center px-4">{{ $cert['title'] }}</p>
                                 </div>
                            </div>
                            <div class="space-y-4">
                                <h4 class="text-3xl font-serif italic">{{ $cert['title'] }}</h4>
                                <div class="border-t border-white/5 pt-6">
                                    <p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 font-bold">UM Indanao &bull; {{ $cert['year'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
>>>>>>> 980d4da (Project)
                </div>
            </main>
        </div>

        <!-- Projects Section -->
<<<<<<< HEAD
        <div id="projects" class="bg-bg py-32 px-[9%]">
            <main class="max-w-7xl mx-auto w-full">
                <div class="text-center space-y-4 mb-20">
                    <h2 class="text-5xl font-bold text-white">Latest <span class="text-accent">Project</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                    <div class="relative rounded-3xl overflow-hidden group border border-white/5 hover:border-accent/30 transition duration-500 shadow-2xl h-80">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale brightness-50 group-hover:grayscale-0 group-hover:brightness-100 group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8 transform translate-y-2 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
                            <p class="text-white/70 text-sm mb-6 line-clamp-2">{{ $project->description }}</p>
                            <a href="#" class="w-10 h-10 bg-accent rounded-full flex items-center justify-center text-black hover:scale-110 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
=======
        <div id="projects" class="bg-[#050505] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="space-y-32">
                     <div class="space-y-6">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">The Collection</p>
                        <h2 class="text-6xl md:text-7xl font-serif italic text-white/95">Selected Works</h2>
                    </div>

                    <div class="space-y-48">
                        <!-- Project Case -->
                        <div class="flex flex-col lg:flex-row items-center gap-24">
                            <div class="flex-1 w-full aspect-[16/10] rounded-[3rem] bg-white/5 border border-white/10 p-3 relative group overflow-hidden shadow-2xl">
                                 <div class="w-full h-full bg-gray-900 rounded-[2.5rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-700 cursor-pointer"></div>
                            </div>
                            <div class="lg:w-[400px] space-y-8">
                                <p class="text-[11px] uppercase tracking-[0.3em] text-gray-500 font-bold">Archive / 2024 &bull; 01</p>
                                <h3 class="text-5xl font-serif italic text-white leading-[1.1]">Core Systems <br> Architecture</h3>
                                <p class="text-gray-400 text-lg leading-relaxed italic font-medium">A high-performance backend engine designed for large-scale enterprise data management.</p>
                                <div class="flex gap-6 pt-4">
                                     <button class="w-16 h-16 rounded-full border border-white/10 flex items-center justify-center text-accent group hover:bg-accent hover:text-black transition duration-500">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17l9.2-9.2M17 17V7H7"/></svg>
                                     </button>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col lg:flex-row-reverse items-center gap-24">
                            <div class="flex-1 w-full aspect-[16/10] rounded-[3rem] bg-white/5 border border-white/10 p-3 relative group overflow-hidden shadow-2xl">
                                 <div class="w-full h-full bg-gray-900 rounded-[2.5rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-700 cursor-pointer"></div>
                            </div>
                            <div class="lg:w-[400px] space-y-8">
                                <p class="text-[11px] uppercase tracking-[0.3em] text-gray-500 font-bold">Archive / 2024 &bull; 02</p>
                                <h3 class="text-5xl font-serif italic text-white leading-[1.1]">Cloud Workspace OS</h3>
                                <p class="text-gray-400 text-lg leading-relaxed italic font-medium">Redefining for digital workspace through modular system architecture.</p>
                                <div class="flex gap-6 pt-4">
                                     <button class="w-16 h-16 rounded-full border border-white/10 flex items-center justify-center text-accent group hover:bg-accent hover:text-black transition duration-500">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17l9.2-9.2M17 17V7H7"/></svg>
                                     </button>
                                </div>
                            </div>
                        </div>
                    </div>
>>>>>>> 980d4da (Project)
                </div>
            </main>
        </div>

<<<<<<< HEAD
        <!-- Contact Section -->
        <div id="contact" class="bg-bg-lighter py-32 px-[9%]">
            <main class="max-w-3xl mx-auto w-full">
                <div class="text-center space-y-4 mb-20">
                    <h2 class="text-5xl font-bold text-white">Contact <span class="text-accent">Me!</span></h2>
                </div>

                <form action="#" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Full Name" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                        <input type="email" placeholder="Email Address" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="number" placeholder="Mobile Number" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                        <input type="text" placeholder="Email Subject" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                    </div>
                    <textarea rows="8" placeholder="Your Message" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition resize-none"></textarea>
                    
                    <div class="text-center">
                        <button type="submit" class="px-12 py-3 btn-neon text-black font-bold text-lg rounded-full hover:brightness-110 transition">Send Message</button>
                    </div>
                </form>
            </main>
        </div>

        <footer class="bg-bg py-8 text-center border-t border-white/5 relative">
            <p class="text-white/50 text-sm">Copyright &copy; 2024 by Uriel Chavez | All Rights Reserved.</p>
            <a href="#home" class="absolute right-[9%] top-1/2 -translate-y-1/2 w-10 h-10 bg-accent rounded-xl flex items-center justify-center text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
            </a>
=======
        <footer class="py-24 bg-[#050505] border-t border-white/5">
             <div class="max-w-7xl mx-auto px-10 flex flex-col items-center gap-12 text-center">
                 <div class="text-4xl font-serif tracking-tight">UJ<span class="text-accent">.</span></div>
                 <div class="flex gap-16">
                     <a href="#" class="text-[11px] uppercase tracking-[0.4em] text-gray-400 hover:text-accent transition font-bold">Linkedin</a>
                     <a href="#" class="text-[11px] uppercase tracking-[0.4em] text-gray-400 hover:text-accent transition font-bold">Github</a>
                     <a href="#" class="text-[11px] uppercase tracking-[0.4em] text-gray-400 hover:text-accent transition font-bold">Email</a>
                 </div>
                 <p class="text-[10px] uppercase tracking-[0.4em] text-gray-600 font-bold">&copy; {{ date('Y') }} Uriel John G. Chavez. IT Infrastructure.</p>
             </div>
>>>>>>> 980d4da (Project)
        </footer>
    </body>
</html>
