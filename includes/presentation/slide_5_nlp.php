<?php
/**
 * Module 04: AI AGENT [HOUR 5]
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MODULE 04: AI AGENT',
        'title' => 'Agri-Agent <br> Communicator 🎙️',
        'desc' => 'น้องหูทอง (NLP Bot) ฟังเสียงของเกษตรกรแล้วเปลี่ยนเป็นคำสั่งงานครับ! เราจะทำความรู้จัก Intent Classification กัน!',
        'level_tag' => 'SENIOR / VOCATIONAL',
        'accent' => 'lavender',
        'image' => 'assets/images/pixar_robot_nlp_chat_1775430295369.png',
        'table' => [
            'header' => ['Input Text', 'Intent Label', 'Confidence'],
            'rows' => [
                ['รดน้ำทุเรียนหน่อย', 'WATER_ON', '98%'],
                ['ราคาข้าวพรุ่งนี้', 'PRICE_CHECK', '94%'],
                ['ใบเหลืองเกิดจากอะไร', 'DIAGNOSIS', '91%']
            ]
        ],
        'code_label' => 'nlp_engine.py',
        'code' => "from nltk.tokenize import word_tokenize\ntext = 'รดน้ำทุเรียนหน่อย'\ntokens = word_tokenize(text)\n# AI Mapping Start",
        'tip' => 'CHALLENGE: ลองจินตนาการประโยคที่คุณอยากสั่ง AI ให้ทำงานในไร่ของคุณสิครับ!'
    ],
    [
        'type' => 'simulator',
        'chapter' => 'INTENT ANALYSIS SIM',
        'title' => 'Conversational <br> Intelligence 🤖',
        'desc' => 'จำลองกระบวนการที่ AI ใช้ในการเจาะรหัสข้อความ (Natural Language) ของเราครับ!',
        'sim_type' => 'chatbot',
        'accent' => 'lavender',
        'image' => 'assets/images/realistic_code_nlp_dashboard_1775430310693.png',
        'chat_prompt' => 'Ask the AI Bot 🤖',
        'chat_questions' => [
            ['q' => 'รดน้ำทุเรียนหน่อย', 'a' => 'WATERING_ON', 'd' => 'กำลังเตรียมการเปิดระบบพ่นน้ำ...'],
            ['q' => 'ราคาข้าวรายสัปดาห์', 'a' => 'MARKET_SYNC', 'd' => 'ดึงราคาล่าสุด: 12,500 บาท/ตัน'],
            ['q' => 'พยากรณ์อากาศฟาร์ม', 'a' => 'WEATHER_FETCH', 'd' => 'ท้องฟ้าแจ่มใส ความชื้น 55% เหมาะกับการรดน้ำ']
        ]
    ]
];
