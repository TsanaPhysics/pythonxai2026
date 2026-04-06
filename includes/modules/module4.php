        <!-- Module 4 (Loaded via Include) -->
        <div id="module4" class="workshop-card" onclick="toggleWorkshop(this)">
            <div class="workshop-card-header">
                <div class="workshop-title">
                    <div class="workshop-icon"><i class="fas fa-robot"></i></div>
                    <div>
                        <span>Module 4 (2 Hours)</span>
                        <h3>NLP & Smart Agri-Chatbot</h3>
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
                            <p class="mb-3 text-slate-300">พิสูจน์ให้เห็นว่าคอมพิวเตอร์ "อ่านหนังสือไม่ออก" แต่แปลข้อความเป็นตัวเลข (Vectorization) เรียนรู้วิธีสร้าง <strong>Agri-Chatbot</strong> ให้ตอบคำถามเกษตรกรได้ตามระดับความฉลาด:</p>
                            <ul class="mb-4">
                                <li class="text-sm"><strong>Junior High (Bot Foundations):</strong> สร้างบอทตอบโต้พื้นฐานด้วยเงื่อนไข (If-Else) โดยใช้ Antigravity ช่วยไกด์คำตอบ</li>
                                <li class="text-sm"><strong>Senior High (Smart Intent):</strong> สอน AI ให้เข้าใจ "เจตนา" (Intent) ของประโยคด้วย Machine Learning และ AI-assisted Vectorization</li>
                                <li class="text-sm"><strong>Vocational (Thai NLP Pro):</strong> จัดการภาษาไทยที่มีความซับซ้อนด้วย PyThaiNLP ร่วมกับคำแนะนำจากผู้เชี่ยวชาญ AI</li>
                            </ul>
                            
                            <!-- Immersive Link -->
                            <a href="workshop_detail.php?id=4" class="inline-flex items-center gap-2 px-6 py-3 bg-purple-500/10 border border-purple-500/30 rounded-xl text-purple-400 font-bold text-sm hover:bg-purple-500 hover:text-white transition-all shadow-lg shadow-purple-500/10">
                                <i class="fas fa-expand-arrows-alt"></i> Open Immersive Guide
                            </a>
                        </div>
                        
                        <!-- Column 2: Illustration -->
                        <div class="rounded-2xl overflow-hidden glass border border-white/10 relative text-center">
                            <div class="absolute top-3 right-3 bg-orange-600/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20 z-10">Module Illustration</div>
                            <img src="assets/images/module4_chatbot.png" alt="NLP Chatbot Illustration" class="w-full h-48 md:h-64 object-cover object-center transform hover:scale-105 transition duration-500 opacity-80 group-hover:opacity-100">
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>🗺️ แผนภาพกระบวนการวิเคราะห์ภาษา (NLP Pipeline)</h4>
                    <pre class="mermaid mt-4 mb-6 text-center glass-card" style="padding:16px; border-radius:12px; border:1px solid rgba(255,255,255,0.1);">
graph TD
    A[ข้อความดิบ<br>"พรุ่งนี้ฝนจะตกไหม"] --> B[Tokenization<br>ตัดคำ: พรุ่งนี้ / ฝน / ตก]
    B -->|PyThaiNLP| C[Vectorization<br>แปลงคำศัพท์เป็นตัวเลข]
    C --> D[Bag of Words]
    D --> E{Naive Bayes Model}
    E -->|คำนวณความน่าจะเป็น| F(เจตนา: ตรวจสอบสภาพอากาศ)
    F --> G[ดึงคำตอบที่เตรียมไว้ส่งกลับ]
    
    style A fill:#fde68a,stroke:#d97706,stroke-width:2px
    style C fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style E fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style F fill:#34d399,stroke:#059669,stroke-width:2px,color:#111
                    </pre>

                    <h4>📑 ตารางสรุปคำสั่ง NLP และ Text Processing (Cheat Sheet)</h4>
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
                                    <td><strong>Rule-based Check (ม.ต้น)</strong></td>
                                    <td><code class="highlight-purple">if "ฝัน" in text:</code></td>
                                    <td>กวาดสแกนหาคำศัพท์ตรงตัวในประโยค (ใช้ตรรกะเบื้องต้น)</td>
                                </tr>
                                <tr>
                                    <td><strong>CountVectorizer (ม.ปลาย)</strong></td>
                                    <td><code class="highlight-purple">vec.fit_transform(txt)</code></td>
                                    <td>แปลงประโยคยาวๆ ให้กลายเป็นถุงใส่ความถี่ตัวเลข 0 และ 1 (Bag of Words)</td>
                                </tr>
                                <tr>
                                    <td><strong>Naive Bayes (ม.ปลาย)</strong></td>
                                    <td><code class="highlight-purple">bot = MultinomialNB()</code></td>
                                    <td>โมเดล Machine Learning ทำนายเจตนาโดยวัดจากความน่าจะเป็น (Probability)</td>
                                </tr>
                                <tr>
                                    <td><strong>PyThaiNLP (ปวช.)</strong></td>
                                    <td><code class="highlight-purple">word_tokenize(txt, engine='newmm')</code></td>
                                    <td>ไลบรารีสัญชาติไทยแท้สำหรับตัวความแม่นยำในการฉีกคำภาษาไทยที่ติดกัน</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tech-hr"></div>

                    <div class="tech-box tech-box-emerald">
                        <h5 class="text-emerald-400"><i class="fas fa-robot"></i> <span class="uppercase">Chatbot Strategy with AI</span></h5>
                        <p class="text-sm text-slate-300 mb-4">การสร้างแชทบอทให้ฉลาดต้องอาศัยการออกแบบเจตนา (Intents) ลองถาม <strong>Antigravity</strong> แบบนี้:</p>
                        <div class="bg-black/40 p-4 rounded-xl border border-emerald-500/20 font-mono text-xs text-emerald-300 mb-0">
                            "ช่วยแนะนำ 5 คำถามที่พบบ่อย (FAQs) สำหรับเกษตรกรมือใหม่ที่ปลูกเมล่อนหน่อย ฉันจะเอาไปใส่ในฐานข้อมูลแชทบอทของฉัน"
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4>📦 Examples: เส้นทางการเรียนรู้ตามช่วงวัย (Learning Paths)</h4>
                    <p>สวมบทบาทนักพัฒนาแชทบอท ตั้งแต่การหารูปประโยคตรงไปตรงมา จนไปถึงใช้ AI จำแนกข้อความ</p>

                    <!-- LEVEL 1: Junior High -->
                    <div style="margin-top:24px; padding-left:16px; border-left:4px solid #22c55e;">
                        <h5 style="color:#10b981; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟢 ระดับมัธยมศึกษาตอนต้น (Junior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> สร้างแชทบอทที่พึ่งพากฎเกณฑ์ (Rule-based) อ่านว่ามีกลุ่มคำคีย์เวิร์ดอยู่ในบรรทัดนั้นหรือไม่</p>
                        
                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level1_rule_bot.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code4_l1', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out4_l1', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code4_l1"><span class="code-comment"># ประโยคที่ชาวนาพิมพ์ส่งเข้ามาในแอป</span>
chat_message = <span class="code-string">"ลุงอยากรู้ว่าพรุ่งนี้ฝนจะตกไหม"</span>

<span class="code-comment"># สมองแชทบอทแบบเรียงลำดับเงื่อนไข</span>
<span class="code-keyword">if</span> <span class="code-string">"ฝน"</span> <span class="code-keyword">in</span> chat_message <span class="code-keyword">or</span> <span class="code-string">"อากาศ"</span> <span class="code-keyword">in</span> chat_message:
    <span class="code-func">print</span>(<span class="code-string">"Chatbot: กำลังตรวจสอบเรดาร์ตรวจอากาศ..."</span>)
<span class="code-keyword">elif</span> <span class="code-string">"ราคา"</span> <span class="code-keyword">in</span> chat_message <span class="code-keyword">or</span> <span class="code-string">"ขาย"</span> <span class="code-keyword">in</span> chat_message:
    <span class="code-func">print</span>(<span class="code-string">"Chatbot: กำลังประเมินราคาพืชผลจากตลาดกลาง..."</span>)
<span class="code-keyword">else</span>:
    <span class="code-func">print</span>(<span class="code-string">"Chatbot: หนูยังไม่เข้าใจคำถามนี้ค่ะ"</span>)</code></pre>
                            <div class="code-output" id="out4_l1">> Parsing user input: "ลุงอยากรู้ว่าพรุ่งนี้ฝนจะตกไหม"
> Keyword Match Found: "ฝน"
Chatbot: กำลังตรวจสอบเรดาร์ตรวจอากาศ...</div>
                        </div>
                    </div>

                    <!-- LEVEL 2: Senior High -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #3b82f6;">
                        <h5 style="color:#60a5fa; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🔵 ระดับมัธยมศึกษาตอนปลาย (Senior High Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> ใช้ไลบรารีสถิติ `Naive Bayes` สอนหุ่นยนต์จำแนกเจตนา (Intent) โดยแปลงคำเป็นถุงตัวเลข</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level2_naive_bayes_bot.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code4_l2', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out4_l2', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code4_l2"><span class="code-keyword">from</span> sklearn.feature_extraction.text <span class="code-keyword">import</span> CountVectorizer
<span class="code-keyword">from</span> sklearn.naive_bayes <span class="code-keyword">import</span> MultinomialNB

# ประโยคตัวอย่างจากชาวนา และหมวดหมู่เจตนา (Intent)
texts = ["พรุ่งนี้ฝนจะตกไหม", "ราคายางพารา", "ใบข้าวเป็นสีเหลือง"]
intent_labels = ["weather", "market", "disease"]

<span class="code-comment"># 1. แปลงประโยคของชาวนาให้เป็นถุงใส่คำ (Bag of Words ตัวเลข)</span>
vectorizer = <span class="code-func">CountVectorizer</span>()
X_counts = vectorizer.<span class="code-func">fit_transform</span>(texts)

<span class="code-comment"># 2. นำถุงเลขไปเข้าสมการความน่าจะเป็นของ Naive Bayes</span>
chatbot_brain = <span class="code-func">MultinomialNB</span>()
chatbot_brain.<span class="code-func">fit</span>(X_counts, intent_labels)

<span class="code-comment"># 3. ลองทดสอบคำถามใหม่ AI จะดึงโมเดลมาวิเคราะห์เปอร์เซ็นต์ความน่าจะเป็น</span>
new_test = vectorizer.<span class="code-func">transform</span>([<span class="code-string">"แอปเปิ้ลขึ้นราคาหรือยัง"</span>])
<span class="code-func">print</span>(<span class="code-string">"เจตนาที่ระบบคิดว่าใช่ที่สูด:"</span>, chatbot_brain.<span class="code-func">predict</span>(new_test))</code></pre>
                            <div class="code-output" id="out4_l2">> Splitting vocabulary and generating Bag of Words (BoW)...
> Multinomial Naive Bayes trained on 3 intents.
> Evaluating new test text: "แอปเปิ้ลขึ้นราคาหรือยัง"
เจตนาที่ระบบคิดว่าใช่ที่สูด: ['market']</div>
                        </div>
                    </div>

                    <!-- LEVEL 3: Vocational (Voc/Col) -->
                    <div style="margin-top:32px; padding-left:16px; border-left:4px solid #f97316;">
                        <h5 style="color:#fb923c; font-weight:bold; font-size:1.1rem; margin-bottom:8px;">🟠 ระดับ ปวช. และ ปวส. (Vocational Level)</h5>
                        <p style="font-size:0.95rem; margin-bottom:12px; color:#94a3b8;"><strong>เป้าหมาย:</strong> รับมือกับความซับซ้อนของภาษาไทย "ที่เขียนติดกันเป็นพรืดไม่มีเว้นวรรค" ด้วย <code>PyThaiNLP</code> ฉีกคำอย่างแม่นยำก่อนโยนให้ Machine Learning</p>

                        <div class="code-window mb-6">
                            <div class="code-window-header">
                                <div class="mac-dots"><span class="dot-red"></span><span class="dot-yellow"></span><span class="dot-green"></span></div>
                                <span class="code-title">level3_pythainlp_bot.py</span>
                                <div class="code-actions">
                                    <button onclick="copyCodeBlock('code4_l3', this)"><i class="fas fa-copy"></i> Copy</button>
                                    <button onclick="fakeRun('out4_l3', this)"><i class="fas fa-play"></i> Run</button>
                                </div>
                            </div>
                            <pre><code id="code4_l3"><span class="code-comment"># ต้องติดตั้ง: !pip install pythainlp ก่อนใช้งานจริง</span>
<span class="code-keyword">from</span> pythainlp.tokenize <span class="code-keyword">import</span> word_tokenize

thai_text = <span class="code-string">"น้ำท่วมแปลงผักกาดขาวทำยังไงดี"</span>

<span class="code-comment"># ใช้เอนจิน newmm ของ PyThaiNLP ที่เก่งเรื่องการตัดคำภาษาไทย</span>
words_cut = <span class="code-func">word_tokenize</span>(thai_text, engine=<span class="code-string">'newmm'</span>)
<span class="code-func">print</span>(<span class="code-string">"ผลการตัดคำ:"</span>, words_cut)

<span class="code-comment"># เมื่อตัดคำได้แม่นยำแล้ว (มีเว้นวรรค) ค่อยเอาคำพวกนี้ </span>
<span class="code-comment"># ไปเข้าสู่กระบวนการ CountVectorizer หรือ Deep Learning Tokenizer ต่อไป</span>
proper_sentence = <span class="code-string">" "</span>.<span class="code-func">join</span>(words_cut)
<span class="code-func">print</span>(<span class="code-string">"ประโยคพร้อมป้อนเข้า AI:"</span>, proper_sentence)</code></pre>
                            <div class="code-output" id="out4_l3">> Loading PyThaiNLP Dictionary Engine (newmm)...
ผลการตัดคำ: ['น้ำ', 'ท่วม', 'แปลง', 'ผักกาด', 'ขาว', 'ทำ', 'ยังไง', 'ดี']
ประโยคพร้อมป้อนเข้า AI: น้ำ ท่วม แปลง ผักกาด ขาว ทำ ยังไง ดี
> Note: การใส่ช่องว่างให้ศัพท์ ช่วยแก้ปัญหา AI แปลความหมายผิดพลาดระดับสระได้</div>
                        </div>
                    </div>

                    <div class="tech-hr"></div>

                    <h4 class="text-white font-bold flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center text-orange-400 text-sm border border-orange-500/30">
                            <i class="fas fa-edit"></i>
                        </div>
                        แบบฝึกทักษะท้ายบท (Mini Challenge: All Levels)
                    </h4>
                    <p class="text-slate-400 mb-8">ให้นักเรียนฝึกเขียนส่วนวิเคราะห์ภาษาเพื่อพัฒนา Chatbot ตอบคำถาม:</p>
                    
                    <div class="tech-box">
                        <ul class="list-none p-0 m-0">
                            
                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 1 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">เขียนเงื่อนไขตรวจสอบรูปประโยค หากคำว่า <code class="text-emerald-400">"น้ำท่วม"</code> ปรากฏอยู่ข้างในตัวแปร <code class="text-emerald-400">msg</code> ให้ปริ้นท์บอกว่า "แจ้งเตือนอุทกภัย"</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">if "น้ำท่วม" in msg:
    print("แจ้งเตือนอุทกภัย")</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-junior"><i class="fas fa-seedling"></i> ข้อที่ 2 (ระดับ ม.ต้น)</span>
                                <div class="text-slate-200 font-medium mb-3">หากต้องการดักจับ 2 คำพร้อมกัน เช่นต้องมีคำว่า <code class="text-emerald-400">"ปุ๋ย"</code> และ <code class="text-emerald-400">"ราคา"</code> อยู่ในบรรทัดเดียวกันจะเขียนเงื่อนไขอย่างไร?</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-emerald-400">if "ปุ๋ย" in msg and "ราคา" in msg:
    print("กำลังเช็คราคาปุ๋ยในตลาด")</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 3 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">ประกาศฟังก์ชันสกัดถุงคำ <code class="text-blue-400">CountVectorizer</code> เพื่อให้โมเดล Machine Learning เริ่มจดจำคำศัพท์ต่างๆ</div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">from sklearn.feature_extraction.text import CountVectorizer
vectorizer = CountVectorizer()</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li class="mb-8">
                                <span class="level-badge level-senior"><i class="fas fa-microscope"></i> ข้อที่ 4 (ระดับ ม.ปลาย)</span>
                                <div class="text-slate-200 font-medium mb-3">แปลงประโยค <code class="text-blue-400">new_msg</code> ให้เป็นตัวเลข (Vectorize) ก่อนจับส่งให้บอทตรวจสอบเจตนา <code class="text-blue-400">chatbot_brain.predict()</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-blue-400">converted_msg = vectorizer.transform([new_msg])
answer = chatbot_brain.predict(converted_msg)</code></pre>
                                    </div>
                                </details>
                            </li>

                            <li>
                                <span class="level-badge level-vocational"><i class="fas fa-tools"></i> ข้อที่ 5 (ระดับ ปวช-ปวส)</span>
                                <div class="text-slate-200 font-medium mb-3">เขียนคำสั่งใช้งาน <b>PyThaiNLP</b> เพื่อฉีกคำในกลุ่มข้อความตัวแปร <code class="text-orange-400">report</code> โดยใช้ไม้ตาย (engine) ชื่อ <code class="text-orange-400">newmm</code></div>
                                <details class="group">
                                    <summary class="challenge-summary"><i class="fas fa-eye group-open:hidden"></i><i class="fas fa-eye-slash hidden group-open:inline"></i> คลิกเพื่อดูเฉลย</summary>
                                    <div class="challenge-answer">
                                        <pre class="bg-transparent p-0 m-0"><code class="language-python text-orange-400">from pythainlp.tokenize import word_tokenize
tokens = word_tokenize(report, engine='newmm')
print(tokens)</code></pre>
                                    </div>
                                </details>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
