# ex04_collision_sensor.py
# 🔬 ระดับ: Intermediate
import pgzrun

WIDTH = 800
HEIGHT = 600

harvester = Actor('harvester')
harvester.pos = 100, 100

plant = Actor('plant')
plant.pos = 400, 300

def draw():
    screen.clear()
    screen.fill((34, 139, 34))
    harvester.draw()
    plant.draw()
    
    # แสดงสถานะการชน
    if harvester.colliderect(plant):
        screen.draw.text("DETECTED: AGRI-OBJECT FOUND!", (20, 20), color="yellow")

def update():
    if keyboard.right: harvester.x += 5
    if keyboard.left: harvester.x -= 5
    if keyboard.up: harvester.y -= 5
    if keyboard.down: harvester.y += 5

pgzrun.go()
