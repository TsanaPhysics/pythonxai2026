# ex05_bot_liaison.py
# ⚙️ ระดับ: Advanced
# 🎙️ ภารกิจ: ระบบแชทพูดคุย (Basic Chatbot Logic)

responses = {
    "สวัสดี": "สวัสดีครับ! ผม Agri-Bot มีอะไรให้ช่วยไหม?",
    "สบายดีไหม": "ผมเป็น AI ครับ สบายดีและพร้อมรดน้ำต้นไม้เสมอ!",
    "ขอบคุณ": "ยินดีเสมอครับ ขอให้ได้ผลผลิตที่ดีนะครับ"
}

def get_response(text):
    for key in responses:
        if key in text:
            return responses[key]
    return "ไม่เข้าใจครับ ผมกำลังเรียนรู้ประโยคใหม่ๆ อยู่"

# จำลองการสนทนา
print(f"🤖 Bot: {get_response('สวัสดี')}")
print(f"🤖 Bot: {get_response('ขอบคุณ')}")
