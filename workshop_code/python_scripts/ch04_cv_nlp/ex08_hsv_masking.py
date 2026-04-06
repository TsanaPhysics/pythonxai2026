# ex08_hsv_masking.py
# ⚙️ ระดับ: Vocational/Research (ปวช./วิจัย)
# 🧩 ภารกิจ: ตัดกรองเฉดสีเพื่อตรวจหาโรคพืช (Brown Spot Detection)

# หมายเหตุ: โค้ดนี้ใช้สำหรับเข้าใจตรรกะเบื้องต้นของ OpenCV (HSV)
# ในการใช้งานจริง ต้องนำไปครอบด้วย cv2.imread(image)

print("--- [Computer Vision: HSV Masking Logic] ---")

# ช่วงสีน้ำตาล (Brown Spot): ต่ำสุด - สูงสุด
lower_brown = [10, 50, 20] 
upper_brown = [30, 255, 200]

print(f"🎯 เป้าหมาย: ตรวจหาจุดสีในช่วง {lower_brown} ถึง {upper_brown}")
print("... ระบบกำลังแยกเฉดสีน้ำตาลออกจากใบไม้สีเขียว ...")
print("✅ ผลลัพธ์: พบรอยโรคส่วนเกิน 15% ของพื้นที่ใบพืช")
