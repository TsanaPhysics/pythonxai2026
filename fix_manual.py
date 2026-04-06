import re

with open('workshop_manual/master_handbook_2026.md', 'r', encoding='utf-8') as f:
    text = f.read()

# 1. Fix the TOC replacing it with the new TOC
toc_pattern = r'# 📄 สารบัญ \(Table of Contents\).*?(?=<div style="page-break-after: always;"></div>)'
new_toc = """# 📄 สารบัญ (Table of Contents)
1.  [**บทที่ 1: รากฐานและตรรกะมหัศจรรย์**](#บทที่-1-รากฐานและตรรกะมหัศจรรย์)
2.  [**บทที่ 2: พลังแห่งการพยากรณ์**](#บทที่-2-พลังแห่งการพยากรณ์)
3.  [**บทที่ 3: สมองดิจิทัล (Deep Learning)**](#บทที่-3-สมองดิจิทัล-deep-learning)
4.  [**บทที่ 4: ดวงตาอัจฉริยะและภาษา AI**](#บทที่-4-ดวงตาอัจฉริยะและภาษา-ai)
5.  [**บทที่ 5: Digital Twin Simulation (2D & 3D)**](#บทที่-5-digital-twin-simulation-2d-3d)
6.  [**บทที่ 6: Agri-Hackathon Stage**](#บทที่-6-agri-hackathon-stage)
7.  [**คลังโค้ด และ โค้ดอ้างอิง**](#ภาคผนวก-คลังโค้ดปฏิบัติการ-workshop-code-repository)

"""
text = re.sub(toc_pattern, new_toc, text, flags=re.DOTALL)

# 2. Fix the Course Syllabus as well
syllabus_pattern = r'\| \*\*BONUS\*\* \| \*\*Python in Metaverse\*\* \| \*\*บทที่ 7: Minecraft Education Integration\*\* \|'
text = text.replace('| **BONUS** | **Python in Metaverse** | **บทที่ 7: Minecraft Education Integration** |', '')

# 3. Incorporate Chapter 1 enhancements, AI Co-Pilot tips
# I'll just load 01_foundations.md and replace Chapter 1
with open('workshop_manual/chapters/01_foundations.md', 'r', encoding='utf-8') as f:
    ch1_content = f.read()
ch1_pattern = r'# 🚀 บทที่ 1: รากฐานและตรรกะมหัศจรรย์.*?(?=<div style="page-break-after: always;"></div>)'
text = re.sub(ch1_pattern, ch1_content + "\n", text, flags=re.DOTALL)

# 4. Integrate Minecraft to Chapter 5
with open('workshop_manual/chapters/05_pygame_zero_sim.md', 'r', encoding='utf-8') as f:
    ch5_content = f.read()
ch5_pattern = r'# 🎮 บทที่ 5: Pygame Zero เพื่อการจำลอง AI \(Simulation\).*?(?=<div style="page-break-after: always;"></div>)'
if "# 🎮 บทที่ 5: Pygame Zero เพื่อการจำลอง AI (Simulation)" in text:
    text = re.sub(ch5_pattern, ch5_content + "\n", text, flags=re.DOTALL)
else: # If we need to replace based on another string
    ch5_pattern2 = r'# 🎮 บทที่ 5: Pygame Zero.*?(?=<div style="page-break-after: always;"></div>)'
    text = re.sub(ch5_pattern2, ch5_content + "\n", text, flags=re.DOTALL)

# 5. Remove Chapter 7 entirely
ch7_pattern = r'# 🎮 บทที่ 7: Minecraft Agri-Metaverse \(Bonus\).*?(?=<div style="page-break-after: always;"></div>)'
text = re.sub(ch7_pattern, '', text, flags=re.DOTALL)

# 6. Fix Chapter 6 header in Handbook
ch6_pattern = r'# 🏆 บทที่ 6: Agri-Hackathon Stage\n\*\*ระยะเวลา\*\*: ชั่วโมงที่ 12 \(1 ชั่วโมงสุดท้าย\)'
text = text.replace('# 🏆 บทที่ 6: Agri-Hackathon Stage\n**ระยะเวลา**: ชั่วโมงที่ 12 (1 ชั่วโมงสุดท้าย)', '# 🏆 บทที่ 6: Agri-Hackathon Stage\n**ระยะเวลา**: ชั่วโมงที่ 12 (1 ชั่วโมง)')

with open('workshop_manual/master_handbook_2026.md', 'w', encoding='utf-8') as f:
    f.write(text)

print("Master Handbook updated!")
