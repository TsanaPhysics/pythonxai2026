<style>
/* Right Sticky Sidebar Navigation (Modern Glassmorphic + Glowing Icons) */
.right-sidebar-container {
    position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    width: 30px; /* Trigger zone */
    height: 480px; /* Increased for more items */
    z-index: 100;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    transition: width 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.right-sidebar-container:hover {
    width: 110px; 
}

/* Floating Handle Indicator */
.sidebar-handle {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    width: 6px;
    height: 80px;
    background: rgba(249, 115, 22, 0.4);
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(249, 115, 22, 0.3);
    transition: all 0.3s ease;
}

.right-sidebar-container:hover .sidebar-handle {
    opacity: 0;
    transform: translateY(-50%) translateX(20px);
}

.right-sidebar {
    width: 80px;
    background: rgba(15, 23, 42, 0.6);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-top-left-radius: 40px;
    border-bottom-left-radius: 40px;
    border-right: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 30px 0;
    box-shadow: -10px 10px 40px rgba(0,0,0,0.4);
    transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateX(100%);
}

.right-sidebar-container:hover .right-sidebar {
    transform: translateX(0);
}

.sidebar-icon {
    position: relative;
    width: 50px;
    height: 50px;
    margin: 12px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    border-radius: 16px;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
}

.sidebar-img-btn {
    width: 80%;
    height: 80%;
    object-fit: cover;
    border-radius: 12px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    filter: saturate(0.8) brightness(0.9);
}

.sidebar-icon:hover {
    background: rgba(249, 115, 22, 0.1);
    border-color: rgba(249, 115, 22, 0.3);
    transform: scale(1.1) rotate(-3deg);
}

.sidebar-icon:hover .sidebar-img-btn, .sidebar-icon.active .sidebar-img-btn {
    filter: saturate(1.2) brightness(1.1);
    box-shadow: 0 0 20px rgba(249, 115, 22, 0.4);
}

/* Tech Tooltip */
.sidebar-tooltip {
    position: absolute;
    right: 85px;
    background: #ea580c;
    color: white;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 10px;
    font-size: 0.7rem;
    pointer-events: none;
    opacity: 0;
    transform: translateX(15px);
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    white-space: nowrap;
    box-shadow: 0 10px 20px rgba(234, 88, 12, 0.3);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.sidebar-icon:hover .sidebar-tooltip {
    opacity: 1;
    transform: translateX(0);
}

@media (max-width: 768px) {
    .right-sidebar-container {
        display: none;
    }
}
</style>

<div class="right-sidebar-container">
    <div class="sidebar-handle"></div>

    <div class="right-sidebar" id="main-sidebar">
        <!-- Interactive Presentation (Teaching Mode) -->
        <a href="interactive_presentation.php" target="_blank" class="sidebar-icon" style="border-color: rgba(249, 115, 22, 0.4); background: rgba(249, 115, 22, 0.05);">
            <i class="fas fa-chalkboard-teacher text-orange-400 text-xl"></i>
            <div class="sidebar-tooltip font-outfit" style="background: #f97316;">Live Presentation (Teaching)</div>
        </a>

        <!-- Smartphone App Hub -->
        <a href="smartphone_app_hub.php" class="sidebar-icon" style="border-color: rgba(34, 211, 238, 0.4); background: rgba(34, 211, 238, 0.05);">
            <i class="fas fa-mobile-alt text-cyan-400 text-xl"></i>
            <div class="sidebar-tooltip font-outfit" style="background: #22d3ee;">Smartphone AI Hub</div>
        </a>

        <!-- Home -->
        <a href="index.php" class="sidebar-icon active">
            <img src="assets/images/pixar_home.png" alt="Home" class="sidebar-img-btn">
            <div class="sidebar-tooltip font-outfit">Main Hub</div>
        </a>
        
        <!-- Curriculum -->
        <a href="index.php#workshop" class="sidebar-icon">
            <img src="assets/images/pixar_curriculum.png" alt="Curriculum" class="sidebar-img-btn">
            <div class="sidebar-tooltip font-outfit">Workshop Manuals</div>
        </a>

        <!-- Special Tracks -->
        <a href="index.php#special_setup" class="sidebar-icon">
            <img src="assets/images/pixar_special.png" alt="Special Tracks" class="sidebar-img-btn">
            <div class="sidebar-tooltip font-outfit">Special Tracks & Setup</div>
        </a>

        <!-- Research Hub -->
        <a href="index.php#projects" class="sidebar-icon">
            <img src="assets/images/pixar_research.png" alt="Research Hub" class="sidebar-img-btn">
            <div class="sidebar-tooltip font-outfit">Research Projects</div>
        </a>

        <!-- Tools -->
        <a href="https://jupyter.org/try-jupyter/lab/" target="_blank" class="sidebar-icon">
            <img src="assets/images/pixar_tools.png" alt="JupyterLab" class="sidebar-img-btn">
            <div class="sidebar-tooltip font-outfit">AI Cloud Engine 🚀</div>
        </a>
    </div>
</div>

