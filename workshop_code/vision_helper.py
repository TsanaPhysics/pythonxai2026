# vision_helper.py
# 🛠️ เครื่องมือช่วยสำหรับการทำ Computer Vision ในเวิร์กชอป 2026
# ออกแบบให้ทำงานได้ทั้งบน JupyterLab และ Local เครื่องตัวเอง

import cv2
import matplotlib.pyplot as plt
import numpy as np

def show_agri_image(image, title="Agri-Vision Analysis"):
    """
    แสดงผลภาพที่รองรับทั้ง RGB และ BGR อัตโนมัติ
    """
    try:
        # ตรวจสอบว่าเป็นสภาวะ JupyterLab หรือไม่
        from google.jupyter.patches import cv2_imshow
        cv2_imshow(image)
    except ImportError:
        # สำหรับ Local (ใช้วิธีเปลี่ยน BGR เป็น RGB เพื่อแสดงด้วย Matplotlib)
        image_rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
        plt.figure(figsize=(8, 6))
        plt.imshow(image_rgb)
        plt.title(title)
        plt.axis('off')
        plt.show()

def get_hsv_mask(image, lower_hsv, upper_hsv):
    """
    สร้าง Mask เฉดสีที่ต้องการ (เหมาะสำหรับตรวจโรคพืช)
    """
    hsv = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)
    mask = cv2.inRange(hsv, np.array(lower_hsv), np.array(upper_hsv))
    result = cv2.bitwise_and(image, image, mask=mask)
    return result, mask

# ตัวอย่างการใช้งาน (สำหรับวิทยากร)
if __name__ == "__main__":
    print("Agri-Vision Helper Initialized.")
