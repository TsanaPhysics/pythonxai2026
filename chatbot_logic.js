/* 🤖 Agri-Bot 01: Chanthaburi Scientist Edition */

const responses = {
    "สวัสดี": "สวัสดีครับฮิ! ผม Agri-Bot ยินดีที่ได้รู้จักครับ มีอะไรให้ผมช่วยไหมครับฮิ? 🌾",
    "hello": "Hi there ฮิ! I'm Agri-Bot. How can I help you with your Python xAI career today?",
    "ติดตั้ง": "การติดตั้งสภาพแวดล้อม แนะนำให้ดูที่เมนู 'เริ่มต้นเรียนรู้' นะครับฮิ จะมีขั้นตอนการลง Python และ VS Code อย่างละเอียดครับ 💻",
    "install": "Check the 'Beginner Guide' menu for step-by-step installation instructions ฮิ!",
    "บทที่ 1": "บทที่ 1 จะสอนเรื่อง AI Co-Pilot และการใช้เครื่องมือพื้นฐานครับฮิ ลองคลิกที่ 'บทเรียน' แล้วเลือกบทที่ 1 ได้เลย!",
    "error": "ถ้าเจอ Error ลองคัดลอกข้อความนั้นไปถาม AI Co-Pilot ในโน๊ตบุ๊คบทที่ 1 ดูนะครับฮิ หรือจะถามผมก็ได้!",
    "ผู้สอน": "วิทยากรในคอร์สนี้คือผู้เชี่ยวชาญด้าน Smart Farming และ AI ครับฮิ ติดต่อสอบถามเพิ่มเติมได้ที่กลุ่ม LINE นะครับ",
    "line": "คุณสามารถสแกน QR Code สีเขียวที่ลอยอยู่ด้านขวาบนเพื่อเข้ากลุ่ม LINE ของเราได้เลยครับฮิ! 📱",
    "ขอบคุณ": "ยินดีเสมอครับฮิ! ขอให้สนุกกับการเรียนรู้ AI นะครับ 🚀",
    "ช่วยด้วย": "ใจเย็นๆ นะครับฮิ ลองเริ่มจากอ่าน 'คู่มือเริ่มต้น' หรือบอกปัญหาที่เจอให้ชัดเจนกว่านี้หน่อยครับ"
};

const defaultResponse = "ขออภัยครับฮิ ผมยังไม่เข้าใจคำถามนี้ ลองถามเกี่ยวกับ 'ติดตั้ง', 'บทเรียน', หรือ 'LINE' ดูนะครับ หรือติดต่อพี่เลี้ยงในกลุ่มได้เลยครับฮิ!";

function toggleChat() {
    const chatBox = document.getElementById('chatBox');
    if (chatBox.style.display === 'flex') {
        chatBox.style.display = 'none';
    } else {
        chatBox.style.display = 'flex';
        if (document.getElementById('chatMessages').children.length === 0) {
            setTimeout(() => {
                const welcome = "สวัสดีครับฮิ! ผมชื่อ **Agri-Bot 01** เป็นผู้ช่วยประจำเวิร์กชอปนี้ มีคำถามอะไรถามผมได้เลยนะครับฮิ! 🤖";
                addMessage(welcome, 'bot');
                speak(welcome.replace(/\*\*/g, ''));
            }, 500);
        }
    }
}

function speak(text) {
    if ('speechSynthesis' in window) {
        // Cancel any ongoing speech
        window.speechSynthesis.cancel();
        
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'th-TH';
        utterance.rate = 1.0;
        utterance.pitch = 1.2; // Slightly higher pitch for a cute robot feel
        
        // Find a Thai voice if available
        const voices = window.speechSynthesis.getVoices();
        const thaiVoice = voices.find(v => v.lang === 'th-TH');
        if (thaiVoice) utterance.voice = thaiVoice;
        
        window.speechSynthesis.speak(utterance);
    }
}

function sendMessage() {
    const input = document.getElementById('chatInput');
    const message = input.value.trim();
    if (!message) return;

    addMessage(message, 'user');
    input.value = '';

    const typing = document.getElementById('typingIndicator');
    typing.style.display = 'block';
    typing.innerText = "🤖 Agri-Bot กำลังวิเคราะห์ข้อมูล... ฮิ";

    const chatMessages = document.getElementById('chatMessages');
    chatMessages.scrollTop = chatMessages.scrollHeight;

    setTimeout(() => {
        typing.style.display = 'none';
        const botResponse = findResponse(message);
        addMessage(botResponse, 'bot');
        speak(botResponse.replace(/\*\*/g, ''));
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 1200);
}

function findResponse(text) {
    text = text.toLowerCase();
    for (let key in responses) {
        if (text.includes(key.toLowerCase())) {
            return responses[key];
        }
    }
    return defaultResponse;
}

function addMessage(text, sender) {
    const chatMessages = document.getElementById('chatMessages');
    const msgDiv = document.createElement('div');
    msgDiv.className = `message ${sender}`;
    
    let formattedText = text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
    msgDiv.innerHTML = formattedText;
    
    chatMessages.appendChild(msgDiv);
}
