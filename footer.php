    </footer>
    <!-- Agri-Bot Chatbot Widget -->
    <div class="chatbot-wrapper">
        <div id="chatBox" class="chat-box">
            <div class="chat-header">
                <div class="bot-status"></div>
                <div style="font-weight: 700; font-family: 'Outfit';">Agri-Bot 01 (Beta)</div>
                <div style="flex: 1; text-align: right; cursor: pointer; opacity: 0.8;" onclick="toggleChat()">&times;</div>
            </div>
            <div id="chatMessages" class="chat-messages">
                <!-- Messages will appear here -->
            </div>
            <div id="typingIndicator" class="typing-indicator">🤖 Agri-Bot กำลังพิมพ์...</div>
            <div class="chat-input-area">
                <input type="text" id="chatInput" placeholder="ถาม Agri-Bot..." onkeypress="if(event.key === 'Enter') sendMessage()">
                <button onclick="sendMessage()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                </button>
            </div>
        </div>
        <div class="chatbot-trigger" onclick="toggleChat()">
            <img src="assets/images/agri_bot.png" alt="Agri-Bot">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-python.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-json.min.js"></script>
    <script src="chatbot_logic.js"></script>
    <script>
    function copyToClipboard(elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(() => {
            alert('คัดลอกโค้ดลง Clipboard เรียบร้อยแล้ว!');
        });
    }
    </script>
</body>
</html>
