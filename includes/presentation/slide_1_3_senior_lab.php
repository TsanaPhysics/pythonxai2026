<?php
/**
 * Mission: Level Senior
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MISSION: LEVEL SENIOR',
        'title' => 'Smart Farm <br> Data Filter 🌡️',
        'desc' => 'สำหรับพี่ๆ ม.ปลาย และ ปวช. มาลองคัดกรองข้อมูลจาก Smart Farm กันครับ! เราจะสร้างระบบคัดกรองเฉพาะข้อมูลที่ "อันตราย" เท่านั้น!',
        'level_tag' => 'SENIOR / VOCATIONAL',
        'accent' => 'coral',
        'image' => 'assets/images/realistic_smart_farm_dashboard_1775430105446.png',
        'table' => [
            'header' => ['Sensor Type', 'Threat Level', 'Action Required'],
            'rows' => [
                ['Temp > 40C', 'CRITICAL', 'Activate Fan'],
                ['Moist < 30%', 'HIGH', 'Watering Start'],
                ['Light < 20%', 'MEDIUM', 'Open Roof']
            ]
        ],
        'code_label' => 'senior_filter.py',
        'code' => "sensor_data = [32, 45, 28, 55, 12]\nfor temp in sensor_data:\n    if temp > 40:\n        print(f'Warning: {temp}C is too high!')",
        'tip' => 'PRO TIP: ในโลกจริง ข้อมูลเหล่านี้ไหลมาหลายล้านบรรทัดต่อวินาทีเลยนะครับ!'
    ]
];
