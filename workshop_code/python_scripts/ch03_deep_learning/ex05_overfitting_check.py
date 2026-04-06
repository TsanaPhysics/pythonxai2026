# ex05_overfitting_check.py
# ⚙️ ระดับ: Advanced
# 🧬 ภารกิจ: ความเข้าใจ Overfitting (การที่ AI จำข้อสอบมากเกินไป)

train_acc = 99.8 # แม่นยำสูงมากในห้องเรียน
test_acc = 65.2  # แม่นยำต่ำมากเมื่อเจอของจริง

print(f"📉 Train Accuracy: {train_acc}%")
print(f"📉 Test Accuracy: {test_acc}%")

# การวินิจฉัย (Diagnosis)
if train_acc - test_acc > 20: 
    print("⚠️ สถานะ: พบปัญหา Overfitting! แนะนำให้เพิ่ม Dropout หรือหดเลเยอร์ลง")
else:
    print("✅ สถานะ: โมเดลมีคุณสมบัติที่ดี (Good Generalization)")
