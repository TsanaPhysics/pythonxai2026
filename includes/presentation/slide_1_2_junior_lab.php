<?php
/**
 * Mission: Level Junior
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MISSION: LEVEL JUNIOR',
        'title' => 'Greeting <br> Bot 1.0 👋',
        'desc' => 'น้องๆ ม.ต้น ครับ! มาสร้างบอทตัวแรกที่รู้จักชื่อเรากัน! นี่คือพื้นฐานของระบบ Chatbot ระดับโลกเลยนะ!',
        'level_tag' => 'JUNIOR_HIGH',
        'accent' => 'sun',
        'image' => 'assets/images/pixar_robot_nlp_chat_1775430295369.png',
        'table' => [
            'header' => ['Mission Step', 'Code Goal', 'Reward'],
            'rows' => [
                ['Level 1', 'Variable Name', '10 XP'],
                ['Level 2', 'Input Logic', '20 XP'],
                ['Level 3', 'Output Print', '30 XP']
            ]
        ],
        'code_label' => 'junior_greeting.py',
        'code' => "user_name = input('ชื่ออะไรครับ?')\nprint('ยินดีที่รู้จักคุณ ' + user_name)\nprint('คุณพร้อมเป็นนักวิทย์หรือยัง?')",
        'tip' => 'CHALLENGE: ลองเปลี่ยนคำทักทายให้ดูเท่กว่าเดิมดูสิครับ!'
    ]
];
