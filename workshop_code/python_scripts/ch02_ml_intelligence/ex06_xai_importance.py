# ex06_xai_importance.py
# 🔬 ระดับ: Senior (ม.ปลาย)
# 🏮 ภารกิจ: ส่องสมอง AI ด้วย xAI (Explainable AI)

import pandas as pd
from sklearn.ensemble import RandomForestClassifier

# 1. ข้อมูลตัวอย่าง
data = {
    'temp': [32, 38, 25, 22, 40],
    'soil': [45, 32, 55, 28, 40],
    'light': [12, 14, 8, 6, 15],
    'label': [1, 1, 0, 0, 1] # 1: โตดี, 0: โตช้า
}
df = pd.DataFrame(data)

# 2. ฝึกสอนโมเดล
X = df.drop('label', axis=1)
y = df['label']
model = RandomForestClassifier(n_estimators=100)
model.fit(X, y)

# 3. ดูความสำคัญของข้อมูล (Feature Importance)
print("--- [Explainable AI: Feature Importance] ---")
importance = model.feature_importances_
for f, imp in zip(X.columns, importance):
    print(f"📊 {f}: มีความสำคัญ {imp*100:.2f}%")
