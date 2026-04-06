<?php
include('header.php');

$file = $_GET['file'] ?? '';
$filename = basename($file);
$base_dir = __DIR__ . '/workshop_code/';
$full_path = realpath($base_dir . $file);

// Security Check: prevent path traversal
if (!$full_path || strpos($full_path, realpath($base_dir)) !== 0 || !is_file($full_path)) {
    echo "<div class='container'><h2 style='color:red;'>อุ๊บส์! ไม่พบไฟล์นี้ในระบบครับ...</h2><a href='code_explorer.php' class='btn'>กลับไปที่คลังโค้ด</a></div>";
    include('footer.php');
    exit;
}

$content = file_get_contents($full_path);
$ext = pathinfo($full_path, PATHINFO_EXTENSION);
$prism_lang = ($ext == 'ipynb') ? 'json' : (($ext == 'py') ? 'python' : 'markdown');
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
<style>
    .viewer-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #2d2d2d;
        padding: 15px 30px;
        border-radius: 12px 12px 0 0;
        border-bottom: 2px solid var(--primary);
    }
    .viewer-title { color: #fff; font-family: 'Outfit'; font-weight: 700; font-size: 1.1rem; }
    .viewer-controls { display: flex; gap: 10px; }
    .control-btn {
        padding: 8px 15px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 0.85rem;
        cursor: pointer;
        border: none;
        font-weight: 700;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .btn-copy { background: #444; color: #fff; }
    .btn-download { background: var(--primary); color: #fff; }
    .control-btn:hover { transform: scale(1.05); }
    pre[class*="language-"] { margin: 0; border-radius: 0 0 12px 12px; font-size: 0.95rem; line-height: 1.5; }
</style>

<div class="container" style="margin-top: 50px; margin-bottom: 80px;">
    <div style="margin-bottom: 20px;">
        <a href="code_explorer.php" style="color: var(--secondary); text-decoration: none;">&larr; กลับสู่คลังโค้ด</a>
    </div>

    <div class="viewer-header">
        <div class="viewer-title">📂 <?php echo htmlspecialchars($file); ?></div>
        <div class="viewer-controls">
            <button class="control-btn btn-copy" onclick="copyCode()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                Copy โค้ด
            </button>
            <a href="workshop_code/<?php echo htmlspecialchars($file); ?>" download class="control-btn btn-download">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                ดาวน์โหลด
            </a>
        </div>
    </div>

    <pre class="language-<?php echo $prism_lang; ?>"><code id="code-content"><?php echo htmlspecialchars($content); ?></code></pre>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-python.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-json.min.js"></script>
<script>
function copyCode() {
    const code = document.getElementById('code-content').innerText;
    navigator.clipboard.writeText(code).then(() => {
        alert('คัดลอกโค้ดลง Clipboard เรียบร้อยแล้ว!');
    });
}
</script>

<?php include('footer.php'); ?>