# 🎮 Pygame Mastery: คู่มือสรุปฉบับนักวิทย์รุ่นใหม่

ยินดีต้อนรับสู่คู่มือการสร้างระบบจำลอง (Simulation) ด้วย Python! คู่มือนี้จะช่วยให้คุณสร้าง Dashboard หรือระบบ Digital Twin ได้อย่างรวดเร็ว

---

## ⚡ 1. Pygame Zero (ทางลัดเลี้ยวขวา)
เหมาะสำหรับ: การทำ Simulation ในห้องเรียนที่ต้องการความเร็วและโค้ดน้อย

### โครงสร้างพื้นฐาน (The Big 3)
```python
import pgzrun

WIDTH = 800  # กว้าง
HEIGHT = 600 # สูง

# 1. Setup (สร้างตัวละคร)
robot = Actor('robot_idle') # ต้องมีไฟล์ robot_idle.png ในโฟลเดอร์ images/
robot.pos = 400, 300

# 2. Draw (การวาดภาพ) - รันตลอดเวลา
def draw():
    screen.clear()
    screen.fill((20, 20, 40)) # สีพื้นหลัง (RGB)
    robot.draw()
    screen.draw.text("AI Simulation System", (20, 20), color="green")

# 3. Update (ตรรกะ) - รันตลอดเวลา
def update():
    if keyboard.left:
        robot.x -= 5
    if keyboard.right:
        robot.x += 5

pgzrun.go()
```

---

## 🛠️ 2. Standard Pygame (ทางเลือกมืออาชีพ)
เหมาะสำหรับ: งานที่ซับซ้อนขึ้น หรือต้องการพอร์ตไปใช้ในระบบฝังตัว (Embedded)

### โครงสร้างที่ถูกต้อง
```python
import pygame

# 1. Initialize
pygame.init()
screen = pygame.display.set_mode((800, 600))
clock = pygame.time.Clock()
running = True

# 2. Game Loop
while running:
    # A. Event Handling (รับข้อมูล)
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

    # B. Update (คำนวณ)
    keys = pygame.key.get_pressed()
    # ตรรกะของคุณที่นี่...

    # C. Draw (วาดภาพ)
    screen.fill((0, 0, 0))
    # วาดรูปทรงต่างๆ ที่นี่...
    pygame.display.flip()

    # D. Control Speed (ความเร็ว)
    clock.tick(60) # 60 FPS

pygame.quit()
```

---

## 💡 เคล็ดลับการจัดการโฟลเดอร์ (Project Folder)
เพื่อให้ระบบเรียกใช้ไฟล์ถูกต้อง คุณควรจัดโครงสร้างดังนี้:
```text
my_project/
├── main.py          (ไฟล์โค้ดของคุณ)
├── images/          (รูปภาพ .png, .jpg)
│   └── robot.png
└── sounds/          (เสียง .wav, .ogg)
    └── alert.wav
```

---

## 🚀 กิจกรรมท้าทาย
ลองเขียนโค้ดให้ **Robot** ขยับไปเก็บ **Seed** ในฟาร์ม หาก Robot ชนกับ Seed ให้คะแนนเพิ่มขึ้น 1 คะแนน!
*(ใช้คำสั่ง `robot.colliderect(seed)` ใน Pygame Zero)*
