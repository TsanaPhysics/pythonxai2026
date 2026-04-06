<?php
/**
 * Module 01: Python Logic
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MODULE 01: MAGIC LOGIC',
        'title' => 'The Smart <br> Command Hub 🕹️',
        'desc' => 'น้องๆ ครับ... AI มันฉลาดได้เพราะ "Logic" ครับ! มันคือการสั่งงานแบบ Step-by-Step วันนี้เราจะมาเรียนภาษาที่ AI คุยรู้เรื่องที่สุด นั่นคือ Python!',
        'level_tag' => 'ALL_LEVELS',
        'accent' => 'mint',
        'image' => 'assets/images/pixar_robot_data_scientist_1775430091660.png',
        'table' => [
            'header' => ['Action', 'Python Syntax', 'AI Outcome'],
            'rows' => [
                ['Say Hello', 'print("Hi")', 'Communication'],
                ['Input Data', 'name = input()', 'Context Store'],
                ['Think & Do', 'if... then...', 'Logic Decision']
            ]
        ],
        'code_label' => 'smart_logic.py',
        'code' => "def ai_think(temp):\n    if temp > 35:\n        return 'Warning: Too Hot!'\n    return 'Status: Perfect!'\n\nprint(ai_think(32))",
        'tip' => 'TIP: อย่ากลัวที่จะลองเปลี่ยนตัวเลขในโค้ดนะครับ! สนุกไปกับการทดลองเลย!'
    ]
];
