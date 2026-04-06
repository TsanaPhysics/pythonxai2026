# ex06_list_data.py
# 🔬 ระดับ: Intermediate
# 📊 ภารกิจ: เก็บสถิติอุณหภูมิรายวันและหาค่าสูงสุด

temp_history = [32.5, 34.1, 38.2, 31.5, 35.0, 36.4, 30.2]

# คำนวณค่าสูงสุดและค่าเฉลี่ย
max_temp = max(temp_history)
avg_temp = sum(temp_history) / len(temp_history)

print(f"🌡️ อุณหภูมิสูงสุดในสัปดาห์: {max_temp}°C")
print(f"📊 อุณหภูมิเฉลี่ย: {avg_temp:.2f}°C")
