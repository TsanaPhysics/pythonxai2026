# ex03_input_bot.py
# 🌱 ระดับ: Beginner
name = input("สวัสดี! คุณชื่ออะไร? ")
print(f"👋 ยินดีต้อนรับคุณ {name} เข้าสู่แล็บ AI!")

age = int(input("คุณอายุเท่าไหร่? "))
if age < 15:
    print("คุณคือเยาวชนรุ่นใหม่ (Junior Explorer) 🌱")
else:
    print("คุณคือหัวหอกนวัตกรรม (Senior Innovator) 🚀")
