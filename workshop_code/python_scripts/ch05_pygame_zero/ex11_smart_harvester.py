# ex11_smart_harvester.py
# 🔬 ระดับ: Senior (ม.ปลาย)
# 🧩 ภารกิจ: รถเก็บเกี่ยวอัจฉริยะ (AI-Driven Harvester)
# ⚠️ วิธีรัน: พิมพ์ `pgzrun ex11_smart_harvester.py` ใน Terminal

import pgzrun
import random

WIDTH = 800
HEIGHT = 600

# สร้างตัวละคร (Harvester และ พืช)
harvester = Actor('harvester')
harvester.pos = (400, 500)

plants = []
for i in range(5):
    p = Actor('plant')
    p.pos = (random.randint(100, 700), random.randint(100, 400))
    # จำลองสถานะพืช (0: ปกติ, 1: เป็นโรค)
    p.status = random.randint(0, 1) 
    plants.append(p)

def draw():
    screen.clear()
    screen.fill((34, 139, 34)) 
    harvester.draw()
    for p in plants:
        p.draw()
        if p.status == 1:
            screen.draw.text("SICK", (p.x, p.y-20), color="red")

def update():
    # ตรรกะระดับ Senior: วิ่งไปหาพืชที่เป็นโรค (SICK) โดยอัตโนมัติ
    for p in plants:
        if p.status == 1:
            if harvester.x < p.x: harvester.x += 2
            elif harvester.x > p.x: harvester.x -= 2
            if harvester.y < p.y: harvester.y += 2
            elif harvester.y > p.y: harvester.y -= 2

pgzrun.go()
