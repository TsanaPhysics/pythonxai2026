import re

with open('workshop_manual/master_handbook_2026.md', 'r', encoding='utf-8') as f:
    text = f.read()

# Make sure we use the latest 06_agri_hackathon.md in master handbook
with open('workshop_manual/chapters/06_agri_hackathon.md', 'r', encoding='utf-8') as f:
    ch6_content = f.read()
ch6_pattern = r'# 🏆 บทที่ 6: Agri-Hackathon Stage.*?(?=<div style="page-break-after: always;"></div>)'
if "# 🏆 บทที่ 6: Agri-Hackathon Stage" in text:
    text = re.sub(ch6_pattern, ch6_content + "\n", text, flags=re.DOTALL)

with open('workshop_manual/master_handbook_2026.md', 'w', encoding='utf-8') as f:
    f.write(text)

print("Master Handbook chapter 6 updated!")
