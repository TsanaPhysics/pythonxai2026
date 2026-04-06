# ex04_sentiment_basic.py
# 🔬 ระดับ: Intermediate
# 🧩 ภารกิจ: วิเคราะห์อารมณ์ของผู้ใช้งาน (Sentiment Score)

good_words = ["ดี", "ชอบ", "สุดยอด", "ขอบคุณ"]
bad_words = ["พัง", "ไม่ดี", "แย่", "หยุด"]

user_text = "ขอบคุณมากครับ ระบบทำงานได้ดีมาก"
score = 0

for word in user_text.split():
    if word in good_words: score += 1
    elif word in bad_words: score -= 1

if score > 0:
    print("😊 AI สัมผัสถึง: อารมณ์เชิงบวก (Positive)")
elif score < 0:
    print("😟 AI สัมผัสถึง: อารมณ์เชิงลบ (Negative)")
else:
    print("😐 AI สัมผัสถึง: กลางๆ (Neutral)")
