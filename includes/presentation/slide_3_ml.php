<?php
/**
 * Module 02: ML [HOUR 3]
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MODULE 02: ML [HOUR 3]',
        'title' => 'Predictive <br> Intelligence 🌾',
        'desc' => 'มาลองสอนให้น้องส้ม (Data Robot) ทายใจธรรมชาติกันครับ! เราจะใช้ข้อมูลในอดีตมาพยากรณ์ว่า "ถ้าอากาศแบบนี้ เราจะได้ข้าวกี่ตัน?"',
        'level_tag' => 'SENIOR / VOCATIONAL',
        'accent' => 'coral',
        'image' => 'assets/images/pixar_robot_data_scientist_1775430091660.png',
        'table' => [
            'header' => ['Variable', 'Input (Data)', 'Impact'],
            'rows' => [
                ['Rainfall', '450 mm', 'High'],
                ['Fertilizer', '20 kg/rai', 'Medium'],
                ['Temperature', '32 C', 'Low']
            ]
        ],
        'code_label' => 'yield_predictor.py',
        'code' => "from sklearn.ensemble import RandomForestRegressor\nmodel = RandomForestRegressor()\nmodel.fit(X_train, y_train)\n# Forecasting the future...",
        'tip' => 'CHALLENGE: ลองปรับตัวเลข Rainfall ใน JupyterLab ดูสิครับว่าผลผลิตจะเปลี่ยนไปแค่ไหน?'
    ],
    [
        'type' => 'simulator',
        'chapter' => 'NPK DECISION SIM',
        'title' => 'The Smart <br> Farm Logic 🎮',
        'desc' => 'จำลองการตัดสินใจของ AI เมื่อได้รับค่าสารอาหาร (N) จากเซนเซอร์ในดินแบบ Real-time ครับ!',
        'sim_type' => 'npk_logic',
        'accent' => 'coral',
        'image' => 'assets/images/realistic_smart_farm_dashboard_1775430105446.png',
        'code_step' => "if nitrogen < 40:\n    pumps.start('NITRO_BOOST')\nelse:\n    pumps.off()"
    ]
];
