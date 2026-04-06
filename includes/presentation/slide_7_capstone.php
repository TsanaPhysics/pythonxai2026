<?php
/**
 * Module 6: Retrieval-Augmented Generation (RAG) & Graduation
 */
return [
    [
        'type' => 'detail',
        'chapter' => 'MODULE 06: CAPSTONE [ALL LEVELS]',
        'title' => 'RAG: AI <br> Co-Researcher',
        'desc' => 'สแกนเอกสารวิจัยการเกษตรนับพันหน้าด้วย RAG เพื่อหาคำตอบที่แม่นยำที่สุด',
        'table' => [
            'header' => ['Phase', 'AI Responsibility', 'Outcome'],
            'rows' => [
                ['Ingestion', 'Vectorize Research PDF', 'Knowledge Base'],
                ['Retrieval', 'Search Context matching', 'Relevant Facts'],
                ['Response', 'Generate using GPT/Gemma', 'Final Answer']
            ]
        ],
        'code' => "retriever = vectordb.as_retriever()\nqa_chain = RetrievalQA.from_chain_type(llm, retriever)\nresult = qa_chain({\"query\": \"อาการขาดโบรอนในทุเรียน\"})",
        'code_label' => 'rag_research.py'
    ],
    [
        'type' => 'graduation',
        'chapter' => 'MISSION SUCCESS',
        'title' => 'GRADUATED',
        'desc' => 'ขอแสดงความยินดีกับ Next-Gen Scientist ทุกท่าน ที่ผ่านการฝึกฝนและพร้อมสำหรับการสร้างสรรค์อนวัตกรรม AI เพื่อโลกใบนี้ครับ!',
        'accent' => 'emerald'
    ]
];
