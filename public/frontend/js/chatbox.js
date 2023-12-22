const socket = io("http://localhost:4000", {});

const chatInput = document.querySelector(".chat-input textarea");
const chatbotToggler = document.querySelector(".chatbot-toggler");
const btn = document.querySelectorAll(".buttonn");
const inputInitHeight = chatInput.scrollHeight;
const chatbox = document.querySelector(".chatbox");
const option = document.querySelector(".option");
const sendChatBtn = document.querySelector(".chat-input span");
const closeBtn = document.querySelector(".close-btn");
const bodyChatbot = document.querySelector(".body-chatbot");

const scrollToBottom = () => {
    chatbox.scrollTo(0, chatbox.scrollHeight);
};

const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    const chatContent = className === "outgoing" ? `<p>${message}</p>` : `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
    chatLi.innerHTML = chatContent;
    return chatLi;
};

const handleButtonClick = (element) => {
    chatbox.appendChild(createChatLi(element.innerHTML, "outgoing"));
    scrollToBottom();

    const incomingChatLi = createChatLi("Chotto matte ...", "incoming");
    chatbox.appendChild(incomingChatLi);
    scrollToBottom();

    const messageElement = incomingChatLi.querySelector("p");
    switch (element.value) {
        case "1":
            messageElement.textContent = 'Chúng tôi có bốn loại phòng: Phòng đơn, phòng đôi, phòng tổng thống và phòng VIP';
            break;
        case "2":
            messageElement.textContent = 'Bạn có thể đặt phòng thông qua Website của chúng tôi hoặc để lại thông tin: Tên + SDT + loại phòng + ngày đặt phòng';
            break;
        case "3":
            messageElement.textContent = 'Bạn có thể thanh toán trực tiếp tiền mặt tại bàn tiếp tân hoặc bạn có thể thanh toán bằng hình thức chuyển khoản, hoặc ghi nợ trên thẻ';
            break;
        case "4":
            messageElement.textContent = 'Bên chúng tôi có thể checkin từ lúc 14h và checkout trước 12h';
            break;
        case "5":
            messageElement.textContent = 'Bạn có thể liên hệ với chúng tôi thông qua fanpage hoặc gmail hoặc hotline';
            break;
        default:
    }
    scrollToBottom();
    option.style.display = "none";
};

const handleChat = () => {
    const userMessage = chatInput.value.trim();
    if (!userMessage) return;

    chatInput.value = "";
    chatInput.style.height = `${inputInitHeight}px`;

    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    scrollToBottom();

    const data = {
        message: userMessage
    }
    socket.emit('message', data);

    const incomingChatLi = createChatLi("Chotto matte ...", "incoming");
    chatbox.appendChild(incomingChatLi);
    scrollToBottom();
    option.style.display = "none";
};

socket.on('chat-message', (data) => {
    option.style.display = "none";
    generateResponse(data);
});

const generateResponse = (data) => {
    const lastIncomingChatLi = document.querySelector('.chatbox .incoming:last-child p')
    if (lastIncomingChatLi == null) {
        const incomingChatLi = createChatLi(data.message, "incoming");
        chatbox.appendChild(incomingChatLi);
    } else {
        lastIncomingChatLi.textContent = data.message;
    };
    scrollToBottom();
}

btn.forEach(element => {
    element.addEventListener('click', () => {
        handleButtonClick(element);
    });
});

chatInput.addEventListener("input", () => {
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});

chatInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
        e.preventDefault();
        handleChat();
    }
});

chatbotToggler.addEventListener("click", () => {
    bodyChatbot.classList.toggle("show-chatbot");
});

closeBtn.addEventListener("click", () => {
    bodyChatbot.classList.remove("show-chatbot");
});

sendChatBtn.addEventListener("click", handleChat);