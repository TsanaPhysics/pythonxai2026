# ex04_yield_pred.py
# 🔬 ระดับ: Intermediate
import pandas as pd
from sklearn.linear_model import LinearRegression

# 1. โหลดข้อมูล
df = pd.read_csv('../../datasets/crop_data_v2.csv')

# 2. เตรียม X (Input: แสง) และ y (Output: น้ำหนัก)
X = df[['light']]
y = df['yield_weight']

# 3. สร้างและฝึกฝนโมเดล
model = LinearRegression()
model.fit(X, y)

# 4. พยากรณ์ถ้านักเรียนให้แสง 16 ชั่วโมง
future_light = [[16]]
pred_weight = model.predict(future_light)

print(f"📊 พยากรณ์: ถ้าให้แสง {future_light[0][0]} ชม. จะได้รับผลผลิต {pred_weight[0]:.2f} kg")
