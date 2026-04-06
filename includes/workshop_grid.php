<style>
/* Digital Science Theme for Workshop Collapsibles */
.ws-btn-glow {
    background: rgba(249, 115, 22, 0.1); 
    color: #f97316;
    border: 1px solid rgba(249, 115, 22, 0.5);
    padding: 12px 28px;
    border-radius: 16px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.ws-btn-glow:hover {
    background: #f97316;
    color: white;
    border-color: transparent;
    box-shadow: 0 0 30px rgba(249, 115, 22, 0.5);
    transform: translateY(-5px) scale(1.05);
}

/* Purple Glow Button Variant */
.ws-btn-glow-purple {
    background: rgba(168, 85, 247, 0.1); 
    color: #a855f7;
    border: 1px solid rgba(168, 85, 247, 0.5);
    padding: 12px 28px;
    border-radius: 16px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.ws-btn-glow-purple:hover {
    background: #a855f7;
    color: white;
    border-color: transparent;
    box-shadow: 0 0 30px rgba(168, 85, 247, 0.5);
    transform: translateY(-5px) scale(1.05);
}

.workshop-section {
    padding: 100px 0;
    background: #020617;
    position: relative;
    overflow: hidden;
}

.workshop-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(249, 115, 22, 0.05) 1px, transparent 1px);
    background-size: 32px 32px;
    z-index: 0;
}

.workshop-header {
    text-align: center;
    margin-bottom: 70px;
    position: relative;
    z-index: 10;
}
.workshop-header h2 {
    font-size: 3.5rem;
    color: #ffffff;
    font-weight: 800;
    font-family: 'Outfit', sans-serif;
    letter-spacing: -1px;
}
.workshop-header h2 span {
    background: linear-gradient(to right, #f97316, #fbbf24);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.workshop-header p {
    color: #94a3b8;
    font-size: 1.2rem;
    margin-top: 15px;
    font-weight: 500;
}

.workshop-card {
    background: rgba(15, 23, 42, 0.6);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 30px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    margin-bottom: 35px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
}
.workshop-card:hover {
    border-color: rgba(249, 115, 22, 0.5);
    box-shadow: 0 0 50px rgba(249, 115, 22, 0.1);
    transform: translateY(-8px);
}

.workshop-card-header {
    padding: 30px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    background: transparent;
    transition: background 0.3s;
}
.workshop-card-header:hover {
    background: rgba(255, 255, 255, 0.03);
}
.workshop-title {
    display: flex;
    align-items: center;
    gap: 20px;
}
.workshop-icon {
    width: 60px;
    height: 60px;
    border-radius: 18px;
    background: rgba(249, 115, 22, 0.1);
    color: #f97316;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.8rem;
    box-shadow: inset 0 0 15px rgba(249, 115, 22, 0.1);
    border: 1px solid rgba(249, 115, 22, 0.2);
}
.workshop-title h3 {
    color: #ffffff;
    font-size: 1.5rem;
    margin: 0;
    font-weight: 700;
    font-family: 'Outfit', sans-serif;
}
.workshop-title span {
    color: #f97316;
    font-size: 0.8rem;
    font-family: 'Outfit', sans-serif;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.toggle-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.05);
    display: flex;
    justify-content: center;
    align-items: center;
    color: #94a3b8;
    transition: all 0.3s;
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.workshop-card.active .toggle-btn {
    transform: rotate(180deg);
    background: #f97316;
    color: white;
    border-color: transparent;
    box-shadow: 0 0 15px rgba(249, 115, 22, 0.4);
}

.workshop-body {
    display: none;
    padding: 0 40px 40px 40px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}
.workshop-card.active .workshop-body {
    display: block;
}

.workshop-content {
    padding-top: 40px;
    color: #cbd5e1;
}

.workshop-content h4 {
    color: #f1f5f9;
    font-size: 1.3rem;
    font-weight: 700;
    margin: 35px 0 20px 0;
    font-family: 'Outfit', sans-serif;
    display: flex;
    align-items: center;
    gap: 12px;
}
.workshop-content h4::before {
    content: '';
    width: 4px;
    height: 24px;
    background: #f97316;
    border-radius: 4px;
    display: block;
}
.workshop-content p {
    margin-bottom: 16px;
    line-height: 1.7;
}
.workshop-content ul {
    margin-bottom: 16px;
    padding-left: 24px;
    list-style-type: none;
}
.workshop-content li {
    margin-bottom: 8px;
}
.workshop-content li::before {
    content: "•";
    color: #f97316;
    font-weight: bold;
    display: inline-block; 
    width: 1em; /* bullet space */
}

/* --- Code Window Styling (Mac Style / Jupyter Dark Theme for code blocks) --- */
.code-window {
    background: #0f172a; /* Slate-900 */
    border: 1px solid #1e293b;
    border-radius: 12px;
    margin-bottom: 20px;
    overflow: hidden;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}
.code-window-header {
    background: #1e293b; /* Slate-800 */
    padding: 10px 16px;
    display: flex;
    align-items: center;
    border-bottom: 1px solid #334155;
}
.mac-dots {
    display: flex;
    gap: 6px;
    margin-right: 16px;
}
.mac-dots span {
    width: 12px; height: 12px; border-radius: 50%;
}
.dot-red { background: #ff5f56; }
.dot-yellow { background: #ffbd2e; }
.dot-green { background: #27c93f; }

.code-title {
    color: #94a3b8;
    font-size: 0.85rem;
    font-family: monospace;
    flex-grow: 1;
}

.code-actions {
    display: flex;
    gap: 8px;
}
.code-actions button, .code-actions a {
    background: rgba(249, 115, 22, 0.15);
    color: #f97316;
    border: 1px solid rgba(249, 115, 22, 0.3);
    border-radius: 6px;
    padding: 4px 10px;
    font-size: 0.8rem;
    cursor: pointer;
    transition: all 0.2s;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 4px;
    font-family: 'Inter', sans-serif;
}
.code-actions button:hover, .code-actions a:hover {
    background: #f97316;
    color: white;
}

.workshop-content pre {
    padding: 16px;
    margin: 0;
    overflow-x: auto;
}
.workshop-content code {
    font-family: 'Consolas', 'Monaco', monospace;
    font-size: 0.95rem;
    color: #f8fafc;
    line-height: 1.5;
}

/* Code Highlights (To Imitate Jupyter) */
.code-comment { color: #4ade80; } /* green-400 */
.code-keyword { color: #f97316; font-weight: bold; }
.code-string { color: #7dd3fc; } /* sky-300 */
.code-func { color: #fde047; } /* yellow-300 */

/* Console Output Styles */
.code-output {
    display: none;
    background: #020617; /* Very dark slate */
    color: #86efac; /* terminal green */
    padding: 12px 16px;
    font-family: 'Consolas', 'Monaco', monospace;
    font-size: 0.85rem;
    border-top: 1px solid #1e293b;
    white-space: pre-wrap;
    line-height: 1.4;
}
.code-output.show {
    display: block;
    animation: fadeIn 0.4s ease-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
}

.workshop-image-box {
    text-align: center;
    margin: 20px 0;
}
.workshop-image-box img {
    max-width: 100%;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* --- Digital Science Components --- */
.tech-table-wrapper {
    overflow-x: auto;
    margin-bottom: 24px;
    border-radius: 16px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    background: rgba(30, 41, 59, 0.3);
    backdrop-filter: blur(8px);
}
.tech-table {
    width: 100%;
    text-align: left;
    border-collapse: collapse;
    font-size: 0.95rem;
    color: #cbd5e1;
}
.tech-table th {
    padding: 14px 16px;
    font-weight: 700;
    color: #fb923c; /* Orange-400 */
    background: rgba(249, 115, 22, 0.05);
    border-bottom: 2px solid rgba(249, 115, 22, 0.2);
    font-family: 'Outfit', sans-serif;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    font-size: 0.8rem;
}
.tech-table td {
    padding: 14px 16px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.tech-table tr:last-child td {
    border-bottom: none;
}
.tech-table code {
    background: rgba(255, 255, 255, 0.05) !important;
    color: #f1f5f9 !important;
    padding: 3px 8px !important;
    border-radius: 6px !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.tech-box {
    padding: 24px;
    border-radius: 16px;
    border-left: 4px solid #f97316;
    background: rgba(15, 23, 42, 0.6);
    backdrop-filter: blur(12px);
    margin-bottom: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    border-right: 1px solid rgba(255, 255, 255, 0.05);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.tech-box-blue { border-left-color: #3b82f6; }
.tech-box-emerald { border-left-color: #10b981; }

.tech-box h5 {
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Challenge Section Labels & Badges */
.level-badge {
    padding: 4px 12px;
    border-radius: 8px;
    font-size: 0.7rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 10px;
    font-family: 'Outfit', sans-serif;
}

.level-junior { background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(52, 211, 153, 0.2); }
.level-senior { background: rgba(59, 130, 246, 0.15); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.2); }
.level-vocational { background: rgba(249, 115, 22, 0.15); color: #fb923c; border: 1px solid rgba(251, 146, 60, 0.2); }

summary.challenge-summary {
    color: rgba(255, 255, 255, 0.5);
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 0.85rem;
    transition: all 0.3s ease;
    cursor: pointer;
    list-style: none;
    display: flex;
    align-items: center;
    gap: 6px;
}

summary.challenge-summary::-webkit-details-marker { display: none; }

summary.challenge-summary:hover {
    color: #f97316;
    transform: translateX(4px);
}

.challenge-answer {
    margin-top: 10px;
    padding: 16px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    color: #cbd5e1;
    font-size: 0.9rem;
    line-height: 1.6;
}

.tech-hr {
    border: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.1), transparent);
    margin: 32px 0;
}

.highlight-orange { color: #fb923c; }
.highlight-blue { color: #60a5fa; }
.highlight-emerald { color: #34d399; }
</style>

<div class="container mx-auto px-6 workshop-section" id="workshop">
    <div class="workshop-header">
        <div class="col-span-full mb-12 text-center">
            <div class="inline-block px-4 py-1.5 bg-orange-500/10 text-orange-400 rounded-full text-[10px] font-black mb-4 border border-orange-500/20 tracking-widest uppercase">
                2-Day Intensive Schedule (12 Hours)
            </div>
            <h2 class="text-4xl font-extrabold text-white mb-4 font-outfit uppercase tracking-tight">Workshop AI Co-Creation</h2>
            <p class="text-slate-400 max-w-2xl mx-auto mb-8 font-medium">คู่มือการเรียนรู้ Python & AI สำหรับการเกษตรอัจฉริยะ (ม.ต้น - ม.ปลาย - ปวช.) โดยใช้ <span class="text-orange-400">Google Antigravity</span></p>
            
            <!-- Action Buttons -->
            <div class="flex justify-center gap-6 flex-wrap">
                <a href="interactive_presentation.php" target="_blank" class="group relative inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-orange-600 to-amber-500 rounded-2xl font-black text-white shadow-2xl shadow-orange-600/20 hover:shadow-orange-600/50 hover:-translate-y-1 transition-all overflow-hidden uppercase tracking-widest text-sm">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.2),transparent)] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <i class="fas fa-play-circle text-2xl animate-pulse"></i>
                    Launch Live Presentation
                </a>
                <a href="workshop_detail.php?id=1" class="group relative inline-flex items-center gap-3 px-10 py-5 bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl font-black text-white shadow-2xl hover:bg-white/10 hover:border-orange-500/30 hover:-translate-y-1 transition-all uppercase tracking-widest text-sm">
                    <i class="fas fa-book-open text-orange-400"></i>
                    View Full Workshop Guide
                </a>
            </div>
        </div>
        
        <div class="workshop-downloads" style="display:flex; justify-content:center; gap:16px; margin-top:25px; flex-wrap:wrap;">
            <a href="../SciExHub2026/python_ai/workshop_manual/jupyter_workshop_data.zip" download class="ws-btn-glow">
                <i class="fas fa-file-archive"></i> Download Data (ZIP)
            </a>
            <a href="../SciExHub2026/python_ai/workshop_manual/JupyterLab_Workshop_Setup.ipynb" download class="ws-btn-glow-purple">
                <i class="fas fa-book"></i> JupyterLab Setup (.ipynb)
            </a>
        </div>
    </div>

        <!-- DAY 1: Foundation & Logic -->
        <div class="col-span-full mb-8 mt-12 flex items-center gap-6">
             <div class="h-px bg-gradient-to-r from-transparent to-orange-500/30 flex-grow"></div>
             <div class="px-6 py-2 bg-orange-500/10 border border-orange-500/30 rounded-full text-orange-400 font-black text-xs tracking-widest uppercase">Day 1: AI-Assisted Foundations</div>
             <div class="h-px bg-gradient-to-l from-transparent to-orange-500/30 flex-grow"></div>
        </div>

        <!-- Module 0 -->
        <?php include 'includes/modules/module0.php'; ?>

        <!-- Module 1 -->
        <?php include 'includes/modules/module1.php'; ?>

        <!-- Module 2 -->
        <?php include 'includes/modules/module2.php'; ?>

        <!-- Module 3 -->
        <?php include 'includes/modules/module3.php'; ?>

        <!-- DAY 2: Vision & Innovation -->
        <div class="col-span-full mb-8 mt-16 flex items-center gap-6">
             <div class="h-px bg-gradient-to-r from-transparent to-blue-500/30 flex-grow"></div>
             <div class="px-6 py-2 bg-blue-500/10 border border-blue-500/30 rounded-full text-blue-400 font-black text-xs tracking-widest uppercase">Day 2: AI Vision & Smart Innovation</div>
             <div class="h-px bg-gradient-to-l from-transparent to-blue-500/30 flex-grow"></div>
        </div>

        <!-- Module 4 -->
        <?php include 'includes/modules/module4.php'; ?>

        <!-- Module 5 -->
        <?php include 'includes/modules/module5.php'; ?>

        <!-- Module 6 -->
        <?php include 'includes/modules/module6.php'; ?>

        <!-- Special Tracks Section -->
        <div class="col-span-full mt-16 mb-8 text-center relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-white/5"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="px-8 bg-[#020617] text-2xl md:text-3xl font-extrabold text-white font-outfit flex items-center gap-4 tracking-tight">
                    <i class="fas fa-star text-orange-500 drop-shadow-[0_0_8px_rgba(249,115,22,0.8)]"></i> 
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-white to-orange-400/50">Special Project Tracks</span>
                    <span class="text-orange-500/80 text-xl font-bold">(Local Python .py)</span>
                </span>
            </div>
            <p class="text-slate-400 mt-5 font-bold uppercase tracking-[0.2em] text-sm md:text-base drop-shadow-sm opacity-90">
                สำหรับผู้ที่ต้องการสร้างโครงงานแบบรันบนเครื่องคอมพิวเตอร์โดยตรง
            </p>
        </div>

        <!-- Prerequisite: Environment Setup (Full Width) -->
        <div class="col-span-full mb-8">
            <?php include 'includes/modules/special_setup.php'; ?>
        </div>

        <!-- 2-Column Grid for Project Tracks -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 col-span-full">
            <?php include 'includes/modules/special_kids.php'; ?>
            <?php include 'includes/modules/special_scientist.php'; ?>
        </div>

    </div>
</div>

<script>
// --- UI Toggles (Self-Contained) ---
function toggleWorkshop(element) {
    element.classList.toggle('active');
    
    // Automatically render Mermaid diagrams when the tab is opened
    if (element.classList.contains('active') && window.mermaid) {
        const unrendered = element.querySelectorAll('.mermaid:not([data-processed="true"])');
        if (unrendered.length > 0) {
            setTimeout(() => {
                try {
                    window.mermaid.run({ nodes: unrendered });
                } catch (e) {
                    console.error("Mermaid rendering error:", e);
                }
            }, 50); // slight delay to allow max-height CSS transition to compute boxes
        }
    }
}

// --- Copy Standard Code Block (<pre><code>) ---
function copyCodeBlock(id, btnElement) {
    const codeElement = document.getElementById(id);
    let code = codeElement.innerText;
    
    // Fallback for getting text content cleanly
    if (!code) {
        code = codeElement.textContent;
    }

    navigator.clipboard.writeText(code).then(() => {
        const originalHTML = btnElement.innerHTML;
        btnElement.innerHTML = '<i class="fas fa-check"></i> Copied!';
        btnElement.style.color = '#27c93f';
        btnElement.style.borderColor = '#27c93f';
        setTimeout(() => {
            btnElement.innerHTML = originalHTML;
            btnElement.style.color = '';
            btnElement.style.borderColor = '';
        }, 2000);
    }).catch(err => {
        console.error('Failed to copy: ', err);
    });
}

// --- Local Simulation of Run Code (With Output display) ---
function fakeRun(outId, btnElement) {
    const originalHTML = btnElement.innerHTML;
    btnElement.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Running...';
    btnElement.style.color = '#fbbf24';
    btnElement.style.borderColor = '#fbbf24';
    
    // Hide output if already showing
    const outBox = document.getElementById(outId);
    if(outBox) outBox.classList.remove('show');
    
    setTimeout(() => {
        btnElement.innerHTML = '<i class="fas fa-check"></i> Finished!';
        btnElement.style.color = '#27c93f';
        btnElement.style.borderColor = '#27c93f';
        
        // Show output
        if(outBox) outBox.classList.add('show');
        
        setTimeout(() => {
            btnElement.innerHTML = originalHTML;
            btnElement.style.color = '';
            btnElement.style.borderColor = '';
        }, 2000);
    }, 800);
}
</script>
