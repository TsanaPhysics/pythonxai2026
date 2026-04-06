# ex01_pixel_access.py
# 🔬 ระดับ: Intermediate
# 🧩 ภารกิจ: เข้าใจพิกัดภาพ (X, Y) และสี (R, G, B)

# สมมติว่าพิกัด 10, 10
x, y = 10, 10
color = (34, 139, 34) # พิกัดนี้มีสีเขียว (Forest Green)

print(f"📍 พิกัด: {x}, {y}")
print(f"🎨 สีที่พบ: R={color[0]}, G={color[1]}, B={color[2]}")

if color[1] > color[0] and color[1] > color[2]:
    print("✅ ระบบสรุป: นี่คือส่วนของ 'ใบพืช' ที่ปกติดี")
else:
    print("⚠️ ระบบสรุป: พบเฉดสีผิดปกติ! กำลังส่งต่อให้ AI วิเคราะห์โรค")
