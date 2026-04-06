# mc_sensor_bot.py
# 🌡️ ระบบเซนเซอร์และพยากรณ์อากาศในฟาร์ม (Weather Prediction)
# สำหรับใช้งานใน Minecraft Education Edition (Code Builder)

def check_weather():
    # ตรวจสอบสภาพอากาศในโลกเสมือน (Digital Twin Logic)
    if gameplay.is_raining():
        player.say("⛈️ ฝนตกหนัก! สั่งให้ Agent กลับฐานทัพ (Base)")
        agent.teleport(world(0, 0, 0))
    elif gameplay.is_thundering():
        player.say("⚡ พายุฟ้าคะนอง! ปิดการทำงานของฟาร์มทั้งหมด")
    else:
        player.say("☀️ แดดออก: พลังงานโซลาร์เซลล์เต็ม 100%")
        # สุ่มขยับ Agent เพื่อลาดตระเวน (Patrol)
        agent.move(FORWARD, 5)

# ตรวจสอบทุกๆ 100 มิลลิวินาที
loops.forever(check_weather)
