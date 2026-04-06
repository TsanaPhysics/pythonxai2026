# ex10_alien_mission.py
# 🌱 ระดับ: Junior (ม.ต้น)
# 🎮 ภารกิจ: เริ่มต้นเขียนเกมแรกด้วย PyZero (Alien Mission)
# ⚠️ วิธีรัน: พิมพ์ `pgzrun ex10_alien_mission.py` ใน Terminal

import pgzrun

# 1. ตั้งค่าหน้าจอ
WIDTH = 800
HEIGHT = 600

# 2. สร้าง Actor (ต้องมีรูป alien.png ในโฟลเดอร์ images)
alien = Actor('alien')
alien.pos = 400, 300

def draw():
    screen.clear()
    screen.fill((0, 128, 0)) # สีพื้นหลังเขียว
    alien.draw()
    screen.draw.text("My First PyZero Game!", (20, 20), color="white")

def update():
    # บังคับด้วยปุ่มลูกศร
    if keyboard.left:
        alien.x -= 5
    elif keyboard.right:
        alien.x += 5
    elif keyboard.up:
        alien.y -= 5
    elif keyboard.down:
        alien.y += 5

pgzrun.go()
