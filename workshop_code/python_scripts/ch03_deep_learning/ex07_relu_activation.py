# ex07_relu_activation.py
# 🔬 ระดับ: Senior (ม.ปลาย)
# 🧬 ภารกิจ: เข้าใจการทำงานของ ReLU (Rectified Linear Unit)

import matplotlib.pyplot as plt
import numpy as np

# 1. ฟังก์ชัน ReLU: ถ้า x <= 0 คืนค่า 0, ถ้า x > 0 คืนค่า x
def relu(x):
    return np.maximum(0, x)

# 2. ทดลองสุ่มค่า Input มาช่วง -10 ถึง 10
x_values = np.linspace(-10, 10, 100)
y_values = relu(x_values)

print("--- [Deep Learning: ReLU Activation] ---")
print(f"Input: -5 -> Output: {relu(-5)}")
print(f"Input: 8  -> Output: {relu(8)}")

# (หากต้องการใช้บน JupyterLab สามารถพล็อตภาพเพื่อดูสมองกลได้)
# plt.plot(x_values, y_values)
# plt.title("ReLU Activation Function")
# plt.show()
