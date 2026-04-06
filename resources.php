<?php include('header.php'); ?>

<header class="page-header">
    <div class="container">
        <h1>ศูนย์ทรัพยากรการเรียนรู้ (Resource Center)</h1>
        <p>ดาวน์โหลดคู่มือ ไฟล์ประกอบการสอน และชุดรหัสคำสั่งสำหรับโครงการ Python x AI 2026</p>
    </div>
</header>

<main class="container">
    <div class="grid">
        <!-- Academic Book -->
        <div class="card">
            <div class="card-img" style="background: linear-gradient(135deg, #102B3F 0%, #174060 100%); display: flex; align-items: center; justify-content: center; padding: 20px;">
                <img src="workshop_manual/cover.png" alt="Academic Masterbook" style="height: 160px; width: auto; border-radius: 4px; box-shadow: 0 10px 20px rgba(0,0,0,0.4);">
            </div>
            <div class="card-body">
                <h3>คู่มือวิชาการฉบับสมบูรณ์</h3>
                <p>Academic Masterbook รวบรวมทฤษฎีและปฏิบัติการ 6 บทเรียน พร้อมดัชนีอภิธานศัพท์</p>
                <a href="workshop_manual/academic_course_book_2026.pdf" target="_blank" class="btn" style="width:100%;">ดาวน์โหลด PDF</a>
            </div>
        </div>

        <!-- Master Handbook -->
        <div class="card">
            <div class="card-img" style="background: #ff6b00; display: flex; align-items: center; justify-content: center; padding: 20px;">
                <img src="workshop_manual/cover.png" alt="Master Handbook" style="height: 160px; width: auto; border-radius: 4px; box-shadow: 0 10px 20px rgba(0,0,0,0.4);">
            </div>
            <div class="card-body">
                <h3>คู่มือวิทยากรผ้สอน</h3>
                <p>Master Facilitator Handbook ฉบับสำหรับอาจารย์ผู้สอน พร้อมสคริปต์บรรยายและโค้ดเฉลย (TA Solutions)</p>
                <a href="workshop_manual/master_handbook_2026.pdf" target="_blank" class="btn" style="width:100%;">ดาวน์โหลด PDF</a>
            </div>
        </div>

        <!-- Student Handbook -->
        <div class="card">
            <div class="card-img" style="background: #f0f0f0; display: flex; align-items: center; justify-content: center; padding: 20px;">
                <img src="workshop_manual/cover.png" alt="Student Handbook" style="height: 160px; width: auto; border-radius: 4px; box-shadow: 0 10px 20px rgba(0,0,0,0.4);">
            </div>
            <div class="card-body">
                <h3>คู่มือนักเรียน (ฉบับมาตรฐาน)</h3>
                <p>แบบเรียนภาคปฏิบัติ 12 ชั่วโมง สำหรับนักเรียน Next-Gen Scientist ทุกระดับความถนัด</p>
                <a href="workshop_manual/student_handbook_2026.pdf" target="_blank" class="btn" style="width:100%;">ดาวน์โหลด PDF</a>
            </div>
        </div>
    </div>

    <!-- Additional Assets -->
    <div style="margin-top: 80px;">
        <h2 style="font-size: 2rem; color: var(--secondary); margin-bottom: 20px; border-left: 5px solid var(--primary); padding-left: 15px;">คลังข้อมูลและโมเดล AI (Datasets & Models)</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th style="width: 30%;">รายการ</th>
                    <th style="width: 50%;">คำอธิบาย</th>
                    <th style="width: 20%;">ดาวน์โหลด</th>
                </tr>
                <tr>
                    <td>ศูนย์รวมข้อมูลฟาร์ม (Crop Dataset v2)</td>
                    <td>ชุดข้อมูลไฟล์ .csv สำหรับฝึกฝนโมเดลเกี่ยวกิจกรรมในฟาร์มและการพยาการณ์</td>
                    <td><a href="workshop_code/datasets/crop_data_v2.csv" class="btn" style="padding: 5px 15px; background: #2ecc71;">.CSV</a></td>
                </tr>
                <tr>
                    <td>ข้อมูลการพยากรณ์ผลผลิต (Yield Data)</td>
                    <td>ชุดข้อมูลสำหรับการทำ Regression ทายผลผลิตทางการเกษตร</td>
                    <td><a href="workshop_code/datasets/crop_yield_data.csv" class="btn" style="padding: 5px 15px; background: #2ecc71;">.CSV</a></td>
                </tr>
                <tr>
                    <td>โมเดลแยกแยะโรคพืช (Rice Disease Model)</td>
                    <td>โมเดล Deep Learning (Inference Script) สำหรับนำไปทดลองรัน</td>
                    <td><a href="workshop_code/models/load_agri_model.py" class="btn" style="padding: 5px 15px; background: #3498db;">.PY</a></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Additional Assets -->
    <div style="margin-top: 80px; margin-bottom: 80px;">
        <h2 style="font-size: 2rem; color: var(--secondary); margin-bottom: 20px; border-left: 5px solid var(--primary); padding-left: 15px;">ไฟล์ประกอบการสอนอื่นๆ</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th style="width: 30%;">รายการ</th>
                    <th style="width: 50%;">คำอธิบาย</th>
                    <th style="width: 20%;">ดาวน์โหลด</th>
                </tr>
                <tr>
                    <td>ชุดรหัสคำสั่ง (Notebook Bundle)</td>
                    <td>ไฟล์ .ipynb สำหรับรันบน <strong>Google Colab</strong> หรือ <strong>JupyterLab</strong></td>
                    <td><a href="pythonxai2026_jupyter_bundle.zip" class="btn" style="padding: 5px 15px;">ZIP</a></td>
                </tr>
                <tr>
                    <td>สไลด์ประกอบการบรรยาย</td>
                    <td>ชุดสไลด์การนำเสนอครอบคลุมทั้ง 2 วัน (ฉบับร่าง)</td>
                    <td><a href="#" class="btn" style="padding: 5px 15px; background: #aaa;">Coming Soon</a></td>
                </tr>
            </table>
        </div>
    </div>
</main>

<script>
    document.getElementById('nav-resources').classList.add('active');
</script>

<?php include('footer.php'); ?>
