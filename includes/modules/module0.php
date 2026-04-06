        <!-- Module 0 (Loaded via Include) -->
        <div id="module0" class="workshop-card" onclick="toggleWorkshop(this)">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon"><i class="fas fa-rocket"></i></div>
                    <div>
                        <span>Module 0 (Preparation)</span>
                        <h3>JupyterLab for Beginners</h3>
                    </div>
                </div>
                <div class="toggle-btn"><i class="fas fa-chevron-down"></i></div>
            </div>
            <div class="workshop-body" onclick="event.stopPropagation()">
                <div class="workshop-content">
                    
                    <!-- Hero Section: 2 Columns -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 items-center">
                        <!-- Column 1: Objectives -->
                        <div>
                            <h4 class="mt-0">📍 คำอธิบายและวัตถุประสงค์ (Learning Objectives)</h4>
                            <p class="mb-3 text-slate-300">ยินดีต้อนรับเข้าสู่อนาคต! ในคอร์สนี้เราจะไม่เรียนแค่การเขียนโค้ด แต่เราจะเรียนการ <strong>"สั่งงาน AI"</strong> ให้ช่วยเราสร้างนวัตกรรม โดยใช้เครื่องมือหลักคือ <strong>JupyterLab</strong> ร่วมกับเพื่อนคู่ใจอย่าง <strong>Google Antigravity</strong>:</p>
                            <ul class="mb-4">
                                <li class="text-sm"><strong>Junior High (Creative Mind):</strong> ฝึกการใช้ Prompt เพื่อขอให้ AI ช่วยอธิบายโค้ดที่ซับซ้อน</li>
                                <li class="text-sm"><strong>Senior High (Scientific Logic):</strong> ใช้ AI ช่วยในการค้นหาไลบรารีทางวิทยาศาสตร์ที่เหมาะสม</li>
                                <li class="text-sm"><strong>Vocational (Pro Developer):</strong> ใช้ AI ช่วย Debug และวางโครงสร้างโปรเจกต์แบบมืออาชีพ</li>
                            </ul>
                            
                            <!-- Immersive Link -->
                            <a href="workshop_detail.php?id=0" class="inline-flex items-center gap-2 px-6 py-3 bg-orange-500/10 border border-orange-500/30 rounded-xl text-orange-400 font-bold text-sm hover:bg-orange-500 hover:text-white transition-all shadow-lg shadow-orange-500/10">
                                <i class="fas fa-expand-arrows-alt"></i> Open Immersive Guide
                            </a>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-orange-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Module Illustration</div>
                            <img src="assets/images/module0_dual_platform.png" alt="JupyterLab Setup" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🗺️ แผนผังขั้นตอนการเริ่มโปรเจกต์ (JupyterLab Workflow)</h4>
                    <pre class="mermaid mt-4 mb-6 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph LR
    A[เปิดเว็บ JupyterLab] --> B[สร้าง New Notebook]
    B --> C[เชื่อมต่อ Runtime<br/>Connect]
    C --> D[เขียนโค้ดลงใน Cell]
    D --> E[กด Run / Shift+Enter]
    E --> F[เซฟงานลง Google Drive]
    
    style A fill:#fde68a,stroke:#d97706,stroke-width:2px
    style C fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style E fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style F fill:#34d399,stroke:#059669,stroke-width:2px,color:#111
                    </pre>

                    <h4>📑 ตารางสรุปคีย์ลัดที่ใช้บ่อย (JupyterLab Cheat Sheet)</h4>
                    <div class="tech-table-wrapper">
                        <table class="tech-table">
                            <thead>
                                <tr>
                                    <th>คำสั่ง/คีย์ลัด</th>
                                    <th>แป้นพิมพ์ (Shortcut)</th>
                                    <th>หน้าที่</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>รันโค้ดทันที</strong></td>
                                    <td><code>Shift + Enter</code></td>
                                    <td>ประมวลผลเซลล์ปัจจุบันและเลื่อนไปข้อถัดไป</td>
                                </tr>
                                <tr>
                                    <td><strong>เพิ่มช่องโค้ด (ด้านล่าง)</strong></td>
                                    <td><code>Ctrl/Cmd + M -> B</code></td>
                                    <td>สร้างบรรทัดเขียนโค้ดใหม่ (Code Cell)</td>
                                </tr>
                                <tr>
                                    <td><strong>ลบช่องโค้ด</strong></td>
                                    <td><code>Ctrl/Cmd + M -> D</code></td>
                                    <td>ลบบรรทัดที่ไม่ได้ใช้งานทิ้งไป</td>
                                </tr>
                                <tr>
                                    <td><strong>หยุดการทำงาน (Interrupt)</strong></td>
                                    <td><code>Ctrl/Cmd + M -> I</code></td>
                                    <td>ใช้หยุดโค้ดที่รันไม่จบ (Infinite Loop)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>📦 Examples: เส้นทางการเรียนรู้ตามช่วงวัย (Learning Paths)</h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                        <!-- LEVEL 1: Junior High -->
                        <div class="code-window">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">hello_jupyter.py</span>
                            </div>
                            <pre><code id="code0_l1"><span class="code-comment"># พิมพ์ข้อความทักทาย</span>
<span class="code-func">print</span>(<span class="code-string">"สวัสดี JupyterLab!"</span>)
<span class="code-func">print</span>(<span class="code-string">"10 + 20 ="</span>, <span class="code-number">10</span> + <span class="code-number">20</span>)</code></pre>
                        </div>

                        <!-- LEVEL 2: Senior High -->
                        <div class="code-window">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">system_check.py</span>
                            </div>
                            <pre><code id="code0_l2"><span class="code-keyword">import</span> psutil
ram = psutil.virtual_memory().total / (<span class="code-number">1024</span>**<span class="code-number">3</span>)
<span class="code-func">print</span>(<span class="code-string">f"RAM: {ram:.2f} GB"</span>)</code></pre>
                        </div>

                        <!-- LEVEL 3: Vocational -->
                        <div class="code-window">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">pro_setup.py</span>
                            </div>
                            <pre><code id="code0_l3"><span class="code-keyword">from</span> google.jupyter <span class="code-keyword">import</span> drive
drive.<span class="code-func">mount</span>(<span class="code-string">'/content/drive'</span>)</code></pre>
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <div class="tech-box tech-box-emerald">
                        <h5 class="text-emerald-400"><i class="fas fa-robot"></i> <span class="uppercase">Antigravity Co-Creation Hint</span></h5>
                        <p class="text-sm text-slate-300 mb-4">ลองคัดลอกข้อความนี้ไปถาม <strong>Antigravity</strong> เพื่อเริ่มต้น:</p>
                        <div class="bg-black/40 p-4 rounded-xl border border-emerald-500/20 font-mono text-xs text-emerald-300 mb-0">
                            "ช่วยอธิบายหน้าตาของ JupyterLab ให้ฉันฟังหน่อย และบอก 3 ปุ่มที่สำคัญที่สุดสำหรับมือใหม่"
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center text-orange-400 text-sm border border-orange-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge: All Levels)
                    </h4>
                    
                    <div class="tech-box">
                        <ul class="list-none p-0 m-0">
                            
                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 1 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">ปุ่มลัดใดใช้สำหรับ "รันโค้ด" ในช่องที่เลือกอยู่?</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <p class="m-0 text-slate-300">คำตอบ: แป้น <strong>Shift + Enter</strong> ครับ</p>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 2 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">หากต้องการเพิ่มช่องเขียนโค้ด (Code Cell) ใหม่ด้านล่างทันที ต้องกดปุ่มเมนูไหน?</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <p class="m-0 text-slate-300">คำตอบ: คลิกปุ่ม <strong>"+ Code"</strong> ที่มุมซ้ายบน หรือใช้คีย์ลัด <strong>Ctrl/Cmd + M จากนั้นกด B</strong></p>
                                    </div>
                                </details>
                            </li>

                            <li>
                                <span class="level-badge level-vocational"><i class="fas fa-tools"></i> ข้อที่ 3 (ระดับ ปวช-ปวส)</span>
                                <div class="text-slate-200 font-medium mb-3">หากต้องการติดตั้งไลบรารีใหม่ผ่านคำสั่ง Terminal ใน JupyterLab ต้องพิมพ์เครื่องหมายใดนำหน้าชื่อคำสั่ง?</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <p class="m-0 text-slate-300">คำตอบ: ต้องพิมพ์เครื่องหมาย <strong>"!" (Exclamation mark)</strong> เช่น <code>!pip install ...</code></p>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
