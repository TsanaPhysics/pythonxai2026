# 🎮 บทที่ 5: Digital Twin Simulation (2D & 3D)
**ระยะเวลา**: ชั่วโมงที่ 11 (1 ชั่วโมง)
**หัวใจสำคัญ**: การเชื่อมโยงโลกเสมือน (Software) เข้ากับตรรกะ AI เพื่อจำลองการทำงานก่อนลงพื้นที่จริง

ในบทนี้ เราจะเปลี่ยนจากการ "เขียนเกม" ทั่วไป มาเป็นการสร้าง **Digital Twin Dashboard** ซึ่งเป็นเทคโนโลยีที่นักวิทยาศาสตร์ใช้จำลองฟาร์มหรือโรงงานในคอมพิวเตอร์ เพื่อทดสอบโค้ด AI ของเราว่าทำงานได้ถูกต้องไหม ก่อนจะเอาไปใส่ในหุ่นยนต์จริงๆ ครับ

---

## 🎨 ตอนที่ 1: 2D Dashboard ด้วย Pygame Zero
การเริ่มต้นเขียนโปรแกรมจำลองด้วย **Pygame Zero (PyZero)** นั้นง่ายและเห็นผลเร็ว เหมาะสำหรับสร้างหน้านักแสดง (Dashboard) เพื่อดูสถานะของฟาร์ม

### ✨ โครงสร้างเวทมนตร์ของ PyZero (3 Magic Parts)
1. **Setup**: ตั้งค่าหน้าจอ
2. **Draw**: วาดภาพลงบนจอ (เหมือนพู่กันวิเศษ)
3. **Update**: ตรรกะการขยับและความคิด (Logic)

### 🤖 Copy-Paste Lab: Agri-Monitoring System
ลองคัดลอกโค้ดนี้ไปรัน เพื่อสร้างระบบติดตามรถเก็บเกี่ยวอัตโนมัติ
```python
import pgzrun

# 1. ตั้งค่าหน้าจอ
WIDTH = 800
HEIGHT = 600

# สร้างตัวละคร (อย่าลืมใส่รูป harvester.png ในโฟลเดอร์ images)
harvester = Actor('harvester')
harvester.pos = 400, 300

# 2. ส่วนของการวาดผลลัพธ์
def draw():
    screen.clear()
    screen.fill((34, 139, 34)) # สีเขียวฟาร์ม
    harvester.draw()
    screen.draw.text("Agri-AI Simulation Mode", (20, 20), color="white", fontsize=30)

# 3. ตรรกะการควบคุม (AI Logic Simulation)
def update():
    # จำลองว่าถ้า AI ตรวจพบพืชพร้อมเก็บ (กด space) ให้รถขยับ
    if keyboard.space:
        harvester.x += 2
        
pgzrun.go()
```

---

## 🧱 ตอนที่ 2: 3D Digital Twin ด้วย Minecraft Education
เมื่อเข้าใจตรรกะใน 2 มิติแล้ว เราจะอัปเกรดเข้าสู่โลก 3 มิติ เพื่อทดสอบว่า "โค้ด" ของเราสามารถสั่งงานหุ่นยนต์ (Agent) ให้ทำงานในพื้นที่จริงได้อย่างไร

### 🛠️ เริ่มต้นใช้งาน Code Builder
1. เปิดเกม **Minecraft Education**
2. กดปุ่ม **"C"** เพื่อเปิด Code Builder
3. เลือกภาษา **"Python"**

### 🕒 Lab: หุ่นยนต์เสกไร่ข้าว (The Instant Farm)
**Mission**: ใช้ Loop เพื่อสั่งให้ Agent ปลูกข้าว 10x10 บล็อก
```python
# สั่งให้หุ่นยนต์เดินและปลูกพืขอัตโนมัติ (Nested Loop)
for i in range(10):
    for j in range(10):
        agent.place(FORWARD, 1) # วางบล็อก
        agent.move(FORWARD, 1) # เดินหน้า
    agent.move(LEFT, 1) # ขยับแถวใหม่
    agent.turn(LEFT)
```

---

## 🚀 Multimodal Logic: เชื่อมโยงความรู้
ในฐานะ **AI-Next Scientist** คุณสามารถรวมทุกบทที่เรียนมาเข้าด้วยกัน:
1. **บทที่ 2-3 (Brain)**: ใช้ ML ทายว่าฝนจะตกไหม
2. **บทที่ 4 (Vision)**: ใช้ CV มองเห็นพื้นที่ใน Minecraft
3. **บทที่ 5 (Body)**: สั่งให้ Agent ขยับตามคำสั่งที่ Brain และ Vision ประมวลผลได้!

---

## ✅ Checklist ท้ายบท
- [ ] เข้าใจความหมายของ Digital Twin และการจำลอง (Simulation)
- [ ] สามารถขยับตัวละครใน 2D ได้สำเร็จ
- [ ] สามารถสั่ง Agent ใน Minecraft ให้ทำงานตามตรรกะ Loop ได้

---
> [!IMPORTANT]
> **พี่ยักษ์สรุปให้**: การจำลองในโลก Digital ช่วยลดความเสี่ยงและความผิดพลาดในโลกจริง (Physics World) นี่คือพลังของนักวิทยาศาสตร์ยุค 2026 ครับ! 🚀
