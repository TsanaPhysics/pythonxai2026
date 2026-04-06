# ex02_hsv_mask.py
# ⚙️ ระดับ: Advanced
# 🏮 ภารกิจ: ตรรกะ HSV (Hue, Saturation, Value) เพื่อคัดกรองรอยโรค

# ช่วงสีน้ำตาล (Brown Spots)
low_h, low_s, low_v = 10, 100, 20
high_h, high_s, high_v = 20, 255, 200

# สมมติสีที่อ่านได้จากพิกเซล
current_hsv = (15, 150, 100)

print(f"📍 ตรวจสอบที่ HSV: {current_hsv}")

if (low_h <= current_hsv[0] <= high_h and 
    low_s <= current_hsv[1] <= high_s and 
    low_v <= current_hsv[2] <= high_v):
    print("🚨 พบรอยโรค! พิกัดนี้คือเฉดสีน้ำตาล (Sick Area)")
else:
    print("✅ พิกัดนี้ปกติ (Healthy Area)")
