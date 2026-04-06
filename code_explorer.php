<?php include('header.php'); ?>

<header class="page-header">
    <div class="container">
        <h1>คลังรหัสคำสั่ง (Code Sandbox)</h1>
        <p>สำรวจ อ่าน และดาวน์โหลดไฟล์สคริปต์ประกอบการสอนครบทั้ง 6 บทเรียน</p>
    </div>
</header>

<main class="container" style="margin-bottom: 100px;">
    <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));">
        
        <?php
        $chapters = [
            1 => "AI Co-Pilot Mastery",
            2 => "Predictive Intelligence",
            3 => "Digital Brains (DL)",
            4 => "Digital Eyes & Liaison",
            5 => "Digital Twin Simulation",
            6 => "Agri-Hackathon Stage"
        ];

        foreach($chapters as $id => $title) {
            $ch_padded = str_pad($id, 2, '0', STR_PAD_LEFT);
            $py_glob = glob(__DIR__ . "/workshop_code/python_scripts/ch" . $ch_padded . "*");
            $ip_glob = glob(__DIR__ . "/workshop_code/notebooks/ch" . $ch_padded . "*");
            $py_dir = !empty($py_glob) ? "python_scripts/" . basename($py_glob[0]) : "python_scripts/ch$ch_padded";
            $ip_dir = !empty($ip_glob) ? "notebooks/" . basename($ip_glob[0]) : "notebooks/ch$ch_padded";
            ?>
            <div class="card" style="padding: 25px;">
                <h3 style="border-bottom: 2px solid var(--primary); padding-bottom: 10px; margin-bottom: 20px;">
                    <span style="color: var(--primary);">CH<?php echo $id; ?></span>: <?php echo $title; ?>
                </h3>
                
                <div style="margin-bottom: 20px;">
                    <h4 style="color: #555; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">🐍 Python Scripts (.py)</h4>
                    <ul style="list-style: none; padding-left: 0;">
                        <?php
                        $path = __DIR__ . "/workshop_code/" . $py_dir;
                        if(is_dir($path)) {
                            $files = array_diff(scandir($path), array('.', '..', '.DS_Store'));
                            foreach($files as $f) {
                                if(is_dir($path."/".$f)) continue;
                                echo "<li style='margin-bottom: 8px; font-size: 0.95rem;'>
                                        <a href='viewer.php?file=$py_dir/$f' style='color: var(--secondary); text-decoration: none;'>📂 $f</a>
                                      </li>";
                            }
                        } else { echo "<li style='color: #999; font-size: 0.8rem;'>- ไม่มีไฟล์ในบทนี้ -</li>"; }
                        ?>
                    </ul>
                </div>

                <div>
                    <h4 style="color: #555; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">📓 Jupyter Notebooks (.ipynb)</h4>
                    <ul style="list-style: none; padding-left: 0;">
                        <?php
                        $path = __DIR__ . "/workshop_code/" . $ip_dir;
                        if(is_dir($path)) {
                            $files = array_diff(scandir($path), array('.', '..', '.DS_Store'));
                            foreach($files as $f) {
                                echo "<li style='margin-bottom: 8px; font-size: 0.95rem;'>
                                        <a href='viewer.php?file=$ip_dir/$f' style='color: var(--primary-dark); text-decoration: none;'>📓 $f</a>
                                      </li>";
                            }
                        } else { echo "<li style='color: #999; font-size: 0.8rem;'>- ไม่มีไฟล์ในบทนี้ -</li>"; }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</header>

<script>
    document.getElementById('nav-sandbox').classList.add('active');
</script>

<?php include('footer.php'); ?>