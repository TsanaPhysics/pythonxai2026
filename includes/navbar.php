<nav id="navbar" class="fixed w-full z-[60] transition-all duration-500 py-4 px-6">
    <div class="container mx-auto flex justify-between items-center glass rounded-2xl px-6 py-3 border border-white/10 shadow-xl">
        <!-- Brand Logo -->
        <a href="index.php" class="flex items-center space-x-3 group animate-fade-in">
            <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-amber-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-orange-500/20 group-hover:scale-110 transition-transform duration-300">
                <i class="fa-brands fa-python text-2xl"></i>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-orange-400 to-amber-300 font-outfit tracking-tight">Python xAI</span>
                <span class="text-[10px] text-orange-500/70 font-bold tracking-[0.3em] uppercase -mt-1">Ecosystem 2026</span>
            </div>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-1">
            <!-- Home -->
            <a href="index.php" class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-orange-400 transition-colors rounded-xl hover:bg-white/5 flex items-center gap-2">
                <img src="assets/images/pixar_home.png" alt="Home" class="w-5 h-5 object-contain">
                หน้าแรก
            </a>

            <!-- Curriculum Dropdown -->
            <div class="relative group">
                <button class="px-4 py-2 text-sm font-medium text-gray-300 group-hover:text-orange-400 transition-colors flex items-center gap-2 rounded-xl group-hover:bg-white/5">
                    <img src="assets/images/pixar_curriculum.png" alt="Curriculum" class="w-5 h-5 object-contain">
                    หลักสูตร AI <i class="fas fa-chevron-down text-[10px] opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                </button>
                <div class="absolute top-full left-0 mt-2 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 z-50">
                    <div class="glass border border-white/10 rounded-2xl shadow-2xl p-2 overflow-hidden">
                        <a href="index.php#module0" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-orange-500/20 rounded-xl transition-all">
                            <i class="fas fa-rocket text-orange-400"></i>
                            <div>
                                <div class="font-bold">ขั้นพื้นฐาน (Foundations)</div>
                                <div class="text-[10px] opacity-60">Module 0 - 1: Setup & Python Basics</div>
                            </div>
                        </a>
                        <a href="index.php#module2" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-orange-500/20 rounded-xl transition-all">
                            <i class="fas fa-brain text-orange-400"></i>
                            <div>
                                <div class="font-bold">ปัญญาประดิษฐ์ (ML & DL)</div>
                                <div class="text-[10px] opacity-60">Module 2 - 3: Machine & Deep Learning</div>
                            </div>
                        </a>
                        <a href="index.php#module4" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-orange-500/20 rounded-xl transition-all">
                            <i class="fas fa-robot text-orange-400"></i>
                            <div>
                                <div class="font-bold">ภาษาและภาพ (NLP & CV)</div>
                                <div class="text-[10px] opacity-60">Module 4 - 5: Chatbot & Vision</div>
                            </div>
                        </a>
                        <a href="index.php#module6" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-orange-500/20 rounded-xl transition-all">
                            <i class="fas fa-lightbulb text-orange-400"></i>
                            <div>
                                <div class="font-bold">โครงงาน Capstone</div>
                                <div class="text-[10px] opacity-60">Module 6: Final Presentation</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Special Tracks Dropdown -->
            <div class="relative group">
                <button class="px-4 py-2 text-sm font-medium text-gray-300 group-hover:text-orange-400 transition-colors flex items-center gap-2 rounded-xl group-hover:bg-white/5">
                    <img src="assets/images/pixar_special.png" alt="Special Tracks" class="w-5 h-5 object-contain">
                    เส้นทางพิเศษ <i class="fas fa-chevron-down text-[10px] opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                </button>
                <div class="absolute top-full left-0 mt-2 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 z-50">
                    <div class="glass border border-white/10 rounded-2xl shadow-2xl p-2">
                        <a href="index.php#special_setup" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-cyan-500/20 rounded-xl transition-all">
                            <i class="fas fa-tools text-cyan-400"></i>
                            <div>
                                <div class="font-bold"> Anaconda Setup </div>
                                <div class="text-[10px] opacity-60">เตรียมเครื่องสำหรับ Local Python</div>
                            </div>
                        </a>
                        <a href="index.php#special_kids" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-lime-500/20 rounded-xl transition-all">
                            <i class="fas fa-gamepad text-lime-400"></i>
                            <div>
                                <div class="font-bold">Python for Kids</div>
                                <div class="text-[10px] opacity-60">สร้างเกมควบคุมด้วย AI</div>
                            </div>
                        </a>
                        <a href="index.php#special_scientist" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-purple-500/20 rounded-xl transition-all">
                            <i class="fas fa-flask text-purple-400"></i>
                            <div>
                                <div class="font-bold">Young Scientist</div>
                                <div class="text-[10px] opacity-60">งานวิจัย AR Laboratory</div>
                            </div>
                        </a>
                        <div class="h-px bg-white/10 my-1"></div>
                        <a href="/SciExHub2026/grading.php?type=pre" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-yellow-500/20 rounded-xl transition-all">
                            <i class="fas fa-file-alt text-yellow-400"></i>
                            <div>
                                <div class="font-bold text-yellow-400">แบบทดสอบก่อนอบรม</div>
                                <div class="text-[10px] opacity-60 italic">Pre-test Assessment</div>
                            </div>
                        </a>
                        <a href="/SciExHub2026/grading.php?type=post" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-green-500/20 rounded-xl transition-all">
                            <i class="fas fa-check-circle text-green-400"></i>
                            <div>
                                <div class="font-bold text-green-400">แบบทดสอบหลังอบรม</div>
                                <div class="text-[10px] opacity-60 italic">Post-test Assessment</div>
                            </div>
                        </a>
                         <a href="/SciExHub2026/grading.php?type=satisfaction" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-pink-500/20 rounded-xl transition-all">
                            <i class="fas fa-heart text-pink-400"></i>
                            <div>
                                <div class="font-bold text-pink-400">แบบประเมินความพึงพอใจ</div>
                                <div class="text-[10px] opacity-60 italic">Satisfaction Survey</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Research Dropdown -->
            <div class="relative group">
                <button class="px-4 py-2 text-sm font-medium text-gray-300 group-hover:text-orange-400 transition-colors flex items-center gap-2 rounded-xl group-hover:bg-white/5">
                    <img src="assets/images/pixar_research.png" alt="Research Hub" class="w-5 h-5 object-contain">
                    ศูนย์วิจัย <i class="fas fa-chevron-down text-[10px] opacity-50 group-hover:rotate-180 transition-transform duration-300"></i>
                </button>
                <div class="absolute top-full right-0 mt-2 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 z-50">
                    <div class="glass border border-white/10 rounded-2xl shadow-2xl p-2">
                        <a href="smartphone_app_hub.php" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-cyan-500/20 rounded-xl transition-all">
                            <i class="fas fa-mobile-alt text-cyan-400"></i>
                            <div>
                                <div class="font-bold">Smartphone AI Hub</div>
                                <div class="text-[10px] opacity-60">คลังแอป Mobile AI นวัตกรรม</div>
                            </div>
                        </a>
                        <a href="index.php#projects" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-orange-500/20 rounded-xl transition-all">
                            <i class="fas fa-project-diagram text-orange-400"></i>
                            <div>
                                <div class="font-bold">Projects Hub</div>
                                <div class="text-[10px] opacity-60">รวมโครงการวิจัยทั้งหมด</div>
                            </div>
                        </a>
                        <a href="/pythonopencv/" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-cyan-500/20 rounded-xl transition-all">
                            <i class="fas fa-cube text-cyan-400"></i>
                            <div>
                                <div class="font-bold">Python 3D-XR Hub</div>
                                <div class="text-[10px] opacity-60">สื่อเรียนรู้ Spatial Computing</div>
                            </div>
                        </a>
                        <a href="/AI4Student_Project2026/" class="flex items-center gap-3 p-3 text-sm text-gray-300 hover:text-white hover:bg-purple-500/20 rounded-xl transition-all">
                            <i class="fas fa-user-graduate text-purple-400"></i>
                            <div>
                                <div class="font-bold">AI4Student</div>
                                <div class="text-[10px] opacity-60">นวัตกรรมโดยนักศึกษา</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Teaching Mode & Tools -->
            <div class="flex items-center gap-2 ml-4">
                <a href="interactive_presentation.php" target="_blank" class="px-5 py-2 text-sm font-black text-white bg-gradient-to-r from-orange-600 to-amber-500 rounded-xl shadow-lg shadow-orange-600/20 hover:shadow-orange-600/40 hover:-translate-y-0.5 transition-all flex items-center gap-2 uppercase tracking-widest">
                    <i class="fas fa-play-circle animate-pulse"></i> Live Mode
                </a>
                <a href="https://jupyter.org/try-jupyter/lab/" target="_blank" class="px-4 py-2 text-sm font-medium text-gray-100 hover:text-orange-400 transition-colors bg-white/5 border border-white/10 rounded-xl flex items-center gap-2">
                    <img src="assets/images/pixar_tools.png" alt="JupyterLab" class="w-5 h-5 object-contain">
                    Cloud Engine
                </a>
            </div>
        </div>

        <!-- Mobile Menu Toggle -->
        <button id="mobile-menu-btn" class="md:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 text-gray-300 relative z-[70]">
            <span class="w-6 h-0.5 bg-current rounded-full transition-all duration-300" id="nav-line-1"></span>
            <span class="w-6 h-0.5 bg-orange-500 rounded-full transition-all duration-300" id="nav-line-2"></span>
            <span class="w-6 h-0.5 bg-current rounded-full transition-all duration-300" id="nav-line-3"></span>
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-[#020617]/95 backdrop-blur-2xl z-[65] opacity-0 invisible transition-all duration-500 flex flex-col items-center justify-center p-10 overflow-y-auto">
        <div class="space-y-6 text-center w-full max-w-xs">
            <a href="index.php" class="block text-2xl font-bold text-white hover:text-orange-500 transition-colors">หน้าแรก</a>
            <a href="index.php#workshop" class="block text-2xl font-bold text-white hover:text-orange-500 transition-colors">Workshop</a>
            <a href="smartphone_app_hub.php" class="block text-2xl font-bold text-cyan-400 hover:text-cyan-300 transition-colors">Smartphone Hub</a>
            <a href="interactive_presentation.php" class="block text-2xl font-bold text-orange-500 hover:text-orange-400 transition-colors">Teaching Mode</a>
            <div class="h-px bg-white/10 w-full my-4"></div>
            <div class="grid grid-cols-2 gap-3 pb-4">
                <a href="/SciExHub2026/grading.php?type=pre" class="p-4 bg-yellow-500/10 border border-yellow-500/20 rounded-2xl text-yellow-400 text-sm font-bold text-center">Pre-Test</a>
                <a href="/SciExHub2026/grading.php?type=post" class="p-4 bg-green-500/10 border border-green-500/20 rounded-2xl text-green-400 text-sm font-bold text-center">Post-Test</a>
                <a href="/SciExHub2026/grading.php?type=satisfaction" class="col-span-2 p-4 bg-pink-500/10 border border-pink-500/20 rounded-2xl text-pink-400 text-sm font-bold text-center">แบบประเมินความพึงพอใจ</a>
            </div>
            <div class="h-px bg-white/10 w-full mb-8"></div>
            <a href="https://jupyter.org/try-jupyter/lab/" target="_blank" class="block px-8 py-4 bg-white/5 border border-white/10 rounded-2xl text-white font-bold">Launch Cloud Engine</a>
        </div>
    </div>
</nav>

<style>
    .glass {
        background: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
    }
    
    #navbar.scrolled .glass {
        background: rgba(2, 6, 23, 0.95);
        border-color: rgba(249, 115, 22, 0.2);
    }

    #mobile-menu-btn.active #nav-line-1 { transform: translateY(7px) rotate(45deg); }
    #mobile-menu-btn.active #nav-line-2 { opacity: 0; transform: translateX(-20px); }
    #mobile-menu-btn.active #nav-line-3 { transform: translateY(-7px) rotate(-45deg); }
    #mobile-overlay.active { opacity: 1; visibility: visible; }
</style>

<script>
    // Navbar Scroll Effect
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('navbar');
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
            nav.style.paddingTop = '10px';
            nav.style.paddingBottom = '10px';
        } else {
            nav.classList.remove('scrolled');
            nav.style.paddingTop = '1rem';
            nav.style.paddingBottom = '1rem';
        }
    });

    // Mobile Menu Logic
    const menuBtn = document.getElementById('mobile-menu-btn');
    const overlay = document.getElementById('mobile-overlay');
    
    menuBtn.addEventListener('click', () => {
        menuBtn.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.style.overflow = overlay.classList.contains('active') ? 'hidden' : '';
    });

    // Close menu on link click
    overlay.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menuBtn.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    });
</script>
