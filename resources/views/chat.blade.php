<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ChatGPT Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Chat with ChatGPT</h2>
                <div class="chat-container mt-3">
                    <div id="chat-messages" class="chat-messages">
                        <!-- Messages will be displayed here -->
                    </div>
                    <div class="input-group mt-3 mb-5">
                        <input type="text" id="user-message" class="form-control" placeholder="Type your message...">
                        <button onclick="sendMessage()" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function sendMessage() {
            var userMessage = document.getElementById('user-message').value;
            var chatMessages = document.getElementById('chat-messages');
            chatMessages.innerHTML += '<div class="user-message">' + userMessage + '</div>';

            fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    user_message: userMessage,
                }),
            })
            .then(response => response.json())
            .then(data => {
                chatMessages.innerHTML += '<div class="chatbot-message">' + data.chatbotResponse + '</div>';
            })
            .catch(error => {
                console.error('Error:', error);
            });

            document.getElementById('user-message').value = '';
        }
    </script>
</body>
</html>
