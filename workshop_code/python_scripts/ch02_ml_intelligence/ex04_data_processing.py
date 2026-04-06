# ex04_data_processing.py
# 🔬 ระดับ: Senior (ม.ปลาย)
# 🧩 ภารกิจ: เติมข้อมูลที่หายไปด้วยค่าเฉลี่ย (Data Imputation)

import pandas as pd
import numpy as np

# 1. โหลดข้อมูลจำลอง (หรือโหลดจาก CSV)
data = {
    'temperature': [32, 38, np.nan, 22, 40],
    'soil_moisture': [45, 32, 55, np.nan, 40]
}
df = pd.DataFrame(data)

print("--- [Before: Data with NaNs] ---")
print(df)

# 2. เติมค่าว่างด้วยค่าเฉลี่ยของคอลัมน์นั้นๆ
df_clean = df.fillna(df.mean())

print("\n--- [After: Clean Data] ---")
print(df_clean)
