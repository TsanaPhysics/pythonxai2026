<?php include('header.php'); ?>

<header class="page-header">
    <div class="container">
        <h1>บทที่ 6: Agri-Hackathon Stage</h1>
        <p>เวทีนำเสนอผลงาน และการบูรณาการนวัตกรรมแก้ปัญหาจริงหน้าฟาร์ม</p>
    </div>
</header>

<main class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start; margin-bottom: 60px;">
        <div class="card">
            <div class="card-img" style="height: 400px;"><img src="assets/images/module6_capstone.png" alt="Module Image"></div>
        </div>
        <div>
            <h2 style="color: var(--secondary); margin-bottom: 20px;">เรียนรู้นวัตกรรมบทที่ 6</h2>
            <p style="font-size: 1.1rem; color: #555;">ในบทนี้ เราจะเน้นการนำเครื่องมือ AI มาช่วยสร้างนวัตกรรมที่จับต้องได้จริง ท่านสามารถเลือกอ่านรหัสคำสั่ง และทดลองนำไปรันบน JupyterLab ได้ด้วยตนเองผ่านคลังโค้ดด้านล่างนี้ครับ</p>
            <div style="margin-top: 30px;">
                <a href="#code-gallery" class="btn" style="width:100%;">เลื่อนไปดูรหัสคำสั่ง 6 ทั้งหมด</a>
            </div>
        </div>
    </div>

    <!-- Interactive Code Gallery -->
    <div id="code-gallery" style="margin-top: 80px;">
        <h2 style="font-size: 2rem; color: var(--secondary); margin-bottom: 40px; border-left: 5px solid var(--primary); padding-left: 15px;">
            💻 คลังรหัสคำสั่งประจำบทเรียน (Complete Code Gallery)
        </h2>

        <!-- Python Scripts Section -->
        <h3 style="color: var(--primary-dark); margin-bottom: 20px;">🐍 แฟ้มรหัส Python (.py)</h3>
        <div class="accordion">
            <?php
            $ch_padded = str_pad(6, 2, '0', STR_PAD_LEFT);
            $g = glob("workshop_code/python_scripts/ch" . $ch_padded . "*");
            $dir = !empty($g) ? $g[0] : "";
            if($dir && is_dir($dir)){{
                $rel_dir = str_replace('workshop_code/', '', $dir);
                $fs = array_diff(scandir($dir), array('.', '..', '.DS_Store'));
                $idx = 1;
                foreach($fs as $f){{
                    if(is_dir($dir."/".$f)) continue;
                    $content = file_get_contents($dir."/".$f);
                    $id_tag = "py-" . 6 . "-" . $idx;
                    ?>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAcc('<?php echo $id_tag; ?>')">
                            <h4>📄 <?php echo $f; ?></h4>
                            <span style="color: #999;">Click to Preview</span>
                        </div>
                        <div id="<?php echo $id_tag; ?>" class="accordion-content">
                            <div class="code-viewer-container">
                                <div class="code-viewer-controls">
                                    <button class="btn-sm btn-copy" onclick="copyToClipboard('code-<?php echo $id_tag; ?>')">Copy โค้ด</button>
                                    <a href="workshop_code/<?php echo $rel_dir; ?>/<?php echo $f; ?>" download class="btn-sm" style="background: var(--primary); color: white; text-decoration:none;">Download</a>
                                </div>
                                <pre class="language-python" style="margin: 0; border-radius: 0;"><code id="code-<?php echo $id_tag; ?>"><?php echo htmlspecialchars($content); ?></code></pre>
                            </div>
                        </div>
                    </div>
                    <?php
                    $idx++;
                }}
            }} else {{ echo "<p style='color:#999'>- ไม่มีไฟล์สคริปต์ในบทนี้ -</p>"; }}
            ?>
        </div>

        

        <!-- Jupyter Notebooks Section -->
        <h3 style="color: var(--secondary); margin-bottom: 20px;">📓 สมุดจด Jupyter Notebook (.ipynb)</h3>
        <div class="accordion">
            <?php
            $g = glob("workshop_code/notebooks/ch" . $ch_padded . "*");
            $dir = !empty($g) ? $g[0] : "";
            if($dir && is_dir($dir)){{
                $rel_dir = str_replace('workshop_code/', '', $dir);
                $fs = array_diff(scandir($dir), array('.', '..', '.DS_Store'));
                $idx = 1;
                foreach($fs as $f){{
                    $content = file_get_contents($dir."/".$f);
                    $id_tag = "nb-" . 6 . "-" . $idx;
                    ?>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAcc('<?php echo $id_tag; ?>')" style="border-left: 5px solid var(--secondary);">
                            <h4 style="color: var(--secondary);">📓 <?php echo $f; ?></h4>
                            <span style="color: #999;">Click to Preview (JSON Row)</span>
                        </div>
                        <div id="<?php echo $id_tag; ?>" class="accordion-content">
                            <div style="padding: 15px 30px; background: #fdfdfd; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center;">
                                <div style="display: flex; gap: 10px; align-items: center;">
                                    <span style="font-size: 0.9rem; font-weight: 600; color: #555;">🚀 Launch:</span>
                                    <a href="https://colab.research.google.com/github/smart-agri/notebooks/blob/main/<?php echo $rel_dir; ?>/<?php echo $f; ?>" target="_blank" class="btn-sm" style="background: #f39c12; color: white; text-decoration: none; padding: 5px 12px; border-radius: 4px; font-size: 0.8rem;">Google Colab</a>
                                    <a href="https://jupyter.org/try-jupyter/lab/github/smart-agri/notebooks/blob/main/<?php echo $rel_dir; ?>/<?php echo $f; ?>" target="_blank" class="btn-sm" style="background: #2ecc71; color: white; text-decoration: none; padding: 5px 12px; border-radius: 4px; font-size: 0.8rem;">JupyterLab</a>
                                </div>
                                <a href="workshop_code/<?php echo $rel_dir; ?>/<?php echo $f; ?>" download style="color: var(--primary-dark); font-size: 0.85rem; font-weight: 700;">[ ดาวน์โหลด .ipynb ]</a>
                            </div>
                            <div class="code-viewer-container">
                                <pre class="language-json" style="margin: 0; border-radius: 0; max-height: 400px;"><code id="code-<?php echo $id_tag; ?>"><?php echo htmlspecialchars($content); ?></code></pre>
                            </div>
                        </div>
                    </div>
                    <?php
                    $idx++;
                }}
            }} else {{ echo "<p style='color:#999'>- ไม่มีไฟล์สมุดจดในบทนี้ -</p>"; }}
            ?>
        </div>
    </div>

    <div style="margin-top: 60px; padding: 40px; background: var(--bg-light); border: 2px dashed var(--primary); border-radius: 20px;">
        <h2 style="color: var(--secondary); margin-bottom: 20px;">กิจกรรมถัดไป</h2>
        <div style="display: flex; gap: 20px;">
            <a href="index.php" class="btn" style="background: var(--secondary);">กลับไปหน้าหลัก</a>
            <a href="module1.php" class="btn">ไปที่บทเรียนถัดไป &raquo;</a>
        </div>
    </div>
</main>

<script>
    function toggleAcc(id) {
        const content = document.getElementById(id);
        content.classList.toggle('active');
        // Close others same type? Optional.
    }
    
    document.querySelectorAll('.nav-links a').forEach(a => {
        if(a.innerText.includes('บทที่ 6')) a.classList.add('active');
    });
</script>

<?php include('footer.php'); ?>
