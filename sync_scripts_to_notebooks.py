import json
import os
import glob

def sync_chapter(ch_num, ch_name):
    nb_path = f'workshop_code/notebooks/{ch_name}/{ch_name}_master.ipynb'
    scripts_dir = f'workshop_code/python_scripts/{ch_name}/'
    
    if not os.path.exists(nb_path):
        nb_data = {'cells': [], 'metadata': {}, 'nbformat': 4, 'nbformat_minor': 5}
    else:
        with open(nb_path, 'r', encoding='utf-8') as f:
            nb_data = json.load(f)
    
    scripts = sorted(glob.glob(os.path.join(scripts_dir, 'ex*.py')))
    
    for script_path in scripts:
        filename = os.path.basename(script_path)
        with open(script_path, 'r', encoding='utf-8') as f:
            code_lines = f.readlines()
        
        if 'ch05' in ch_name:
            code_content = [f'%%writefile {filename}
'] + code_lines
        else:
            code_content = code_lines
        
        nb_data['cells'].append({
            'cell_type': 'markdown',
            'metadata': {},
            'source': [f'## 🧪 Exercise: {filename}
', '---']
        })
        nb_data['cells'].append({
            'cell_type': 'code',
            'execution_count': None,
            'metadata': {},
            'outputs': [],
            'source': code_content
        })
        print(f'Synced {filename} to {nb_path}')
            
    with open(nb_path, 'w', encoding='utf-8') as f:
        json.dump(nb_data, f, indent=1, ensure_ascii=False)

chapters = [
    ('01', 'ch01_foundations'),
    ('02', 'ch02_ml_intelligence'),
    ('03', 'ch03_deep_learning'),
    ('04', 'ch04_cv_nlp'),
    ('05', 'ch05_pygame_zero')
]

for num, name in chapters:
    sync_chapter(num, name)
