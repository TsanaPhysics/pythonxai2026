import pandas as pd
import numpy as np

data = {'ความชื้น': [45, 32, np.nan, 28, 40], 'ปุ๋ย': [10, 15, 12, np.nan, 18]}
df = pd.DataFrame(data)

df.fillna(df.mean(), inplace=True)
print("✅ ข้อมูลถูกซ่อมเรียบร้อยแล้ว!")
print(df)
