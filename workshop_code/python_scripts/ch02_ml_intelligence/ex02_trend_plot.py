# ex02_trend_plot.py
# 🔬 ระดับ: Intermediate
import pandas as pd
import matplotlib.pyplot as plt

# 1. โหลดข้อมูล
df = pd.read_csv('../../datasets/crop_data_v2.csv')

# 2. พล็อตความสัมพันธ์ระหว่างอุณหภูมิและผลผลิต
plt.scatter(df['temp'], df['yield_weight'], color='orange')
plt.title('Relationship: Temperature vs Yield Weight')
plt.xlabel('Temperature (°C)')
plt.ylabel('Yield Weight (kg)')
plt.grid(True)

print("📈 กำลังแสดงกราฟแนวโน้ม... (ต้องการสภาพแวดล้อมที่มี GUI)")
# plt.show() # รันบรรทัดนี้เพื่อดูภาพ
