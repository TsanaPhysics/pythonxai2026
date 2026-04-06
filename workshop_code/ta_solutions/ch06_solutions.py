# ch06_solutions.py
# 🎓 สำหรับวิทยากรและผู้ช่วย (TA) - เฉลยและเทคนิคบทที่ 6 (Pygame Zero)
# 🚨 จุดที่เด็กชอบติด (Common Pitfalls):
# 1. เขียนชื่อไฟล์ภาพใน Actor('...') ผิด (ต้องไม่ใส่นามสกุล .png)
# 2. ลืมวางไฟล์ภาพไว้ในโฟลเดอร์ images/
# 3. ลืมเติม pgzrun.go() ท้ายไฟล์

import pgzrun

# 🚀 เฉลย Lab รถเก็บเกี่ยวอัตโนมัติ (AI Simulation Agent)
def solve_ai_agent():
    print("--- [TA Solution: Autonomous Agent Simulation] ---")
    
    WIDTH = 800
    HEIGHT = 600
    
    harvester = Actor('harvester')
    target = (600, 200) # จุดรอยโรคที่ AI ตรวจพบ
    
    def draw():
        screen.clear()
        harvester.draw()
        screen.draw.circle(target, 5, "red")

    def update():
        # ตรรกะการเคลื่อนที่เข้าหาเป้าหมาย (Autonomous Logic)
        if harvester.x < target[0]: harvester.x += 2
        elif harvester.x > target[0]: harvester.x -= 2
        
        if harvester.y < target[1]: harvester.y += 2
        elif harvester.y > target[1]: harvester.y -= 2
        
        # เมื่อถึงที่หมาย
        if harvester.distance_to(target) < 5:
            print("🚀 Mission Complete: Agri-Agent Target Reached!")

    # หมายเหตุสำหรับ TA: ในเฉลยจริงต้องรันผ่าน pgzrun.go()
    # pgzrun.go() 

if __name__ == "__main__":
    solve_ai_agent()
    print("TA Guide: Run with 'pgzrun ch06_solutions.py'")
