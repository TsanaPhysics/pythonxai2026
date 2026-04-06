<?php
/**
 * Interactive Digital Science Presentation [Reveal.js High-Tech Edition 2026]
 * Technology: Reveal.js + Tailwind CSS + Custom HUD FX
 * Design: Futuristic Sci-Fi Command Center (Neon / Glassmorphism)
 */

// Modular Slide System: Load slides from individual files
$presentation_dir = __DIR__ . '/includes/presentation/';
$slide_files = [
    'slide_0_intro.php',
    'slide_1_lab_setup.php',
    'slide_0_2_shortcuts.php',
    'slide_2_logic.php',
    'slide_1_2_junior_lab.php',
    'slide_1_3_senior_lab.php',
    'slide_3_ml.php',
    'slide_4_deep_learning.php',
    'slide_5_nlp.php',
    'slide_6_lab.php'
];

$slides = [];
foreach ($slide_files as $file) {
    if (file_exists($presentation_dir . $file)) {
        $module_slides = include $presentation_dir . $file;
        if (is_array($module_slides)) {
            $slides = array_merge($slides, $module_slides);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python x AI 2026 - Interactive Presentation</title>
    
    <!-- External Assets -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Sarabun:wght@400;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.5.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.5.0/reveal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.5.0/theme/dracula.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --h-orange: #ff6b00;
            --h-cyan: #00f2ff;
            --h-purple: #7000ff;
            --bg-deep: #020617;
            --font-main: 'Sarabun', sans-serif;
            --font-tech: 'JetBrains Mono', monospace;
            --font-display: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg-deep);
            color: #ffffff;
            font-family: var(--font-main);
            overflow: hidden;
            margin: 0; padding: 0;
            cursor: crosshair;
        }

        /* 🌌 2026 Immersive Background Engine */
        #canvas-bg {
            position: fixed;
            inset: 0;
            z-index: -2;
            background: radial-gradient(circle at 50% 50%, #0f172a 0%, #020617 100%);
        }

        .hologram-overlay {
            position: fixed; inset: 0; z-index: -1;
            background: 
                linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.2) 50%),
                linear-gradient(90deg, rgba(255, 0, 0, 0.03), rgba(0, 255, 0, 0.01), rgba(0, 0, 255, 0.03));
            background-size: 100% 3px, 3px 100%;
            pointer-events: none;
            opacity: 0.15;
            mix-blend-mode: overlay;
        }

        /* 🖥️ Integrated Workspace HUD */
        .hud-node {
            position: fixed;
            z-index: 1000;
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            background: rgba(0, 0, 0, 0.4);
            animation: node-ready 1.2s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
            opacity: 0;
        }

        @keyframes node-ready {
            0% { opacity: 0; transform: scale(0.9) translateY(20px); filter: blur(10px); }
            100% { opacity: 1; transform: scale(1) translateY(0); filter: blur(0); }
        }

        /* Top HUD: System Metrics */
        .hud-top {
            top: 0; left: 0; right: 0;
            height: 4rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 2rem;
            background: linear-gradient(to bottom, rgba(2, 6, 23, 0.8), transparent);
        }

        .status-pill {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 0.4rem 1rem;
            border-radius: 2rem;
            font-size: 0.7rem;
            font-weight: 900;
            letter-spacing: 0.1em;
            color: var(--h-cyan);
            display: flex; align-items: center; gap: 0.5rem;
        }

        /* Navigation HUD: Liquid Controls */
        .nav-node-left { bottom: 2rem; left: 2rem; border-radius: 1.5rem; padding: 0.5rem; display: flex; gap: 0.5rem; }
        .nav-node-right { bottom: 2rem; right: 2rem; border-radius: 1.5rem; padding: 1rem 2rem; text-align: right; }

        .btn-orbit {
            width: 3.5rem; height: 3.5rem;
            border-radius: 1rem;
            display: flex; align-items: center; justify-content: center;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            color: #fff;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative; overflow: hidden;
        }

        .btn-orbit:hover {
            background: var(--h-orange);
            border-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 0 30px rgba(255, 107, 0, 0.4);
        }

        /* Reveal.js Overrides: 2026 Borderless Immersion */
        .reveal { background: transparent !important; }
        .reveal .slides { height: 100% !important; min-height: 100% !important; }
        
        .section-workspace {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10vh 15vw;
            box-sizing: border-box;
            position: relative;
        }

        .reveal h2 {
            font-family: var(--font-display) !important;
            font-weight: 800 !important;
            font-size: 5rem !important;
            text-transform: uppercase !important;
            letter-spacing: -0.05em !important;
            background: linear-gradient(135deg, #fff 0%, rgba(255, 255, 255, 0.4) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 2rem !important;
            line-height: 0.9 !important;
        }

        .reveal .progress { height: 2px; bottom: 0; background: rgba(255, 255, 255, 0.05); }
        .reveal .progress span { background: var(--h-orange); box-shadow: 0 0 20px var(--h-orange); }

        /* Component Enhancements */
        .glass-panel {
            background: rgba(15, 23, 42, 0.3);
            backdrop-filter: blur(50px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 2.5rem;
            padding: 3rem;
            box-shadow: 0 20px 80px rgba(0, 0, 0, 0.4);
            position: relative; overflow: hidden;
        }

        .glass-panel::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        }

        @keyframes scanline {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(1000%); }
        }
        .animate-scanline {
            animation: scanline 8s linear infinite;
        }

        @keyframes floating-anim {
            from { transform: translateY(0px) rotate(0deg); }
            to { transform: translateY(-20px) rotate(1deg); }
        }
        .floating-anim {
            animation: floating-anim 6s ease-in-out infinite alternate;
        }
    </style>
</head>

<body>
    <canvas id="canvas-bg"></canvas>
    <div class="hologram-overlay"></div>

    <!-- 🚥 2026 HUD: Metrics Bar -->
    <div class="hud-top">
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center border border-orange-500/30">
                    <i class="fab fa-python text-orange-400 text-xs"></i>
                </div>
                <span class="font-display font-black text-xs tracking-widest text-white/40">CORE_V_2026.0</span>
            </div>
            <div class="status-pill">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                AI_SYNC_ACTIVE
            </div>
        </div>
        <div class="flex items-center gap-8">
            <div class="text-right">
                <div class="text-[10px] font-black text-white/20 uppercase tracking-[0.2em] mb-1">Local_Time</div>
                <div id="clock" class="text-sm font-tech font-bold text-white tracking-widest">00:00:00</div>
            </div>
            <div class="w-px h-6 bg-white/10"></div>
            <div class="text-right">
                <div class="text-[10px] font-black text-white/20 uppercase tracking-[0.2em] mb-1">System_Date</div>
                <div class="text-sm font-tech font-bold text-white tracking-widest"><?= date('Y.m.d') ?></div>
            </div>
        </div>
    </div>

    <!-- 🚥 2026 HUD: Navigation -->
    <div class="hud-node nav-node-left">
        <button onclick="Reveal.prev()" class="btn-orbit"><i class="fas fa-arrow-left"></i></button>
        <button onclick="location.href='index.php'" class="btn-orbit"><i class="fas fa-home"></i></button>
        <button onclick="Reveal.next()" class="btn-orbit"><i class="fas fa-arrow-right"></i></button>
    </div>

    <!-- 🚥 2026 HUD: Data Stream -->
    <div class="hud-node nav-node-right">
        <div class="text-[10px] font-black text-white/20 uppercase tracking-[0.3em] mb-1">Data_Node_Sequence</div>
        <div class="font-display font-black text-3xl text-white leading-none">
            <span id="slide-num" class="text-orange-500">00</span><span class="text-white/5 opacity-40 px-2 font-light">/</span><span id="slide-total" class="text-white/20 font-light">00</span>
        </div>
    </div>

    <!-- Reveal.js Main Container -->
    <div class="reveal">
        <div class="slides">
            <?php foreach ($slides as $idx => $s): ?>
                <section data-transition="fade" id="slide-<?= $idx ?>">
                    <div class="section-workspace">
                        
                        <!-- Mini Identifier -->
                        <div class="absolute top-10 left-10 flex items-center gap-4 opacity-40 group hover:opacity-100 transition-opacity">
                            <span class="w-8 h-[2px] bg-<?= $s['accent'] ?? 'emerald' ?>-500"></span>
                            <span class="font-tech text-[10px] uppercase tracking-tighter"><?= $s['chapter'] ?? 'SESSION' ?> // NODE_<?= str_pad($idx + 1, 2, '0', STR_PAD_LEFT) ?></span>
                        </div>

                        <?php if (($s['type'] ?? '') === 'intro'): ?>
                            <!-- Intro Layout: 2026 Immersive Hero -->
                            <div class="flex flex-col items-center text-center space-y-12 max-w-6xl animate-fade-in-up">
                                <div class="relative group">
                                    <div class="absolute inset-0 bg-<?= $s['accent'] ?? 'emerald' ?>-500/10 blur-[120px] rounded-full scale-150 animate-pulse"></div>
                                    <img src="<?= $s['image'] ?? '' ?>" class="w-72 h-72 lg:w-[500px] lg:h-[500px] object-contain relative z-10 floating-anim drop-shadow-[0_0_50px_rgba(255,255,255,0.1)]" alt="Intro Visual">
                                    <div class="absolute -bottom-10 left-1/2 -translate-x-1/2 w-48 h-1 bg-gradient-to-r from-transparent via-<?= $s['accent'] ?? 'emerald' ?>-500 to-transparent rounded-full opacity-50"></div>
                                </div>
                                <div class="space-y-6">
                                    <h2 class="!mb-0"><?= $s['title'] ?? 'Digital Science' ?></h2>
                                    <p class="text-2xl lg:text-3xl text-white/60 font-light max-w-4xl tracking-tight leading-snug">
                                        <?= $s['desc'] ?? '' ?>
                                    </p>
                                </div>
                            </div>

                        <?php else: ?>
                            <!-- Content Layout: 2026 Integrated Workspace -->
                            <div class="grid lg:grid-cols-2 gap-16 items-center w-full max-w-7xl">
                                
                                <div class="space-y-10 group">
                                    <div class="space-y-4">
                                        <h2 class="text-5xl lg:text-6xl !text-left !mb-0"><?= $s['title'] ?? 'Digital Science' ?></h2>
                                        <div class="w-20 h-1 bg-gradient-to-r from-<?= $s['accent'] ?? 'emerald' ?>-500 to-transparent"></div>
                                    </div>
                                    
                                    <div class="glass-panel group-hover:border-white/20 transition-all duration-500">
                                        <p class="text-xl text-white/70 leading-relaxed font-light mb-8"><?= $s['desc'] ?? '' ?></p>
                                        
                                        <?php if (($s['type'] ?? '') === 'detail'): ?>
                                            <!-- Data Feed Table -->
                                            <div class="bg-black/40 border border-white/5 rounded-2xl overflow-hidden mb-6">
                                                <table class="w-full text-xs font-tech">
                                                    <thead class="bg-white/5">
                                                        <tr>
                                                            <?php foreach ($s['table']['header'] ?? [] as $h): ?>
                                                                <th class="px-4 py-3 text-left text-<?= $s['accent'] ?? 'emerald' ?>-400 uppercase tracking-widest border-b border-white/5"><?= $h ?></th>
                                                            <?php endforeach; ?>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-white/5">
                                                        <?php foreach ($s['table']['rows'] ?? [] as $row): ?>
                                                            <tr>
                                                                <?php foreach ($row as $cell): ?>
                                                                    <td class="px-4 py-3 text-white/50"><?= $cell ?></td>
                                                                <?php endforeach; ?>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php elseif (($s['type'] ?? '') === 'simulator'): ?>
                                            <!-- Integrated Simulator Node -->
                                            <div class="space-y-6">
                                                <div class="bg-black/60 p-6 rounded-2xl border border-<?= $s['accent'] ?? 'emerald' ?>-500/30 font-tech text-sm text-<?= $s['accent'] ?? 'emerald' ?>-300">
                                                    <div class="flex items-center gap-2 mb-3 opacity-40">
                                                        <i class="fas fa-terminal"></i>
                                                        <span class="text-[10px] uppercase">Node_Simulator_IO</span>
                                                    </div>
                                                    <?= nl2br(htmlspecialchars($s['code_step'] ?? '')) ?>
                                                </div>
                                                <div class="flex flex-col gap-4">
                                                    <input type="range" id="n-val-<?= $idx ?>" min="0" max="100" value="45" class="w-full accent-<?= $s['accent'] ?? 'emerald' ?>-500" oninput="runSim(<?= $idx ?>)">
                                                    <button onclick="runSim(<?= $idx ?>)" class="bg-<?= $s['accent'] ?? 'emerald' ?>-600 hover:bg-<?= $s['accent'] ?? 'emerald' ?>-500 text-white font-bold py-4 rounded-2xl transition-all shadow-xl shadow-<?= $s['accent'] ?? 'emerald' ?>-500/20">
                                                        SYNC_AND_EXECUTE
                                                    </button>
                                                    <div id="sim-result-<?= $idx ?>" class="text-center font-tech text-xs tracking-widest opacity-60 italic mt-2">READY_FOR_SYNC</div>
                                                </div>
                                            </div>
                                        <?php elseif (($s['type'] ?? '') === 'chatbot'): ?>
                                            <!-- AI Liaison Interface -->
                                            <div class="bg-black/40 p-6 rounded-3xl border border-white/5 h-[350px] flex flex-col">
                                                <div class="flex-grow overflow-y-auto space-y-4 mb-6 custom-scrollbar" id="chat-window-<?= $idx ?>">
                                                     <div class="flex gap-3">
                                                         <div class="w-6 h-6 rounded bg-emerald-500/20 flex items-center justify-center text-[10px] text-emerald-400 flex-shrink-0">AI</div>
                                                         <div class="bg-white/5 px-4 py-2 rounded-2xl rounded-tl-none text-xs text-white/60">
                                                             Initializing connection... Node ready for inquiry.
                                                         </div>
                                                     </div>
                                                </div>
                                                <div class="grid grid-cols-1 gap-2">
                                                    <?php foreach(($s['chat_questions'] ?? []) as $q): ?>
                                                        <button onclick="runChatSim('<?= htmlspecialchars($q) ?>', 'Analyzing protocol...', <?= $idx ?>)" class="text-[10px] text-left px-4 py-3 rounded-xl border border-white/5 hover:border-emerald-500/40 hover:bg-white/5 transition-all text-white/40 hover:text-emerald-400">
                                                            <?= htmlspecialchars($q) ?>
                                                        </button>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Right: Immersive Visual Node -->
                                <div class="relative group">
                                    <div class="absolute inset-0 bg-<?= $s['accent'] ?? 'emerald' ?>-500/10 rounded-full blur-[100px] animate-pulse"></div>
                                    <div class="relative aspect-square rounded-[4rem] overflow-hidden border border-white/10 shadow-[0_0_100px_rgba(0,0,0,0.5)]">
                                        <img src="<?= $s['image'] ?? 'assets/images/default.jpg' ?>" class="w-full h-full object-cover grayscale-[0.3] group-hover:grayscale-0 transition-all duration-[2000ms] group-hover:scale-105" id="leaf-img-<?= $idx ?>">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                                        
                                        <!-- Animated Scanline -->
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-<?= $s['accent'] ?? 'emerald' ?>-500/10 to-transparent h-20 w-full animate-scanline pointer-events-none"></div>

                                        <div class="absolute bottom-10 left-10 right-10">
                                            <div class="backdrop-blur-xl bg-black/40 border border-white/10 p-6 rounded-3xl">
                                                <div class="text-[10px] font-tech text-<?= $s['accent'] ?? 'emerald' ?>-400 uppercase tracking-[0.3em] mb-2">Visual_Intelligence_Node</div>
                                                <div class="text-sm font-light text-white/80 line-clamp-2 italic leading-relaxed">"<?= $s['desc'] ?? '' ?>"</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php if (($s['type'] ?? '') === 'simulator' && strpos(($s['title'] ?? ''), 'Vision') !== false): ?>
                                        <button onclick="toggleMask(<?= $idx ?>)" class="absolute -top-6 -right-6 w-16 h-16 rounded-full bg-cyan-600/80 backdrop-blur-xl border border-white/20 text-white shadow-2xl hover:scale-110 active:scale-95 transition-all">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    <?php endif; ?>
                                </div>

                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Integrated 2026 Scripting Engine -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.5.0/reveal.min.js"></script>
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ 
            startOnLoad: false, 
            theme: 'dark', 
            themeVariables: { 
                primaryColor: '#ff6b00',
                edgeLabelBackground: '#020617',
                tertiaryColor: '#00f2ff'
            },
            flowchart: { useMaxWidth: true, htmlLabels: true, curve: 'basis' } 
        });
        window.mermaid = mermaid;
    </script>

    <script>
        // --- 🌌 Stellar Particle Engine JS ---
        const canvas = document.getElementById('canvas-bg');
        const ctx = canvas.getContext('2d');
        let particles = [];
        const particleCount = 120;
        let mouse = { x: null, y: null, radius: 150 };

        window.addEventListener('mousemove', e => { mouse.x = e.x; mouse.y = e.y; });

        class Particle {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = Math.random() * 0.5 - 0.25;
                this.speedY = Math.random() * 0.5 - 0.25;
                this.opacity = Math.random() * 0.5 + 0.1;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                if (this.x > canvas.width) this.x = 0;
                if (this.x < 0) this.x = canvas.width;
                if (this.y > canvas.height) this.y = 0;
                if (this.y < 0) this.y = canvas.height;

                // Mouse interaction
                let dx = mouse.x - this.x;
                let dy = mouse.y - this.y;
                let distance = Math.sqrt(dx*dx + dy*dy);
                if (distance < mouse.radius) {
                    const force = (mouse.radius - distance) / mouse.radius;
                    this.x -= dx * force * 0.02;
                    this.y -= dy * force * 0.02;
                }
            }
            draw() {
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function initParticles() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            particles = [];
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            requestAnimationFrame(animateParticles);
        }

        window.addEventListener('resize', initParticles);
        initParticles();
        animateParticles();

        // --- 🚥 Orbit Clock System (Modernized) ---
        function updateClock() {
            const now = new Date();
            const timeStr = now.toLocaleTimeString('en-GB', { hour12: false });
            if(document.getElementById('clock')) document.getElementById('clock').innerText = timeStr;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // --- 🖥️ Reveal.js Initialization (2026 Spec) ---
        Reveal.initialize({
            hash: true,
            transition: 'fade',
            backgroundTransition: 'zoom',
            width: '100%',
            height: '100%',
            margin: 0,
            minScale: 1,
            maxScale: 1,
            controls: false,
            progress: true,
            center: true,
            touch: true,
            view: 'compact'
        });

        Reveal.on('ready', event => {
            if(document.getElementById('slide-total')) document.getElementById('slide-total').innerText = String(Reveal.getTotalSlides()).padStart(2, '0');
            updateHUD(event.indexh);
            if (window.mermaid) window.mermaid.run();
        });

        Reveal.on('slidechanged', event => {
            updateHUD(event.indexh);
            if (window.mermaid) window.mermaid.run();
        });

        function updateHUD(idx) {
            if(document.getElementById('slide-num')) document.getElementById('slide-num').innerText = String(idx + 1).padStart(2, '0');
        }

        // --- 🎮 Simulation Logic (Liquid Smooth) ---
        function runSim(idx) {
            const nInput = document.getElementById('n-val-' + idx);
            if(!nInput) return;
            const n = parseInt(nInput.value);
            const nNum = document.getElementById('n-num-' + idx);
            if(nNum) nNum.innerText = n;
            
            const res = document.getElementById('sim-result-' + idx);
            if (!res) return;

            res.innerText = "PRCSING_NODE_" + idx + "...";
            res.style.color = "var(--h-cyan)";

            setTimeout(() => {
                if (n < 40) {
                    res.innerText = "ALRT::LOW_DATA_INTENSITY";
                    res.style.color = "#ff4444";
                } else if (n > 85) {
                    res.innerText = "ALRT::SATURATION_LIMIT";
                    res.style.color = "#ffbb00";
                } else {
                    res.innerText = "STAT::OPTIMAL_STATE";
                    res.style.color = "#00ff88";
                }
            }, 600);
        }

        let maskOn = {};
        function toggleMask(idx) {
            maskOn[idx] = !maskOn[idx];
            const img = document.getElementById('leaf-img-' + idx);
            if (!img) return;
            img.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
            img.style.filter = maskOn[idx] ? "sepia(1) saturate(300%) hue-rotate(90deg) contrast(150%) brightness(1.2)" : "none";
            img.style.transform = maskOn[idx] ? "scale(1.1) rotate(1deg)" : "scale(1)";
        }

        function runChatSim(action, desc, idx) {
            const chatWin = document.getElementById('chat-window-' + idx);
            if(!chatWin) return;
            const userMsg = document.createElement('div');
            userMsg.className = "flex justify-end p-2 animate-slide-in-right";
            userMsg.innerHTML = `<div class="bg-white/5 border border-white/10 px-4 py-2 rounded-2xl rounded-tr-none text-xs text-cyan-300">REQ::${action}</div>`;
            chatWin.appendChild(userMsg);
            chatWin.scrollTop = chatWin.scrollHeight;

            setTimeout(() => {
                const aiMsg = document.createElement('div');
                aiMsg.className = "flex gap-3 p-2 animate-slide-in-left";
                aiMsg.innerHTML = `<div class="w-6 h-6 rounded bg-cyan-500/20 flex items-center justify-center text-[10px] text-cyan-400">AI</div>
                                   <div class="bg-white/5 border border-white/10 px-4 py-2 rounded-2xl rounded-tl-none text-xs text-white/80">${desc}</div>`;
                chatWin.appendChild(aiMsg);
                chatWin.scrollTop = chatWin.scrollHeight;
            }, 800);
        }
    </script>
</body>
</html>
