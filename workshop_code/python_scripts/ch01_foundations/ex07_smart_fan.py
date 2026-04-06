# ex07_smart_fan.py
# ⚙️ ระดับ: Advanced
# 🛠️ ภารกิจ: รวมตรรกะทั้งหมดเข้าด้วยกัน (Integrated Fan Control)

def check_fan_status(temp, hum):
    if temp > 35 or hum > 80:
        return "เปิดพัดลมแรงสุด (Level 3)"
    elif temp > 30:
        return "เปิดพัดลมอ่อน (Level 1)"
    else:
        return "ปิดพัดลม"

# จำลองการรับค่าจากเซนเซอร์จริง
current_temp = 36.5
current_hum = 82.0

status = check_fan_status(current_temp, current_hum)
print(f"📊 ตรวจพบ Temp: {current_temp}, Humidity: {current_hum}")
print(f"⚙️ การตัดสินใจของระบบ: {status}")
