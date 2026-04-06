<?php
/**
 * Slide 6: Practical Lab 1 - The Smart Harvester [HOUR 6]
 */
return [
    [
        'type' => 'intro',
        'chapter' => 'MISSION: PRACTICAL LAB 1',
        'title' => 'The Smart <br> Harvester 🚜',
        'desc' => 'ภารกิจสุดท้ายของวันแรก! จงใช้ความรู้เรื่อง Logic และ ML มาสร้างระบบควบคุมรถเก็บเกี่ยวอัตโนมัติในจินตนาการของคุณครับ!',
        'image' => 'assets/images/pixar_robot_data_scientist_1775430091660.png',
        'accent' => 'sun'
    ],
    [
        'type' => 'detail',
        'chapter' => 'LAB OBJECTIVE',
        'title' => 'Intelligence <br> Integration 🧩',
        'desc' => 'ผสมผสาน Python Logic (เช้า) และ AI Prediction (บ่าย) เข้าด้วยกันเพื่อสร้างนวัตกรรมต้นแบบ!',
        'level_tag' => 'ALL_LEVELS',
        'accent' => 'sun',
        'table' => [
            'header' => ['Workflow', 'Requirement', 'Control'],
            'rows' => [
                ['Sensor Scan', 'Moisture < 40%', 'Trigger Move'],
                ['Yield Predict', 'Random Forest', 'Decide Route'],
                ['Visual Mask', 'CV Masking', 'Execute Stop']
            ]
        ],
        'code_label' => 'harvester_prototype.py',
        'code' => "# Mission: Build your Harvester Loop\nwhile harvester_active:\n    data = read_sensor()\n    prediction = model.predict(data)\n    if prediction == 'READY':\n        deploy_harvester()",
        'tip' => 'GOAL: เมื่อโค้ดรันสำเร็จ รถเก็บเกี่ยวจะทำงานได้เองโดยอัตโนมัติครับ!'
    ]
];
