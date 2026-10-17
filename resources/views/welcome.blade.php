<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kindalem Tazeb | Full-Stack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 font-sans antialiased">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <span class="text-2xl font-bold text-blue-600 tracking-tight transition hover:scale-105">Kindalem.T</span>
            <div class="hidden md:flex space-x-8 font-medium text-slate-700">
                <a href="#home" class="hover:text-blue-600 transition">Home</a>
                <a href="#projects" class="hover:text-blue-600 transition">Projects</a>
                <a href="#contact" class="hover:text-blue-600 transition">Contact</a>
            </div>
            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition shadow-md active:scale-95">
                Admin Login
            </a>
        </div>
    </nav>
<section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-center px-6 md:px-20 gap-10 md:gap-12 pt-32 pb-20 bg-gradient-to-b from-blue-50 to-white">

    <!-- 1. የምስሉ ክፍል (በግራ በኩል) -->
    <div class="relative group flex-shrink-0 z-10">
        <!-- ከበስተጀርባ ያለው Glow Effect -->
        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>

        <!-- የክቡና የምስሉ መጠን (w-64 h-64 / md:w-72 md:h-72) -->
        <div class="relative w-64 h-64 md:w-72 md:h-72 rounded-full overflow-hidden border-4 border-white shadow-xl bg-white">
            <img src="{{ asset('images/newportfolio.jpg') }}"
                 alt="Kindalem Tazeb"
                 class="w-full h-full object-cover object-top scale-100 transition duration-500 group-hover:scale-105">
        </div>
    </div>

    <!-- 2. የጽሑፉ ክፍል (በቀኝ በኩል) -->
    <div class="max-w-2xl text-center md:text-left">
        <span class="bg-blue-100 text-blue-700 px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase shadow-sm">
            <i class="fas fa-laptop-code mr-2"></i> Available for Internships
        </span>

        <h1 class="text-5xl md:text-7xl font-extrabold mt-6 mb-6 tracking-tight leading-tight">
            Hi, I'm <span class="text-blue-600 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-cyan-500">Kindalem!</span>
        </h1>

        <div class="space-y-4 text-lg md:text-xl text-slate-600 mb-10 leading-relaxed">
            <p>
                I am a 3rd-year Computer Science student at <span class="text-slate-900 font-bold border-b-2 border-blue-200">Debark University</span>.
            </p>
            <p>
                As an aspiring <span class="text-blue-600 font-semibold">Full-Stack Web Developer</span>, I specialize in building robust backend systems and modern interfaces.
            </p>

            <!-- Tech Badges -->
            <div class="flex flex-wrap gap-3 pt-2 justify-center md:justify-start">
                <span class="flex items-center bg-white px-3 py-1.5 rounded-xl shadow-sm border border-slate-200 text-sm font-bold">
                    <i class="fab fa-php text-indigo-600 mr-2"></i> Laravel
                </span>
                <span class="flex items-center bg-white px-3 py-1.5 rounded-xl shadow-sm border border-slate-200 text-sm font-bold">
                    <i class="fab fa-css3-alt text-blue-500 mr-2"></i> Tailwind CSS
                </span>
                <span class="flex items-center bg-white px-3 py-1.5 rounded-xl shadow-sm border border-slate-200 text-sm font-bold">
                    <i class="fab fa-js text-yellow-500 mr-2"></i> JavaScript
                </span>
                <span class="flex items-center bg-white px-3 py-1.5 rounded-xl shadow-sm border border-slate-200 text-sm font-bold">
                    <i class="fas fa-code text-gray-600 mr-2"></i> CSS
                </span>
                <span class="flex items-center bg-white px-3 py-1.5 rounded-xl shadow-sm border border-slate-200 text-sm font-bold">
                    <i class="fab fa-html5 text-orange-600 mr-2"></i> HTML
                </span>
                <span class="flex items-center bg-white px-3 py-1.5 rounded-xl shadow-sm border border-slate-200 text-sm font-bold">
                    <i class="fas fa-database text-emerald-500 mr-2"></i> MySQL
                </span>
                <span class="flex items-center bg-white px-3 py-1.5 rounded-xl shadow-sm border border-slate-200 text-sm font-bold">
                    <i class="fab fa-git-alt text-orange-500 mr-2"></i> Git
                </span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-wrap gap-4 justify-center md:justify-start">
            <a href="#projects" class="px-8 py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-slate-800 transition shadow-xl hover:-translate-y-1 flex items-center">
                <i class="fas fa-code-branch mr-2 text-blue-400"></i> Explore Projects
            </a>
            <a href="{{ asset('assets/resume.pdf') }}" download class="px-8 py-4 border-2 border-slate-900 text-slate-900 rounded-2xl font-bold hover:bg-slate-900 hover:text-white transition hover:-translate-y-1 flex items-center">
                <i class="fas fa-file-download mr-2"></i> Get Resume
            </a>
        </div>
    </div>

</section>

    <section id="projects" class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center mb-4">Featured Projects</h2>
            <p class="text-center text-slate-500 mb-16 max-w-2xl mx-auto">Selected works showcasing my expertise in Laravel and responsive design.</p>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="group rounded-3xl border border-slate-200 bg-white overflow-hidden hover:shadow-2xl transition duration-500 hover:-translate-y-2">
                    <div class="h-60 bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-university text-8xl text-white opacity-20 absolute -right-4 -bottom-4"></i>
                        <i class="fas fa-university text-7xl text-white group-hover:scale-110 transition duration-500"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-3">Banking Management System</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">A secure application for managing transactions, accounts, and financial data.</p>
                        <div class="flex justify-between items-center">
                            <a href="https://github.com/kindalemtazeb-ops/ADWA_BANK" target="_blank" class="px-5 py-2 bg-blue-600 text-white rounded-xl text-sm font-bold hover:bg-blue-700 transition shadow-md">
                                <i class="fab fa-github mr-2"></i> View Code
                            </a>
                            <span class="px-4 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-bold uppercase tracking-wider">Laravel</span>
                        </div>
                    </div>
                </div>

                <div class="group rounded-3xl border border-slate-200 bg-white overflow-hidden hover:shadow-2xl transition duration-500 hover:-translate-y-2">
                    <div class="h-60 bg-gradient-to-br from-cyan-500 to-teal-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-user-graduate text-8xl text-white opacity-20 absolute -right-4 -bottom-4"></i>
                        <i class="fas fa-user-graduate text-7xl text-white group-hover:scale-110 transition duration-500"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-3">Student Registration System</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">A functional CRUD system for managing student records and admissions.</p>
                        <div class="flex justify-between items-center">
                            <a href="https://github.com/kindalemtazeb-ops/kindalemtazeb-ops-student_registration" target="_blank" class="px-5 py-2 bg-teal-600 text-white rounded-xl text-sm font-bold hover:bg-teal-700 transition shadow-md">
                                <i class="fab fa-github mr-2"></i> View Code
                            </a>
                            <span class="px-4 py-1 bg-cyan-50 text-cyan-600 rounded-full text-xs font-bold uppercase tracking-wider">PHP/CRUD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 bg-slate-900 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold mb-4">Let's Connect</h2>
            <p class="text-slate-400 mb-12">Drop a message for collaboration or internship opportunities.</p>
            <form action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 gap-6 max-w-lg mx-auto">
                @csrf
                <div class="relative">
                    <i class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-slate-500"></i>
                    <input type="text" name="name" required placeholder="Your Name" class="w-full p-4 pl-12 rounded-2xl bg-slate-800 border border-slate-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
                </div>
                <div class="relative">
                    <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-500"></i>
                    <input type="email" name="email" required placeholder="Email Address" class="w-full p-4 pl-12 rounded-2xl bg-slate-800 border border-slate-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
                </div>
                <textarea name="message" rows="4" required placeholder="How can I help you?" class="p-4 rounded-2xl bg-slate-800 border border-slate-700 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"></textarea>
                <button type="submit" class="py-4 bg-blue-600 rounded-2xl font-bold hover:bg-blue-700 transition active:scale-95 shadow-lg shadow-blue-600/20">
                    Send Message <i class="fas fa-paper-plane ml-2"></i>
                </button>
            </form>
        </div>
    </section>

    <footer class="py-12 text-center text-slate-500 bg-slate-900 border-t border-slate-800">
        <div class="flex justify-center space-x-6 mb-6">
            <a href="https://github.com/kindalemtazeb-ops" target="_blank" class="text-2xl hover:text-white transition"><i class="fab fa-github"></i></a>
            <a href="#" class="text-2xl hover:text-white transition"><i class="fab fa-linkedin"></i></a>
        </div>
        <p class="text-sm">© 2026 Kindalem Tazeb. Professional Portfolio Built with Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>
