        <!-- Module 1 (Loaded via Include) -->
        <div id="module1" class="workshop-card" onclick="toggleWorkshop(this)">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon"><i class="fab fa-python"></i></div>
                    <div>
                        <span>Module 1 (2 Hours)</span>
                        <h3>Python Programming for AI & Data Handling</h3>
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
                            <ul class="mb-6">
                                <li class="text-sm"><strong>Junior High:</strong> เรียนรู้พื้นฐาน Python ผ่านการ "คุยกับ AI" เพื่อให้เขียนโค้ดแสดงผลที่น่าตื่นเต้น</li>
                                <li class="text-sm"><strong>Senior High:</strong> ใช้ AI ช่วยประมวลผลตรรกะที่ซับซ้อนและการวิเคราะห์ข้อมูลสถิติเบื้องต้น</li>
                                <li class="text-sm"><strong>Vocational:</strong> ฝึกการเขียนโปรแกรมเชิงโครงสร้างและการจัดการไฟล์ข้อมูลขนาดใหญ่ (Big Data) ร่วมกับ AI</li>
                            </ul>
                            
                            <!-- Immersive Link -->
                            <a href="workshop_detail.php?id=1" class="inline-flex items-center gap-2 px-6 py-3 bg-orange-500/10 border border-orange-500/30 rounded-xl text-orange-400 font-bold text-sm hover:bg-orange-500 hover:text-white transition-all shadow-lg shadow-orange-500/10">
                                <i class="fas fa-expand-arrows-alt"></i> Open Immersive Guide
                            </a>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-orange-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Module Illustration</div>
                            <img src="assets/images/python_ai_snake.png" alt="Python AI for Agriculture Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🗺️ ภาพรวมโครงสร้างข้อมูล (Data Pipeline Diagram)</h4>
                    <pre class="mermaid mt-4 mb-6 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph TD
    A[Raw Data CSV<br>ข้อมูลดิน NPK] -->|pandas| B(Data Manipulation)
    B -->|Group By| C{Statistical Mean}
    B -->|Condition If-Else| D[Alert System]
    C -->|matplotlib| E((Data Visualization<br>Scatter Plot))
    E --> F[AI Machine Learning<br>Module 2]
    
    style A fill:#f97316,stroke:#ea580c,stroke-width:2px,color:#fff
    style B fill:#fde68a,stroke:#d97706,stroke-width:2px
    style C fill:#fde68a,stroke:#d97706,stroke-width:2px
    style E fill:#f97316,stroke:#ea580c,stroke-width:2px,color:#fff
    style F fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
                    </pre>

                    <h4>📑 ตารางสรุปคำสั่ง Python พื้นฐาน (Cheat Sheet)</h4>
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
                                    <td><strong>Variables</strong></td>
                                    <td><code class="highlight-purple">pH = 6.5</code></td>
                                    <td>กล่องเก็บข้อมูลเดี่ยว ชนิดตัวเลขทศนิยม</td>
                                </tr>
                                <tr>
                                    <td><strong>List</strong></td>
                                    <td><code class="highlight-purple">list = ["N", "P"]</code></td>
                                    <td>แถวลำดับเก็บข้อมูลเป็นชุด เข้าถึงผ่านตำแหน่ง 0, 1...</td>
                                </tr>
                                <tr>
                                    <td><strong>Dictionary</strong></td>
                                    <td><code class="highlight-purple">data = {"N": 90}</code></td>
                                    <td>โครงสร้างแบบคู่กุญแจและค่า (Key-Value)</td>
                                </tr>
                                <tr>
                                    <td><strong>For Loop</strong></td>
                                    <td><code class="highlight-purple">for i in list:</code></td>
                                    <td>ทำซ้ำคำสั่งอัตโนมัติ ตามจำนวนสมาชิกในกล่องให้ครบ</td>
                                </tr>
                                <tr>
                                    <td><strong>Function</strong></td>
                                    <td><code class="highlight-purple">def my_func():</code></td>
                                    <td>ห่อหุ้มชุดคำสั่งไว้ใช้งานซ้ำ เพื่อความเป็นระเบียบ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🚀 Part 1: การเตรียมเครื่องมือ (Setting Up JupyterLab)</h4>
                    <p>ในการเขียนและเทรนโมเดล AI เราจะใช้พื้นที่ประมวลผลฟรีและรวดเร็วบนคลาวด์ของ Google ซึ่งก็คือ <b>JupyterLab</b> โดยมีขั้นตอนดังนี้:</p>
                    <ol style="list-style-type: decimal; padding-left: 24px; margin-bottom: 16px;">
                        <li>เปิดเว็บเบราว์เซอร์ไปที่: <a href="https://jupyter.org/try-jupyter/lab/" target="_blank" style="color:#f97316; font-weight:bold;">jupyter.org/try-jupyter/lab/</a></li>
                        <li>กด <b>New Notebook</b> เปลี่ยนชื่อไฟล์ด้านซ้ายบนเป็น <code>Python_Workshop_M1.ipynb</code></li>
                        <li>เพื่อป้องกันข้อมูลสูญหาย เราจะเชื่อมต่อคอมพิวเตอร์คลาวด์เข้าสู่ Google Drive กล่องเก็บไฟล์ของเรา</li>
                    </ol>
                    
                    <div class="tech-box tech-box-blue">
                        <h5 style="color:#60a5fa;"><i class="fas fa-lightbulb"></i> Tip: การติดตั้งไลบรารีเสริม</h5>
                        <p class="text-sm text-slate-300 m-0">ระบบ JupyterLab มีไลบรารีดังๆ เตรียมไว้ให้เกือบหมดแล้ว แต่หากต้องการไลบรารีตัวอื่นเพิ่มเติม สามารถพิมพ์แทรกในเซลล์ว่า <code>!pip install ชื่อแพ็กเกจ</code> แล้วกด Run ได้เลยครับ</p>
                    </div>
                    
                    <div class="code-window">
                        <div class="code-window-header">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title">1_setup_env.py</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_1_1', this)"><i class="fas fa-copy"></i> Copy</button>
                                <button onclick="fakeRun('out_1_1', this)"><i class="fas fa-play"></i> Run</button>
                            </div>
                        </div>
                        <pre><code id="code_1_1"><span class="code-keyword">from</span> google.jupyter <span class="code-keyword">import</span> drive

<span class="code-comment"># เมื่อรันแล้ว ระบบจะขอขออนุญาตเข้าถึงบัญชี Google Drive ของคุณ</span>
drive.<span class="code-func">mount</span>(<span class="code-string">'/content/drive'</span>)</code></pre>
                        <!-- Output Box -->
                        <div class="code-output" id="out_1_1">> Mounting to Google Cloud Drive...
> Mounted at /content/drive
> Status: Connection Success. Ready for execution.</div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🎈 Part 2: ความลับของ Python (The Antigravity Easter Egg)</h4>
                    <p>ทราบหรือไม่ว่าทำไมนักวิทยาศาสตร์ทั่วโลกถึงหลงรักในการเขียนโปรแกรมด้วยภาษา Python? นอกจากการใช้งานที่ง่าย อ่านง่ายเหมือนภาษาอังกฤษแล้ว ผู้พัฒนาภาษา Python ยังมีความทุ่มเทและซ่อนอารมณ์ขันไว้ด้วย ลองรันโค้ดบรรทัดเดียวนี้ดูสิ:</p>
                    
                    <div class="code-window">
                        <div class="code-window-header">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title">2_easter_egg.py</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_1_2', this)"><i class="fas fa-copy"></i> Copy</button>
                                <button onclick="fakeRun('out_1_2', this)"><i class="fas fa-play"></i> Run</button>
                            </div>
                        </div>
                        <pre><code id="code_1_2"><span class="code-comment"># ลองพิมพ์ลงในหน้า JupyterLab และกดปุ่ม Play สีดำ</span>
<span class="code-keyword">import</span> antigravity</code></pre>
                        <!-- Output Box -->
                        <div class="code-output" id="out_1_2">> Executing antigravity module...
> Browser redirection triggered.
> Opening web browser to xkcd comic 353...
> "I just typed 'import antigravity' ... and it's practically flying!"</div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>💻 Part 3: โครงสร้างข้อมูลพื้นฐานและสั่งงานตรรกศาสตร์</h4>
                    <p>เรามักพบข้อมูลเป็นกลุ่มก้อนเสมอ เช่น ตัวแปรเดี่ยว, กระเช้า <b>List</b> หรือพจนานุกรม <b>Dictionary</b> หน้าที่คือการแปลงพวกมันผ่านลูปสั่งงานก่อนส่งไปวิเคราะห์สถิติ</p>
                    
                    <div class="code-window">
                        <div class="code-window-header">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title">3_python_logic.py</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_1_3', this)"><i class="fas fa-copy"></i> Copy</button>
                                <button onclick="fakeRun('out_1_3', this)"><i class="fas fa-play"></i> Run</button>
                            </div>
                        </div>
                        <pre><code id="code_1_3"><span class="code-comment"># ตัวแปรแบบสายอักขระและกล่องข้อมูลแบบ Dictionary</span>
crop_name = <span class="code-string">"ทุเรียน"</span>
soil_data = { <span class="code-string">"N"</span>: 90, <span class="code-string">"P"</span>: 45, <span class="code-string">"K"</span>: 50 }

<span class="code-comment"># การบังคับใช้เงื่อนไขตรวจสอบแร่ธาตุไนโตรเจน</span>
<span class="code-keyword">if</span> soil_data[<span class="code-string">"N"</span>] < <span class="code-number">100</span>:
    <span class="code-func">print</span>(<span class="code-string">f"ผลวิเคราะห์ดินเพื่อปลูก{crop_name}: ขาดสารอาหาร N!"</span>)
    
<span class="code-comment"># จำลองการทำงานเงื่อนไขรดน้ำผ่าน While Loop</span>
water = 0
<span class="code-keyword">while</span> water < <span class="code-number">3</span>:
    water += 1
    <span class="code-func">print</span>(<span class="code-string">f"สั่งการระบบรดน้ำ ปริมาณที่ {water} ลิตร..."</span>)
<span class="code-func">print</span>(<span class="code-string">"ระบบแจ้งเตือน: ดินชุ่มชื้นเพียงพอแล้ว!"</span>)</code></pre>
                        <!-- Output Box -->
                        <div class="code-output" id="out_1_3">> ผลวิเคราะห์ดินเพื่อปลูกทุเรียน: ขาดสารอาหาร N!
> สั่งการระบบรดน้ำ ปริมาณที่ 1 ลิตร...
> สั่งการระบบรดน้ำ ปริมาณที่ 2 ลิตร...
> สั่งการระบบรดน้ำ ปริมาณที่ 3 ลิตร...
> ระบบแจ้งเตือน: ดินชุ่มชื้นเพียงพอแล้ว!</div>
                    </div>

                    <div class="tech-box tech-box-emerald">
                        <h5 class="text-emerald-400"><i class="fas fa-robot"></i> <span class="uppercase">Antigravity Coding Partner</span></h5>
                        <p class="text-sm text-slate-300 mb-4">หากติดขัดตรงไหน ลองคัดลอกโค้ดไปวางแล้วถาม <strong>Antigravity</strong> แบบนี้:</p>
                        <div class="bg-black/40 p-4 rounded-xl border border-emerald-500/20 font-mono text-xs text-emerald-300 mb-0">
                            "ช่วยอธิบายโค้ดส่วนของ While Loop ด้านบนหน่อยว่ามันทำงานยังไง และถ้าฉันอยากเปลี่ยนให้เติมน้ำได้ทีละ 5 ลิตร ต้องแก้ตรงไหน?"
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🧹 Part 3.5: การอัปโหลดไฟล์ และทำความสะอาดข้อมูล (Data Cleaning)</h4>
                    <p>ไฟล์ CSV จริงๆ มักมีช่องโหว่ หรือข้อมูลสูญหาย (Missing Data) เราต้องอัปโหลดข้อมูลเข้าสู่ระบบและซ่อมแซมมันก่อน</p>
                    
                    <div class="code-window mb-6">
                        <div class="code-window-header">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title">3b_data_cleaning.py</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_1_3b', this)"><i class="fas fa-copy"></i> Copy</button>
                                <button onclick="fakeRun('out_1_3b', this)"><i class="fas fa-play"></i> Run</button>
                            </div>
                        </div>
                        <pre><code id="code_1_3b"><span class="code-keyword">import</span> pandas <span class="code-keyword">as</span> pd
<span class="code-keyword">from</span> google.jupyter <span class="code-keyword">import</span> files

<span class="code-comment"># คำสั่งนี้จะเปิดหน้าต่างให้เราคลิกเลือกไฟล์ .csv จากคอมพิวเตอร์อัปโหลดขึ้น JupyterLab</span>
<span class="code-comment"># uploaded = files.upload()</span>

<span class="code-comment"># สมมติเราอัปโหลดไฟล์ที่มีแถวว่างเปล่าเข้ามา เราจะเช็คและลบแถวเหล่านั้นออกด้วย dropna()</span>
df = pd.<span class="code-func">read_csv</span>(<span class="code-string">"data/soil_data_raw.csv"</span>)
<span class="code-func">print</span>(<span class="code-string">f"จำนวนข้อมูลก่อนทำความสะอาด: {len(df)} แถว"</span>)
df_clean = df.<span class="code-func">dropna</span>()
<span class="code-func">print</span>(<span class="code-string">f"จำนวนข้อมูลหลังทำความสะอาด: {len(df_clean)} แถว"</span>)</code></pre>
                        <!-- Output Box -->
                        <div class="code-output" id="out_1_3b">> จำนวนข้อมูลก่อนทำความสะอาด: 154 แถว
> พบแถวที่ข้อมูลไม่ครบถ้วน (NaN) จำนวน 4 แถว ทำการลบทิ้ง...
> จำนวนข้อมูลหลังทำความสะอาด: 150 แถว
> พร้อมนำไปใช้งานต่อ!</div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>📊 Part 4: Data Handling (วิเคราะห์สถิติด้วย Pandas)</h4>
                    <p>เครื่องจักร AI กินตัวเลขจากคอลัมน์ตารางเป็นอาหาร เราจะใช้งานห้องสมุดการวิเคราะห์ดาต้าตระกูล <code>pandas</code> เพื่อประเมินค่าเฉลี่ย และให้ <code>matplotlib</code> ช่วยสร้างกราฟภาพให้เข้าใจง่ายขึ้น</p>

                    <div class="code-window">
                        <div class="code-window-header">
                            <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                            <span class="code-title">4_pandas_plot.py</span>
                            <div class="code-actions">
                                <button onclick="copyCodeBlock('code_1_4', this)"><i class="fas fa-copy"></i> Copy</button>
                                <button onclick="fakeRun('out_1_4', this)"><i class="fas fa-play"></i> Run</button>
                            </div>
                        </div>
                        <pre><code id="code_1_4"><span class="code-keyword">import</span> pandas <span class="code-keyword">as</span> pd
<span class="code-keyword">import</span> matplotlib.pyplot <span class="code-keyword">as</span> plt

<span class="code-comment"># โหลดไฟล์ CSV และหาค่ากลางปริมาณแร่ธาตุของพืชแต่ละชนิด</span>
df_soil = pd.<span class="code-func">read_csv</span>(<span class="code-string">"data/soil_data.csv"</span>)
<span class="code-func">print</span>(<span class="code-string">"ตารางแสดงปริมาณส่วนผสมในดินจำลอง:"</span>)
<span class="code-func">print</span>(df_soil.<span class="code-func">groupby</span>(<span class="code-string">'Crop'</span>).<span class="code-func">mean</span>())

<span class="code-comment"># วาดกราฟจุดไข่ปลา (Scatter Plot) หาความเป็นไปได้ระหว่างธาตุ N และ P</span>
plt.<span class="code-func">scatter</span>(df_soil[<span class="code-string">'N'</span>], df_soil[<span class="code-string">'P'</span>], color=<span class="code-string">'orange'</span>, alpha=<span class="code-number">0.6</span>)
plt.<span class="code-func">title</span>(<span class="code-string">"ความสัมพันธ์แร่ธาตุ N (ไนโตรเจน) และ P (ฟอสฟอรัส)"</span>)
plt.<span class="code-func">ylabel</span>(<span class="code-string">"Phosphorus Amount"</span>)
plt.<span class="code-func">show</span>()</code></pre>
                        <!-- Output Box -->
                        <div class="code-output" id="out_1_4">> Loading CSV Dataset: data/soil_data.csv
ตารางแสดงปริมาณส่วนผสมในดินจำลอง:
           N     P     K
Crop                    
ข้าว      90.0  42.0  43.0
ข้าวโพด   120.0  45.0  40.0
อ้อย     150.0  50.0  60.0

> Generating Scatter Plot using Matplotlib...
&lt;Figure size 640x480 with 1 Axes&gt;
(Graphical window output sent to Jupyter Display Frame)</div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🏆 Part 5: กรณีศึกษาจำแนกตามระดับชั้นเรียน (Level-Specific Mini Labs)</h4>
                    <p>ตัวอย่างการประยุกต์ใช้โค้ดที่ออกแบบมาเพื่อดึงดูดความสนใจของผู้เรียนตามระดับชั้นต่างๆ เพื่อให้เห็นภาพการนำไปใช้งานจริงมากที่สุด:</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                        <!-- M.1 - M.3 (ม.ต้น) -->
                        <div class="code-window">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">5A_junior_high.py (ม.ต้น)</span>
                            </div>
                            <pre><code id="code_1_5a"><span class="code-comment"># โปรแกรมแปลงหน่วยพื้นที่ไร่</span>
<span class="code-keyword">def</span> <span class="code-func">convert_rai_to_sqm</span>(rai):
    sqm = rai * <span class="code-number">1600</span>
    <span class="code-keyword">return</span> sqm

rai_input = <span class="code-number">5</span>
<span class="code-func">print</span>(<span class="code-string">f"{rai_input} ไร่ = {convert_rai_to_sqm(rai_input)} ตร.ม."</span>)</code></pre>
                        </div>

                        <!-- M.4 - M.6 (ม.ปลาย) -->
                        <div class="code-window">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">5B_senior_high.py (ม.ปลาย)</span>
                            </div>
                            <pre><code id="code_1_5b"><span class="code-keyword">import</span> math
<span class="code-comment"># คำนวณความเร็วน้ำตกกระทบพื้น</span>
g = <span class="code-number">9.81</span>
h = <span class="code-number">15</span>
v = math.<span class="code-func">sqrt</span>(<span class="code-number">2</span> * g * h)
<span class="code-func">print</span>(<span class="code-string">f"Velocity: {v:.2f} m/s"</span>)</code></pre>
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center text-orange-400 text-sm border border-orange-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge)
                    </h4>
                    <p class="text-slate-400 mb-8">ให้นักเรียนประยุกต์ใช้ความรู้จากบทเรียน เพื่อแก้ปัญหาสนุกๆ ทั้ง 5 ข้อนี้:</p>
                    
                    <div class="tech-box">
                        <ul class="list-none p-0 m-0">
                            
                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 1 (Variables)</span>
                                <div class="text-slate-200 font-medium mb-3">หากเรามีพันธุ์ข้าวชื่อ <code class="text-emerald-400">"Jasmin"</code> และใช้ระยะเวลาปลูก <code class="text-emerald-400">120</code> วัน จงเขียนโค้ดเพื่อเก็บค่าทั้งสองลงในตัวแปร และ Print ประโยค <em>"ข้าว Jasmin ใช้เวลาปลูก 120 วัน"</em>ออกมา</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">name = "Jasmin"
days = 120
print(f"ข้าว {name} ใช้เวลาปลูก {days} วัน")</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 2 (List)</span>
                                <div class="text-slate-200 font-medium mb-3">สร้าง List ชื่อ <code class="text-emerald-400">fruits</code> ที่ประกอบด้วย "มะม่วง", "กล้วย", "ทุเรียน" และใช้คำสั่ง Print เรียกแสดงผลเฉพาะ "ทุเรียน"</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">fruits = ["มะม่วง", "กล้วย", "ทุเรียน"]
print(fruits[2])</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 3 (If-Else)</span>
                                <div class="text-slate-200 font-medium mb-3">สร้างตัวแปรอุณหภูมิ <code class="text-emerald-400">temp = 38</code> เลียนแบบเซ็นเซอร์ แล้วเขียน If-Else เพื่อ <code class="text-emerald-400">print("เปิดพัดลมระบายอากาศ")</code> หาก <code class="text-emerald-400">temp > 35</code> ถ้าไม่ใช่ให้ Print ว่า <code class="text-emerald-400">"อุณหภูมิปกติ"</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">temp = 38
if temp > 35:
    print("เปิดพัดลมระบายอากาศ")
else:
    print("อุณหภูมิปกติ")</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 4 (While Loop)</span>
                                <div class="text-slate-200 font-medium mb-3">เขียนโปรแกรมจำลองการเติมน้ำในแทงค์ โดยกำหนดให้ <code class="text-emerald-400">water_level</code> เริ่มต้นที่ 0 ให้ Loop ทำงานบวกเพิ่มทีละ 1 แล้ว Print จนกว่าจะถึงระดับที่ 10</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">water_level = 0
while water_level < 10:
    water_level += 1
    print(f"เติมน้ำระดับที่ {water_level}")</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li>
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 5 (Pandas)</span>
                                <div class="text-slate-200 font-medium mb-3">หากเรามีไฟล์ <code class="text-emerald-400">weather.csv</code> จงเขียนบรรทัดโค้ดที่ดึงไฟล์นั้นเข้ามาเก็บในตัวแปรชื่อ <code class="text-emerald-400">df</code> และใช้คำสั่งเปิดดูหัวตาราง 5 บรรทัดแรก</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">import pandas as pd
df = pd.read_csv("weather.csv")
print(df.head())</code></pre>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
