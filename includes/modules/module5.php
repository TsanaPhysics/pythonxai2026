        <!-- Module 5 (Loaded via Include) -->
        <div id="module5" class="workshop-card" onclick="toggleWorkshop(this)">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon"><i class="fas fa-camera-retro"></i></div>
                    <div>
                        <span>Module 5 (2 Hours)</span>
                        <h3>Computer Vision for Plant Disease</h3>
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
                            <p class="mb-3 text-slate-300">เปลี่ยนโดรนและกล่องถ่ายรูปธรรมดาให้มีหมอง ด้วยไลบรารีสุดฮิต <strong>OpenCV</strong> โดยไล่ระดับทักษะไปทีละขั้น ดังนี้:</p>
                            <ul class="mb-4">
                                <li class="text-sm"><strong>Vocational (Vision Analysis):</strong> ตีกรอบ (Bounding Box) และคำนวณพื้นที่ความเสียหายร้อยละด้วยความช่วยเหลือจาก AI</li>
                            </ul>
                            
                            <!-- Immersive Link -->
                            <a href="workshop_detail.php?id=5" class="inline-flex items-center gap-2 px-6 py-3 bg-purple-500/10 border border-purple-500/30 rounded-xl text-purple-400 font-bold text-sm hover:bg-purple-500 hover:text-white transition-all shadow-lg shadow-purple-500/10">
                                <i class="fas fa-expand-arrows-alt"></i> Open Immersive Guide
                            </a>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-orange-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Module Illustration</div>
                            <img src="assets/images/module5_cv.png" alt="Computer Vision Drone Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🗺️ แผนภาพกระบวนการมองเห็นของคอมพิวเตอร์ (Computer Vision Pipeline)</h4>
                    <pre class="mermaid mt-4 mb-6 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph TD
    A[โหลดภาพใบพืช<br>cv2.imread] --> B[แปลงสเปซสี<br>BGR -> HSV]
    B --> C{สร้างแผ่นกรอง<br>Color Thresholding}
    C -->|สีเขียว| E[พิกเซลดำ 0]
    C -->|สีน้ำตาลราสนิม| F[พิกเซลขาว 255]
    E --> G[รวมออกมาเป็น Binary Mask]
    F --> G
    G -->|เฉพาะ ปวช.| H[ตีกรอบ Bounding Box &<br>หาเปอร์เซ็นต์ความเสียหาย]
    
    style A fill:#fde68a,stroke:#d97706,stroke-width:2px
    style C fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style G fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style H fill:#34d399,stroke:#059669,stroke-width:2px,color:#111
                    </pre>

                    <h4>📑 ตารางสรุปคำสั่ง OpenCV (Cheat Sheet)</h4>
                    <div class="tech-table-wrapper">
                        <table class="tech-table">
                            <thead>
                                <tr>
                                    <th>ฟังก์ชัน (Computer Vision)</th>
                                    <th>ตัวอย่างโค้ด (Syntax)</th>
                                    <th>คำอธิบายการใช้งาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Convert Color (ม.ต้น)</strong></td>
                                    <td><code class="highlight-purple">cv2.cvtColor(img, COLOR)</code></td>
                                    <td>เปลี่ยนระบบสีภาพ เช่น เป็น <code>COLOR_BGR2GRAY</code> (ขาวดำ) หรือ HSV</td>
                                </tr>
                                <tr>
                                    <td><strong>Color Masking (ม.ปลาย)</strong></td>
                                    <td><code class="highlight-purple">cv2.inRange(img, low, hi)</code></td>
                                    <td>กรองโชว์รูปที่เป็นสีขาวเฉพาะจุดที่มีสีตรงตามพิกัด Low ถึง High</td>
                                </tr>
                                <tr>
                                    <td><strong>Find Contours (ปวช.)</strong></td>
                                    <td><code class="highlight-purple">cv2.findContours(mask)</code></td>
                                    <td>ลากเส้นขอบเขตตามรูปทรงพิกเซลสีขาวใน Mask ตัดรอย</td>
                                </tr>
                                <tr>
                                    <td><strong>Bounding Rectangle</strong></td>
                                    <td><code class="highlight-purple">x, y, w, h = cv2.boundingRect(c)</code></td>
                                    <td>หาจุดพิกัด (สี่เหลี่ยม) คลุมส่วนที่หาเจอ เพื่อใช้วาดกรอบหรือหาพื้นที่</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tech-box tech-box-emerald">
                        <h5 class="text-emerald-400"><i class="fas fa-robot"></i> <span class="uppercase">Vision Intelligence with AI</span></h5>
                        <p class="text-sm text-slate-300 mb-4">การหาช่วงสี (HSV) สำหรับการ Masking เป็นเรื่องยาก ลองถาม <strong>Antigravity</strong> ดูครับ:</p>
                        <div class="bg-black/40 p-4 rounded-xl border border-emerald-500/20 font-mono text-xs text-emerald-300 mb-0">
                            "ฉันต้องการคัดแยก 'รอยไหม้สีน้ำตาล' ออกจากใบไม้สีเขียว ช่วยแนะนำค่า lower_rust และ upper_rust ในระบบ HSV ให้หน่อย"
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>📦 Examples: เส้นทางการเรียนรู้ตามช่วงวัย (Learning Paths)</h4>
                    
                    <div class="workshop-image-box" style="margin-bottom:16px;">
                        <img src="assets/images/leaf_sample_1775191478658.png" alt="Sample Diseased Leaf" style="max-width:300px; margin: 0 auto; display: block; border-radius:12px; box-shadow:0 4px 6px -1px rgba(0,0,0,0.1);">
                        <p style="text-align:center; font-size:0.85rem; color:#64748b; margin-top:8px;">ภาพตัวอย่าง `leaf_sample.jpg` ขนาด 800x600 พิกเซล (พื้นที่ใบไม้ 480,000 พิกเซล)</p>
                    </div>

                    <!-- LEVEL 1: Junior High -->
                    <div style="margin-top:24px; padding-left:16px; border-left:4px solid #22c55e;">
                        <h5 style="color:#10b981; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟢 ระดับมัธยมศึกษาตอนต้น (Junior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> เข้าใจว่าภาพคือเมทริกซ์ตัวเลข (Array) และลองเล่นแร่แปรธาตุแปลงภาพเป็นสีขาวดำ</p>
                        
                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level1_grayscale.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code5_l1', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out5_l1', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code5_l1"><span class="code-keyword">import</span> cv2

<span class="code-comment"># 1. ให้คอมพิวเตอร์ดูรุปใบไม้</span>
img = cv2.<span class="code-func">imread</span>(<span class="code-string">"leaf_sample.jpg"</span>)
<span class="code-func">print</span>(<span class="code-string">"ขนาดและความลึกของรูปภาพ (สี BGR):"</span>, img.shape)

<span class="code-comment"># 2. แปลงภาพเป็นสีขาวดำ (Grayscale) เพื่อตัดความกวนใจของสีต่างๆ ทิ้ง</span>
gray_img = cv2.<span class="code-func">cvtColor</span>(img, cv2.COLOR_BGR2GRAY)
<span class="code-func">print</span>(<span class="code-string">"ขนาดของรูปภาพขาวดำ (เหลือชั้นเดียว):"</span>, gray_img.shape)</code></pre>
                            <div class="code-output" id="out5_l1">> ขนาดและความลึกของรูปภาพ (สี BGR): (800, 600, 3)
> ขนาดของรูปภาพขาวดำ (เหลือชั้นเดียว): (800, 600)
สำเร็จ! คุณเข้าใจมิติพิกเซลเบื้องต้นแล้ว</div>
                        </div>
                    </div>

                    <!-- LEVEL 2: Senior High -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #3b82f6;">
                        <h5 style="color:#60a5fa; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🔵 ระดับมัธยมศึกษาตอนปลาย (Senior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> ใช้ระบบ HSV ผสมกับ `inRange` เพื่อกรองคัดแยกสีรอยโรคเหมือนแม่เหล็กดูดเศษเหล็ก</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level2_hsv_mask.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code5_l2', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out5_l2', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code5_l2"><span class="code-keyword">import</span> cv2
<span class="code-keyword">import</span> numpy <span class="code-keyword">as</span> np

img = cv2.<span class="code-func">imread</span>(<span class="code-string">"leaf_sample.jpg"</span>)

<span class="code-comment"># 1. แปลงเป็น HSV จะกรองสีง่ายกว่า</span>
img_hsv = cv2.<span class="code-func">cvtColor</span>(img, cv2.COLOR_BGR2HSV)

<span class="code-comment"># 2. สร้างเรดาร์สี "สีน้ำตาลราสนิม" เป็นอาร์เรย์</span>
lower_rust = np.<span class="code-func">array</span>([<span class="code-number">10</span>, <span class="code-number">50</span>, <span class="code-number">50</span>])
upper_rust = np.<span class="code-func">array</span>([<span class="code-number">30</span>, <span class="code-number">255</span>, <span class="code-number">255</span>])

<span class="code-comment"># 3. สร้างหน้ากาก Mask สีอะไรที่ตรงเงื่อนไขจะกลายเป็นสีขาว (255)</span>
mask = cv2.<span class="code-func">inRange</span>(img_hsv, lower_rust, upper_rust)

<span class="code-func">print</span>(<span class="code-string">f"ผลลัพธ์: ตรวจได้พิกเซลที่เป็นรอยโรค {np.count_nonzero(mask)} จุด"</span>)</code></pre>
                            <div class="code-output" id="out5_l2">> Executing cv2.cvtColor to HSV ... Match Successful
> Generating Mask...
ผลลัพธ์: ตรวจได้พิกเซลที่เป็นรอยโรค 22450 จุด</div>
                        </div>
                    </div>

                    <!-- LEVEL 3: Vocational (Voc/Col) -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #f97316;">
                        <h5 style="color:#fb923c; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟠 ระดับ ปวช. และ ปวส. (Vocational Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> ลงสนามจริง ตีกรอบ (Bounding Box) และคำนวณพื้นที่เสียหาย (%) เพื่อประเมินการฉีดยาฆ่าเชื้อรา</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level3_contour_area.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code5_l3', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out5_l3', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code5_l3"><span class="code-keyword">import</span> cv2
<span class="code-keyword">import</span> numpy <span class="code-keyword">as</span> np

<span class="code-comment"># [ยืมโค้ดของม.ปลายมาใช้งาน: สมมุติรันหา mask สำเร็จแล้ว]</span>
<span class="code-comment"># หาเค้าโครงรูปร่าง Contours อ้างอิงจากรอยโรคสีขาวบน mask ล่าสุด</span>
contours, hierarchy = cv2.<span class="code-func">findContours</span>(mask, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)

total_leaf_pixels = <span class="code-number">800</span> * <span class="code-number">600</span>  <span class="code-comment"># สมมติใบไม้กางเต็มพื้นที่รูป</span>
disease_area = <span class="code-number">0</span>

<span class="code-comment"># ตีกรอบทีละรอย และรวมพื้นที่</span>
<span class="code-func">for</span> c <span class="code-keyword">in</span> contours:
    disease_area += cv2.<span class="code-func">contourArea</span>(c)
    <span class="code-comment"># คำสั่งด้านล่างใช้วาดกรอบเอาไว้โชว์เตือนใจบนส้มโอ หรือแอปเปิ้ลจริงๆ</span>
    x, y, w, h = cv2.<span class="code-func">boundingRect</span>(c)
    cv2.<span class="code-func">rectangle</span>(img, (x,y), (x+w, y+h), (<span class="code-number">0</span>,<span class="code-number">0</span>,<span class="code-number">255</span>), <span class="code-number">2</span>) <span class="code-comment"># กรอบสีแดงความหนา 2</span>

<span class="code-comment"># คำนวณเป็นร้อยละ</span>
percent_infect = (disease_area / total_leaf_pixels) * <span class="code-number">100</span>
<span class="code-func">print</span>(<span class="code-string">f"พื้นที่ใบเสียหายจากโรครา: {percent_infect:.2f}%"</span>)
<span class="code-keyword">if</span> percent_infect > <span class="code-number">25.0</span>:
    <span class="code-func">print</span>(<span class="code-string">"ALARM: ความเสียหายระดับหนัก (ควรฉีดเคมีพ่นทันที!)"</span>)
<span class="code-keyword">else</span>:
    <span class="code-func">print</span>(<span class="code-string">"SAFE: ดำเนินการเฝ้าระวังสภาพพืชต่อไป"</span>)</code></pre>
                            <div class="code-output" id="out5_l3">> Drawing Bounding Boxes around 18 detected clusters.
> Calculating areas...
พื้นที่ใบเสียหายจากโรครา: 28.15%
ALARM: ความเสียหายระดับหนัก (ควรฉีดเคมีพ่นทันที!)</div>
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center text-orange-400 text-sm border border-orange-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge: All Levels)
                    </h4>
                    <p class="text-slate-400 mb-8">ภารกิจทบทวนการเป็นวิศวกรคอมพิวเตอร์วิทัศน์ตามระดับทักษะ:</p>
                    
                    <div class="tech-box">
                        <ul class="list-none p-0 m-0">
                            
                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 1 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">เขียนโค้ดบรรทัดเดียวเพื่ออ่านภาพชื่อ <code class="text-emerald-400">"mango_defect.png"</code> เก็บไว้ในตัวแปรชื่อ <code class="text-emerald-400">image</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">import cv2
image = cv2.imread("mango_defect.png")</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 2 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">เราอยากรู้ว่าภาพ <code class="text-emerald-400">image</code> นี้มีความละเอียดรบกวนช่วยปริ้นท์โครงสร้าง <code class="text-emerald-400">shape</code> ของมันหน่อย</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">print(image.shape)</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 3 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">ทีนี้เราต้องการแกะรอยโรคราสนิม ซึ่งต้องพึ่งพาสเปซสีแบบ HSV จงแปลง <code class="text-blue-400">image</code> ให้เป็นแบบ HSV เก็บในตัวแปร <code class="text-blue-400">hsv_img</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">hsv_img = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 4 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">หากเรามีช่วงสีต่ำสุด <code class="text-blue-400">low_red</code> และสูงสุด <code class="text-blue-400">high_red</code> ของตำหนิ ให้ใช้ <code class="text-blue-400">inRange</code> คว้านพื้นที่ตัวอย่างออกมาเป็น <code class="text-blue-400">mask</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">mask = cv2.inRange(hsv_img, low_red, high_red)</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li>
                                <span class="level-badge level-vocational"><i class="fas fa-tools"></i> ข้อที่ 5 (ระดับ ปวช-ปวส)</span>
                                <div class="text-slate-200 font-medium mb-3">ตีกรอบรอยโรคที่ 1 ด้วยโค้ดอะไร หากคุณมีค่า <code class="text-orange-400">x, y, w, h</code> ครบแล้ว และต้องการให้เป็นกรอบสีเขียวความหนา = 3</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-orange-400"># สีใน OpenCV จะเป็น BGR สีเขียวคือ (0, 255, 0)
cv2.rectangle(image, (x, y), (x+w, y+h), (0, 255, 0), 3)</code></pre>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
