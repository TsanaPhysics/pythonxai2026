import pgzrun
import random

# 1. Setup Window
WIDTH = 800
HEIGHT = 600
TITLE = "Agri-AI Mastery: iPad & Touch Support"

# 2. Create Actors (images are in 'images/' folder)
robot = Actor('robot') 
robot.pos = 400, 300
robot.angle = 0

seed = Actor('seed')
seed.pos = random.randint(50, 750), random.randint(50, 550)

tree = Actor('tree')
tree.pos = 600, 450

# --- Virtual D-Pad for iPad/Touch ---
# Positioned at bottom-right corner
btn_up    = Actor('btn_up',    pos=(700, 440))
btn_down  = Actor('btn_down',  pos=(700, 540))
btn_left  = Actor('btn_left',  pos=(630, 490))
btn_right = Actor('btn_right', pos=(770, 490))

# Movement flags for touch
move_up = False
move_down = False
move_left = False
move_right = False

score = 0
game_over = False

# 3. Draw Function
def draw():
    screen.clear()
    screen.fill((0, 0, 0)) 
    
    # วาดองค์ประกอบฉาก
    tree.draw()
    seed.draw()
    robot.draw()
    
    # วาดปุ่ม Virtual D-Pad (เพิ่มความโปร่งใสเล็กน้อยถ้าต้องการ)
    btn_up.draw()
    btn_down.draw()
    btn_left.draw()
    btn_right.draw()
    
    # แสดงคะแนน
    screen.draw.text(f"SCORE: {score}", (20, 20), color="white", fontsize=50, owidth=0.5, ocolor="gray")
    screen.draw.text("iPad Support Active (Touch Controls)", (20, 70), color="cyan", fontsize=20)
    
    if game_over:
        screen.draw.text("GAME OVER", center=(400, 300), color="red", fontsize=100)

# 4. Update Function (Logic)
def update():
    global score, game_over
    
    if game_over:
        return

    # ระบบเคลื่อนที่ (รองรับทั้ง Keyboard และ Virtual Buttons)
    if (keyboard.left or move_left) and robot.left > 0:
        robot.x -= 5
        robot.angle = 90 # Adjusting angle for your sprite orientation
    elif (keyboard.right or move_right) and robot.right < WIDTH:
        robot.x += 5
        robot.angle = 270
    elif (keyboard.up or move_up) and robot.top > 0:
        robot.y -= 5
        robot.angle = 0
    elif (keyboard.down or move_down) and robot.bottom < HEIGHT:
        robot.y += 5
        robot.angle = 180

    # ระบบ Collision (เก็บเมล็ดพันธุ์)
    if robot.colliderect(seed):
        score += 1
        seed.pos = random.randint(50, 750), random.randint(50, 550)
        print(f"Collected! Current Score: {score}")

# 5. Event Handling (Input)
def on_mouse_down(pos):
    global move_up, move_down, move_left, move_right
    if btn_up.collidepoint(pos):
        move_up = True
    if btn_down.collidepoint(pos):
        move_down = True
    if btn_left.collidepoint(pos):
        move_left = True
    if btn_right.collidepoint(pos):
        move_right = True

def on_mouse_up():
    global move_up, move_down, move_left, move_right
    # หยุดการเคลื่อนที่เมื่อปล่อยนิ้ว/เมาส์
    move_up = move_down = move_left = move_right = False

# Start the game
pgzrun.go()
