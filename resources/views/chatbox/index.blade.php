<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>

<body class="show-chatbot">
    <button class="chatbot-toggler">
        <span class="material-symbols-outlined">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
        <header>
            <h2>Chatbot</h2>
            <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Hi <br>How can I help you today?</p>
            </li>
            <div class="option">
                <button class="buttonn" value="1"> Bạn có những loại phòng nào? </button>
                <button class="buttonn" value="2"> Tôi có thể đặt phòng như thế nào? </button>
                <button class="buttonn" value="3"> Tôi có thể thanh toán như thế nào? </button>
                <button class="buttonn" value="4"> Tôi có thể checkin vào lúc nào? </button>
                <button class="buttonn" value="5"> Liên hệ với chúng tôi </button>
            </div>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
            <span class="material-symbols-outlined">send</span>
        </div>

        <!-- <script src="socket.io/socket.io.js"></script> -->
        <script src="js/script.js"></script>
    </div>
</body>

</html>