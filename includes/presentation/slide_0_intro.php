<?php
/**
 * Slide 0: Mission Intro & Briefing
 */
return [
    [
        'type' => 'intro',
        'chapter' => 'MISSION: KICKOFF',
        'title' => 'Python <br> x AI 2026',
        'desc' => 'ยินดีต้อนรับสู่ยุคใหม่ของนักวิทยาศาสตร์ครับ! วันนี้เราจะเปลี่ยนจาก "ผู้ใช้งาน" เป็น "ผู้สร้าง" นวัตกรรมด้วยพลังของ Python และ AI กันครับ!',
        'image' => 'assets/images/pixar_robot_data_scientist_1775430091660.png',
        'accent' => 'coral'
    ],
    [
        'type' => 'detail',
        'chapter' => 'THE BRIEFING',
        'title' => 'Next-Gen <br> Scientist Hub 🧬',
        'desc' => 'ภารกิจของเราคือการใช้พลังของโค้ดในการแก้ปัญหาโลกจริง! ไม่ว่าจะเป็นการดูแลพืชพรรณ หรือการคุยกับหุ่นยนต์ ล้วนเริ่มจากตรงนี้ครับ',
        'level_tag' => 'CORE_SCIENCE',
        'accent' => 'coral',
        'table' => [
            'header' => ['Phase', 'Mission Objective', 'Tech Stack'],
            'rows' => [
                ['Morning', 'Logic & Python Basics', 'Python 3.x'],
                ['Afternoon', 'Machine Learning & AI', 'Scikit-learn'],
                ['Night 1', 'Capstone Project 1', 'Practical Lab']
            ]
        ],
        'code_label' => 'mission_log.py',
        'code' => "mission_status = 'INITIALIZING'\nteam = 'Next-Gen Scientists'\nprint(f'{team} are ready to fly!')",
        'tip' => 'TIP: วันนี้ไม่มีคำว่า "ทำไม่ได้" มีแต่คำว่า "ลองทำดูใหม่" นะครับ!'
    ]
];
