<?php include('header.php'); ?>

<header class="page-header">
    <div class="container">
        <h1>📚 คู่มือเริ่มต้น (Beginner Guide)</h1>
        <p>สำหรับนักเรียนที่ไม่มีพื้นฐานการเขียนโปรแกรม เริ่มต้นเรียนรู้ Python x AI 2026 ได้ที่นี่</p>
    </div>
</header>

<main class="container">
    <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
        <a href="workshop_manual/BEGINNER_GUIDE_TH_FINAL.pdf" target="_blank" class="btn" style="background: #e74c3c; display: inline-flex; align-items: center; gap: 10px;">
            <img src="https://img.icons8.com/color/48/000000/pdf.png" style="width: 24px; height: 24px;" alt="PDF Icon">
            ดาวน์โหลดฉบับ PDF
        </a>
    </div>

    <div id="guide-content" class="card" style="padding: 40px; background: white; line-height: 1.8;">
        <!-- Markdown content will be rendered here -->
        <div style="text-align:center; padding: 50px;">
            <div class="loader" style="border: 4px solid #f3f3f3; border-top: 4px solid var(--primary); border-radius: 50%; width: 40px; height: 40px; animation: spin 2s linear infinite; margin: 0 auto 20px;"></div>
            <p>กำลังโหลดเนื้อหาคู่มือ...</p>
        </div>
    </div>
</main>

<style>
    @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    
    #guide-content h1, #guide-content h2, #guide-content h3 { 
        color: var(--secondary); 
        margin-top: 40px; 
        margin-bottom: 20px;
        font-family: 'Outfit', sans-serif;
    }
    #guide-content h2 { border-bottom: 2px solid var(--primary-light); padding-bottom: 10px; }
    #guide-content code { 
        background: #f4f4f4; 
        padding: 2px 6px; 
        border-radius: 4px; 
        color: #e65100;
        font-family: 'Courier New', Courier, monospace;
        font-weight: 700;
    }
    #guide-content pre {
        background: #1e1e1e;
        color: #d4d4d4;
        padding: 20px;
        border-radius: 12px;
        overflow-x: auto;
        margin: 20px 0;
    }
    #guide-content pre code {
        background: transparent;
        color: inherit;
        padding: 0;
        font-weight: 400;
    }
    #guide-content table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    #guide-content th, #guide-content td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    #guide-content th { background-color: var(--primary-light); color: var(--primary-dark); }
    #guide-content blockquote {
        border-left: 5px solid var(--primary);
        background: #fff9f0;
        padding: 15px 25px;
        margin: 20px 0;
        font-style: italic;
    }
    #guide-content img { max-width: 100%; border-radius: 8px; margin: 20px 0; box-shadow: var(--shadow); }
</style>

<!-- Load Marked.js (UMD version for global variable support) -->
<script src="https://cdn.jsdelivr.net/npm/marked@4.3.0/lib/marked.umd.js"></script>
<script>
    async function loadGuide() {
        const contentDiv = document.getElementById('guide-content');
        try {
            // Check if marked is available
            if (typeof marked === 'undefined') {
                throw new Error('ไม่สามารถโหลดตัวอ่านไฟล์ Markdown ได้ (marked is not defined)');
            }

            const response = await fetch('workshop_manual/BEGINNER_GUIDE.md');
            if (!response.ok) throw new Error('ไม่สามารถโหลดไฟล์เนื้อหาได้ (404 Not Found)');
            const markdown = await response.text();
            
            // Render markdown to HTML using the modern UMD pattern
            // Note: in version 4+, some builds use marked.parse()
            const htmlContent = marked.parse(markdown);
            contentDiv.innerHTML = htmlContent;
        } catch (error) {
            contentDiv.innerHTML = `
                <div style="text-align:center; color:red; padding: 50px;">
                    <h2 style="color: #e74c3c;">อุ๊บส์! เกิดข้อผิดพลาด</h2>
                    <p style="background: #fff0f0; padding: 10px; border-radius: 8px; font-family: monospace;">${error.message}</p>
                    <a href="index.php" class="btn" style="margin-top:20px;">กลับสู่หน้าหลัก</a>
                </div>
            `;
        }
    }

    // Use DOMContentLoaded for faster and more reliable trigger
    document.addEventListener('DOMContentLoaded', loadGuide);
</script>

<?php include('footer.php'); ?>
