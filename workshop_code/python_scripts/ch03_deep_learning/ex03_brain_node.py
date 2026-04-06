# ex03_brain_node.py
# ⚙️ ระดับ: Advanced
# 🛠️ ภารกิจ: เข้าใจการทำงานของ Neuron (Weight & Bias)

def neuron(input_val, weight, bias):
    # ผลบวกเชิงเส้น (Linear Combination)
    z = (input_val * weight) + bias
    # การเปิดใช้งาน (Activation)
    a = max(0, z) # ReLU
    return a

# ลองปรับ Weight และ Bias
w = 0.8
b = -2.0
val = 10.0

result = neuron(val, w, b)
print(f"📍 Input: {val} * Weight: {w} + Bias: {b} = {result}")
