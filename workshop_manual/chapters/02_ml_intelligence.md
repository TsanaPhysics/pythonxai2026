# 🔮 บทที่ 2: พลังแห่งการพยากรณ์ (ML & xAI)
**ระยะเวลา**: ชั่วโมงที่ 4 - 6 (3 ชั่วโมง)
**หัวใจสำคัญ**: การใช้ Machine Learning ทายอนาคต และอธิบายเหตุผลด้วย xAI

---

## 🕒 ชั่วโมงที่ 4: ข้อมูลคือขุมทรัพย์ (Data Mastery)
จัดการข้อมูลดิบให้พร้อมสำหรับการสอน AI

### 🧪 2.1 CSV Loading: โหลดข้อมูลฟาร์ม
```python
import pandas as pd
df = pd.read_csv('../../datasets/crop_data_v2.csv')
print(df.head())
```

### 📈 2.2 Visualization: มองเห็นแนวโน้ม
```python
import matplotlib.pyplot as plt
plt.scatter(df['temp'], df['yield_weight'], color='orange')
plt.show()
```

### 🧽 2.3 Data Cleaning: การซ่อมข้อมูล
```python
import numpy as np
df_clean = df.fillna(df.mean())
print("✅ ข้อมูลถูกซ่อมเรียบร้อยแล้ว!")
```

---

## 🕒 ชั่วโมงที่ 5: การพยากรณ์และการสอน AI
สร้างโมเดลเพื่อทำนายผลผลิตและจำแนกสถานะ

### 📉 2.4 Linear Regression: พยากรณ์ผลผลิต
```python
from sklearn.linear_model import LinearRegression
model = LinearRegression().fit(df[['light']], df['yield_weight'])
pred = model.predict([[16]])
print(f"📊 ผลผลิตคาดการณ์: {pred[0]:.2f} kg")
```

### 🌲 2.5 Random Forest: ป่าสุ่มอัจฉริยะ
```python
from sklearn.ensemble import RandomForestClassifier
X = df[['temp', 'humidity', 'soil_moist', 'fert', 'light']]
y = df['label']
rf = RandomForestClassifier(n_estimators=100).fit(X, y)
```

### ⚖️ 2.6 Model Comparison: เลือกสิ่งที่ดีที่สุด
เปรียบเทียบระหว่าง Decision Tree และ Random Forest เพื่อดูว่าใครแม่นยำกว่า

---

## 🕒 ชั่วโมงที่ 6: เจาะลึกสมอง AI (Explainable AI)
ทำไม AI ถึงตัดสินใจแบบนั้น? (Feature Importance)

### 🏮 2.7 xAI Basics: ความสำคัญของฟีเจอร์
```python
importance = rf.feature_importances_
for f, imp in zip(X.columns, importance):
    print(f"📊 {f}: {imp*100:.2f}%")
```

### 🏮 2.8 Deep xAI Analysis
วิเคราะห์เชิงลึกว่าปัจจัยใดขยับการตัดสินใจของ Agent ในการเก็บเกี่ยวมากที่สุด

---

## ✅ Checklist ท้ายบท
- [ ] สามารถโหลดและทำความสะอาดข้อมูลด้วย Pandas
- [ ] สร้างโมเดลพยากรณ์และจำแนกประเภทสำเร็จ
- [ ] เข้าใจเหตุผลเบื้องหลังการตัดสินใจของ AI ผ่าน xAI

---

## 🎮 Minecraft Challenge: Smart Harvesting
ลองนำผลลัพธ์จาก AI มาสั่งให้ Agent เลือกเก็บเกี่ยวเฉพาะพืชที่ AI ทายว่า "READY" เท่านั้น!
```python
if ai_prediction == "READY":
    agent.destroy(FORWARD)
```
