moisture_levels = [45, 32, 55, 28, 40]

for m in moisture_levels:
    status = "ปกติ" if m >= 40 else "ต่ำเกินไป (ต้องรดน้ำ)"
    print(f"จุดตรวจที่ระดับ {m}%: สถานะ {status}")
