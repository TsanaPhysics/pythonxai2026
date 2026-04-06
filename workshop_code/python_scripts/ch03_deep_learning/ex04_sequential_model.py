# ex04_sequential_model.py
# ⚙️ ระดับ: Advanced
# 🧬 ภารกิจ: ลอจิกของ Sequential Model (Layer by Layer)

def layer(inputs, weights, biases):
    # ผลลัพธ์ของเลเยอร์ (Vectorization Mock)
    return [max(0, i * w + b) for i, w, b in zip(inputs, weights, biases)]

# Input -> Hidden Layer -> Output Layer
input_data = [1.0, 0.5, -1.2]
hidden_w = [0.8, 0.2, 0.1]
hidden_b = [0, -0.5, 0.2]

# 1. รัน Hidden Layer
h1 = layer(input_data, hidden_w, hidden_b)
print(f"🧠 Hidden Layer Results: {h1}")

# 2. รัน Output
output_w = [0.9, 0.9, 0.9]
output_b = [0, 0, 0]
final = layer(h1, output_w, output_b)
print(f"🏁 Final Prediction: {sum(final)}")
