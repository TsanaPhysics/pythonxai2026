        <!-- Module 2 (Loaded via Include) -->
        <div id="module2" class="workshop-card" onclick="toggleWorkshop(this)">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon"><i class="fas fa-brain"></i></div>
                    <div>
                        <span>Module 2 (2 Hours)</span>
                        <h3>Machine Learning Fundamentals & Explainable AI</h3>
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
                            <p class="mb-3 text-slate-300">เรียนรู้การทำงานของ <strong>Machine Learning</strong> ที่ออกแบบมาให้เหมาะสมกับทุกช่วงวัย ตั้งแต่พื้นฐานไปจนถึงประยุกต์ใช้งานจริง (Explainable AI และ Data Cleaning)</p>
                            <ul class="mb-4">
                                <li class="text-sm"><strong>Junior High (AI Logic):</strong> เรียนรู้วิธีการ "สอนงาน AI" ผ่านตัวอย่าง (Supervised Learning) โดยใช้ Antigravity ช่วยอธิบายปลาเปรียบเทียบ</li>
                                <li class="text-sm"><strong>Senior High (Data Modeling):</strong> ฝึกการแบ่งข้อมูล (Train/Test) และใช้ AI ช่วยคำนวณความแม่นยำ (Accuracy Score)</li>
                                <li class="text-sm"><strong>Vocational (Analysis):</strong> เข้าใจเจาะลึกว่าโมเดลตัดสินใจจากอะไร (Feature Importance) โดยคัดลอกโค้ดจาก AI</li>
                            </ul>
                            
                            <!-- Immersive Link -->
                            <a href="workshop_detail.php?id=2" class="inline-flex items-center gap-2 px-6 py-3 bg-cyan-500/10 border border-cyan-500/30 rounded-xl text-cyan-400 font-bold text-sm hover:bg-cyan-500 hover:text-white transition-all shadow-lg shadow-cyan-500/10">
                                <i class="fas fa-expand-arrows-alt"></i> Open Immersive Guide
                            </a>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-orange-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Module Illustration</div>
                            <img src="assets/images/module2_ml_xai.png" alt="Explainable AI Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🗺️ แผนภาพกระบวนการเรียนรู้ของเครื่อง (Machine Learning Pipeline)</h4>
                    <pre class="mermaid mt-4 mb-6 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph TD
    A[Dataset ข้อมูลดิน NPK] --> B{Data Cleaning<br/>(เติม/ลบ ค่าว่าง)}
    B --> C{Train / Test Split}
    C -->|80% Train Data| D[Random Forest Model]
    C -->|20% Test Data| E[Model Validation]
    D <--> E
    E -->|Accuracy > 90%| F[Black Box AI]
    F -.->|Explainable AI<br>xAI| G(Feature Importance<br>ทำไมจึงเลือกสิ่งนี้?)
    
    style A fill:#f97316,stroke:#ea580c,stroke-width:2px,color:#fff
    style B fill:#fde68a,stroke:#d97706,stroke-width:2px
    style C fill:#fde68a,stroke:#d97706,stroke-width:2px
    style D fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style F fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style G fill:#34d399,stroke:#059669,stroke-width:2px,color:#111
                    </pre>

                    <h4>📑 ตารางสรุปคำสั่ง Scikit-Learn (Cheat Sheet)</h4>
                    <div class="tech-table-wrapper">
                        <table class="tech-table">
                            <thead>
                                <tr>
                                    <th>โครงสร้าง (Concept)</th>
                                    <th>ตัวอย่างโค้ด (Syntax)</th>
                                    <th>คำอธิบายการใช้งาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Data Cleaning (ปวช)</strong></td>
                                    <td><code class="highlight-purple">df.fillna(df.mean())</code></td>
                                    <td>ซ่อมแซมช่องที่ข้อมูลหายไป ด้วยการเติมค่าเฉลี่ย</td>
                                </tr>
                                <tr>
                                    <td><strong>Train/Test Split (ม.ปลาย)</strong></td>
                                    <td><code class="highlight-purple">train_test_split(X, y)</code></td>
                                    <td>แบ่งข้อมูลที่มีออกเป็นส่วนเรียนรู้ 80% และส่วนสอบข้อเขียน 20%</td>
                                </tr>
                                <tr>
                                    <td><strong>Init Model (ม.ต้น)</strong></td>
                                    <td><code class="highlight-purple">model = DecisionTreeClassifier()</code></td>
                                    <td>ประกาศเรียกต้นไม้ตัดสินใจ (White Box) เข้ามาสแตนด์บาย</td>
                                </tr>
                                <tr>
                                    <td><strong>Train (Fit)</strong></td>
                                    <td><code class="highlight-purple">model.fit(X, y)</code></td>
                                    <td>สั่งให้ AI เริ่มอ่านและพยายามจับแพทเทิร์น</td>
                                </tr>
                                <tr>
                                    <td><strong>Predict & XAI</strong></td>
                                    <td><code class="highlight-purple">model.feature_importances_</code></td>
                                    <td>ดู "เหตุผล" หรือแร่ธาตุตัวไหนที่ AI ใช้เป็นช้อยส์ชี้ขาดมากที่สุด</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>📦 Examples: เส้นทางการเรียนรู้ตามช่วงวัย (Learning Paths)</h4>
                    <p>เลือกศึกษาหน้าต่างโค้ดตามระดับชั้น <b>ม.ต้น</b>, <b>ม.ปลาย</b> หรือ <b>ปวช-ปวส</b> เพื่อเจาะลึกและเรียนรู้ AI อย่างเป็นขั้นเป็นตอน</p>

                    <!-- LEVEL 1: Junior High -->
                    <div style="margin-top:24px; padding-left:16px; border-left:4px solid #22c55e;">
                        <h5 style="color:#10b981; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟢 ระดับมัธยมศึกษาตอนต้น (Junior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> เห็นภาพรวมว่า AI เรียนรู้ได้อย่างไร โดยสมมติให้ AI เดาเกรดคุณภาพผลไม้จากน้ำหนักและสี (White Box vs Black Box)</p>
                        
                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level1_easy_ml.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code2_l1', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out2_l1', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code2_l1"><span class="code-keyword">from</span> sklearn.tree <span class="code-keyword">import</span> DecisionTreeClassifier

<span class="code-comment"># ข้อมูลสมมติ: [น้ำหนักผลไม้(g), ความเข้มสี(1-10)]</span>
X_data = [[150, 8], [120, 5], [160, 9], [110, 3]]
<span class="code-comment"># คำตอบ: 1=พรีเมียม, 0=ธรรมดา</span>
y_answer = [1, 0, 1, 0]

<span class="code-comment"># 1. สร้างหุ่นยนต์เดาใจ (AI แบบต้นไม้ตัดสินใจ กล่องขาวมองเห็นง่าย)</span>
robot = <span class="code-func">DecisionTreeClassifier</span>()

<span class="code-comment"># 2. ป้อนข้อมูลให้หุ่นยนต์อ่าน (เรียนรู้)</span>
robot.<span class="code-func">fit</span>(X_data, y_answer)

<span class="code-comment"># 3. ลองทดสอบผลไม้ลูกใหม่ หนัก 155g, สีระดับ 8</span>
<span class="code-func">print</span>(<span class="code-string">"AI ทำนายเกรดผลไม้ลูกใหม่คือ:"</span>, robot.<span class="code-func">predict</span>([[155, 8]]))</code></pre>
                            <div class="code-output" id="out2_l1">> AI begins loading data...
> Learning structure from 4 sample fruits...
AI ทำนายเกรดผลไม้ลูกใหม่คือ: [1]
> สรุปผล: AI ทายว่าเป็นผลไม้เกรด "พรีเมียม" อย่างถูกต้อง!</div>
                        </div>
                    </div>

                    <!-- LEVEL 2: Senior High -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #3b82f6;">
                        <h5 style="color:#60a5fa; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🔵 ระดับมัธยมศึกษาตอนปลาย (Senior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> เข้าใจวงจรชีวิต AI ฉบับมาตรฐาน (Train/Test Split) สำหรับคัดกรองพืชเศรษฐกิจตามแร่ธาตุ NPK ด้วยหลักการสถิติเชิงความแม่นยำ</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level2_intermediate_ml.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code2_l2', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out2_l2', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code2_l2"><span class="code-keyword">from</span> sklearn.model_selection <span class="code-keyword">import</span> train_test_split
<span class="code-keyword">from</span> sklearn.ensemble <span class="code-keyword">import</span> RandomForestClassifier
<span class="code-keyword">from</span> sklearn.metrics <span class="code-keyword">import</span> accuracy_score

<span class="code-comment"># ทำการแบ่งโจทย์เป็น 80% ป้อนให้ AI เรียนรู้ (Train) </span>
<span class="code-comment"># และเก็บ 20% ไว้สำหรับเป็นข้อสอบวัดความฉลาด (Test)</span>
X_train, X_test, y_train, y_test = <span class="code-func">train_test_split</span>(X_soil, y_crop, test_size=<span class="code-number">0.2</span>, random_state=<span class="code-number">42</span>)

<span class="code-comment"># เรียกโมเดล Black Box ที่แม่นยำสูง (ป่าสุ่ม 100 ต้น)</span>
model = <span class="code-func">RandomForestClassifier</span>(n_estimators=<span class="code-number">100</span>)
model.<span class="code-func">fit</span>(X_train, y_train)

<span class="code-comment"># นำข้อสอบไปให้ AI ทายผล</span>
predictions = model.<span class="code-func">predict</span>(X_test)
<span class="code-func">print</span>(<span class="code-string">"ความแม่นยำของโมเดลนี้:"</span>, <span class="code-func">accuracy_score</span>(y_test, predictions) * <span class="code-number">100</span>, <span class="code-string">"%"</span>)</code></pre>
                            <div class="code-output" id="out2_l2">> Splitting dataset into Training and Testing...
> Training Random Forest Model with 100 Estimators...
> Predicting Test Patterns...
ความแม่นยำของโมเดลนี้: 92.5 %
> โมเดลสอบผ่านและพร้อมนำไปทำนายพันธุ์พืช</div>
                        </div>
                    </div>

                    <!-- LEVEL 3: Vocational (Voc/Col) -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #f97316;">
                        <h5 style="color:#fb923c; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟠 ระดับ ปวช. และ ปวส. (Vocational Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> ควบคุมข้อมูลดิบในหน้างานจริง (Data Cleaning) และตีแผ่เหตุผลของ AI เพื่อสร้างความน่าเชื่อถือทางธุรกิจ (Feature Importance xAI)</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level3_advanced_xai.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code2_l3', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out2_l3', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code2_l3"><span class="code-keyword">import</span> pandas <span class="code-keyword">as</span> pd
<span class="code-keyword">from</span> sklearn.ensemble <span class="code-keyword">import</span> RandomForestClassifier

<span class="code-comment"># 1. วงจรซ่อมแซมข้อมูล (Data Cleaning) </span>
<span class="code-comment"># ในโลกจริง เซ็นเซอร์ดิน NPK อาจะมีข้อมูลแหว่งหายไป (Missing Values / NaN)</span>
<span class="code-func">print</span>(<span class="code-string">"เช็คข้อผิดพลาดข้อมูล:"</span>, df.<span class="code-func">isnull</span>().<span class="code-func">sum</span>().<span class="code-func">sum</span>(), <span class="code-string">"จุด"</span>)

<span class="code-comment"># เติมข้อมูลที่โบ๋ไปด้วย 'ค่าเฉลี่ย' เพื่อกู้ข้อมูลกลับมา</span>
df.<span class="code-func">fillna</span>(df.<span class="code-func">mean</span>(), inplace=<span class="code-keyword">True</span>)

<span class="code-comment"># 2. ทำการเทรน AI กล่องดำ ป่าสุ่ม</span>
model = <span class="code-func">RandomForestClassifier</span>()
model.<span class="code-func">fit</span>(df[[<span class="code-string">'N'</span>, <span class="code-string">'P'</span>, <span class="code-string">'K'</span>, <span class="code-string">'pH'</span>]], df[<span class="code-string">'Crop'</span>])

<span class="code-comment"># 3. สกัดเหตุผล (Explainable AI - XAI) เพราะการเกษตรต้องการความโปร่งใส!</span>
importances = model.feature_importances_
<span class="code-func">for</span> col, val <span class="code-keyword">in</span> <span class="code-func">zip</span>([<span class="code-string">'N'</span>, <span class="code-string">'P'</span>, <span class="code-string">'K'</span>, <span class="code-string">'pH'</span>], importances):
    <span class="code-func">print</span>(<span class="code-string">f"แร่ธาตุ {col} มีน้ำหนักต่อการตัดสินใจปลูกพืช: {val:.2f}"</span>)</code></pre>
                            <div class="code-output" id="out2_l3">> เช็คข้อผิดพลาดข้อมูล: 15 จุด
> Executing df.fillna() - Missing values filled with column means.
> Model training completed.
> --- xAI Feature Interpretations ---
แร่ธาตุ N มีน้ำหนักต่อการตัดสินใจปลูกพืช: 0.22
แร่ธาตุ P มีน้ำหนักต่อการตัดสินใจปลูกพืช: 0.18
แร่ธาตุ K มีน้ำหนักต่อการตัดสินใจปลูกพืช: 0.44
แร่ธาตุ pH มีน้ำหนักต่อการตัดสินใจปลูกพืช: 0.16
> สรุปผล XAI: โพแทสเซียม (K) เป็นดัชนีสำคัญที่สุดในการคัดรูปพืช</div>
                        </div>
                    </div>

                    <div class="tech-box tech-box-emerald">
                        <h5 class="text-emerald-400"><i class="fas fa-robot"></i> <span class="uppercase">AI Co-creation Strategy</span></h5>
                        <p class="text-sm text-slate-300 mb-4">เมื่อ AI ให้คำตอบที่ซับซ้อนเกินไป ลองถาม <strong>Antigravity</strong> แบบนี้:</p>
                        <div class="bg-black/40 p-4 rounded-xl border border-emerald-500/20 font-mono text-xs text-emerald-300 mb-0">
                            "ช่วยเปรียบเทียบให้หน่อยว่า 'ป่าสุ่ม (Random Forest)' ต่างจาก 'ต้นไม้ตัดสินใจ (Decision Tree)' ยังไง? เอาแบบที่มัธยมต้นเข้าใจง่ายๆ นะ"
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center text-orange-400 text-sm border border-orange-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge: All Levels)
                    </h4>
                    <p class="text-slate-400 mb-8">ให้นักเรียนทดลองแก้ด่านแบบฝึกทักษะตามระดับของตนเอง:</p>
                    
                    <div class="tech-box">
                        <ul class="list-none p-0 m-0">
                            
                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 1 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">เขียนคำสั่งเรียกตู้ระบบสมองกลแบบ DecisionTreeClassifier และเก็บเข้าตัวแปร <code class="text-emerald-400">robot</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">from sklearn.tree import DecisionTreeClassifier
robot = DecisionTreeClassifier()</code></pre>
                                    </div>
                                </details>
                            </li>
    
                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 2 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">เขียนคำสั่ง <code class="text-emerald-400">fit</code> เพื่อสั่งให้ <code class="text-emerald-400">robot</code> เริ่มการเรียนรู้ข้อมูลจากคำถาม <code class="text-emerald-400">X_data</code> และเฉลย <code class="text-emerald-400">y_answer</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">robot.fit(X_data, y_answer)</code></pre>
                                    </div>
                                </details>
                            </li>
    
                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 3 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">ใช้กลไก <code class="text-blue-400">train_test_split</code> ตัดแบ่งตารางข้อมูล <code class="text-blue-400">X_soil</code> แบบสุ่มโดยกำหนด <code class="text-blue-400">test_size=0.2</code> (ข้อสอบ 20%)</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">X_train, X_test, y_train, y_test = train_test_split(X_soil, y_crop, test_size=0.2, random_state=42)</code></pre>
                                    </div>
                                </details>
                            </li>
    
                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 4 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">ใช้ปริ้นท์ค่าความแม่นยำผ่านคำสั่ง <code class="text-blue-400">accuracy_score()</code> โดยดวลกันระหว่างเฉลยจริง <code class="text-blue-400">y_test</code> กับข้อสอบที่ส่งให้ AI วันนี้ <code class="text-blue-400">predictions</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">from sklearn.metrics import accuracy_score
acc = accuracy_score(y_test, predictions)
print(f"ความแม่นยำ: {acc}")</code></pre>
                                    </div>
                                </details>
                            </li>
    
                            <li>
                                <span class="level-badge level-vocational"><i class="fas fa-tools"></i> ข้อที่ 5 (ระดับ ปวช-ปวส)</span>
                                <div class="text-slate-200 font-medium mb-3">ชุดข้อมูลพังทับซ้อนเต็มไปด้วยช่องโหว่ <code class="text-orange-400">NaN</code> จงสั่งซ่อมเซลล์ที่หายไปทั้งหมดด้วยค่าเฉลี่ย <code class="text-orange-400">fillna()</code> และเจาะน้ำหนัก XAI ดูทีหลังรัน <code class="text-orange-400">RandomForest</code> จบ</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-orange-400"># 1. ทำ Data Cleaning ซ่อมข้อมูลแหว่ง
df.fillna(df.mean(), inplace=True)
# 2. ดึงค่าน้ำหนักความสำคัญ (xAI)
importance = model.feature_importances_
print(importance)</code></pre>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
