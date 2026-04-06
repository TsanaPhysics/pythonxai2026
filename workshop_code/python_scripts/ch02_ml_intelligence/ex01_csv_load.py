# ex01_csv_load.py
# 🌱 ระดับ: Beginner
import pandas as pd

# 1. โหลดข้อมูลจาก CSV (ต้องมีไฟล์ crop_data_v2.csv)
df = pd.read_csv('../../datasets/crop_data_v2.csv')

# 2. ดูข้อมูล 5 แถวแรก
print("--- [Loaded Agriculture Data] ---")
print(df.head())

# 3. ดูขนาดของข้อมูล
print(f"\n📊 ขนาดข้อมูล: {df.shape[0]} แถว, {df.shape[1]} คอลัมน์")
