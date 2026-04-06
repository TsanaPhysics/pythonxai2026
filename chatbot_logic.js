/* 🤖 Agri-Bot 01: Chatbot Logic */

const responses = {
    "สวัสดี": "สวัสดีครับ! ผม Agri-Bot ยินดีที่ได้รู้จักครับ มีอะไรให้ผมช่วยไหมครับ? 🌾",
    "hello": "Hi there! I'm Agri-Bot. How can I help you with your Python xAI carrier today?",
    "ติดตั้ง": "การติดตั้งสภาพแวดล้อม แนะนำให้ดูที่เมนู 'เริ่มต้นเรียนรู้' นะครับ จะมีขั้นตอนการลง Python และ VS Code อย่างละเอียดครับ 💻",
    "install": "Check the 'Beginner Guide' menu for step-by-step installation instructions!",
    "บทที่ 1": "บทที่ 1 จะสอนเรื่อง AI Co-Pilot และการใช้เครื่องมือพื้นฐานครับ ลองคลิกที่ 'บทเรียน' แล้วเลือกบทที่ 1 ได้เลย!",
    "error": "ถ้าเจอ Error ลองคัดลอกข้อความนั้นไปถาม AI Co-Pilot ในโน๊ตบุ๊คบทที่ 1 ดูนะครับ หรือจะถามผมก็ได้!",
    "ผู้สอน": "วิทยากรในคอร์สนี้คือผู้เชี่ยวชาญด้าน Smart Farming และ AI ครับ ติดต่อสอบถามเพิ่มเติมได้ที่กลุ่ม LINE นะครับ",
    "line": "คุณสามารถสแกน QR Code สีเขียวที่ลอยอยู่ด้านขวาบนเพื่อเข้ากลุ่ม LINE ของเราได้เลยครับ! 📱",
    "ขอบคุณ": "ยินดีเสมอครับ! ขอให้สนุกกับการเรียนรู้ AI นะครับ 🚀",
    "ช่วยด้วย": "ใจเย็นๆ นะครับ ลองเริ่มจากอ่าน 'คู่มือเริ่มต้น' หรือบอกปัญหาที่เจอให้ชัดเจนกว่านี้หน่อยครับ"
};

const defaultResponse = "ขออภัยครับ ผมยังไม่เข้าใจคำถามนี้ ลองถามเกี่ยวกับ 'ติดตั้ง', 'บทเรียน', หรือ 'LINE' ดูนะครับ หรือติดต่อพี่เลี้ยงในกลุ่มได้เลยครับ!";

function toggleChat() {
    const chatBox = document.getElementById('chatBox');
    if (chatBox.style.display === 'flex') {
        chatBox.style.display = 'none';
    } else {
        chatBox.style.display = 'flex';
        // Auto greet if first time
        if (document.getElementById('chatMessages').children.length === 0) {
            setTimeout(() => {
                addMessage("สวัสดีครับ! ผมชื่อ **Agri-Bot 01** เป็นผู้ช่วยประจำเวิร์กชอปนี้ มีคำถามอะไรถามผมได้เลยนะครับ! 🤖", 'bot');
            }, 500);
        }
    }
}

function sendMessage() {
    const input = document.getElementById('chatInput');
    const message = input.value.trim();
    if (!message) return;

    addMessage(message, 'user');
    input.value = '';

    // Show typing indicator
    const typing = document.getElementById('typingIndicator');
    typing.style.display = 'block';

    // Scroll to bottom
    const chatMessages = document.getElementById('chatMessages');
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Simulate bot thinking
    setTimeout(() => {
        typing.style.display = 'none';
        const botResponse = findResponse(message);
        addMessage(botResponse, 'bot');
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 1500);
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
    
    // Support basic bold markdown
    let formattedText = text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
    msgDiv.innerHTML = formattedText;
    
    chatMessages.appendChild(msgDiv);
}

// Handle Enter key
document.getElementById('chatInput')?.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});
