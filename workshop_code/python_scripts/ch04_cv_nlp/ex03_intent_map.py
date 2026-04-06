intents = {"รดน้ำพืชหน่อย": "WATERING_ON", "อากาศเป็นยังไง": "WEATHER_REPORT"}
user_voice = "รดน้ำพืชหน่อย"
print(f"👂 รับเสียง: {user_voice} -> 🤖 สั่งงาน: {intents.get(user_voice)}")
