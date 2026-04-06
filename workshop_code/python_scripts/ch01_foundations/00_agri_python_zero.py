# 🐍 00_agri_python_zero.py
# 🎓 คอร์สพื้นฐาน Python สำหรับผู้เริ่มต้น (0-Hero ใน 2 ชั่วโมง)
# 🎯 เป้าหมาย: เข้าใจพื้นฐานเพื่อนำไปต่อยอดในด้าน AI, Machine Learning และ Data Science

print("--- 🌟 เริ่มต้นการเดินทางสู่โลก AI 2026 🌟 ---")

# --- 1. Variables & Data Types (ตัวแปรและประเภทข้อมูล) ---
# เปรียบเสมือน "กล่อง" สำหรับเก็บค่าต่างๆ ที่เซนเซอร์ส่งมา
crop_name = "ข้าวหอมมะลิ"          # String (ข้อความ)
temperature = 32.5               # Float (ทศนิยม) - ใช้เก็บค่าอุณหภูมิ
is_raining = False                # Boolean (จริง/เท็จ) - ใช้เช็คสถานะฝน

print(f"🌾 พืช: {crop_name}, อุณหภูมิ: {temperature}°C, ฝนตก: {is_raining}")

# --- 2. Math & Calculations (การคำนวณ) ---
# ใช้ในการปรับจูนค่า Data หรือคำนวณดัชนีชี้วัดต่างๆ
humidity_am = 65
humidity_pm = 75
avg_humidity = (humidity_am + humidity_pm) / 2
print(f"💧 ความชื้นเฉลี่ย: {avg_humidity}%")

# --- 3. Data Collections (การเก็บข้อมูลเป็นชุด) ---
# Lists: เก็บรายการแบบลำดับ (เช่น รายชื่อพืชในฟาร์ม)
smart_crops = ["มะเขือเทศ", "ผักสลัด", "สตรอว์เบอร์รี"]
print(f"📦 รายการพืชในฟาร์ม: {smart_crops}")
print(f"🔍 พืชชนิดที่ 1: {smart_crops[0]}") # คอมพิวเตอร์เริ่มนับที่ 0

# Dictionaries: เก็บข้อมูลแบบ "Key-Value" (เช่น รายละเอียดของพืชหนึ่งชนิด)
# สำคัญมาก! เพราะข้อมูลจาก AI มักส่งมาในรูปแบบนี้
sensor_data = {
    "location": "Greenhouse A",
    "soil_moisture": 45,
    "status": "Healthy"
}
print(f"📡 ข้อมูลเซนเซอร์: {sensor_data['location']} -> {sensor_data['status']}")

# --- 4. Logic & Control Flow (การตัดสินใจของ AI) ---
# นี่คือพื้นฐานของ "Agri-AI Logic"
current_moisture = 30
threshold = 40

if current_moisture < threshold:
    print("🚨 ระบบตัดสินใจ: ค่าความชื้นต่ำเกินไป! กำลังเปิดระบบรดน้ำอัตโนมัติ...")
else:
    print("✅ ระบบตัดสินใจ: ความชื้นปกติ ปิดระบบรดน้ำ")

# --- 5. Repetition (การทำงานซ้ำ/ลูป) ---
# ใช้ในการประมวลผลข้อมูลจำนวนมาก (เช่น ข้อมูลย้อนหลัง 7 วัน)
weekly_temp = [30, 32, 35, 34, 31, 33, 36]
print("🌡️ ตรวจสอบอุณหภูมิรายสัปดาห์:")
for day_temp in weekly_temp:
    if day_temp > 34:
        status = "🔥 ร้อน"
    else:
        status = "🌤️ ปกติ"
    print(f"  - อุณภูมิ {day_temp}°C -> สถานะ: {status}")

# --- 6. Functions (การสร้างเครื่องมือส่วนตัว) ---
# ใช้สำหรับเขียนคำสั่งที่ต้องรันซ้ำๆ ให้เป็นระเบียบ
def check_plant_health(score):
    if score >= 80:
        return "🌟 ยอดเยี่ยม"
    elif score >= 50:
        return "⚠️ ต้องดูแล"
    else:
        return "🚨 วิกฤต"

result = check_plant_health(85)
print(f"📊 ผลสรุปจาก AI: {result}")

# --- 7. Libraries Intro (การใช้เครื่องมือจากภายนอก) ---
# ในบทต่อๆ ไป เราจะใช้ Pandas (จัดการข้อมูล) และ OpenCV (มองเห็นภาพ)
import math
radius = 5
area = math.pi * (radius ** 2)
print(f"📐 พื้นที่การกระจายตัวของละอองน้ำ: {area:.2f} ตร.ม.")

print("\n🚀 คุณพร้อมแล้วสำหรับบทที่ 1: AI Co-Pilot Mastery! 🚀")
