# ex03_smart_move.py
# 🔬 ระดับ: Intermediate
import pgzrun

WIDTH = 800
HEIGHT = 600

harvester = Actor('harvester')
target_x, target_y = 600, 100

def draw():
    screen.clear()
    screen.fill((34, 139, 34))
    harvester.draw()
    # วาดจุดเป้าหมาย (จำลองพิกัดจาก AI)
    screen.draw.circle((target_x, target_y), 5, "red")

def update():
    # ตรรกะช่วยขยับ (Autonomous Logic)
    if harvester.x < target_x: harvester.x += 2
    elif harvester.x > target_x: harvester.x -= 2
    
    if harvester.y < target_y: harvester.y += 2
    elif harvester.y > target_y: harvester.y -= 2

pgzrun.go()
