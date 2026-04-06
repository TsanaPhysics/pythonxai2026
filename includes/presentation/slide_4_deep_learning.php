<?php
/**
 * Module 03: MISSION VISION [HOUR 4]
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MODULE 03: MISSION VISION',
        'title' => 'Digital Eye <br> Scanner 👁️',
        'desc' => 'น้องฟ้า (Leaf Scanner) กำลังช่วยเราตรวจหาจุดบนใบพืชครับ! เราจะสอนให้ AI แยกแยะ "โรค" ออกจาก "ใบปกติ" ด้วยพลังของ Deep Learning!',
        'level_tag' => 'SENIOR / VOCATIONAL',
        'accent' => 'sky',
        'image' => 'assets/images/pixar_robot_leaf_scanner_1775430121132.png',
        'table' => [
            'header' => ['Layer', 'Type', 'Function'],
            'rows' => [
                ['Layer 1', 'Conv2D', 'หาเส้นและขอบ'],
                ['Layer 2', 'MaxPool', 'ลดขนาดภาพ'],
                ['Layer 3', 'Dense', 'ตัดสินใจ']
            ]
        ],
        'code_label' => 'neural_arch.py',
        'code' => "from tensorflow.keras import layers, models\nmodel = models.Sequential([\n    layers.Conv2D(32, (3,3), activation='relu'),\n    layers.Dense(3, activation='softmax')\n])",
        'tip' => 'CHALLENGE: ลองจินตนาการว่าถ้าเราเพิ่ม Layer ให้ซับซ้อนขึ้น AI จะเก่งขึ้นได้แค่ไหน?'
    ],
    [
        'type' => 'blueprint',
        'chapter' => 'ARCHITECTURE BLUEPRINT',
        'title' => 'Leaf Analysis <br> Synapse 🧠',
        'desc' => 'นี่คือโครงสร้าง "เส้นทางประสาท" ของ AI ที่ใช้ตัดสินใจว่าใบไม้ต้นไหนป่วยครับ!',
        'accent' => 'sky',
        'image' => 'assets/images/realistic_ai_leaf_analysis_1775430136889.png',
        'mermaid' => "graph TD\nImg[Leaf Input] --> C1(Conv2D)\nC1 --> M1(MaxPool)\nM1 --> F1(Flatten)\nF1 --> Out{Disease?}"
    ]
];
