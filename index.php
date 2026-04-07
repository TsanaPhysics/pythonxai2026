<?php include('header.php'); ?>

<!-- Premium Hero Section -->
<header class="premium-hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-text">
                <h4>WELCOME TO NEXT-GEN</h4>
                <h1>Python xAI<br><span>Next-Gen Scientist</span></h1>
                <p>ก้าวข้ามขีดจำกัดเดิมๆ เปลี่ยนจากการ "Coding" ไปสู่การเป็น "Co-Creator" เพื่อการเกษตรดิจิทัลและสิ่งแวดล้อม</p>
                <div class="hero-btns" style="display: flex; gap: 20px;">
                    <a href="workshop_manual/complete_course_book_2026.pdf" class="btn" target="_blank">ดาวน์โหลดคู่มือฉบับเต็ม</a>
                    <a href="resources.php" class="btn" style="background: rgba(255,255,255,0.1); border: 1px solid var(--glass-border); backdrop-filter: blur(5px);">ศูนย์ทรัพยากร</a>
                </div>
            </div>
            <div class="hero-art">
                <img src="assets/images/hero_premium_2026.png" alt="Python xAI Next-Gen Scientist">
            </div>
        </div>
    </div>
</header>

<main class="container" style="margin-top: 60px;">
    <!-- Floating Quick Access QR -->
    <div class="floating-qr">
        <div class="qr-expand">
            <img src="assets/images/line_qr.png" alt="LINE Group QR Code">
            <span>Scan to Join Group</span>
        </div>
        <div class="qr-toggle" onclick="window.open('https://line.me/ti/g2/placeholder', '_blank')">
            <img src="https://img.icons8.com/color/48/000000/line-me.png" alt="Line Icon">
        </div>
    </div>

    <div style="text-align:center; margin-bottom: 60px;">
        <h2 style="font-size: 2.5rem; color: var(--secondary);">เส้นทางสู่การเป็นนักวิทยาศาสตร์ AI</h2>
        <p style="color: var(--text-light); margin-top: 10px;">เลือกเริ่มต้นการเดินทางของคุณในรูปแบบที่เหมาะสม</p>
        <div style="width: 80px; height: 4px; background: var(--primary); margin: 20px auto;"></div>
    </div>

    <!-- Beginner Guide Call-to-Action -->
    <div class="card" style="margin-bottom: 60px; padding: 0; background: linear-gradient(135deg, var(--primary), #ffb74d); border: none; overflow: hidden; display: flex; align-items: center; min-height: 200px;">
        <div style="padding: 40px; flex: 1; color: white;">
            <h2 style="margin: 0 0 10px 0; color: white; display: flex; align-items: center; gap: 10px;">
                🚀 เริ่มต้นที่นี่: คู่มือฝึกหัดสำหรับมือใหม่
            </h2>
            <p style="font-size: 1.1rem; opacity: 0.95; margin-bottom: 25px;">
                ไม่มีพื้นฐานการเขียนโปรแกรม? ไม่ต้องกังวล! เราเตรียมเนื้อหาเริ่มต้นแบบเร่งด่วนสำหรับการรันโน๊ตบุ๊ค 
                การติดตั้งสภาพแวดล้อม และเทคนิคการใช้ AI ช่วยสอนไว้ให้คุณแล้ว
            </p>
            <a href="beginner_guide.php" class="btn" style="background: white; color: var(--primary); padding: 15px 40px; font-size: 1.1rem;">
                เปิดอ่านคู่มือเริ่มต้น &rarr;
            </a>
        </div>
        <div style="flex: 0 0 250px; background: rgba(255,255,255,0.1); height: 100%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(5px);">
            <img src="https://img.icons8.com/color/144/000000/user-manual.png" style="width: 140px; height: 140px; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));" alt="Manual Icon">
        </div>
    </div>

    <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <!-- Module 1 -->
        <div class="card">
            <div class="card-img">
                <div class="module-badge">Module 01</div>
                <img src="assets/images/module0_dual_platform.png" alt="Foundations">
            </div>
            <div class="card-body">
                <h3>บทที่ 1: AI Co-Pilot Mastery</h3>
                <p>รากฐานและตรรกะ AI ปลุกวิญญาณนักวิทย์รุ่นใหม่ผ่าน Google Colab และ JupyterLab</p>
                <a href="module1.php" class="btn" style="width:100%;">เริ่มเรียนบทนี้</a>
            </div>
        </div>

        <!-- Module 2 -->
        <div class="card">
            <div class="card-img">
                <div class="module-badge">Module 02</div>
                <img src="assets/images/module2_ml_xai.png" alt="ML">
            </div>
            <div class="card-body">
                <h3>บทที่ 2: พลังแห่งการพยากรณ์</h3>
                <p>Machine Learning & xAI สอนให้หุ่นยนต์ทายอนาคตและอธิบายเหตุผลได้</p>
                <a href="module2.php" class="btn" style="width:100%;">เริ่มเรียนบทนี้</a>
            </div>
        </div>

        <!-- Module 3 -->
        <div class="card">
            <div class="card-img">
                <div class="module-badge">Module 03</div>
                <img src="assets/images/module3_deep_learning.png" alt="DL">
            </div>
            <div class="card-body">
                <h3>บทที่ 3: สมองดิจิทัล</h3>
                <p>เจาะลึกโครงข่ายประสาทเทียม (Deep Learning) เพื่อคัดแยกโรคพืชอัจฉริยะ</p>
                <a href="module3.php" class="btn" style="width:100%;">เริ่มเรียนบทนี้</a>
            </div>
        </div>

        <!-- Module 4 -->
        <div class="card">
            <div class="card-img">
                <div class="module-badge">Module 04</div>
                <img src="assets/images/module5_cv.png" alt="Vision">
            </div>
            <div class="card-body">
                <h3>บทที่ 4: ดวงตาและภาษา AI</h3>
                <p>การประมวลผลวิดีโอแบบ Real-time และแชทบอทวิเคราะห์ความรู้สึก</p>
                <a href="module4.php" class="btn" style="width:100%;">เริ่มเรียนบทนี้</a>
            </div>
        </div>

        <!-- Module 5 -->
        <div class="card">
            <div class="card-img">
                <div class="module-badge">Module 05</div>
                <img src="assets/images/holo_workshop.png" alt="Simulation">
            </div>
            <div class="card-body">
                <h3>บทที่ 5: Digital Twin Simulation</h3>
                <p>จำลองฟาร์มอัจฉริยะในโลกเสมือนจริงด้วย Pygame Zero และ Minecraft</p>
                <a href="module5.php" class="btn" style="width:100%;">เริ่มเรียนบทนี้</a>
            </div>
        </div>

        <!-- Module 6 -->
        <div class="card">
            <div class="card-img">
                <div class="module-badge">Module 06</div>
                <img src="assets/images/module6_capstone.png" alt="Capstone">
            </div>
            <div class="card-body">
                <h3>บทที่ 6: Agri-Hackathon Stage</h3>
                <p>การบูรณาการความรู้และนำเสนอโครงงานนวัตกรรมแก้ปัญหาจริง</p>
                <a href="module6.php" class="btn" style="width:100%;">เริ่มเรียนบทนี้</a>
            </div>
        </div>
    </div>
    <!-- Related Ecosystem Portals -->
    <div style="margin-top: 100px; margin-bottom: 100px;">
        <div style="text-align:center; margin-bottom: 60px;">
            <h2 style="font-size: 2.5rem; color: var(--secondary);">Digital Ecosystems</h2>
            <p style="color: var(--text-light); margin-top: 10px;">โครงการและระบบนิเวศน์ดิจิทัลที่เกี่ยวข้องภายใต้เครือข่าย Python x AI</p>
            <div style="width: 80px; height: 4px; background: var(--primary); margin: 20px auto;"></div>
        </div>
        
        <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Portal 1 -->
            <div class="card">
                <div class="card-img">
                    <div class="module-badge">Portal</div>
                    <div style="background: linear-gradient(rgba(10, 25, 47, 0.4), rgba(10, 25, 47, 0.4)), url('assets/images/hero_3d_python_ai.png'); background-size: cover; background-position: center; height: 100%;"></div>
                </div>
                <div class="card-body">
                    <h3>Python x AI (Legacy)</h3>
                    <p>ระบบพอร์ทัลดั้งเดิมสำหรับ Python x AI และคลังข้อมูลงานวิจัยเดิม</p>
                    <a href="/PythonxAI" class="btn" style="width:100%;">เข้าสู่พอร์ทัล</a>
                </div>
            </div>

            <!-- Portal 2 -->
            <div class="card">
                <div class="card-img">
                    <div class="module-badge">Portal</div>
                    <div style="background: linear-gradient(rgba(10, 25, 47, 0.4), rgba(10, 25, 47, 0.4)), url('assets/images/pixar_curriculum.png'); background-size: cover; background-position: center; height: 100%;"></div>
                </div>
                <div class="card-body">
                    <h3>Python 2026</h3>
                    <p>ศูนย์กลางการเรียนรู้ภาษา Python ภาคทฤษฎีและตรรกะพื้นฐานสำหรับผู้เริ่มต้น</p>
                    <a href="/Python2026" class="btn" style="width:100%;">เข้าสู่พอร์ทัล</a>
                </div>
            </div>

            <!-- Portal 3 -->
            <div class="card">
                <div class="card-img">
                    <div class="module-badge">Portal</div>
                    <div style="background: linear-gradient(rgba(10, 25, 47, 0.4), rgba(10, 25, 47, 0.4)), url('assets/images/realistic_ai_leaf_analysis_1775430136889.png'); background-size: cover; background-position: center; height: 100%;"></div>
                </div>
                <div class="card-body">
                    <h3>SciExHub: Python AI</h3>
                    <p>ฐานข้อมูลการเรียนรู้วิทยาศาสตร์เชิงลึกและการทดลองพยากรณ์ข้อมูลจริง</p>
                    <a href="/SciExHub2026/python_ai" class="btn" style="width:100%;">เข้าสู่พอร์ทัล</a>
                </div>
            </div>

            <!-- Portal 4 -->
            <div class="card">
                <div class="card-img">
                    <div class="module-badge">Portal</div>
                    <div style="background: linear-gradient(rgba(10, 25, 47, 0.4), rgba(10, 25, 47, 0.4)), url('assets/images/ai4student_innovation.png'); background-size: cover; background-position: center; height: 100%;"></div>
                </div>
                <div class="card-body">
                    <h3>AI4Student 2026</h3>
                    <p>โครงงานนวัตกรรม AI สำหรับนักเรียนและการบ่มเพาะนักนวัตกรรมรุ่นเยาว์</p>
                    <a href="/AI4Student_Project2026" class="btn" style="width:100%;">เข้าสู่พอร์ทัล</a>
                </div>
            </div>

            <!-- Portal 5 -->
            <div class="card">
                <div class="card-img">
                    <div class="module-badge">Portal</div>
                    <div style="background: linear-gradient(rgba(10, 25, 47, 0.4), rgba(10, 25, 47, 0.4)), url('assets/images/module5_cv.png'); background-size: cover; background-position: center; height: 100%;"></div>
                </div>
                <div class="card-body">
                    <h3>Python OpenCV</h3>
                    <p>คลังความรู้เฉพาะทาง Computer Vision แผนผังพิกัดและโมเดลการประมวลผลวิดีโอ</p>
                    <a href="/pythonopencv" class="btn" style="width:100%;">เข้าสู่พอร์ทัล</a>
                </div>
            </div>

            <!-- Portal 6 -->
            <div class="card">
                <div class="card-img">
                    <div class="module-badge">Portal</div>
                    <div style="background: linear-gradient(rgba(10, 25, 47, 0.4), rgba(10, 25, 47, 0.4)), url('assets/images/pixar_research.png'); background-size: cover; background-position: center; height: 100%;"></div>
                </div>
                <div class="card-body">
                    <h3>SciExHub Center</h3>
                    <p>ระบบบริหารจัดการผลการเรียนรู้และผู้เข้าร่วมสำหรับทุกหลักสูตรในเครือข่าย</p>
                    <a href="/SciExHub2026" class="btn" style="width:100%;">เข้าสู่พอร์ทัล</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Join the Community Section -->
    <div class="community-section">
        <div class="community-text">
            <h4>STAY CONNECTED</h4>
            <h2>เข้าร่วมกลุ่ม<br>LINE ✨</h2>
            <p>เพื่อติดตามข่าวสารล่าสุด ปรึกษาคำถามด้าน AI และแลกเปลี่ยนไอเดียกับเพื่อนๆ นักนวัตกรรมในเครือข่าย Python x AI ได้ทันทีครับ</p>
            <a href="https://line.me/ti/g2/placeholder" target="_blank" class="btn" style="background: #00c300; display: inline-flex; align-items: center; gap: 10px; padding: 15px 40px;"> 
                <img src="https://img.icons8.com/color/48/000000/line-me.png" style="width: 24px; height: 24px;" alt="LINE Icon">
                Add Line Group
            </a>
        </div>
        <div class="qr-card">
            <img src="assets/images/line_qr.png" alt="LINE Group QR Code">
            <span>SCAN TO JOIN</span>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>