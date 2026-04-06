<?php
/**
 * Module 5: Computer Vision & Vision Masking
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MODULE 05: VISION [VOCATIONAL]',
        'title' => 'Digital Eye <br> Scanner',
        'desc' => 'คัดแยกความผิดปกติบนใบพืชโดยใช้ Python และ OpenCV (Computer Vision)',
        'table' => [
            'header' => ['Color Space', 'Range [Lower-Upper]', 'Target'],
            'rows' => [
                ['Green (Healthy)', '[35, 40, 40] - [85, 255, 255]', 'Foliage'],
                ['Brown (Disease)', '[10, 50, 20] - [30, 255, 200]', 'Leaf Spot'],
                ['Yellow (Stress)', '[20, 100, 100] - [30, 255, 255]', 'Nutrient Deficiency']
            ]
        ],
        'code' => "import cv2\nhsv = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)\nmask = cv2.inRange(hsv, lower_brown, upper_brown)\nres = cv2.bitwise_and(image, image, mask=mask)",
        'code_label' => 'vision_masking.py'
    ],
    [
        'type' => 'simulator',
        'chapter' => 'VISION HSV MASK SIM',
        'title' => 'Isolation <br> Analytics',
        'desc' => 'จำลองการใช้โมเดล CV เพื่อตัดกรองส่วนที่เป็นโรค (Brown Spots) ออกจากเนื้อใบปกติ',
        'sim_type' => 'vision_mask',
        'image' => 'assets/images/module5_cv.png',
        'code_step' => 'mask = cv2.inRange(hsv, lower_brown, upper_brown)',
        'accent' => 'cyan'
    ]
];
