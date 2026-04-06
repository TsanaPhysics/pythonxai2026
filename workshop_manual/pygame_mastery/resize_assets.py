from PIL import Image
import os

def resize_img(path, size):
    img = Image.open(path)
    img = img.resize(size, Image.Resampling.LANCZOS)
    img.save(path)
    print(f'Resized {path} to {size}')

resize_img('images/robot.png', (64, 64))
resize_img('images/seed.png', (40, 40))
