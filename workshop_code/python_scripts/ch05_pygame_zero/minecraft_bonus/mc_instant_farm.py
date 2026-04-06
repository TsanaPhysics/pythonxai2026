# mc_instant_farm.py
# 🚜 หุ่นยนต์ปลูกพืชอัตโนมัติ (Instant Farm Agent)
# สำหรับใช้งานใน Minecraft Education Edition (Code Builder)

def on_chat():
    # 1. ให้หุ่นยนต์เตรียมพื้นที่ (10x10)
    player.say("🚀 กำลังเตรียมพื้นที่ฟาร์ม 10x10...")
    
    for row in range(10):
        for col in range(10):
            # วางบล็อกเมล็ดพันธุ์ (Seeds) ด้านล่าง
            agent.place(DOWN, 1)
            # เติมปุ๋ย (Bone Meal)
            agent.interact(DOWN)
            # เดินหน้าไปช่องถัดไป
            agent.move(FORWARD, 1)
            
        # เมื่อสุดแถว ให้กลับมาเริ่มแถวใหม่
        agent.move(LEFT, 1)
        agent.turn(LEFT)
        agent.move(FORWARD, 10)
        agent.turn(RIGHT)

# พิมพ์ "farm" ในช่องแชทเพื่อรันคำสั่ง
player.on_chat("farm", on_chat)
