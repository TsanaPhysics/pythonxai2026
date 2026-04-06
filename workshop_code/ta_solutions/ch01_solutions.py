# ch01_solutions.py
# 🎓 สำหรับวิทยากรและผู้ช่วย (TA) - เฉลยและเทคนิคบทที่ 1
# 🚨 จุดที่เด็กชอบติด (Common Pitfalls):
# 1. ลืมย่อหน้า (Indentation) หลังจากใช้ if/else
# 2. ลืมใส่เครื่องหมายโคลอน (:) ท้ายเงื่อนไข
# 3. ใส่ input() แล้วลืมแปลงเป็น int/float ก่อนคำนวณ

import sys

# 🚀 เฉลย Lab ภารกิจทักทาย (Junior)
def solve_greeting():
    print("--- [TA Solution: Greeting Bot] ---")
    name = "Student_A" # หรือใช้ input()
    print(f"สวัสดีคุณ {name}!")

# 🚀 เฉลย Lab ระบบควบคุมพัดลมอัตโนมัติ (Advanced)
def solve_smart_fan(temp, humidity):
    print(f"\n--- [TA Solution: Smart Fan Logic] ---")
    # ตรรกะ: ถ้าร้อนมาก หรือ ชื้นมาก ให้เปิดพัดลมแรง
    if temp > 35 or humidity > 80:
        return "🌀 เปิดพัดลมระดับ 3 (แรงสุด)"
    elif temp > 30:
        return "🎐 เปิดพัดลมระดับ 1 (เบา)"
    else:
        return "😴 ปิดพัดลม ประหยัดพลังงาน"

if __name__ == "__main__":
    solve_greeting()
    status = solve_smart_fan(36.5, 85)
    print(f"ผลการตัดสินใจ: {status}")
