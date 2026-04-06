# ex06_compare_models.py
# ⚙️ ระดับ: Advanced
import pandas as pd
from sklearn.ensemble import RandomForestClassifier
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split

# 1. โหลดข้อมูล
df = pd.read_csv('../../datasets/crop_data_v2.csv')
X = df[['temp', 'humidity', 'soil_moist', 'fert', 'light']]
y = df['label']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)

# 2. เปรียบเทียบ 2 โมเดล
dt = DecisionTreeClassifier()
rf = RandomForestClassifier()

dt.fit(X_train, y_train)
rf.fit(X_train, y_train)

print(f"📊 Decision Tree Score: {dt.score(X_test, y_test)*100:.2f}%")
print(f"📊 Random Forest Score: {rf.score(X_test, y_test)*100:.2f}%")
