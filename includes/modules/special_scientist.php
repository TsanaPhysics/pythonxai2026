        <!-- Special Module: Python for Young Scientist -->
        <div id="special_scientist" class="workshop-card group" onclick="toggleWorkshop(this)" style="border-color: rgba(139, 92, 246, 0.3);">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon" style="background: rgba(139, 92, 246, 0.1); color: #a78bfa; border-color: rgba(139, 92, 246, 0.2);"><i class="fas fa-microscope"></i></div>
                    <div>
                        <span style="color: #a78bfa;">[Research Track] Computer Vision</span>
                        <h3>Python for Young Scientist: AR Laboratory</h3>
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
                            <h4 class="mt-0" style="color: #a78bfa;">🧬 โลกเสมือนจริงในห้องทดลอง (AR Laboratory)</h4>
                            <p class="mb-3 text-slate-300">เรียนรู้การใช้ Aruco Marker และความรู้คณิตศาสตร์ขยับโมเดลสามมิติซ้อนทับภาพจริง เพื่อการนำเสนอโปรเจกต์วิทยาศาสตร์ที่ล้ำสมัย</p>
                            <ul class="mb-0">
                                <li><strong>เทคโนโลยี:</strong> Aruco Marker (DICT_5X5_50)</li>
                                <li><strong>ทักษะที่ได้:</strong> Pose Estimation, 3D Geometry</li>
                                <li><strong>ไฟล์งาน:</strong> <code>scientist/dna_ar.py</code></li>
                            </ul>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-purple-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Scientist Track</div>
                            <img src="assets/images/research.png" alt="AR Scientist Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <div class="code-window mb-8">
                        <div class="code-window-header" style="background: rgba(139, 92, 246, 0.05); border-bottom-color: rgba(139, 92, 246, 0.1);">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title" style="color: #a78bfa;">dna_ar.py</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_sci', this)"><i class="fas fa-copy"></i> Copy</button>
                                <button onclick="fakeRun('out_sci', this)"><i class="fas fa-play"></i> Run</button>
                            </div>
                        </div>
                        <pre><code id="code_sci"><span class="code-keyword">import</span> cv2
<span class="code-keyword">import</span> cv2.aruco <span class="code-keyword">as</span> aruco

<span class="code-comment"># ไฮไลท์การคำนวณตำแหน่ง 3D เพื่อวางทับภาพวิดีโอ</span>
rvec, tvec, _ = aruco.<span class="code-func">estimatePoseSingleMarkers</span>(corners[<span class="code-number">0</span>], <span class="code-number">0.05</span>, cam_mtx, dist_cf)
projected_dna, _ = cv2.<span class="code-func">projectPoints</span>(np.<span class="code-func">float32</span>(dna_pts), rvec, tvec, cam_mtx, dist_cf)</code></pre>
                        <div class="code-output" id="out_sci">> Calibrating Camera Matrix...
> Detecting Aruco Markers (DICT_5X5_50)...
> Pose Estimated: Rotation(x:0.1, y:0.5, z:0.0)
> Rendering 3D DNA Model Overlay... Done.</div>
                    </div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6" style="color: #a78bfa;">
                        <div class="w-8 h-8 rounded-lg bg-purple-500/20 flex items-center justify-center text-purple-400 text-sm border border-purple-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge)
                    </h4>
                    
                    <div class="tech-box" style="border-left-color: #a78bfa;">
                        <ul class="list-none p-0 m-0">
                            <li class="mb-0">
                                <span class="level-badge" style="background: rgba(139, 92, 246, 0.15); color: #a78bfa; border: 1px solid rgba(139, 92, 246, 0.2);"><i class="fas fa-microscope"></i> ข้อที่ 1 (AR Tech)</span>
                                <div class="text-slate-200 font-medium mb-3">ถ้าต้องการใช้ตารางมาร์กเกอร์เบอร์ 42 ของพจนานุกรม DICT_5X5_50 ต้องตั้งค่าอย่างไร?</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python" style="color: #a78bfa;"># ค้นหา Marker ID = 42
dict = aruco.getPredefinedDictionary(aruco.DICT_5X5_50)
marker_img = aruco.drawMarker(dict, 42, 200)</code></pre>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="mt-8">
                        <a href="../SciExHub2026/python_ai/workshop_manual/python_young_scientist.md" target="_blank" class="ws-btn-glow" style="background: rgba(139, 92, 246, 0.1); color: #a78bfa; border-color: rgba(139, 92, 246, 0.3);">
                            <i class="fas fa-microscope"></i> เปิดอ่านคู่มือโครงงาน
                        </a>
                    </div>
                </div>
            </div>
        </div>
