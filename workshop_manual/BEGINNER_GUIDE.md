# 📚 คู่มือเริ่มต้นสำหรับนักเรียนไม่มีพื้นฐาน (Python x AI 2026)

---

## 🎯 วัตถุประสงค์ของคู่มือ
- ให้ผู้เรียนที่ไม่มีประสบการณ์ด้านโปรแกรมมิ่งหรือ AI สามารถ **เริ่มต้นเรียนรู้** และ **ทำตามขั้นตอน** ของคอร์ส 12‑ชั่วโมงได้อย่างอิสระ
- แสดงวิธี **ติดตั้งสภาพแวดล้อม**, **รันโน๊ตบุ๊ค**, **ทดลองเกมจำลอง** และ **ทำโปรเจกต์ Hackathon** อย่างครบถ้วน
- มี **ภาพประกอบ**, **คำอธิบายแบบง่าย**, และ **คำแนะนำแก้ปัญหา** เพื่อให้ผู้เรียนไม่หลงทาง

---

## 🛠️ สิ่งที่ต้องเตรียมล่วงหน้า
| สิ่งที่ต้องมี | รายละเอียด | วิธีติดตั้ง |
|---|---|---|
| **Python 3.11+** | เวอร์ชันล่าสุดของ Python (แนะนำ 3.11) | ดาวน์โหลดจาก https://www.python.org/downloads/ |
| **Git** | สำหรับโคลนโค้ดจาก GitHub | `brew install git` (mac) หรือ https://git-scm.com/downloads |
| **Virtual Environment** | แยกการติดตั้งแพคเกจ | ใช้ `python3 -m venv .venv` |
| **pip** | ตัวจัดการแพคเกจ Python | มาพร้อม Python, อัพเดตด้วย `pip install --upgrade pip` |
| **JupyterLab** | รันโน๊ตบุ๊ค | `pip install jupyterlab` |
| **pgzero** | สร้างเกม 2‑D ด้วย Python | `pip install pgzero` |
| **OpenCV** | ใช้ในบท CV/NLP | `pip install opencv-python` |
| **scikit‑learn, pandas, matplotlib** | Machine Learning & Visualization | `pip install scikit-learn pandas matplotlib` |

> **หมายเหตุ:** หลังจากทำตามขั้นตอนด้านล่างแล้ว `pip install -r requirements.txt` จะติดตั้งทั้งหมดให้โดยอัตโนมัติ (ไฟล์ `requirements.txt` อยู่ในโฟลเดอร์รากของโปรเจกต์)

---

## 🚀 ขั้นตอนเริ่มต้น (One‑liner)
```bash
# 1️⃣ คัดลอก repo
git clone https://github.com/your‑username/pythonxai2026.git && cd pythonxai2026

# 2️⃣ สร้างและเปิด virtualenv
python3 -m venv .venv && source .venv/bin/activate   # macOS / Linux
# .venv\Scripts\activate   # Windows

# 3️⃣ ติดตั้ง dependencies
pip install -r requirements.txt

# 4️⃣ เริ่ม JupyterLab (โน๊ตบุ๊ค)
jupyter lab
```
เปิดเบราว์เซอร์แล้วเลือก **notebook** ที่ต้องการตามหัวข้อด้านล่าง

---

## 📖 โครงสร้างคอร์ส (12 ชั่วโมง)
| วันที่ | ชั่วโมง | หัวข้อ | สิ่งที่ทำ (Copy‑Paste Lab) |
|---|---|---|---|
| **Day 1** | 1‑3 | **บทที่ 1 – AI Co‑Pilot Mastery** | ตรวจสอบ JupyterLab, ทดลอง Minecraft coordinate, ใช้ AI Co‑Pilot เพื่อแก้ Error |
|  | 4‑6 | **บทที่ 2 – พลังแห่งการเรียนรู้ (ML Intelligence)** | โหลดข้อมูล CSV, ทำ Data Cleaning, ฝึก Linear Regression & Random Forest |
| **Day 2** | 7‑8 | **บทที่ 3 – สมองดิจิทัล (Deep Learning)** | สร้าง Neural Network เบื้องต้น, ฝึกโมเดลจำแนกโรคพืช |
|  | 9‑10 | **บทที่ 4 – ดวงตาอัจฉริยะและภาษา (CV & NLP)** | ใช้ Haar Cascade ตรวจจับใบพืช, ทำ Intent‑Mapping NLP |
|  | 11 | **บทที่ 5 – Digital Twin Simulation** | รัน Pygame Zero Dashboard, สร้างหุ่นยนต์เก็บเกี่ยว (harvester) |
|  | 12 | **บทที่ 6 – Agri‑Hackathon Stage** | รวมทุกโมดูลเป็น Prototype, เตรียม Pitch 3 นาที |

---

## 📓 วิธีใช้โน๊ตบุ๊ค (JupyterLab)
1. เปิด JupyterLab ตามขั้นตอนข้างต้น (`jupyter lab`).
2. ไปที่โฟลเดอร์ `workshop_code/notebooks/` แล้วเลือกไฟล์ตามหัวข้อ:
   - `ch01_foundations/chapter1_lab.ipynb`
   - `ch02_ml_intelligence/chapter2_ml_lab.ipynb`
   - `ch03_deep_learning/chapter3_dl_lab.ipynb`
   - `ch04_cv_nlp/chapter4_cv_nlp_lab.ipynb`
3. **Run** ทุก cell ทีละบรรทัด (Shift + Enter).  หากเจอข้อผิดพลาด ให้คัดลอกข้อความ error แล้ววางในช่อง **AI Co‑Pilot** (ส่วนท้ายของบทที่ 1) เพื่อรับคำอธิบายและวิธีแก้.
4. ทุกโน๊ตบุ๊คมี **Checklist** ที่ท้ายหน้า – ทำเครื่องหมาย ✅ เมื่อสำเร็จ.

---

## 🎮 การรันเกมจำลอง (Pygame Zero – Chapter 5)
ไฟล์สคริปต์หลักอยู่ที่:
```
workshop_code/python_scripts/ch05_pygame_zero/simulation.py
```
รันด้วยคำสั่ง:
```bash
pgzrun workshop_code/python_scripts/ch05_pygame_zero/simulation.py
```
- เกมจะแสดงหน้าจอสีเขียว (ฟาร์ม) พร้อม **harvester** (รูปรถเก็บเกี่ยว) ที่เราสร้างไว้ใน `assets/images/harvester.png`.
- กด **Space** เพื่อให้ harvester เคลื่อนที่ไปข้างหน้า (จำลองการเก็บเกี่ยวอัตโนมัติ).
- หากต้องการเปลี่ยนความเร็วหรือเพิ่มฟีเจอร์ ให้แก้ไฟล์ `simulation.py` ตามคอมเมนต์ในโค้ด.

---

## 🧪 ทำ Hackathon Prototype (Chapter 6)
ไฟล์ตัวอย่างอยู่ที่:
```
workshop_code/python_scripts/ch06_agri_hackathon/prototype.py
```
สคริปต์นี้รวม:
- การอ่าน sensor data (จาก `datasets/crop_data_v2.csv`)
- การใช้โมเดล ML ที่ฝึกในบท 2
- การตัดสินใจอัตโนมัติ (logic) เพื่อสั่ง **harvester** หรือ **cooling system**

รันด้วย:
```bash
python workshop_code/python_scripts/ch06_agri_hackathon/prototype.py
```
ผลลัพธ์จะพิมพ์ข้อความเช่น `ACTIVATE_COOLING` หรือ `DEPLOY_HARVESTER` ซึ่งเป็นสัญญาณให้ผู้เรียนอธิบายกระบวนการใน Pitch.

---

## 🛎️ คำแนะนำแก้ปัญหาเบื้องต้น
| ปัญหา | สาเหตุที่พบบ่อย | วิธีแก้ |
|---|---|---|
| **ModuleNotFoundError** | แพคเกจยังไม่ได้ติดตั้ง | ตรวจสอบว่า virtualenv ถูกเปิด (`source .venv/bin/activate`) แล้วรัน `pip install -r requirements.txt` |
| **File not found: harvester.png** | ไฟล์ภาพหาย | ไฟล์ `harvester.png` อยู่ใน `workshop_manual/assets/images/` – อย่าลบหรือย้ายตำแหน่ง |
| **OpenCV error loading haarcascade** | ไฟล์ XML ไม่ตรงรูปแบบ | เราใส่ placeholder `models/haarcascade_agri.xml` ไว้แล้ว – หากต้องการโมเดลจริงให้แทนที่ไฟล์นี้ด้วยไฟล์จาก OpenCV repo |
| **Kernel dies in Jupyter** | หน่วยความจำไม่พอ (โดยเฉพาะ Deep Learning) | ปิด notebook ที่ไม่ใช้, หรือรันบนเครื่องที่มี RAM ≥ 8 GB |
| **pgzrun command not found** | pgzero ยังไม่ได้ติดตั้ง | `pip install pgzero` แล้วลองใหม่ |

---

## 📚 คำศัพท์สำคัญ (Glossary)
- **Co‑Pilot** – AI ที่ช่วยแก้ error และให้คำแนะนำแบบโค้ด (ChatGPT‑style) ที่ฝังในบทแรก
- **S.C.I.E.N.T.I.S.T.** – สูตร Prompt 9 ตัวอักษรที่ใช้สื่อสารกับ AI อย่างเป็นระบบ
- **Haar Cascade** – โมเดลตรวจจับวัตถุแบบคลาสสิกใน OpenCV
- **pgzero** – ไลบรารี Python สำหรับทำเกม 2‑D อย่างง่าย (เหมาะกับผู้เริ่มต้น)
- **Hackathon** – การรวมความรู้จากทุกบทมาสร้าง Prototype สั้น ๆ ภายใน 1‑ชั่วโมง

---

## 🎉 สรุป
เมื่อทำตามขั้นตอนด้านบนครบถ้วน นักเรียนที่ไม่มีพื้นฐานเลยก็จะสามารถ:
1. ตั้งค่าสภาพแวดล้อม Python อย่างถูกต้อง
2. รันและทำความเข้าใจโน๊ตบุ๊คแต่ละบท
3. ทดลองเกมจำลองและเห็นผลของ AI ในการควบคุม harvester
4. สร้าง Prototype ที่พร้อม Pitch ใน Hackathon

**ขอให้สนุกกับการเรียนรู้ AI x Python 2026!** 🚀
