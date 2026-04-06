        <!-- Module 3 (Loaded via Include) -->
        <div id="module3" class="workshop-card" onclick="toggleWorkshop(this)">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon"><i class="fas fa-network-wired"></i></div>
                    <div>
                        <span>Module 3 (2 Hours)</span>
                        <h3>Neural Network & Deep Learning</h3>
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
                            <p class="mb-3 text-slate-300">เลียนแบบการทำงานของสมองมนุษย์ผ่านเซลล์ประสาทเทียม (ANN) โดยการใช้ <strong>TensorFlow/Keras</strong> ซึ่งผู้เรียนจะได้ฝึกต่อจิ๊กซอว์สมองกลในระดับที่เจาะลึกตามช่วงวัย:</p>
                            <ul class="mb-4">
                                <li class="text-sm"><strong>Junior High (AI Brains):</strong> เรียนรู้วิธีการ "ประกอบร่างสมอง AI" เบื้องต้น และใช้ Antigravity ช่วยอธิบายว่าทำไม AI ถึงฉลาดขึ้นเมื่อฝึกซ้ำ (Epochs)</li>
                                <li class="text-sm"><strong>Senior High (Deep Networks):</strong> ออกแบบลำดับชั้นประสาท (Layers) และใช้ AI ช่วยเลือก 'สวิตช์' (Activation Functions) ที่ถูกต้อง</li>
                                <li class="text-sm"><strong>Vocational (Advanced Tuning):</strong> แก้ไขปัญหา AI "ท่องจำ" (Overfitting) ด้วยเทคนิค Dropout โดยใช้คำแนะนำจาก AI</li>
                            </ul>
                            
                            <!-- Immersive Link -->
                            <a href="workshop_detail.php?id=3" class="inline-flex items-center gap-2 px-6 py-3 bg-cyan-500/10 border border-cyan-500/30 rounded-xl text-cyan-400 font-bold text-sm hover:bg-cyan-500 hover:text-white transition-all shadow-lg shadow-cyan-500/10">
                                <i class="fas fa-expand-arrows-alt"></i> Open Immersive Guide
                            </a>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-orange-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Module Illustration</div>
                            <img src="assets/images/module3_deep_learning.png" alt="Deep Learning Brain Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🗺️ แผนภาพโครงสร้างสมองกล (Neural Network Topology)</h4>
                    <pre class="mermaid mt-4 mb-6 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph LR
    subgraph Input Layer
        I1((น้ำหนัก))
        I2((ขนาด))
        I3((ความหวาน))
    end
    
    subgraph Hidden Layer 1 (ReLU)
        H1((H1))
        H2((H2))
        H3((...))
    end
    
    subgraph Dropout Layer (ปวช)
        D[ปิดการทำงานย้ำคิดย้ำทำ 20%]
    end
    
    subgraph Output Layer
        O1((ปกติ))
        O2((ราสนิม))
        O3((แมลงกิน))
    end
    
    I1 --> H1 & H2 & H3
    I2 --> H1 & H2 & H3
    I3 --> H1 & H2 & H3
    
    H1 & H2 & H3 --> D
    D --> O1 & O2 & O3
    
    style I1 fill:#fde68a,stroke:#d97706,stroke-width:2px
    style I2 fill:#fde68a,stroke:#d97706,stroke-width:2px
    style I3 fill:#fde68a,stroke:#d97706,stroke-width:2px
    style H1 fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style H2 fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style H3 fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style D fill:#9ca3af,stroke:#4b5563,stroke-width:2px,color:#fff,stroke-dasharray: 5 5
    style O1 fill:#34d399,stroke:#059669,stroke-width:2px
    style O2 fill:#34d399,stroke:#059669,stroke-width:2px
    style O3 fill:#34d399,stroke:#059669,stroke-width:2px
                    </pre>

                    <h4>📑 ตารางสรุปคำสั่ง Keras (Cheat Sheet)</h4>
                    <div class="tech-table-wrapper">
                        <table class="tech-table">
                            <thead>
                                <tr>
                                    <th>ชั้นคำสั่ง (Layer Types)</th>
                                    <th>ตัวอย่างโค้ด (Syntax)</th>
                                    <th>คำอธิบายการใช้งาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Dense (ม.ต้น/ปลาย)</strong></td>
                                    <td><code class="highlight-purple">model.add(Dense(8, activation='relu'))</code></td>
                                    <td>เพิ่มเซลล์สมองกล 8 เซลล์ในชั้นนั้น พร้อมเปิดสวิตช์ ReLU เพื่อรับค่าบวก</td>
                                </tr>
                                <tr>
                                    <td><strong>Dropout (ปวช.)</strong></td>
                                    <td><code class="highlight-purple">model.add(Dropout(0.2))</code></td>
                                    <td>สุ่มปิดการทำงานของโหนด 20% ระหว่างฝึก เพื่อไม่ให้ AI จำคำตอบไปสอบ (Overfitting)</td>
                                </tr>
                                <tr>
                                    <td><strong>Sigmoid vs Softmax</strong></td>
                                    <td><code class="highlight-purple">Dense(3, activation='softmax')</code></td>
                                    <td><code>sigmoid</code> ใช้ตอนแยกของ 2 อย่าง ส่วน <code>softmax</code> ใช้คำนวณ % ความน่าจะเป็นกรณีแยก 3 อย่างขึ้นไป</td>
                                </tr>
                                <tr>
                                    <td><strong>Compile</strong></td>
                                    <td><code class="highlight-purple">loss='categorical_crossentropy'</code></td>
                                    <td>การตั้งมาตรวัดความผิดพลาด (Loss) แบบแยกหมวดหมู่มากกว่า 2 คลาส</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tech-hr"></div>

                    <div class="tech-box tech-box-emerald">
                        <h5 class="text-emerald-400"><i class="fas fa-robot"></i> <span class="uppercase">Architecture Design with AI</span></h5>
                        <p class="text-sm text-slate-300 mb-4">การออกแบบโครงสร้างสมองกล (Topology) อาจจะยาก ลองปรึกษา <strong>Antigravity</strong> ดูครับ:</p>
                        <div class="bg-black/40 p-4 rounded-xl border border-emerald-500/20 font-mono text-xs text-emerald-300 mb-0">
                            "ช่วยแนะนำหน่อยว่าถ้าฉันต้องการสร้าง AI แยกแยะผลไม้ 10 ชนิด ฉันควรมีกี่ Hidden Layers และใช้ Activation ฟังก์ชันตัวไหนในตอนจบ?"
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>📦 Examples: เส้นทางการเรียนรู้ตามช่วงวัย (Learning Paths)</h4>
                    <p>ฝึกฝนการเขียนโครงข่ายประสาทเทียมผ่านหน้าต่างจำลอง Jupyter Keras โดยเลือกเนื้อหาตามระดับของตนเอง:</p>

                    <!-- LEVEL 1: Junior High -->
                    <div style="margin-top:24px; padding-left:16px; border-left:4px solid #22c55e;">
                        <h5 style="color:#10b981; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟢 ระดับมัธยมศึกษาตอนต้น (Junior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> สร้างสมองกลที่มีเพียง 1 เลเยอร์ (1 ชั้น) เพื่อให้เห็นว่า พอเราสั่งอ่านหนังสือซ้ำซาก (Epochs) สมองกลจะเก่งขึ้นจนเต็มประสิทธิภาพได้อย่างไร</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level1_easy_brain.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code3_l1', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out3_l1', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code3_l1"><span class="code-keyword">from</span> tensorflow.keras.models <span class="code-keyword">import</span> Sequential
<span class="code-keyword">from</span> tensorflow.keras.layers <span class="code-keyword">import</span> Dense

<span class="code-comment"># 1. สร้างพื้นที่สมองกลเปล่าๆ</span>
baby_brain = <span class="code-func">Sequential</span>()

<span class="code-comment"># 2. เพิ่มกลุ่มเซลล์รับรู้เพียง 2 เซลล์เพื่อความเรียบง่าย</span>
baby_brain.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">2</span>, input_dim=<span class="code-number">1</span>, activation=<span class="code-string">'relu'</span>))
baby_brain.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">1</span>, activation=<span class="code-string">'sigmoid'</span>))

<span class="code-comment"># 3. เตรียมสอบ และสั่งฝึกทำข้อสอบซ้ำ 10 รอบ (Epochs)</span>
baby_brain.<span class="code-func">compile</span>(loss=<span class="code-string">'binary_crossentropy'</span>, optimizer=<span class="code-string">'adam'</span>, metrics=[<span class="code-string">'accuracy'</span>])

<span class="code-func">print</span>(<span class="code-string">"AI กำลังเริ่มอ่านตำรา 10 จบ..."</span>)
baby_brain.<span class="code-func">fit</span>(X_data, y_answer, epochs=<span class="code-number">10</span>, verbose=<span class="code-number">1</span>)</code></pre>
                            <div class="code-output" id="out3_l1">> AI กำลังเริ่มอ่านตำรา 10 จบ...
Epoch 1/10
2/2 [===========] - 0s 1ms/step - loss: 0.69 - accuracy: 0.4000
Epoch 2/10
2/2 [===========] - 0s 1ms/step - loss: 0.58 - accuracy: 0.5500
...
Epoch 10/10
2/2 [===========] - 0s 1ms/step - loss: 0.31 - accuracy: 0.8900
> สมองกลเด็กเรียนรู้ได้สำเร็จ ความแม่นยำจบที่ 89%!</div>
                        </div>
                    </div>

                    <!-- LEVEL 2: Senior High -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #3b82f6;">
                        <h5 style="color:#60a5fa; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🔵 ระดับมัธยมศึกษาตอนปลาย (Senior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> สร้างสมองกลที่มีหลายชั้น (Deep Learning) เพื่อจำแนกผลไม้ (ดี/เสีย) โดยการกำหนด `activation='sigmoid'` ในชั้น Output เพื่อบีบช่วงคำตอบ</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level2_binary_class.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code3_l2', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out3_l2', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code3_l2"><span class="code-keyword">from</span> tensorflow.keras.models <span class="code-keyword">import</span> Sequential
<span class="code-keyword">from</span> tensorflow.keras.layers <span class="code-keyword">import</span> Dense

model = <span class="code-func">Sequential</span>()

<span class="code-comment"># ชั้นที่ 1 (Input + Hidden) ถอดรหัส 4 มิติจากเซ็นเซอร์ สู่เซลล์ประสาท 16 โหนด</span>
model.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">16</span>, input_dim=<span class="code-number">4</span>, activation=<span class="code-string">'relu'</span>))

<span class="code-comment"># ชั้นที่ 2 (Hidden Layer 2) เรียบเรียงความเข้าใจอีกชั้นด้วย 8 โหนด</span>
model.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">8</span>, activation=<span class="code-string">'relu'</span>))

<span class="code-comment"># ชั้นสุทธิ (Output Layer) บีบเปอร์เซ็นต์ให้เหลือแค่ 0 ถึง 1 ผ่านฟังก์ชัน Sigmoid</span>
model.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">1</span>, activation=<span class="code-string">'sigmoid'</span>))

model.<span class="code-func">compile</span>(loss=<span class="code-string">'binary_crossentropy'</span>, optimizer=<span class="code-string">'adam'</span>, metrics=[<span class="code-string">'accuracy'</span>])
model.<span class="code-func">fit</span>(X_train, y_train, epochs=<span class="code-number">50</span>)</code></pre>
                            <div class="code-output" id="out3_l2">Layer (type)                Output Shape              Param #   
=================================================================
dense_1 (Dense)             (None, 16)                 80        
dense_2 (Dense)             (None, 8)                  136       
dense_3 (Dense)             (None, 1)                  9         
=================================================================
Total params: 225
Epoch 50/50 ... accuracy: 0.9450
> Deep Learning model perfectly classified Grade A vs Grade B crops.</div>
                        </div>
                    </div>

                    <!-- LEVEL 3: Vocational (Voc/Col) -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #f97316;">
                        <h5 style="color:#fb923c; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟠 ระดับ ปวช. และ ปวส. (Vocational Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> ประยุกต์ใช้เพื่อตรวจจับโรคพืช 3 ชนิด (Multi-class) ด้วยเทคนิคสับสวิตช์ `Dropout` ป้องกันไม่ให้ AI ท่องจำแต่คำตอบ (Overfitting)</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level3_multiclass_dropout.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code3_l3', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out3_l3', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code3_l3"><span class="code-keyword">from</span> tensorflow.keras.models <span class="code-keyword">import</span> Sequential
<span class="code-keyword">from</span> tensorflow.keras.layers <span class="code-keyword">import</span> Dense, Dropout

pro_model = <span class="code-func">Sequential</span>()

<span class="code-comment"># ชั้นดักจับข้อมูลเซ็นเซอร์แปลงเกษตร 10 จุด ส่งให้โหนด 64 ตัว</span>
pro_model.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">64</span>, input_dim=<span class="code-number">10</span>, activation=<span class="code-string">'relu'</span>))

<span class="code-comment"># แทรกเลเยอร์ Dropout: ตัดวงจรโหนดทิ้งชั่วคราวร้อยละ 20 </span>
<span class="code-comment"># ช่วยบังคับให้โหนดอื่นทำงานชดเชย ลดปัญหา Overfit ในข้อมูลจริงได้ดีเยี่ยม</span>
pro_model.<span class="code-func">add</span>(<span class="code-func">Dropout</span>(<span class="code-number">0.2</span>))

pro_model.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">32</span>, activation=<span class="code-string">'relu'</span>))
pro_model.<span class="code-func">add</span>(<span class="code-func">Dropout</span>(<span class="code-number">0.1</span>))

<span class="code-comment"># ชั้นสรุปผล 3 หมวด (โรครา, แมลงเจาะ, ปกติ) ต้องใช้ฟังก์ชัน Softmax แจกจ่ายเปอร์เซ็นต์</span>
pro_model.<span class="code-func">add</span>(<span class="code-func">Dense</span>(<span class="code-number">3</span>, activation=<span class="code-string">'softmax'</span>))

<span class="code-comment"># ใช้ categorical_crossentropy วัดความกว้างของเป้าระหว่าง 3 คลาส</span>
pro_model.<span class="code-func">compile</span>(loss=<span class="code-string">'categorical_crossentropy'</span>, optimizer=<span class="code-string">'adam'</span>, metrics=[<span class="code-string">'accuracy'</span>])
pro_model.<span class="code-func">fit</span>(X_train, y_train, epochs=<span class="code-number">100</span>)</code></pre>
                            <div class="code-output" id="out3_l3">Applying Dropout Layers ... (Rate: 20%, 10%)
Epoch 100/100
16/16 [==============================] - 0s 6ms/step - loss: 0.12 - accuracy: 0.9820
> Multi-class Classification Model Completed.
> Evaluating on external testing data...
> Test Accuracy: 0.9650 (No extreme overfitting detected thanks to Dropout!)</div>
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center text-orange-400 text-sm border border-orange-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge: All Levels)
                    </h4>
                    <p class="text-slate-400 mb-8">สวมบทบาทเป็นวิศวกรออกแบบเซลล์สมองกล โดยเลือกตอบข้อที่เข้ากับระดับชั้นของตนเอง:</p>
                    
                    <div class="tech-box">
                        <ul class="list-none p-0 m-0">
                            
                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 1 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">เขียนคำสั่งเรียกตู้สมองกลเปล่าๆ มา 1 ใบ โดยใช้คีย์เวิร์ด <code class="text-emerald-400">Sequential()</code> และเก็บเข้าตัวแปรลอยชื่อ <code class="text-emerald-400">brain</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">from tensorflow.keras.models import Sequential
brain = Sequential()</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 2 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">สั่งให้สมองกลใบนี้ <code class="text-emerald-400">compile</code> ตัวเอง ด้วย Optimizer แบบ <code class="text-emerald-400">'adam'</code> และแสดงผลการประเมินผลเป็น <code class="text-emerald-400">'accuracy'</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">brain.compile(optimizer='adam', loss='binary_crossentropy', metrics=['accuracy'])</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 3 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">แทรกเลเยอร์สมองกล (Hidden Layer) เข้าไป 1 ชั้นจำนวนโหนดอยู่ที่ <b>128 โหนด</b> และใช้เครื่องขยายสัญญาณเข้าแบบ <code class="text-blue-400">'relu'</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">from tensorflow.keras.layers import Dense
model.add(Dense(128, activation='relu'))</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 4 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">สั่งจบคอร์สปริ้นท์ชั้นสุดท้าย (Output Layer) ให้กลายเป็น <code class="text-blue-400">Dense(1)</code> ตัวเดียว และจำกัดคำตอบให้เป็นแบบโยนเหรียญผ่าน <code class="text-blue-400">activation='sigmoid'</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">model.add(Dense(1, activation='sigmoid'))</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li>
                                <span class="level-badge level-vocational"><i class="fas fa-tools"></i> ข้อที่ 5 (ระดับ ปวช-ปวส)</span>
                                <div class="text-slate-200 font-medium mb-3">เพื่อให้ AI ทำนายเกรดสภาพดิน 5 แบบในเลเยอร์ Output คุณต้องสั่ง <code class="text-orange-400">Dense(5)</code> พ่วงกับ Activation ฟังก์ชันตัวใด? และการตัดสะพานประสาท 30% ทิ้งเพื่อแก้ Overfit ชั่วคราวเขียนอย่างไร?</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-orange-400"># ตัดสะพานประสาทเพื่อแก้ Overfitting
from tensorflow.keras.layers import Dropout
pro_model.add(Dropout(0.3))

# ตอบ: ต้องใช้ softmax สำหรับแบ่งข้อมูลมากกว่าสองคลาส
pro_model.add(Dense(5, activation='softmax'))</code></pre>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
