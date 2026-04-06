<?php include 'includes/head.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden bg-[#020617]">
    <div class="absolute inset-0 tech-grid opacity-20"></div>
    <div class="absolute inset-0 tech-dots opacity-10"></div>
    
    <!-- Glowing Orbs -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[500px] h-[500px] bg-emerald-600/10 rounded-full filter blur-[120px] animate-pulse"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-cyan-600/10 rounded-full filter blur-[120px] animate-pulse" style="animation-delay: 2s;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-1/2 lg:pr-12 text-center lg:text-left mb-12 lg:mb-0">
                <div class="inline-block px-4 py-2 bg-emerald-500/10 text-emerald-400 rounded-full text-[10px] font-bold mb-6 border border-emerald-500/20 shadow-lg shadow-emerald-500/10 uppercase tracking-[0.2em]">
                    <i class="fas fa-mobile-alt mr-2 animate-pulse"></i> NEXT-GEN MOBILE AGRITECH
                </div>
                <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight mb-6 text-white font-outfit uppercase tracking-tight">
                    Smartphone <br>
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 to-cyan-300">App Hub</span>
                </h1>
                <p class="text-lg text-gray-400 mb-8 leading-relaxed font-medium max-w-lg mx-auto lg:mx-0">
                    ศูนย์รวมแอปพลิเคชันนวัตกรรมอัจฉริยะที่ผสานพลัง <span class="text-emerald-500 font-bold">Flutter</span> และ <span class="text-cyan-400 font-bold">TensorFlow Lite</span> 
                    เพื่อการแก้ปัญหาจริงในระดับภูมิภาค
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#app-catalog" class="bg-gradient-to-r from-emerald-600 to-cyan-500 text-white px-8 py-4 rounded-xl font-bold shadow-xl shadow-emerald-600/20 hover:shadow-emerald-600/40 hover:-translate-y-1 transition-all flex items-center justify-center">
                        <i class="fas fa-th-large mr-2"></i> ส่องคลังแอป
                    </a>
                    <a href="#tech-stack" class="bg-white/5 text-gray-300 border border-white/10 px-8 py-4 rounded-xl font-bold backdrop-blur-sm shadow-sm hover:bg-white/10 transition-all flex items-center justify-center">
                        <i class="fas fa-layer-group mr-2"></i> โครงสร้างระบบ
                    </a>
                </div>
                
                <!-- Hero Stats / Tech Tickers -->
                <div class="mt-12 grid grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="px-4 py-3 bg-white/5 rounded-2xl border border-white/10 backdrop-blur-md">
                        <div class="text-xs text-emerald-400 font-bold tracking-widest uppercase mb-1">Status</div>
                        <div class="text-white font-outfit font-bold">PRODUCTION</div>
                    </div>
                    <div class="px-4 py-3 bg-white/5 rounded-2xl border border-white/10 backdrop-blur-md">
                        <div class="text-xs text-cyan-400 font-bold tracking-widest uppercase mb-1">AI Engine</div>
                        <div class="text-white font-outfit font-bold">Edge AI (TFL)</div>
                    </div>
                    <div class="px-4 py-3 bg-white/5 rounded-2xl border border-white/10 backdrop-blur-md hidden lg:block">
                        <div class="text-xs text-orange-400 font-bold tracking-widest uppercase mb-1">Framework</div>
                        <div class="text-white font-outfit font-bold">Flutter 3.x</div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-md lg:max-w-lg floating-anim">
                    <div class="absolute inset-0 bg-emerald-500/10 blur-[120px] rounded-full scale-110 opacity-40"></div>
                    <img src="assets/images/smartphone_app_hub_hero.png" alt="Smartphone App Hub" class="w-full h-auto object-contain relative z-10 filter drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- App Catalog Section -->
<section id="app-catalog" class="py-24 relative overflow-hidden bg-[#020617]">
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-white mb-6 font-outfit">
                คลังนวัตกรรม <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 to-cyan-300">Mobile AI</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-cyan-500 mx-auto rounded-full mb-8 shadow-[0_0_15px_rgba(16,185,129,0.5)]"></div>
            <p class="text-lg text-gray-400 font-medium italic">"จากงานวิจัยสู่แอปพลิเคชันที่ใช้งานได้ในมือถือของคุณ"</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Plant Leaf Diseases -->
            <div class="group relative glass-card rounded-[2.5rem] overflow-hidden border border-white/10 hover:-translate-y-4 transition-all duration-500 flex flex-col shadow-2xl hover:shadow-emerald-500/20">
                <div class="p-8">
                    <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-3xl text-emerald-400 border border-emerald-500/30 mb-6 group-hover:shadow-[0_0_20px_rgba(16,185,129,0.4)] transition-all duration-500">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-outfit uppercase tracking-tight group-hover:text-emerald-300 transition-colors">Plant Disease Detector</h3>
                    <p class="text-slate-400 mb-8 text-sm leading-relaxed group-hover:text-slate-200 transition-colors">
                        วินิจฉัยโรคพืชแบบ Real-time ผ่านกล้องมือถือ โดยใช้โมเดล CNN ที่ผ่านการบีบอัดไฟล์สำหรับ Mobile Runtime
                    </p>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="px-3 py-1 bg-emerald-500/10 text-emerald-400 text-[10px] font-bold rounded-full border border-emerald-500/20 uppercase tracking-wider">CV (Vision)</span>
                        <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 text-[10px] font-bold rounded-full border border-cyan-500/20 uppercase tracking-wider">TFLite</span>
                    </div>
                    <div class="mt-8">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-400 border border-emerald-400/30 px-5 py-2.5 rounded-xl hover:bg-emerald-400 hover:text-white transition-all shadow-lg hover:shadow-emerald-500/30">
                            Launch Project <i class="fas fa-external-link-alt text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- NPK Predictor -->
            <div class="group relative glass-card rounded-[2.5rem] overflow-hidden border border-white/10 hover:-translate-y-4 transition-all duration-500 flex flex-col shadow-2xl hover:shadow-blue-500/20">
                <div class="p-8">
                    <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-3xl text-blue-400 border border-blue-500/30 mb-6 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.4)] transition-all duration-500">
                        <i class="fas fa-vial"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-outfit uppercase tracking-tight group-hover:text-blue-300 transition-colors">NPK & pH Predictor</h3>
                    <p class="text-slate-400 mb-8 text-sm leading-relaxed group-hover:text-slate-200 transition-colors">
                        วิเคราะห์สารอาหารในดินด้วย Deep Learning โดยการวิเคราะห์ภาพถ่ายตัวอย่างดินและปัจจัยแวดล้อม
                    </p>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="px-3 py-1 bg-blue-500/10 text-blue-400 text-[10px] font-bold rounded-full border border-blue-500/20 uppercase tracking-wider">Regression</span>
                        <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 text-[10px] font-bold rounded-full border border-indigo-500/20 uppercase tracking-wider">Analytics</span>
                    </div>
                    <div class="mt-8">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-blue-400 border border-blue-400/30 px-5 py-2.5 rounded-xl hover:bg-blue-400 hover:text-white transition-all shadow-lg hover:shadow-blue-500/30">
                            View Data AI <i class="fas fa-external-link-alt text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Chlorophyll Meter -->
            <div class="group relative glass-card rounded-[2.5rem] overflow-hidden border border-white/10 hover:-translate-y-4 transition-all duration-500 flex flex-col shadow-2xl hover:shadow-orange-500/20">
                <div class="p-8">
                    <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-3xl text-orange-400 border border-orange-500/30 mb-6 group-hover:shadow-[0_0_20px_rgba(249,115,22,0.4)] transition-all duration-500">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-outfit uppercase tracking-tight group-hover:text-orange-300 transition-colors">Chlorophyll Estimator</h3>
                    <p class="text-slate-400 mb-8 text-sm leading-relaxed group-hover:text-slate-200 transition-colors">
                        ประมาณค่าคลอโรฟิลล์จากเฉดสีใบไม้ ประมวลผลภาพผ่านไลบรารี OpenCV-Python ก่อนส่งเข้าโมเดล AI
                    </p>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="px-3 py-1 bg-orange-500/10 text-orange-400 text-[10px] font-bold rounded-full border border-orange-500/20 uppercase tracking-wider">Digital Imaging</span>
                        <span class="px-3 py-1 bg-amber-500/10 text-amber-400 text-[10px] font-bold rounded-full border border-amber-500/20 uppercase tracking-wider">Estimation</span>
                    </div>
                    <div class="mt-8">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-orange-400 border border-orange-400/30 px-5 py-2.5 rounded-xl hover:bg-orange-400 hover:text-white transition-all shadow-lg hover:shadow-orange-500/30">
                            Analyze Foliage <i class="fas fa-external-link-alt text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Smart Utils (Colony Counter etc.) -->
            <div class="group relative glass-card rounded-[2.5rem] overflow-hidden border border-white/10 hover:-translate-y-4 transition-all duration-500 flex flex-col shadow-2xl hover:shadow-purple-500/20">
                <div class="p-8">
                    <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-3xl text-purple-400 border border-purple-500/30 mb-6 group-hover:shadow-[0_0_20px_rgba(139,92,246,0.4)] transition-all duration-500">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-outfit uppercase tracking-tight group-hover:text-purple-300 transition-colors">Smart Bio-Utilities</h3>
                    <p class="text-slate-400 mb-8 text-sm leading-relaxed group-hover:text-slate-200 transition-colors">
                        ชุดเครื่องมืออำนวยความสะดวกในห้องแล็บ เช่น Colony Counter (นับจำนวนแบคทีเรีย) และ Water Flow Rate AI
                    </p>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="px-3 py-1 bg-purple-500/10 text-purple-400 text-[10px] font-bold rounded-full border border-purple-500/20 uppercase tracking-wider">Bio-Tech</span>
                        <span class="px-3 py-1 bg-pink-500/10 text-pink-400 text-[10px] font-bold rounded-full border border-pink-500/20 uppercase tracking-wider">Automation</span>
                    </div>
                    <div class="mt-8">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-purple-400 border border-purple-400/30 px-5 py-2.5 rounded-xl hover:bg-purple-400 hover:text-white transition-all shadow-lg hover:shadow-purple-500/30">
                            Launch Utils <i class="fas fa-external-link-alt text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mosquito Identification -->
            <div class="group relative glass-card rounded-[2.5rem] overflow-hidden border border-white/10 hover:-translate-y-4 transition-all duration-500 flex flex-col shadow-2xl hover:shadow-red-500/20">
                <div class="p-8">
                    <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-3xl text-red-400 border border-red-500/30 mb-6 group-hover:shadow-[0_0_20px_rgba(239,68,68,0.4)] transition-all duration-500">
                        <i class="fas fa-bug"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-outfit uppercase tracking-tight group-hover:text-red-300 transition-colors">Mosquito ID</h3>
                    <p class="text-slate-400 mb-8 text-sm leading-relaxed group-hover:text-slate-200 transition-colors">
                        วินิจฉัยสายพันธุ์ยุงจากภาพถ่าย เพื่อเฝ้าระวังโรคระบาดในชุมชนด้วยระบบประมวลผล Local Edge AI
                    </p>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="px-3 py-1 bg-red-500/10 text-red-400 text-[10px] font-bold rounded-full border border-red-500/20 uppercase tracking-wider">Public Health</span>
                        <span class="px-3 py-1 bg-rose-500/10 text-rose-400 text-[10px] font-bold rounded-full border border-rose-500/20 uppercase tracking-wider">Local Inference</span>
                    </div>
                    <div class="mt-8">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-red-400 border border-red-400/30 px-5 py-2.5 rounded-xl hover:bg-red-400 hover:text-white transition-all shadow-lg hover:shadow-red-500/30">
                            ID Species <i class="fas fa-external-link-alt text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pet AI (Cat/Dog Talk) -->
            <div class="group relative glass-card rounded-[2.5rem] overflow-hidden border border-white/10 hover:-translate-y-4 transition-all duration-500 flex flex-col shadow-2xl hover:shadow-cyan-500/20">
                <div class="p-8">
                    <div class="w-16 h-16 glass rounded-2xl flex items-center justify-center text-3xl text-cyan-400 border border-cyan-500/30 mb-6 group-hover:shadow-[0_0_20px_rgba(6,182,212,0.4)] transition-all duration-500">
                        <i class="fas fa-paw"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-outfit uppercase tracking-tight group-hover:text-cyan-300 transition-colors">Pet Sound Translators</h3>
                    <p class="text-slate-400 mb-8 text-sm leading-relaxed group-hover:text-slate-200 transition-colors">
                        วิเคราะห์คลื่นเสียงสัตว์เลี้ยง (Cat/Dog Talk) เพื่อทำความเข้าใจอารมณ์และความต้องการผ่านโมเดล Audio Classification
                    </p>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 text-[10px] font-bold rounded-full border border-cyan-500/20 uppercase tracking-wider">Audio AI</span>
                        <span class="px-3 py-1 bg-teal-500/10 text-teal-400 text-[10px] font-bold rounded-full border border-teal-500/20 uppercase tracking-wider">Emotion Engine</span>
                    </div>
                    <div class="mt-8">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-xs font-bold text-cyan-400 border border-cyan-400/30 px-5 py-2.5 rounded-xl hover:bg-cyan-400 hover:text-white transition-all shadow-lg hover:shadow-cyan-500/30">
                            Cat/Dog Talk <i class="fas fa-external-link-alt text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lifecycle / Tech Stack Section -->
<section id="tech-stack" class="py-24 relative overflow-hidden bg-[#020617] border-t border-white/10">
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl font-extrabold text-white mb-8 font-outfit uppercase tracking-tight">
                    เบื้องหลัง <br> <span class="text-emerald-400">Mobile AI Workflow</span>
                </h2>
                <div class="space-y-6">
                    <div class="p-6 glass-card rounded-2xl border-l-4 border-emerald-500">
                        <h4 class="text-white font-bold mb-2">1. Model Training (Python)</h4>
                        <p class="text-slate-400 text-sm">เทรนโมเดล AI บน JupyterLab ด้วย TensorFlow/Keras จนได้ความแม่นยำที่ต้องการ</p>
                    </div>
                    <div class="p-6 glass-card rounded-2xl border-l-4 border-cyan-500">
                        <h4 class="text-white font-bold mb-2">2. Model Conversion (TFLite)</h4>
                        <p class="text-slate-400 text-sm">แปลงไฟล์โมเดลเป็น .tflite เพื่อให้รองรับการประมวลผลบนมือถือที่รวดเร็วและประหยัดแบตเตอรี่</p>
                    </div>
                    <div class="p-6 glass-card rounded-2xl border-l-4 border-blue-500">
                        <h4 class="text-white font-bold mb-2">3. App Development (Flutter)</h4>
                        <p class="text-slate-400 text-sm">เขียนแอปพลิเคชันด้วย Flutter เพื่อสร้าง UI ที่สวยงามและรันได้ทั้ง iOS และ Android</p>
                    </div>
                </div>
            </div>
            <div class="glass-card p-10 rounded-[2.5rem] border border-white/10 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-transparent"></div>
                <h4 class="text-white font-bold mb-8 flex items-center gap-3">
                    <i class="fas fa-sitemap text-emerald-400"></i>
                    System Architecture Diagram
                </h4>
                <div class="mermaid text-center">
graph TD
    A[Dataset] --> B[TensorFlow Lab]
    B --> C{TFLite Convert}
    C --> D[Android App]
    C --> E[iOS App]
    F[Flutter UI] --> D
    F --> E
    
    style B fill:#f97316,stroke:#fff,color:#fff
    style C fill:#06b6d4,stroke:#fff,color:#fff
    style F fill:#0ea5e9,stroke:#fff,color:#fff
    style D fill:#10b981,stroke:#fff,color:#fff
    style E fill:#10b981,stroke:#fff,color:#fff
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<script type="module">
    import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
    mermaid.initialize({ 
        startOnLoad: true, 
        theme: 'dark',
        themeVariables: {
            fontFamily: 'Outfit, Sarabun, sans-serif'
        }
    });
</script>
