# ex01_basic_actor.py
# 🌱 ระดับ: Beginner
import pgzrun

WIDTH = 800
HEIGHT = 600

# สร้างตัวละคร (ต้องมีรูป alien.png ใน images)
alien = Actor('alien')
alien.pos = 400, 300

def draw():
    screen.clear()
    screen.fill((0, 100, 0)) # พื้นสีเขียวเข้ม
    alien.draw()

pgzrun.go()
