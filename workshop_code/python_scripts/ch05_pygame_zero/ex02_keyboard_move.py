# ex02_keyboard_move.py
# 🌱 ระดับ: Beginner
import pgzrun

WIDTH = 800
HEIGHT = 600

harvester = Actor('harvester')
harvester.pos = 400, 300

def draw():
    screen.clear()
    screen.fill((34, 139, 34))
    harvester.draw()

def update():
    # บังคับด้วยคีย์บอร์ด
    if keyboard.left: harvester.x -= 5
    if keyboard.right: harvester.x += 5
    if keyboard.up: harvester.y -= 5
    if keyboard.down: harvester.y += 5

pgzrun.go()
