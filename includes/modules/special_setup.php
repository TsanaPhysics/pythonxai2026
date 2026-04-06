        <!-- Special Module: Environment Setup (Anaconda) -->
        <div id="special_setup" class="workshop-card group" onclick="toggleWorkshop(this)" style="border-color: rgba(34, 211, 238, 0.3);">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon" style="background: rgba(34, 211, 238, 0.1); color: #22d3ee; border-color: rgba(34, 211, 238, 0.2);"><i class="fas fa-tools"></i></div>
                    <div>
                        <span style="color: #22d3ee;">[Prerequisite] Local Environment Setup</span>
                        <h3>Python Installation (Anaconda)</h3>
                    </div>
                </div>
                <div class="toggle-btn"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="workshop-body" onclick="event.stopPropagation()">
                <div class="workshop-content">
                    
                    <!-- Hero Section: 2 Columns -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 items-center">
                        <!-- Column 1: Description -->
                        <div>
                            <h4 class="mt-0" style="color: #22d3ee;">🚀 เตรียมพร้อมสำหรับการเขียนโปรแกรมในเครื่อง (Local Setup)</h4>
                            <p class="mb-4 text-slate-300">สำหรับการพัฒนาโครงงาน AI ขั้นสูง การรันโค้ดในเครื่องคอมพิวเตอร์ตัวเองจะเร็วกว่าและเข้าถึงฮาร์ดแวร์ (กล้อง/เซนเซอร์) ได้โดยตรง โดยเราจะใช้ <strong>Anaconda</strong> เป็นตัวจัดการหลัก:</p>
                            <div class="flex flex-col gap-3">
                                <a href="https://www.anaconda.com/download" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 px-6 py-3 rounded-xl hover:bg-cyan-500 hover:text-white transition-all font-bold shadow-lg shadow-cyan-500/10">
                                    <i class="fas fa-download"></i> Download Anaconda (Official)
                                </a>
                                <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold px-1">Windows / macOS / Linux Supported</p>
                            </div>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-cyan-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">SETUP GUIDE</div>
                            <img src="assets/images/science.png" alt="Setup Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🛠️ ขั้นตอนการติดตั้งและเตรียม Environment</h4>
                    <pre class="mermaid mt-4 mb-8 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph TD
    A[Download & Install Anaconda] --> B[Open Anaconda Prompt / Terminal]
    B --> C[Create Environment: ai_vision]
    C --> D[Install Libraries: OpenCV, MP]
    D --> E[Run Your Python Project]
    
    style A fill:#0ea5e9,stroke:#0369a1,stroke-width:2px,color:#fff
    style C fill:#0ea5e9,stroke:#0369a1,stroke-width:2px,color:#fff
    style E fill:#10b981,stroke:#059669,stroke-width:2px,color:#fff
                    </pre>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6" style="color: #22d3ee;">
                        <div class="w-8 h-8 rounded-lg bg-cyan-500/20 flex items-center justify-center text-cyan-400 text-sm border border-cyan-500/30">
                            <i class="fas fa-terminal"></i>
                        </div>
                        Quick Command: สร้างสภาพแวดล้อม (Conda Workspace)
                    </h4>
                    
                    <div class="code-window mb-8">
                        <div class="code-window-header" style="background: rgba(34, 211, 238, 0.05); border-bottom-color: rgba(34, 211, 238, 0.1);">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title" style="color: #22d3ee;">Setup Terminal / Prompt</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_setup', this)"><i class="fas fa-copy"></i> Copy Steps</button>
                            </div>
                        </div>
                        <pre><code id="code_setup"><span class="code-comment"># 1. สร้างสภาพแวดล้อมใหม่ชื่อ ai_vision</span>
conda <span class="code-func">create</span> <span class="code-keyword">-n</span> ai_vision <span class="code-keyword">python</span>=3.10

<span class="code-comment"># 2. เข้าสู่สภาพแวดล้อมที่สร้างขึ้น</span>
conda <span class="code-func">activate</span> ai_vision

<span class="code-comment"># 3. ติดตั้งไลบรารีที่จำเป็น (OpenCV และ MediaPipe)</span>
pip <span class="code-func">install</span> opencv-python mediapipe numpy</code></pre>
                    </div>

                    <div class="tech-box" style="border-left-color: #22d3ee;">
                        <h4 class="mt-0" style="color: #22d3ee; font-size: 1rem;"><i class="fas fa-lightbulb mr-2"></i> เทคนิคเพิ่มเติม:</h4>
                        <p class="text-slate-300 text-sm m-0">หากต้องการติดตั้งไลบรารีเพิ่มภายหลัง ตรวจสอบให้แน่ใจเสมอว่าได้รันคำสั่ง <code>conda activate ai_vision</code> ก่อน เพื่อป้องกันไม่ให้ไปรบกวน Python ส่วนหลักของเครื่องครับ</p>
                    </div>

                </div>
            </div>
        </div>
