# 🧬 บทที่ 3: เส้นประสาทดิจิทัล (Deep Learning 101)
[![Open In Colab](https://colab.research.google.com/assets/colab-badge.svg)](https://colab.research.google.com/github/TsanaPhysics/pythonxai2026/blob/main/workshop_code/notebooks/ch03_deep_learning/chapter3_dl_lab.ipynb)

**ระยะเวลา**: ชั่วโมงที่ 7 - 8 (2 ชั่วโมง)
**หัวใจสำคัญ**: เลียนแบบสมองมนุษย์ด้วย Neuron เพื่อการตัดสินใจที่ซับซ้อน

---

## 🕒 ชั่วโมงที่ 7: เซลล์ประสาทและการเปิดใช้งาน (The Neuron)
จุดเริ่มต้นของความฉลาดในระดับสมองกล

### 🧪 3.1 ReLU Activation: ตรรกะบวกหรือศูนย์
```python
def relu(x): return max(0, x)
print(f"Input: -5 -> {relu(-5)}, Input: 8 -> {relu(8)}")
```

### 🧠 3.2 The Neuron: หน่วยประมวลผลพื้นฐาน
เรียนรู้เรื่อง **Weight (ค่าน้ำหนัก)** และ **Bias (ค่าเบี่ยงเบน)**

---

## 🕒 ชั่วโมงที่ 8: โครงสร้างสมองและการประมวลผล (Sequential)
การต่อเซลล์ประสาทเข้าด้วยกันเป็นโครงข่าย

### 🧬 3.3 Sequential Model: การทำงานเป็นชั้นๆ
จำลอง Hidden Layer และ Output Layer ในการพยากรณ์ข้อมูล

### 📉 3.4 Overfitting Diagnosis: โรค "ความจำดีเกินไป"
การตรวจสอบว่า AI ของเราจำข้อสอบ (Overfitting) หรือเข้าใจบทเรียนจริงๆ

---

## ✅ Checklist ท้ายบท
- [ ] เข้าใจหน้าที่ของปุ่ม ReLU ในการกรองข้อมูล
- [ ] เข้าใจการใช้ Dropout เพื่อป้องกันการจำคำตอบ (Overfitting)
- [ ] สามารถอธิบายโครงสร้างพื้นฐานของ Neural Networks ได้

---

## ❓ Challenge (คำถามท้าทาย)
หาก AI ทายว่าเป็น "โรคใบไหม้" 80% และ "ปกติ" 20% ฟังก์ชันใดทำหน้าที่สรุปผลตัวเลขเป็นเปอร์เซ็นต์? (Softmax หรือ ReLU)
