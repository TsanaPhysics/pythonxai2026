# ex05_rf_classifier.py
# 🔬 ระดับ: Intermediate
import pandas as pd
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split

# 1. โหลดข้อมูลเต็มรูปแบบ
df = pd.read_csv('../../datasets/crop_data_v2.csv')

# 2. คัดเลือก X (ปัจจัย) และ y (สถานะ)
X = df[['temp', 'humidity', 'soil_moist', 'fert', 'light']]
y = df['label']

# 3. แบ่งข้อมูล (Train/Test)
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# 4. สร้างและฝึกฝนโมเดล
model = RandomForestClassifier(n_estimators=100)
model.fit(X_train, y_train)

# 5. ทายผลจากข้อมูลทดสอบ
acc = model.score(X_test, y_test)
print(f"✅ ความแม่นยำของโมเดล (Accuracy): {acc * 100:.2f}%")
