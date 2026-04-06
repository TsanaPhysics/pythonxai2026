<?php
/**
 * Module 0.2: JupyterLab Shortcuts Quiz
 */
return [
    [
        'type' => 'simulator',
        'chapter' => 'QUICK SKILLS: SHORTCUTS',
        'title' => 'Finger <br> Intelligence ⌨️',
        'desc' => 'มาทดสอบความไวของนิ้วมือกันครับ! จำปุ่มวิเศษ 3 ปุ่มนี้ให้แม่นก่อนเริ่มภารกิจจริง!',
        'sim_type' => 'chatbot',
        'accent' => 'sun',
        'image' => 'assets/images/realistic_smart_farm_dashboard_1775430105446.png',
        'chat_prompt' => 'Select a Shortcut to Test 🤖',
        'chat_questions' => [
            ['q' => 'Shift + Enter', 'a' => 'RUN_CELL', 'd' => 'รันโค้ดทันที! (ใช้บ่อยที่สุด)'],
            ['q' => 'B (ใน Command Mode)', 'a' => 'ADD_BLOCK', 'd' => 'เพิ่มช่องพิมพ์โค้ดใหม่ด้านล่าง (กด Esc ก่อน)'],
            ['q' => 'I, I (กด I สองครั้ง)', 'a' => 'STOP_CODE', 'd' => 'หยุดการทำงานของ Kernel (Interrupt)']
        ]
    ]
];
