# ch04_solutions.py
# 🎓 สำหรับวิทยากรและผู้ช่วย (TA) - เฉลยและเทคนิคบทที่ 4
# 🚨 จุดที่เด็กชอบติด (Common Pitfalls):
# 1. ลืมลง OpenCV (`pip install opencv-python`)
# 2. ใส่ขอบเขตสี HSV สลับที่กัน (Low-High)
# 3. ใส่ Intent ผิด (คีย์เวิร์ดใน Dictionary ต้องเป๊ะ)

import cv2
import numpy as np

# 🚀 เฉลย Lab คัดกรองรอยโรค (HSV Masking)
def solve_hsv_masking(image):
    print("--- [TA Solution: HSV Masking Tool] ---")
    hsv = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)
    
    # ช่วงสีน้ำตาล (Brown Spot): 10-30 Hue
    lower = np.array([10, 50, 20])
    upper = np.array([30, 255, 200])
    
    mask = cv2.inRange(hsv, lower, upper)
    result = cv2.bitwise_and(image, image, mask=mask)
    return result

# 🚀 เฉลย Lab แขทบอทตอบคำถาม (Agri-Liaison)
def solve_agri_intent(user_voice):
    print(f"\n--- [TA Solution: NLP Intent Logic] ---")
    intents = {
        "สวัสดี": "GREETING",
        "รดน้ำ": "WATER_ON",
        "อากาศ": "WEATHER_REPORT"
    }
    
    for key in intents:
        if key in user_voice:
            return intents[key]
    return "UNKNOWN"

if __name__ == "__main__":
    intent = solve_agri_intent("รดน้ำต้นไม้หน่อยครับ")
    print(f"👂 ผลการแยกข้อความ: {intent}")
