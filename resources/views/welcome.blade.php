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
            <span class="text-2xl font-bold text-blue-600 tracking-tight">Kindalem.T</span>
            <div class="hidden md:flex space-x-8 font-medium text-slate-700">
                <a href="#home" class="hover:text-blue-600 transition">Home</a>
                <a href="#about" class="hover:text-blue-600 transition">About</a>
                <a href="#skills" class="hover:text-blue-600 transition">Skills</a>
                <a href="#projects" class="hover:text-blue-600 transition">Projects</a>
                <a href="#contact" class="hover:text-blue-600 transition">Contact</a>
            </div>
            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition shadow-md">
                Admin Login
            </a>
        </div>
    </nav>

    <section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-center px-6 md:px-20 gap-16 pt-32 pb-20 bg-gradient-to-b from-blue-50 to-white">
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
            <div class="relative w-64 h-80 md:w-80 md:h-[450px] overflow-hidden rounded-2xl shadow-2xl border-4 border-white bg-white">
                <img src="{{ asset('images/Kindalem.jpg') }}" alt="Kindalem Tazeb" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="max-w-2xl text-center md:text-left">
            <span class="bg-blue-100 text-blue-700 px-4 py-1 rounded-full text-sm font-semibold tracking-wide uppercase">Available for Internships</span>
            <h1 class="text-5xl md:text-7xl font-extrabold mt-6 mb-6 tracking-tight">
                Hi, I'm <span class="text-blue-600 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-cyan-500">Kindalem!</span>
            </h1>
            <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                I am a 2nd-year Computer Science student at **Debark University**.
                I specialize in building robust, modern web applications using **PHP Laravel** and **Tailwind CSS**.
            </p>
            <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                <a href="#projects" class="px-8 py-3 bg-slate-900 text-white rounded-xl font-bold hover:bg-slate-800 transition shadow-lg">View Projects</a>
                <a href="/my-cv.pdf" download class="px-8 py-3 border-2 border-slate-900 text-slate-900 rounded-xl font-bold hover:bg-slate-900 hover:text-white transition">
                    <i class="fas fa-download mr-2"></i> Download CV
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 bg-white border-y border-slate-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8 text-slate-900">About Me</h2>
            <p class="text-slate-600 text-lg leading-relaxed italic">
                "I am passionate about creating innovative solutions in the digital world.
                With a primary focus on full-stack web development, I aim to build fast, secure, and scalable systems
                that solve real-world problems."
            </p>
        </div>
    </section>

    <section id="skills" class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-16">Technical Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                @php
                    $skills = [
                        ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => 'text-red-500'],
                        ['name' => 'PHP', 'icon' => 'fab fa-php', 'color' => 'text-indigo-600'],
                        ['name' => 'Tailwind', 'icon' => 'fab fa-css3-alt', 'color' => 'text-cyan-500'],
                        ['name' => 'MySQL', 'icon' => 'fas fa-database', 'color' => 'text-blue-500'],
                        ['name' => 'GitHub', 'icon' => 'fab fa-github', 'color' => 'text-slate-900'],
                    ];
                @endphp
                @foreach($skills as $skill)
                <div class="p-8 bg-white rounded-2xl shadow-sm border border-slate-100 hover:border-blue-500 hover:shadow-md transition group">
                    <i class="{{ $skill['icon'] }} {{ $skill['color'] }} text-5xl mb-4 group-hover:scale-110 transition"></i>
                    <h3 class="font-bold text-slate-800">{{ $skill['name'] }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">Featured Projects</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="group rounded-3xl border border-slate-200 bg-white overflow-hidden hover:shadow-2xl transition duration-500">
                    <div class="h-60 bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-university text-7xl text-white opacity-20 absolute -right-4 -bottom-4"></i>
                        <i class="fas fa-university text-6xl text-white group-hover:scale-110 transition duration-500"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-3">Banking Management System</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-sm">A secure fintech application for managing user accounts, transactions, and real-time bank statements.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-bold">Laravel</span>
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-full text-xs font-bold">MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="group rounded-3xl border border-slate-200 bg-white overflow-hidden hover:shadow-2xl transition duration-500">
                    <div class="h-60 bg-gradient-to-br from-cyan-500 to-teal-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-user-graduate text-7xl text-white opacity-20 absolute -right-4 -bottom-4"></i>
                        <i class="fas fa-user-graduate text-6xl text-white group-hover:scale-110 transition duration-500"></i>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-3">Student Registration System</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-sm">Efficient educational platform to manage student records, admissions, and course enrollments.</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 rounded-full text-xs font-bold">PHP</span>
                            <span class="px-3 py-1 bg-teal-50 text-teal-600 rounded-full text-xs font-bold">Tailwind</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 bg-slate-900 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Get In Touch</h2>
            <p class="text-slate-400 mb-12">Have a project in mind or want to work together? Drop a message!</p>

            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-xl mb-8 max-w-lg mx-auto animate-pulse">
                    <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 gap-6 max-w-lg mx-auto">
                @csrf
                <input type="text" name="name" required placeholder="Full Name"
                    class="p-4 rounded-xl bg-slate-800 border border-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

                <input type="email" name="email" required placeholder="Email Address"
                    class="p-4 rounded-xl bg-slate-800 border border-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

                <textarea name="message" rows="4" required placeholder="Message"
                    class="p-4 rounded-xl bg-slate-800 border border-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>

                <button type="submit"
                    class="py-4 bg-blue-600 rounded-xl font-bold hover:bg-blue-700 transition shadow-xl active:scale-95">
                    Send Message <i class="fas fa-paper-plane ml-2"></i>
                </button>
            </form>
        </div>
    </section>

    <footer class="py-12 text-center text-slate-500 bg-slate-900 border-t border-slate-800">
        <div class="flex justify-center space-x-6 mb-6">
            <a href="#" class="hover:text-white transition"><i class="fab fa-github text-2xl"></i></a>
            <a href="#" class="hover:text-white transition"><i class="fab fa-linkedin text-2xl"></i></a>
        </div>
        <p>© 2026 Kindalem Tazeb. Professional Portfolio Built with Laravel.</p>
    </footer>

</body>
</html>

