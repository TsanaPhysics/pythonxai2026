# ex02_activation_vis.py
# 🔬 ระดับ: Intermediate
import numpy as np
import matplotlib.pyplot as plt

def relu(x): return np.maximum(0, x)
def sigmoid(x): return 1 / (1 + np.exp(-x))

x = np.linspace(-10, 10, 100)
y_relu = relu(x)
y_sig = sigmoid(x)

plt.plot(x, y_relu, label='ReLU', color='orange')
plt.plot(x, y_sig, label='Sigmoid', color='cyan')
plt.title('Activation Functions: Comparing Relay vs Probabilities')
plt.grid(True)
plt.legend()
# plt.show()
