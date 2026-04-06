# ex05_ai_harvester_sim.py
# ⚙️ ระดับ: Advanced
# 🛠️ ภารกิจ: รถเก็บเกี่ยวอัจฉริยะ (Full Autonomous Agent)

import pgzrun
import random

WIDTH = 800
HEIGHT = 600

harvester = Actor('harvester')
harvester.pos = 400, 300

# พืช 3 ต้นที่มีสถานะต่างกัน
plants = []
for i in range(3):
    p = Actor('plant')
    p.pos = (random.randint(100, 700), random.randint(100, 500))
    p.sick = random.choice([True, False]) # สุ่มว่าเป็นโรคหรือไม่
    plants.append(p)

def draw():
    screen.clear()
    screen.fill((34, 139, 34))
    harvester.draw()
    for p in plants:
        p.draw()
        if p.sick: screen.draw.circle(p.pos, 15, "red") # แสดงสัญลักษณ์ "เป็นโรค"

def update():
    # ค้นหาพืชที่เป็นโรคที่ใกล้ที่สุด (จำลองการตัดสินใจของ AI)
    for p in plants:
        if p.sick:
            # ขยับไปหาพืชที่เป็นโรค
            if harvester.x < p.x: harvester.x += 2
            elif harvester.x > p.x: harvester.x -= 2
            if harvester.y < p.y: harvester.y += 2
            elif harvester.y > p.y: harvester.y -= 2
            
            # ถ้าถึงตำแหน่ง ให้ "ทำความสะอาด" (เปลี่ยนสถานะ)
            if harvester.colliderect(p):
                p.sick = False
                print("✨ Mission Complete: Plant Cured!")

pgzrun.go()
