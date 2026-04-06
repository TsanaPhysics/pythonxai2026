# ex09_intent_mapping.py
# 🔬 ระดับ: Senior (ม.ปลาย)
# 🎙️ ภารกิจ: แปลงประโยคภาษาธรรมชาติ ให้เป็น "คำสั่งงาน AI" (Intent Classification)

# 1. นิยามความหมายของประโยค (Intent Dictionary)
intents = {
    "รดน้ำพืชหน่อย": "WATERING_ON",
    "อากาศเป็นยังไง": "WEATHER_REPORT",
    "ช่วยดูแลทุเรียน": "MONITORING_START",
    "จบภารกิจ": "SYSTEM_SHUTDOWN"
}

# 2. จำลองรับเสียงคำพูดจากนักนวัตกรรม
user_input = "อากาศเป็นยังไง"

# 3. แมปเป็นคำสั่งให้ระบบทำงาน
action = intents.get(user_input, "UNKNOWN_COMMAND")

print(f"👂 เสียงผู้ใช้: {user_input}")
print(f"🤖 คำสั่ง AI: {action}")
