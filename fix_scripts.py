# Fix workshop_script_h1_h2.md to match Hour 1-3: Module 1
h1_h2_content = """# Workshop Script: Day 1 Kickoff (Module 1: Foundations)
**Duration**: Hour 1-3 (180 Minutes)
**Tone**: High-Energy, Playful, Encouraging, "Next-Gen Scientist" Style.

---

## 🕒 09:00 - 10:00: Hour 1: ก้าวแรกสู่ Cloud Lab (Module 1)
**Slide 1: Welcome to the Future**

> **Instructor**: "อรุณสวัสดิ์ครับ Next-Gen Scientists ทุกคน! ยินดีต้อนรับเข้าสู่วันที่ 1 ของการเปลี่ยนโลกด้วย AI ครับ! วันนี้เราไม่ได้มานั่งเรียนทฤษฎีจดเลคเชอร์นะครับ แต่เรามา 'Co-Create' หรือสร้างนวัตกรรมร่วมขบวนไปกับ AI สู่การเป็น AI-Native Scientist!"

> **Slide 2: Lab Setup (JupyterLab)**

> **Instructor**: "นักวิทยาศาสตร์ยุคใหม่ไม่ใช้คอมพิวเตอร์แค่เครื่องเดียว แต่เราใช้ 'The Cloud' ครับ! วันนี้เราจะใช้ **JupyterLab** ซึ่งเป็นห้องแล็บออนไลน์! หากโค้ดพังไม่ต้องตกใจครับ เราจะใช้ 'AI Co-Pilot' ช่วย Debug กันตลอดทาง!"

---

## 🕒 10:00 - 11:00: Hour 2: ศิลปะการสั่งงาน AI (S.C.I.E.N.T.I.S.T.)
**Slide 4: Thinking Like an AI**

> **Instructor**: "มาถึงชั่วโมงที่ 2 ครับ... AI จะทำงานได้ดีก็ต่อเมื่อเราสั่งการอย่างถูกต้อง! วันนี้เราจะใช้สูตร S.C.I.E.N.T.I.S.T. ในการเขียน Prompt เพื่อให้ AI วางตรรกะและเขียน Python ให้เราครับ!"

> **Slide 5: Junior/Senior Mission (Greeting & Logic)**

> **Instructor**: "เรามาสร้าง 'Greeting Bot' ที่รู้จักชื่อเรา และระบบจำลองหุ่นยนต์ที่ตรวจสอบอุณหภูมิฟาร์มอัจฉริยะด้วย if-else ครับ!"

---

## 🕒 11:00 - 12:00: Hour 3: Data Filtering
**Slide 6: Loops and Lists**

> **Instructor**: "ในชั่วโมงที่ 3 เราจะมาใช้ Data Filtering ด้วย for loop คัดกรองข้อมูลเซนเซอร์ในฟาร์มกันครับ สังเกตดูว่าการให้เงื่อนไขกับข้อมูลทีละอันนั้นง่ายมากถ้ารู้จักตรรกะคอมพิวเตอร์!"

---

## 💡 Pro-Tip for the Instructor:
- **Gen Z Slang**: ใช้คำว่า "จึ้ง", "จึ่งมาก", "บ้ง" (ถ้าโค้ดพัง), หรือ "ตัวแม่/ตัวพ่อ" เพื่อสร้างความเป็นกันเอง
- **AI Co-Pilot**: ให้เด็กประยุกต์ใช้ AI ในการสแกนและแก้ error อย่างเป็นธรรมชาติ
- **Reward**: ให้สติกเกอร์หรือ Point พิเศษสำหรับคนที่ลุย Lab ผ่าน
"""

with open('script_present/workshop_script_h1_h2.md', 'w', encoding='utf-8') as f:
    f.write(h1_h2_content)

# Fix workshop_script_h3_h6.md to match Hour 4-6: Module 2
h3_h6_content = """# Workshop Script: Day 1 Afternoon (Module 2: ML & xAI)
**Duration**: Hour 4-6 (180 Minutes)
**Tone**: Deep-Dive, Technical but Accessible, "Co-Pilot" Vibe.

---

## 🕒 13:00 - 14:00: Hour 4: The Fortune Teller (Machine Learning)
**Slide: Predictive Yield Intelligence**

> **Instructor**: "ยินดีต้อนรับกลับมาครับ Next-Gen Scientists! ช่วงเช้าเราเรียนรู้ Logic ควบคุมคอมพิวเตอร์ไปแล้ว... ช่วงบ่ายนี้เราจะเปลี่ยนจากการสั่งเป็นคำๆ มาให้ AI 'เดาอนาคต' ครับ เรียกว่า Machine Learning นั่นเอง!"

> **Action**: เปิดสไลด์เรื่องการทำความสะอาดข้อมูล (Data Cleaning).

> **Instructor**: "เราต้องซ่อมแซมข้อมูลความชื้นที่แหว่งหายไปด้วย Pandas เพื่อสร้างรากฐานที่แข็งแกร่งให้โมเดลของเราครับ!"

---

## 🕒 14:00 - 15:00: Hour 5: AI Training (Random Forest)
**Slide: Random Forest Intelligence**

> **Instructor**: "ในชั่วโมงที่ 5 เราจะฝึกหัดนักสืบ AI ของเราด้วย Random Forest Model! ใครเคยสงสัยไหมครับว่า AI เดาผลลัพธ์ได้อย่างไร? โมเดลเหล่านี้เปรียบเหมือนต้นไม้หลายร้อยต้นที่ร่วมโหวตคำตอบที่ดีที่สุด!"

> **Action**: พาเด็กๆ สร้างและรัน Random Forest Module.

---

## 🕒 15:00 - 16:00: Hour 6: AI Explainability (xAI)
**Slide: xAI - Why AI Did This?**

> **Instructor**: "ชั่วโมงสุดท้ายของวันนี้! ไม่ใช่แค่ให้ AI เดาแม่น... แต่ 'ทำไมมันถึงทายแบบนั้น?' เราจะใช้เทคนิค eXplainable AI (xAI) เพื่อให้มันบอกเหตุผล ว่าทำไมรวงข้าวถึงผลผลิตตก... อ้าว! เพราะความชื้นมันเยอะนี่เอง! เท่านี้เราก็อธิบายโลกเกษตรได้เหมือนนักวิทย์รุ่นเก๋าแล้วครับ!"

---

## 💡 Pro-Tip for the Instructor:
- **Interactive Check**: ทุกๆ 15 นาที ให้เด็กๆ ลองแก้ไขข้อมูลตัวเลขเพื่อดูว่า AI จะทายผลลัพธ์ออกมาแตกต่างกันไหม
- **Feature Importance**: เน้นสอนเด็กๆ ว่า Data ที่มีคุณภาพ (Quality Data) จะทำให้ผลพยากรณ์แม่นยำที่สุด
"""

with open('script_present/workshop_script_h3_h6.md', 'w', encoding='utf-8') as f:
    f.write(h3_h6_content)

print("Synchronized script files successfully")
