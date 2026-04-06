# ch02_solutions.py
# 🎓 สำหรับวิทยากรและผู้ช่วย (TA) - เฉลยและเทคนิคบทที่ 2
# 🚨 จุดที่เด็กชอบติด (Common Pitfalls):
# 1. ลืมโหลด pandas (`import pandas as pd`)
# 2. ใส่ชื่อคอลัมน์ใน X, y ผิด (เช็คสะกดตัวเล็ก/ใหญ่)
# 3. ไม่ได้ลบ NaNs ออกก่อน (`df.dropna()`)

import pandas as pd
from sklearn.ensemble import RandomForestClassifier

# 🚀 เฉลย Lab พยากรณ์ผลผลิต (Ready/Sick)
def solve_harvest_prediction():
    print("--- [TA Solution: Random Forest Model] ---")
    
    # 1. โหลดข้อมูลจำลอง
    df = pd.read_csv('../../datasets/crop_data_v2.csv')
    
    # 2. ล้างข้อมูล (สำคัญมาก!)
    df_clean = df.fillna(df.mean())
    X = df_clean[['temp', 'humidity', 'soil_moist', 'fert', 'light']]
    y = df_clean['label']
    
    # 3. สร้างและรันโมเดล (ใช้ป่า 100 ต้น)
    model = RandomForestClassifier(n_estimators=100)
    model.fit(X, y)
    
    # 4. ทดสอบทายผล
    test_sensor = [[35, 75, 40, 15, 12]]
    pred = model.predict(test_sensor)
    print(f"ผลพยากรณ์ Lab: {pred}")

if __name__ == "__main__":
    solve_harvest_prediction()
