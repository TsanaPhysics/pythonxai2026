# ex07_xai_deep.py
# ⚙️ ระดับ: Advanced
# 🏮 ภารกิจ: เจาะลึกสมอง AI ด้วย xAI (Explainable AI) และ Feature Importance

import pandas as pd
from sklearn.ensemble import RandomForestClassifier

# 1. โหลดข้อมูล
df = pd.read_csv('../../datasets/crop_data_v2.csv')
X = df[['temp', 'humidity', 'soil_moist', 'fert', 'light']]
y = df['label']

# 2. ฝึกฝนโมเดล
rf = RandomForestClassifier(n_estimators=100)
rf.fit(X, y)

# 3. เจาะลึกความสำคัญของข้อมูล (xAI)
importance = rf.feature_importances_
feature_names = X.columns

# จัดเรียงลำดับความสำคัญจากมากไปน้อย
feature_importance = sorted(zip(feature_names, importance), key=lambda x: x[1], reverse=True)

print("--- [Explainable AI: Why does AI make these decisions?] ---")
for name, val in feature_importance:
    print(f"🌟 {name:12}: ความสำคัญ {val*100:6.2f}% [{'#' * int(val*50)}]")
