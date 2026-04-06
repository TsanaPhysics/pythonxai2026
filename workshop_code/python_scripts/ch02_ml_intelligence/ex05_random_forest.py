# ex05_random_forest.py
# 🔬 ระดับ: Senior (ม.ปลาย)
# 🧬 ภารกิจ: รถเก็บเกี่ยวอัจฉริยะ (Smart Harvester) ทายผลผลิตจากข้อมูลฟาร์ม

import pandas as pd
from sklearn.ensemble import RandomForestClassifier

# 1. โหลดข้อมูลจำลอง (ใช้ข้อมูลที่เราเตรียมไว้ใน datasets)
# (หรือทดลองสร้าง Mock Data เล็กๆ เพื่อเทส)
X = [[32, 65, 45], [38, 70, 32], [25, 45, 55], [22, 40, 28]] 
y = ['READY', 'READY', 'LOW_YIELD', 'LOW_YIELD']

# 2. สร้างโมเดล (ป่าสุ่ม 100 ต้น)
model = RandomForestClassifier(n_estimators=100)
model.fit(X, y)

# 3. ลองทายผลผลิตจากค่าเซนเซอร์ใหม่
new_sensor = [[35, 75, 35]] # อุณหภูมิ, ความชื้นอากาศ, ความชื้นดิน
prediction = model.predict(new_sensor)

print(f"🔮 AI พยากรณ์สถานะ: {prediction[0]}")
