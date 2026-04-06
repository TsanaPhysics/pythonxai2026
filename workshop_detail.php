<?php
require_once 'includes/data/workshop_data.php';
$workshop_data = get_workshop_data();

$current_id = isset($_GET['id']) ? $_GET['id'] : "1";
if (!isset($workshop_data[$current_id])) {
    $current_id = "1";
}

$current_module = $workshop_data[$current_id];
$theme = $current_module['theme'];

// Theme definitions for Tailwind (High-end Sci-Fi Palettes)
$themes = [
    'orange' => [
        'bg_grad' => 'from-[#020617] via-orange-950/10 to-orange-900/5',
        'border' => 'border-orange-500/30',
        'text' => 'text-orange-400',
        'glow' => 'bg-orange-500/20',
        'tab_active' => 'bg-orange-600 text-white border-orange-400 shadow-[0_0_20px_rgba(249,115,22,0.4)]',
        'tab_inactive' => 'bg-white/5 text-gray-400 border-white/10 hover:bg-orange-500/10 hover:text-orange-400'
    ],
    'purple' => [
        'bg_grad' => 'from-[#020617] via-purple-950/10 to-purple-900/5',
        'border' => 'border-purple-500/30',
        'text' => 'text-purple-400',
        'glow' => 'bg-purple-500/20',
        'tab_active' => 'bg-purple-600 text-white border-purple-400 shadow-[0_0_20px_rgba(168,85,247,0.4)]',
        'tab_inactive' => 'bg-white/5 text-gray-400 border-white/10 hover:bg-purple-500/10 hover:text-purple-400'
    ],
    'cyan' => [
        'bg_grad' => 'from-[#020617] via-cyan-950/10 to-cyan-900/5',
        'border' => 'border-cyan-500/30',
        'text' => 'text-cyan-400',
        'glow' => 'bg-cyan-500/20',
        'tab_active' => 'bg-cyan-600 text-white border-cyan-400 shadow-[0_0_20px_rgba(6,182,212,0.4)]',
        'tab_inactive' => 'bg-white/5 text-gray-400 border-white/10 hover:bg-cyan-500/10 hover:text-cyan-400'
    ]
];

$tc = isset($themes[$theme]) ? $themes[$theme] : $themes['orange'];

include 'includes/head.php';
?>

<style>
    body { background-color: #020617; overflow-x: hidden; }
    .glass-sidebar { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
    .content-card { background: rgba(15, 23, 42, 0.4); backdrop-filter: blur(40px); -webkit-backdrop-filter: blur(40px); }
    
    .floating-anim { animation: float 6s ease-in-out infinite; }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: rgba(255,255,255,0.02); }
    ::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: rgba(249, 115, 22, 0.3); }

    .tab-pane { transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
</style>

<?php include 'includes/navbar.php'; ?>

<main class="min-h-screen pt-32 pb-20 px-6 relative">
    <!-- Background Elements -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-1/4 -right-1/4 w-[600px] h-[600px] <?= $tc['glow'] ?> blur-[120px] rounded-full opacity-20"></div>
        <div class="absolute bottom-0 -left-1/4 w-[500px] h-[500px] <?= $tc['glow'] ?> blur-[100px] rounded-full opacity-10"></div>
    </div>

    <div class="container mx-auto max-w-7xl relative z-10">
        
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-3 text-xs font-bold uppercase tracking-[0.2em] mb-12 opacity-60">
            <a href="index.php" class="hover:text-orange-400 transition-colors">Workspace</a>
            <i class="fas fa-chevron-right text-[8px]"></i>
            <a href="index.php#workshop" class="hover:text-orange-400 transition-colors">Workshops</a>
            <i class="fas fa-chevron-right text-[8px]"></i>
            <span class="<?= $tc['text'] ?>"><?= $current_module['title'] ?></span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 items-start">
            
            <!-- ⬅️ Sidebar Navigation -->
            <aside class="lg:col-span-1 sticky top-32">
                <div class="glass-sidebar rounded-[2.5rem] p-6 border border-white/5 shadow-2xl">
                    <h3 class="text-sm font-black text-white/40 uppercase tracking-[0.3em] mb-6 px-4">Mission Selector</h3>
                    
                    <nav class="space-y-3">
                        <?php foreach($workshop_data as $id => $module): ?>
                            <?php 
                                $is_active = ($id == $current_id);
                                $m_theme = $module['theme'];
                                $active_border = $is_active ? "border-" . $m_theme . "-500/50 bg-" . $m_theme . "-500/10" : "border-transparent hover:bg-white/5";
                            ?>
                            <a href="workshop_detail.php?id=<?= $id ?>" class="flex items-center gap-4 p-4 rounded-2xl border <?= $active_border ?> transition-all group">
                                <div class="w-10 h-10 rounded-xl bg-black/40 flex items-center justify-center border border-white/10 group-hover:scale-110 transition-transform">
                                    <i class="fas <?= $module['icon'] ?> <?= $is_active ? $tc['text'] : 'text-white/30' ?>"></i>
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <div class="text-[10px] font-black uppercase tracking-widest <?= $is_active ? $tc['text'] : 'text-white/20' ?> mb-1">Part <?= $id ?></div>
                                    <div class="text-sm font-bold text-white truncate"><?= $module['title'] ?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </nav>

                    <div class="mt-8 pt-8 border-t border-white/5">
                        <a href="interactive_presentation.php" class="flex items-center justify-center gap-2 p-4 rounded-2xl bg-gradient-to-r from-orange-600 to-amber-500 text-white font-black text-xs uppercase tracking-widest hover:shadow-lg hover:shadow-orange-600/20 transition-all">
                            <i class="fas fa-play-circle animate-pulse"></i> Live Present
                        </a>
                    </div>
                </div>
            </aside>

            <!-- ➡️ Main Content Section -->
            <article class="lg:col-span-3">
                <div class="content-card rounded-[3rem] border border-white/10 shadow-3xl relative overflow-hidden">
                    
                    <!-- Hero Header -->
                    <header class="p-10 md:p-16 border-b border-white/5 relative overflow-hidden">
                        <!-- Decorative Header Gradient -->
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t <?= $tc['bg_grad'] ?> opacity-50"></div>
                        
                        <div class="flex flex-col md:flex-row gap-10 items-center relative z-10">
                            <!-- Module Image -->
                            <div class="w-full md:w-1/3 shrink-0">
                                <div class="aspect-square rounded-3xl overflow-hidden border-4 border-white/5 shadow-2xl relative group">
                                    <img src="<?= $current_module['image'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60"></div>
                                    <div class="absolute bottom-4 left-4 inline-flex items-center gap-2 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full border border-white/10 text-[10px] font-bold text-white uppercase tracking-widest">
                                        <i class="far fa-clock <?= $tc['text'] ?>"></i> <?= $current_module['time'] ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Header Info -->
                            <div class="flex-1 text-center md:text-left">
                                <span class="inline-block px-4 py-1 rounded-full bg-white/5 border border-white/10 text-[10px] font-bold text-white/50 uppercase tracking-[0.3em] mb-6">Scientific Module</span>
                                <h1 class="text-4xl md:text-6xl font-black text-white mb-6 font-outfit leading-tight tracking-tighter">
                                    <?= $current_module['title'] ?>
                                </h1>
                                <p class="text-lg text-gray-400 font-medium leading-relaxed max-w-xl">
                                    <?= $current_module['subtitle'] ?>
                                </p>
                            </div>
                        </div>
                    </header>

                    <!-- Interactive Nav Tabs -->
                    <div class="px-10 md:px-16 py-12">
                        <nav class="flex flex-wrap gap-3 mb-12" id="tab-buttons">
                            <?php $is_first = true; ?>
                            <?php foreach($current_module['tabs'] as $key => $tab): ?>
                                <button onclick="switchTab('<?= $key ?>')" id="btn-<?= $key ?>" 
                                    class="tab-btn px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all border flex items-center gap-3 <?= $is_first ? $tc['tab_active'] : $tc['tab_inactive'] ?>">
                                    <i class="fas <?= $tab['icon'] ?> text-sm"></i>
                                    <?= $tab['title'] ?>
                                </button>
                                <?php $is_first = false; ?>
                            <?php endforeach; ?>
                        </nav>

                        <!-- Tab Content Views -->
                        <div class="relative min-h-[400px]">
                            <?php $is_first = true; ?>
                            <?php foreach($current_module['tabs'] as $key => $tab): ?>
                                <div id="content-<?= $key ?>" class="tab-pane <?= $is_first ? 'opacity-100 relative' : 'opacity-0 absolute inset-x-0 top-0 pointer-events-none' ?>">
                                    
                                    <?php if (isset($tab['is_code']) && $tab['is_code']): ?>
                                        <!-- Specialized Code Terminal -->
                                        <div class="bg-black/60 rounded-[2rem] border border-white/10 shadow-2xl overflow-hidden mb-10">
                                            <div class="bg-white/5 px-8 py-4 flex justify-between items-center border-b border-white/10">
                                                <div class="flex gap-2">
                                                    <span class="w-3 h-3 rounded-full bg-[#ff5f56]"></span>
                                                    <span class="w-3 h-3 rounded-full bg-[#ffbd2e]"></span>
                                                    <span class="w-3 h-3 rounded-full bg-[#27c93f]"></span>
                                                </div>
                                                <div class="text-[10px] font-mono text-white/40 uppercase tracking-widest">Scientific_Terminal_v2.0</div>
                                                <button onclick="copyCode('code-<?= $key ?>', this)" class="text-[10px] font-bold text-orange-400 hover:text-white transition-colors flex items-center gap-2 px-3 py-1 bg-orange-400/10 rounded-lg border border-orange-400/20">
                                                    <i class="far fa-copy"></i> COPY_CODE
                                                </button>
                                            </div>
                                            <div class="p-8 font-mono text-sm leading-relaxed overflow-x-auto text-blue-100">
                                                <pre><code id="code-<?= $key ?>" class="language-<?= $tab['code_lang'] ?>"><?= htmlspecialchars($tab['code_content']) ?></code></pre>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <!-- General Content -->
                                        <div class="prose prose-invert max-w-none text-gray-300 font-medium leading-relaxed">
                                            <?= $tab['content'] ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <?php $is_first = false; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </article>
        </div>
    </div>
</main>

<!-- Prism.js for Syntax Highlighting -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
<style>
    pre[class*="language-"] { background: transparent !important; margin: 0 !important; padding: 0 !important; }
    code[class*="language-"] { color: #8BE9FD !important; text-shadow: none !important; }
    .token.keyword { color: #FF79C6 !important; font-weight: bold; }
    .token.string { color: #F1FA8C !important; }
    .token.function { color: #50FA7B !important; }
    .token.comment { color: #6272A4 !important; }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-python.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>

<script>
    function switchTab(key) {
        // Hide all panes
        document.querySelectorAll('.tab-pane').forEach(p => {
            p.classList.add('opacity-0', 'absolute', 'pointer-events-none');
            p.classList.remove('opacity-100', 'relative');
        });

        // Show target pane
        const target = document.getElementById('content-' + key);
        target.classList.remove('opacity-0', 'absolute', 'pointer-events-none');
        target.classList.add('opacity-100', 'relative');

        // Update Buttons
        document.querySelectorAll('.tab-btn').forEach(b => {
             const inactiveClasses = "<?= $tc['tab_inactive'] ?>".split(' ');
             const activeClasses = "<?= $tc['tab_active'] ?>".split(' ');
             
             inactiveClasses.forEach(c => b.classList.add(c));
             activeClasses.forEach(c => b.classList.remove(c));
        });

        const targetBtn = document.getElementById('btn-' + key);
        const inactiveClasses = "<?= $tc['tab_inactive'] ?>".split(' ');
        const activeClasses = "<?= $tc['tab_active'] ?>".split(' ');
        inactiveClasses.forEach(c => targetBtn.classList.remove(c));
        activeClasses.forEach(c => targetBtn.classList.add(c));

        // Re-run Mermaid if needed
        if (window.mermaid) window.mermaid.run();
    }

    function copyCode(id, btn) {
        const text = document.getElementById(id).innerText;
        navigator.clipboard.writeText(text).then(() => {
            const original = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check"></i> COPIED!';
            btn.classList.add('text-green-400', 'border-green-400');
            setTimeout(() => {
                btn.innerHTML = original;
                btn.classList.remove('text-green-400', 'border-green-400');
            }, 2000);
        });
    }

    // Auto-run mermaid on load
    window.addEventListener('load', () => {
        if (window.mermaid) window.mermaid.run();
    });
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
