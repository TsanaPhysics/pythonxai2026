# 🚀 บทที่ 1: AI Co-Pilot Mastery
**ระยะเวลา**: ชั่วโมงที่ 1 - 3 (3 ชั่วโมง)
**หัวใจสำคัญ**: เปลี่ยนจากการ "เขียนโค้ด" ไปสู่การ "กำกับ AI" เพื่อสร้างตรรกะนวัตกรรม

---

## 🕒 ชั่วโมงที่ 1: ก้าวแรกสู่ Cloud Lab & Hello Agri
ทำความรู้จักกับ JupyterLab ห้องทดลองที่ทรงพลังที่สุดบนระบบ Cloud

### 🖥️ 1.1 Copy-Paste Lab: ตรวจสอบระบบ
```python
import sys
print(f"Python Version: {sys.version}")
print("Cloud Lab Initialized: Ready to Code!")
```

### 🖥️ 1.2 Copy-Paste Lab: Hello Agri (Beginner)
```python
# ex01_hello.py
print("ยินดีต้อนรับสู่ Python x AI 2026!")
print("--- [Day 1: Start] ---")
```

### 🤖 1.3 Greeting Bot: ระบบทักทายนักวิทย์
```python
# ex02_greeting_bot.py
name = input("ระบุชื่อรหัสนักวิทย์ของคุณ: ")
print(f"ยินดีต้อนรับคุณ {name} เข้าสู่ปี 2026!")
```

---

## 🕒 ชั่วโมงที่ 2: ตรรกะและตัวแปร (Variables & Math)
การเก็บค่าและตัดสินใจเบื้องต้น

### 📊 1.4 Variables & Math: การคำนวณเซนเซอร์
```python
# ex02_vars_math.py
temp = 32.5
humidity = 65
soil_moist = 45
avg = (temp + humidity + soil_moist) / 3
print(f"ค่าเฉลี่ยเซนเซอร์รวม: {avg:.2f}")
```

### 🔞 1.5 Input Bot (Age Check): การจำแนกประเภท
```python
# ex03_input_bot.py
age = int(input("คุณอายุเท่าไหร่? "))
if age < 15:
    print("คุณคือ Junior Explorer 🌱")
else:
    print("คุณคือ Senior Innovator 🚀")
```

### 🚨 1.6 Agri Logic: การตัดสินใจในโรงเรือน
```python
# ex04_agri_logic.py
temp = float(input("ระบุอุณหภูมิฟาร์ม (°C): "))
if temp > 38:
    print("🚨 อันตราย: เปิดระบบพ่นหมอก...")
elif temp > 35:
    print("⚠️ แจ้งเตือน: เปิดพัดลม...")
else:
    print("✅ สถานะ: อุณหภูมิปกติ")
```

---

## 🕒 ชั่วโมงที่ 3: ระบบคัดกรองข้อมูล (Data Filtering & Stats)
เรียนรู้การทำงานกับข้อมูลหลายชุด (Lists) และการรวมตรรกะ

### 📊 1.7 Loop Sensor Monitoring
```python
# ex05_loop_sensor.py
moisture_levels = [45, 32, 55, 28, 40]
for m in moisture_levels:
    status = "ปกติ" if m >= 40 else "ต่ำเกินไป (ต้องรดน้ำ)"
    print(f"จุดตรวจที่ระดับ {m}%: สถานะ {status}")
```

### 🌡️ 1.8 Statistics: การจัดการข้อมูลชุด
```python
# ex06_list_data.py
temp_history = [32.5, 34.1, 38.2, 31.5, 35.0]
max_temp = max(temp_history)
print(f"🌡️ อุณหภูมิสูงสุด: {max_temp}°C")
```

### ⚙️ 1.9 Integrated Smart Fan Control
```python
# ex07_smart_fan.py
def check_fan_status(temp, hum):
    if temp > 35 or hum > 80: return "Level 3"
    elif temp > 30: return "Level 1"
    else: return "OFF"

print(f"ระบบตัดสินใจ: {check_fan_status(36.5, 82.0)}")
```

---

## ✅ Checklist ท้ายบท
- [ ] รันโค้ดใน JupyterLab สำเร็จครบ 9 Lab
- [ ] เข้าใจการใช้ `if-else` และ `input()`
- [ ] สามารถหาค่าสถิติเบื้องต้นจาก `Lists` ได้

---

## 🎮 Minecraft Challenge
ลองใช้ **Loop** สั่งให้ Agent เดินเก็บเกี่ยวพืชในรัศมี 10 บล็อกรอบตัว:
```python
for length in range(10):
    agent.destroy(FORWARD) 
    agent.move(FORWARD, 1)
```
 | Nuance | ระบุรายละเอียดปลีกย่อย ("ขอคำอธิบายที่เด็ก ม.ต้น เข้าใจได้...") |
| **T** | Target | ระบุกลุ่มเป้าหมายหรือวัตถุประสงค์ ("เพื่อใช้ในการพรีเซนต์โครงงาน...") |
| **I** | Insight | ขอคำแนะนำเชิงลึก ("แนะนำแนวทางการพัฒนาต่อยอดให้ด้วย...") |
| **S** | Style | กำหนดรูปแบบคำตอบ ("แสดงผลเป็นข้อๆ หรือเป็นตาราง...") |
| **T** | Test | ให้ AI ช่วยตรวจสอบ ("ช่วยเขียน Test Case เพื่อเช็คโค้ดนี้ให้หน่อย...") |

---
AI จะฉลาดได้ต้องมี "ตรรกะ" (Logic) เราจะสั่งให้คอมพิวเตอร์ "คิด" และ "ทำ" ตามเงื่อนไข

### 🕹️ Copy-Paste Lab: ภารกิจทักทาย (Junior/Senior)
สร้างตัวแปรเพื่อเก็บข้อมูลและแสดงผลลัพธ์
```python
# ระบบบันทึกชื่อนักนวัตกรรม
name = input("ระบุชื่อรหัสนักวิทย์ของคุณ: ")
print(f"ยินดีต้อนรับคุณ {name} เข้าสู่ปี 2026!")

# ระบบตรวจสอบอุณหภูมิฟาร์มอัจฉริยะ
temp = 38
if temp > 35:
    print("⚠️ แจ้งเตือน: อุณหภูมิสูงเกินไป! เปิดพัดลม...")
else:
    print("✅ สถานะ: อุณหภูมิปกติ")
```

---

## 🕒 ชั่วโมงที่ 3: ระบบคัดกรองข้อมูล (Data Filtering)
เรียนรู้การทำงานกับข้อมูลหลายๆ ชุด (Lists) และการวนลูป (Loops)

### 📊 Copy-Paste Lab: เซนเซอร์พยากรณ์
```python
# ข้อมูลความชื้นจาก 5 จุดในฟาร์ม
moisture_levels = [45, 32, 55, 28, 40]

for m in moisture_levels:
    status = "ปกติ" if m >= 40 else "ต่ำเกินไป (ต้องรดน้ำ)"
    print(f"จุดตรวจที่ระดับ {m}%: สถานะ {status}")
```

---

## ✅ Checklist ท้ายบท
- [ ] รันโค้ดใน JupyterLab สำเร็จ
- [ ] เข้าใจการใช้ `if-else` ในการตัดสินใจ
- [ ] สามารถรัน `for loop` เพื่อวนลูปอ่านค่าข้อมูลได้

---

### 🎮 Minecraft Challenge: หุ่นยนต์เก็บเกี่ยว (Automated Harvesting)
ลองใช้ความรู้เรื่อง **Loop** ในบทนี้ สั่งให้ Agent เดินเก็บเกี่ยวพืชในรัศมี 10 บล็อกรอบตัว:
```python
# สั่งหุ่นยนต์เดินเก็บของในพื้นที่
for length in range(10):
    agent.destroy(FORWARD) 
    agent.move(FORWARD, 1)
```

---

## ❓ Challenge (คำถามท้าทาย)
หากต้องการให้ระบบแจ้งเตือน "วิกฤต!" เมื่อความชื้นต่ำกว่า **20%** คุณต้องแก้ไขเงื่อนไขในโค้ดบรรทัดไหน?
