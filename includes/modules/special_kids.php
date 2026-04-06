        <!-- Special Module: Python for Kids -->
        <div id="special_kids" class="workshop-card group" onclick="toggleWorkshop(this)" style="border-color: rgba(190, 242, 100, 0.3);">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon" style="background: rgba(190, 242, 100, 0.1); color: #bef264; border-color: rgba(190, 242, 100, 0.2);"><i class="fas fa-gamepad"></i></div>
                    <div>
                        <span style="color: #bef264;">[Project Track] Local Python</span>
                        <h3>Python for Kids: AI Game Maker</h3>
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
                            <h4 class="mt-0" style="color: #bef264;">📍 เรียนรู้ผ่านการสร้างเกม (Learning via Game Dev)</h4>
                            <p class="mb-3 text-slate-300">น้องๆ จะได้เขียนโค้ด Python เพื่อรันในเครื่องคอมพิวเตอร์ตัวเอง (Local .py) เพื่อสร้างเกมรับผลไม้ที่ควบคุมด้วยการขยับมือ!</p>
                            <ul class="mb-0">
                                <li><strong>เทคโนโลยี:</strong> OpenCV + Machine Learning</li>
                                <li><strong>ทักษะที่ได้:</strong> Game Logic, Camera Control</li>
                                <li><strong>ไฟล์งาน:</strong> <code>kids/fruit_catcher.py</code></li>
                            </ul>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-lime-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Kid Track</div>
                            <img src="assets/images/python_ai_snake.png" alt="Python Game Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <div class="code-window mb-8">
                        <div class="code-window-header" style="background: rgba(190, 242, 100, 0.05); border-bottom-color: rgba(190, 242, 100, 0.1);">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title" style="color: #bef264;">fruit_catcher.py</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_kids', this)"><i class="fas fa-copy"></i> Copy</button>
                                <button onclick="fakeRun('out_kids', this)"><i class="fas fa-play"></i> Run</button>
                            </div>
                        </div>
                        <pre><code id="code_kids"><span class="code-keyword">import</span> cv2
<span class="code-keyword">import</span> numpy <span class="code-keyword">as</span> np

<span class="code-comment"># ไฮไลท์โค้ดสำคัญในการทำนายตำแหน่งมือ</span>
lower_color = np.<span class="code-func">array</span>([<span class="code-number">10</span>, <span class="code-number">100</span>, <span class="code-number">100</span>])
mask = cv2.<span class="code-func">inRange</span>(hsv, lower_color, upper_color)
contours, _ = cv2.<span class="code-func">findContours</span>(mask, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)</code></pre>
                        <div class="code-output" id="out_kids">> Initializing Hand-Tracking Engine...
> Camera Access: OK
> Loaded Assets: [Apple, Banana, Bomb]
> Game Running... (Move your hand to catch fruits!)</div>
                    </div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6" style="color: #bef264;">
                        <div class="w-8 h-8 rounded-lg bg-lime-500/20 flex items-center justify-center text-lime-400 text-sm border border-lime-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge)
                    </h4>
                    
                    <div class="tech-box" style="border-left-color: #bef264;">
                        <ul class="list-none p-0 m-0">
                            <li class="mb-0">
                                <span class="level-badge" style="background: rgba(190, 242, 100, 0.15); color: #bef264; border: 1px solid rgba(190, 242, 100, 0.2);"><i class="fas fa-gamepad"></i> ข้อที่ 1 (Game Logic)</span>
                                <div class="text-slate-200 font-medium mb-3">หากต้องการเพิ่มคะแนนทีละ 10 แต้มเมื่อรับผลไม้ได้ ต้องเขียนโค้ดอย่างไร?</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python" style="color: #bef264;">score = score + 10
# หรือเขียนย่อว่า
score += 10</code></pre>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="mt-8">
                        <a href="../SciExHub2026/python_ai/workshop_manual/python_for_kids_game.md" target="_blank" class="ws-btn-glow" style="background: rgba(190, 242, 100, 0.1); color: #bef264; border-color: rgba(190, 242, 100, 0.3);">
                            <i class="fas fa-book-open"></i> เปิดอ่านคู่มือโครงงาน
                        </a>
                    </div>
                </div>
            </div>
        </div>
