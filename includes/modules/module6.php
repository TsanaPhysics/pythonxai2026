        <!-- Module 6 (Loaded via Include) -->
        <div id="module6" class="workshop-card" onclick="toggleWorkshop(this)">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon"><i class="fas fa-lightbulb"></i></div>
                    <div>
                        <span>Module 6 (2 Hours)</span>
                        <h3>AI Co-Researcher & Capstone Pitching</h3>
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
                            <p class="mb-3 text-slate-300">ใช้ AI ให้เป็นผู้ช่วยวิจัย (AI Co-Researcher) ผ่านการทำ Prompt Engineering อย่างมีชั้นเชิง แนะนำเครื่องมืออัจฉริยะร่วมกับแนวคิด RAG ป้องกันปัญหา "AI หลอนทิพย์" พร้อมการนำเสนอโครงงานสุดล้ำ</p>
                            <ul class="mb-4">
                                <li class="text-sm"><strong>Vocational (System Architecture):</strong> ออกแบบโครงสร้างระบบ (Hardware + AI) และร่างบทนำเสนอ (Pitching) ด้วย AI</li>
                            </ul>
                            
                            <!-- Immersive Link -->
                            <a href="workshop_detail.php?id=6" class="inline-flex items-center gap-2 px-6 py-3 bg-orange-500/10 border border-orange-500/30 rounded-xl text-orange-400 font-bold text-sm hover:bg-orange-500 hover:text-white transition-all shadow-lg shadow-orange-500/10">
                                <i class="fas fa-expand-arrows-alt"></i> Open Immersive Guide
                            </a>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-orange-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Module Illustration</div>
                            <img src="assets/images/module6_capstone.png" alt="Capstone Pitching Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🗺️ แผนภาพทำงานระบบผู้ช่วยวิจัยแบบ RAG (RAG Architecture)</h4>
                    <pre class="mermaid mt-4 mb-6 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph TD
    A[นักวิจัย<br>พิมพ์คำถาม] --> B[RAG System]
    B --> C[(ฐานข้อมูล Paper<br>Elicit / SciSpace)]
    C -->|ดึงเอกสารบรรทัดที่เกี่ยวข้อง| B
    B --> D[สรุปโดย LLM<br>ChatGPT / Gemini]
    D --> E[คำตอบที่เชื่อถือได้ + มีแหล่งอ้างอิงอ้างอิงจริง]
    
    style A fill:#fde68a,stroke:#d97706,stroke-width:2px
    style C fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style D fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style E fill:#34d399,stroke:#059669,stroke-width:2px,color:#111
                    </pre>

                    <h4>📑 ตารางโครงสร้าง Prompt Engineering ที่ดี (Cheat Sheet)</h4>
                    <div class="tech-table-wrapper">
                        <table class="tech-table">
                            <thead>
                                <tr>
                                    <th>องค์ประกอบ (Prompt Elements)</th>
                                    <th>ตัวอย่างการใช้ (Example)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>1. Role (สวมบทบาท)</strong></td>
                                    <td>"จงสวมบทเป็นนักวิจัยด้านการเกษตรและวิศวกร AI..."</td>
                                </tr>
                                <tr>
                                    <td><strong>2. Task (สั่งงานชัดเจน)</strong></td>
                                    <td>"ช่วยคิดไอเดียโครงงาน 3 ข้อเพื่อแก้ปัญหาศัตรูพืชในสวนทุเรียน..."</td>
                                </tr>
                                <tr>
                                    <td><strong>3. Context (ให้บริบท)</strong></td>
                                    <td>"โดยใช้บอร์ด Raspberry Pi และโมเดล CNN Image Classification..."</td>
                                </tr>
                                <tr>
                                    <td><strong>4. Format (ระบุผลลัพธ์)</strong></td>
                                    <td>"จัดรูปแบบผลลัพธ์เป็นตาราง แจกแจงจุดเด่น จุดด้อย และงบประมาณ..."</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tech-hr"></div>

                    <div class="tech-box tech-box-emerald">
                        <h5 class="text-emerald-400"><i class="fas fa-robot"></i> <span class="uppercase">Prompting with Antigravity</span></h5>
                        <p class="text-sm text-slate-300 mb-4">การทำวิจัยต้องใช้ข้อมูลที่แม่นยำ ลองใช้สูตร <strong>Role + Task + Context</strong> กับ <strong>Antigravity</strong>:</p>
                        <div class="bg-black/40 p-4 rounded-xl border border-emerald-500/20 font-mono text-xs text-emerald-300 mb-0">
                            "จงสวมบทเป็นผู้เชี่ยวชาญด้าน Smart Farming ช่วยแนะนำไลบรารี Python ที่ดีที่สุดสำหรับการตรวจวัดความชื้นในดิน และบอกข้อดี-ข้อเสียมา 3 ข้อ"
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center text-orange-400 text-sm border border-orange-500/30">
                            <i class="fas fa-trophy"></i>
                        </div>
                        Capstone Pitching Task (โปรเจกต์จบคอร์ส)
                    </h4>
                    <p class="text-slate-400 mb-8">ให้นักเรียนจับกลุ่ม 3 คน นำความรู้จาก Module 1-5 มาสร้างโครงงาน และเตรียม Pitching เป็นเวลา 5 นาที:</p>
                    
                    <div class="tech-box">
                        <ul class="list-none p-0 m-0">
                            
                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-lightbulb"></i> Task 1: ตั้งโจทย์ปัญหา (Problem Statement)</span>
                                <div class="text-slate-200 font-medium mb-3">ระบุปัญหาด้านการเกษตรที่พบเจอในชีวิตประจำวัน หรือที่บ้าน</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-info-circle group-open:hidden"></i><i class="fas fa-times-circle hidden group-open:inline"></i> คลิกเพื่อดูแนวทาง</summary>
                                    <div class="challenge-answer">
                                        <p class="m-0 text-slate-300"><strong>ตัวอย่าง:</strong> "ชาวนามักเก็บเกี่ยวข้าวในเวลาที่ความชื้นไม่เหมาะสม ทำให้ข้าวขายได้ราคาตกต่ำ" หรือ "ศัตรูพืชเข้ามาทำลายช่วงกลางคืนโดยที่ชาวสวนไม่รู้ตัว"</p>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-puzzle-piece"></i> Task 2: เลือกโมดูล AI เข้ามาแก้ปัญหา (AI Integration)</span>
                                <div class="text-slate-200 font-medium mb-3">หยิบยกเทคโนโลยี 1 อย่างจาก Module 2-5 ที่จะมาเป็นพระเอก</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-info-circle group-open:hidden"></i><i class="fas fa-times-circle hidden group-open:inline"></i> คลิกเพื่อดูแนวทาง</summary>
                                    <div class="challenge-answer">
                                        <p class="mb-2 text-slate-300"><strong>ตัวอย่าง:</strong></p>
                                        <ul class="list-disc pl-5 text-slate-300">
                                            <li>ใช้ <b>Machine Learning (Random Forest)</b> จากสถิติเพื่อพยากรณ์ความชื้นล่วงหน้า</li>
                                            <li>ใช้ <b>Computer Vision (OpenCV)</b> ต่อกับกล้องวงจรปิดตอนกลางคืนเพื่อตรวจจับศัตรูพืช</li>
                                        </ul>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-search"></i> Task 3: ค้นคว้าด้วย AI Co-Researcher</span>
                                <div class="text-slate-200 font-medium mb-3">ใช้ Gemini หรือ ChatGPT ร่าง Prompt เพื่อถามว่าโลกนี้มีคนทำเครื่องมือนี้ไปแล้วหรือยัง</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-info-circle group-open:hidden"></i><i class="fas fa-times-circle hidden group-open:inline"></i> คลิกเพื่อดูแนวทาง</summary>
                                    <div class="challenge-answer">
                                        <p class="m-0 text-slate-300"><strong>ลองพิมพ์:</strong> "จงสวมบทเป็นนักวิจัยด้าน Agritech ช่วยค้นหาว่ามีการใช้ OpenCV ตรวจจับแมลงตอนกลางคืนหรือไม่ อ้างอิงจากเปเปอร์วิทยาศาสตร์ นำเสนอเป็น bullet points สั้นๆ"</p>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-project-diagram"></i> Task 4: ร่างแผนภาพและงบประมาณ</span>
                                <div class="text-slate-200 font-medium mb-3">ร่างอธิบาย Flow ทำงานว่าข้อมูลเริ่มจากไหน ไปประมวลผลที่ไหน (บน Cloud หรือ บอร์ด)</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-info-circle group-open:hidden"></i><i class="fas fa-times-circle hidden group-open:inline"></i> คลิกเพื่อดูแนวทาง</summary>
                                    <div class="challenge-answer">
                                        <p class="m-0 text-slate-300">เตรียมรูปภาพแบบ Mermaid.js หรือวาดมือบนกระดาน: <b>Sensor -> บอร์ด Raspberry Pi (รัน AI) -> ส่งแจ้งเตือน Line Chatbot</b></p>
                                    </div>
                                </details>
                            </li>

                            <li>
                                <span class="level-badge level-vocational"><i class="fas fa-microphone"></i> Task 5: นำเสนอ (Pitching)</span>
                                <div class="text-slate-200 font-medium mb-3">จัดทัพตัวแทนออกไปนำเสนอหน้าห้อง ภายในเวลา 5 นาที โดยเน้นที่ "จุดเด่นที่โมเดลอื่นทำไม่ได้"</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-info-circle group-open:hidden"></i><i class="fas fa-times-circle hidden group-open:inline"></i> คลิกเพื่อดูแนวทาง</summary>
                                    <div class="challenge-answer">
                                        <p class="m-0 text-slate-300">กรรมการมักจะถามว่า <b>"รู้ได้อย่างไรว่า AI ตัดสินใจถูก? (Black Box)"</b> ให้คุณอ้างอิงวิชาจาก <b>Module 2 xAI</b> ว่าคุณแก้จุดอ่อนนี้ด้วย Feature Importance เรียบร้อยแล้ว!</p>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
