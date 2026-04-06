<?php
/**
 * Workshop Data for Python x AI 2026
 * Centralized content for all 7 modules (0-6)
 */

function get_workshop_data() {
    return [
        "0" => [
            "id" => 0,
            "title" => "JupyterLab for Beginners",
            "subtitle" => "เริ่มต้นการใช้งาน JupyterLab ร่วมกับ AI เพื่อเตรียมพร้อมสู่โลกนวัตกรรม",
            "time" => "Module 0 (1 Hour)",
            "theme" => "orange",
            "image" => "assets/images/module0_dual_platform.png",
            "icon" => "fa-rocket",
            "tabs" => [
                "overview" => [
                    "title" => "Objectives",
                    "icon" => "fa-bullseye",
                    "content" => '
                        <h4 class="text-xl font-bold mb-4 text-white">📍 การเตรียมความพร้อม</h4>
                        <p class="mb-6 text-blue-100 font-light">ยินดีต้อนรับเข้าสู่อนาคต! ในคอร์สนี้เราจะเรียนการ \'สั่งงาน AI\' ให้ช่วยเราสร้างนวัตกรรม โดยใช้เครื่องมือหลักคือ JupyterLab:</p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 bg-white/5 p-4 rounded-xl border border-white/10">
                                <span class="w-2 h-2 rounded-full bg-orange-400 mt-2 shrink-0"></span>
                                <div>
                                    <strong class="text-white block text-sm uppercase">Creative Mind</strong>
                                    <p class="text-xs text-blue-100/60">ฝึกการใช้ Prompt เพื่อขอให้ AI ช่วยอธิบายโค้ดที่ซับซ้อน</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3 bg-white/5 p-4 rounded-xl border border-white/10">
                                <span class="w-2 h-2 rounded-full bg-orange-400 mt-2 shrink-0"></span>
                                <div>
                                    <strong class="text-white block text-sm uppercase">Scientific Logic</strong>
                                    <p class="text-xs text-blue-100/60">ใช้ AI ช่วยในการค้นหาไลบรารีทางวิทยาศาสตร์ที่เหมาะสม</p>
                                </div>
                            </li>
                        </ul>
                    '
                ],
                "workflow" => [
                    "title" => "Workflow",
                    "icon" => "fa-project-diagram",
                    "content" => '
                        <h4 class="text-xl font-bold mb-8 text-white text-center">🗺️ JupyterLab Workflow</h4>
                        <pre class="mermaid bg-black/30 p-6 rounded-2xl border border-orange-500/20">
graph LR
    A[เปิดเว็บ JupyterLab] --> B[สร้าง New Notebook]
    B --> C[เชื่อมต่อ Runtime]
    C --> D[เขียนโค้ดลงใน Cell]
    D --> E[กด Run / Shift+Enter]
    E --> F[เซฟงานลง Google Drive]
    
    style A fill:#fde68a,stroke:#d97706,stroke-width:2px,color:#000
    style C fill:#f97316,stroke:#c2410c,stroke-width:2px,color:#fff
    style E fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style F fill:#34d399,stroke:#059669,stroke-width:2px,color:#000
                        </pre>
                    '
                ],
                "shortcuts" => [
                    "title" => "Hotkeys",
                    "icon" => "fa-keyboard",
                    "content" => '
                        <div class="tech-table-wrapper rounded-2xl border border-white/10 overflow-hidden bg-black/40">
                            <table class="w-full text-left border-collapse">
                                <thead class="bg-white/5 text-orange-400 uppercase text-xs font-bold tracking-widest">
                                    <tr>
                                        <th class="p-4">Action</th>
                                        <th class="p-4">Shortcut</th>
                                        <th class="p-4">Detail</th>
                                    </tr>
                                </thead>
                                <tbody class="text-blue-100 text-sm">
                                    <tr class="border-b border-white/5"><td class="p-4 font-bold">รันโค้ดทันที</td><td class="p-4 text-orange-300">Shift + Enter</td><td class="p-4 italic opacity-60">ประมวลผลเซลล์ปัจจุบัน</td></tr>
                                    <tr class="border-b border-white/5"><td class="p-4 font-bold">เพิ่มช่องโค้ด</td><td class="p-4 text-orange-300">Cmd/Ctrl + M + B</td><td class="p-4 italic opacity-60">สร้างบรรทัดใหม่ด้านล่าง</td></tr>
                                    <tr class="border-b border-white/5"><td class="p-4 font-bold">ลบช่องโค้ด</td><td class="p-4 text-orange-300">Cmd/Ctrl + M + D</td><td class="p-4 italic opacity-60">ลบบรรทัดที่ไม่ใช้</td></tr>
                                </tbody>
                            </table>
                        </div>
                    '
                ]
            ]
        ],
        "1" => [
            "id" => 1,
            "title" => "Python Programming for AI",
            "subtitle" => "ปูพื้นฐานการเขียนโปรแกรม Python ร่วมกับ AI เพื่อการจัดการข้อมูลเกษตรอัจฉริยะ",
            "time" => "Module 1 (2 Hours)",
            "theme" => "orange",
            "image" => "assets/images/python_ai_snake.png",
            "icon" => "fa-python",
            "tabs" => [
                "overview" => [
                    "title" => "Objectives",
                    "icon" => "fa-bullseye",
                    "content" => '
                        <h4 class="text-xl font-bold mb-4 text-white">📍 การเรียนรู้ที่เน้นผลลัพธ์</h4>
                        <div class="space-y-4 text-blue-100 font-light">
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                                <strong class="text-orange-400 block mb-1 uppercase tracking-widest">Junior High</strong>
                                <p class="text-sm">เรียนรู้พื้นฐาน Python ผ่านการ \'คุยกับ AI\' เพื่อให้เขียนโค้ดแสดงผลที่น่าตื่นเต้น</p>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                                <strong class="text-orange-400 block mb-1 uppercase tracking-widest">Senior High</strong>
                                <p class="text-sm">ใช้ AI ช่วยประมวลผลตรรกะที่ซับซ้อนและการวิเคราะห์ข้อมูลสถิติเบื้องต้น</p>
                            </div>
                        </div>
                    '
                ],
                "pipeline" => [
                    "title" => "Data Pipeline",
                    "icon" => "fa-project-diagram",
                    "content" => '
                        <h4 class="text-xl font-bold mb-6 text-white text-center">🗺️ โครงสร้างข้อมูลดิน</h4>
                        <pre class="mermaid bg-black/30 p-6 rounded-2xl border border-orange-500/20">
graph TD
    A[Raw Data CSV] -->|pandas| B(Data Manipulation)
    B -->|Group By| C{Statistical Mean}
    B -->|Condition| D[Alert System]
    C -->|matplotlib| E((Data Visualization))
    E --> F[Machine Learning]
    
    style A fill:#f97316,stroke:#ea580c,stroke-width:2px,color:#fff
    style B fill:#fde68a,stroke:#d97706,stroke-width:2px
    style E fill:#f97316,stroke:#ea580c,stroke-width:2px,color:#fff
                        </pre>
                    '
                ],
                "code" => [
                    "title" => "Python Lab",
                    "icon" => "fa-code",
                    "is_code" => true,
                    "code_lang" => "python",
                    "code_content" => 'import pandas as pd
import matplotlib.pyplot as plt

# โหลดไฟล์ CSV และหาค่ากลางปริมาณแร่ธาตุ
df_soil = pd.read_csv("soil_data.csv")
print(df_soil.groupby("Crop").mean())

# วาดกราฟความสัมพันธ์แร่ธาตุ N และ P
plt.scatter(df_soil["N"], df_soil["P"], color="orange")
plt.show()'
                ]
            ]
        ],
        "2" => [
            "id" => 2,
            "title" => "Machine Learning & xAI",
            "subtitle" => "เรียนรู้การ 'สอนงาน AI' และไขปริศนากล่องดำด้วย Explainable AI (xAI)",
            "time" => "Module 2 (2 Hours)",
            "theme" => "cyan",
            "image" => "assets/images/module2_ml_xai.png",
            "icon" => "fa-brain",
            "tabs" => [
                "workflow" => [
                    "title" => "ML Pipeline",
                    "icon" => "fa-project-diagram",
                    "content" => '
                        <h4 class="text-xl font-bold mb-6 text-white text-center">🗺️ Machine Learning Workflow</h4>
                        <pre class="mermaid bg-black/30 p-6 rounded-2xl border border-cyan-500/20">
graph TD
    A[Dataset] --> B{Data Cleaning}
    B --> C{Train/Test Split}
    C -->|80%| D[Model Training]
    C -->|20%| E[Validation]
    D -.->|Explainable AI| G[Feature Importance]
    
    style A fill:#06b6d4,stroke:#0891b2,stroke-width:2px,color:#fff
    style D fill:#1f2937,stroke:#111827,stroke-width:2px,color:#fff
    style G fill:#22c55e,stroke:#16a34a,stroke-width:2px,color:#fff
                        </pre>
                    '
                ],
                "xai" => [
                    "title" => "XAI Analysis",
                    "icon" => "fa-search-plus",
                    "content" => '
                        <div class="bg-cyan-900/20 border border-cyan-500/30 p-6 rounded-2xl mb-6">
                            <h4 class="text-lg font-bold text-white mb-2">💡 Explainable AI (xAI)</h4>
                            <p class="text-sm text-blue-100 opacity-80 leading-relaxed">เพราะการเกษตรต้องการความโปร่งใส! เราใช้ <code>feature_importances_</code> เพื่อดูว่าแร่ธาตุตัวไหนที่ AI ใช้เป็นช้อยส์ชี้ขาดมากที่สุด</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10 text-center">
                                <div class="text-2xl font-black text-cyan-400 mb-1">44%</div>
                                <div class="text-[10px] uppercase font-bold text-white/40">Potassium (K)</div>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10 text-center">
                                <div class="text-2xl font-black text-orange-400 mb-1">22%</div>
                                <div class="text-[10px] uppercase font-bold text-white/40">Nitrogen (N)</div>
                            </div>
                        </div>
                    '
                ],
                "code" => [
                    "title" => "ML Lab",
                    "icon" => "fa-code",
                    "is_code" => true,
                    "code_lang" => "python",
                    "code_content" => 'from sklearn.ensemble import RandomForestClassifier

# 1. สร้างโมเดล (ป่าสุ่ม 100 ต้น)
model = RandomForestClassifier(n_estimators=100)
model.fit(X_train, y_train)

# 2. ทำนายผลและดูความแม่นยำ
predictions = model.predict(X_test)

# 3. สกัดเหตุผล (XAI)
importance = model.feature_importances_
print("Importance Weights:", importance)'
                ]
            ]
        ],
        "3" => [
            "id" => 3,
            "title" => "Neural Network & Deep Learning",
            "subtitle" => "เลียนแบบสมองมนุษย์ผ่านเซลล์ประสาทเทียมเพื่อการจำแนกโรคพืชที่ซับซ้อน",
            "time" => "Module 3 (2 Hours)",
            "theme" => "cyan",
            "image" => "assets/images/module3_deep_learning.png",
            "icon" => "fa-network-wired",
            "tabs" => [
                "topology" => [
                    "title" => "Architecture",
                    "icon" => "fa-project-diagram",
                    "content" => '
                        <h4 class="text-xl font-bold mb-6 text-white text-center">🗺️ Neural Network Topology</h4>
                        <pre class="mermaid bg-black/30 p-6 rounded-2xl border border-cyan-500/20">
graph LR
    I1((Input)) --> H1((ReLU))
    I2((Input)) --> H1
    H1 --> D[Dropout 20%]
    D --> O1((Softmax))
    
    style I1 fill:#fde68a,stroke:#d97706,stroke-width:2px
    style H1 fill:#06b6d4,stroke:#0891b2,stroke-width:2px,color:#fff
    style D fill:#9ca3af,stroke:#4b5563,stroke-dasharray: 5 5
    style O1 fill:#34d399,stroke:#059669,stroke-width:2px
                        </pre>
                    '
                ],
                "code" => [
                    "title" => "Keras Lab",
                    "icon" => "fa-cube",
                    "is_code" => true,
                    "code_lang" => "python",
                    "code_content" => 'from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, Dropout

model = Sequential()
# Input + Hidden Layer
model.add(Dense(64, input_dim=10, activation="relu"))
# Dropout to prevent Overfitting
model.add(Dropout(0.2))
# Output Layer (3 Classes)
model.add(Dense(3, activation="softmax"))

model.compile(optimizer="adam", loss="categorical_crossentropy", metrics=["accuracy"])'
                ]
            ]
        ],
        "4" => [
            "id" => 4,
            "title" => "Deep Learning & AI Vision",
            "subtitle" => "ก้าวข้ามขีดจำกัดด้วย AI Vision และการวิเคราะห์ภาพถ่ายจากโดรน",
            "time" => "Module 4 (2 Hours)",
            "theme" => "purple",
            "image" => "assets/images/bg_digital_tree.png",
            "icon" => "fa-eye",
            "tabs" => [
                "vision_lab" => [
                    "title" => "Vision Lab",
                    "icon" => "fa-microchip",
                    "content" => '
                        <div class="bg-purple-900/20 border border-purple-500/30 p-8 rounded-3xl">
                            <h4 class="text-xl font-bold text-white mb-4">AI Vision Recognition</h4>
                            <p class="text-blue-100 font-light leading-relaxed mb-6">การสอนให้น้องหุ่นยนต์รู้จัก \'ใบที่เป็นโรค\' และ \'ใบที่ปกติ\' โดยใช้หลักการของ Convolutional Neural Networks (CNN)</p>
                            <div class="aspect-video bg-black/40 rounded-2xl border border-white/10 flex items-center justify-center">
                                <span class="text-purple-500 text-6xl opacity-30 animate-pulse">
                                    <i class="fas fa-camera"></i>
                                </span>
                            </div>
                        </div>
                    '
                ]
            ]
        ],
        "5" => [
            "id" => 5,
            "title" => "Pygame Zero Simulation",
            "subtitle" => "การจำลองโลกเกษตรอัจฉริยะผ่านเกม 2D และการควบคุมหุ่นยนต์ AI",
            "time" => "Module 5 (1 Hour)",
            "theme" => "orange",
            "image" => "assets/images/bg_modern_ai_office.png",
            "icon" => "fa-gamepad",
            "tabs" => [
                "mechanics" => [
                    "title" => "Mechanics",
                    "icon" => "fa-cog",
                    "content" => '
                        <h4 class="text-xl font-bold mb-4 text-white">🕹️ Game Loop Logic</h4>
                        <p class="mb-6 text-blue-100 font-light">การเขียนโปรแกรมแบบ Event-driven ที่ตอบสนองต่อการรับค่าจากคีย์บอร์ดและการตรวจจับการชน (Collision):</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                                <strong class="text-orange-400 block mb-1">Update Loop</strong>
                                <p class="text-xs text-blue-100/60">ตรวจสอบสถานะการขยับและตัวละครทุกวินาที</p>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                                <strong class="text-cyan-400 block mb-1">Draw Loop</strong>
                                <p class="text-xs text-blue-100/60">แสดงผลภาพกราฟิกลงบนหน้าจออย่างรื่นไหล</p>
                            </div>
                        </div>
                    '
                ],
                "code" => [
                    "title" => "PyZero Lab",
                    "icon" => "fa-code",
                    "is_code" => true,
                    "code_lang" => "python",
                    "code_content" => 'import pgzrun

WIDTH = 800
HEIGHT = 600
alien = Actor("alien")

def draw():
    screen.clear()
    alien.draw()

def update():
    if keyboard.left: alien.x -= 5
    elif keyboard.right: alien.x += 5

pgzrun.go()'
                ]
            ]
        ],
        "6" => [
            "id" => 6,
            "title" => "Agri-Hackathon Finale",
            "subtitle" => "ภารกิจสุดท้าย: บูรณาการความรู้ทั้งหมดเพื่อแก้โจทย์ปัญหาคนเกษตรระดับ Startup",
            "time" => "Module 6 (1 Hour)",
            "theme" => "purple",
            "image" => "assets/images/module6_capstone.png",
            "icon" => "fa-trophy",
            "tabs" => [
                "pitching" => [
                    "title" => "Project Tasks",
                    "icon" => "fa-list-check",
                    "content" => '
                        <div class="space-y-4">
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                                <span class="level-badge level-junior">Stage 1</span>
                                <div class="text-white font-bold text-sm mt-2">Problem Statement</div>
                                <div class="text-[10px] text-gray-400">ระบุปัญหาการเกษตรที่ต้องการแก้ไข (The Pain)</div>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                                <span class="level-badge level-senior">Stage 2</span>
                                <div class="text-white font-bold text-sm mt-2">AI Implementation</div>
                                <div class="text-[10px] text-gray-400">เลือกเทคโนโลยี AI (Module 2-5) มาเป็นพระเอก</div>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                                <span class="level-badge level-research">Stage 3</span>
                                <div class="text-white font-bold text-sm mt-2">3-Minute Pitch</div>
                                <div class="text-[10px] text-gray-400">นำเสนอผลงานให้น่าสนใจและจึ้งที่สุด!</div>
                            </div>
                        </div>
                    '
                ]
            ]
        ]
    ];
}
