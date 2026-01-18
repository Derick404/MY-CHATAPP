<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Chat App - Port <?php echo getenv('PORT_ID'); ?></title>
</head>
<body style="background-color: 	 #b3cccc; background-image: url(logos.png); font-weight: 700; font-size: 18px;">
    <h1>Chat for Port <?php echo getenv('PORT_ID'); ?></h1>
    <div id="messages" style="border:1px solid #ccc; height:300px; overflow-y:scroll; background-color: rgba(255, 255, 255, 0.7);"></div>
    <input type="text" id="message" placeholder="Type a message">
    <button onclick="sendMessage()">Send</button>

    <script>
        const portId = <?php echo getenv('PORT_ID'); ?>;
        function sendMessage() {
            const msg = document.getElementById('message').value;
            fetch('send_message.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `message=${encodeURIComponent(msg)}&sender_port=${portId}`
            }).then(() => document.getElementById('message').value = '');
        }

        function fetchMessages() {
            fetch('get_messages.php')
                .then(response => response.json())
                .then(data => {
                    const messagesDiv = document.getElementById('messages');
                    messagesDiv.innerHTML = '';
                    data.forEach(msg => {
                        messagesDiv.innerHTML += `<p><strong>Port ${msg.sender_port}:</strong> ${msg.message}</p>`;
                    });
                });
        }

        setInterval(fetchMessages, 2000);  // Poll every 2 seconds for new messages
        fetchMessages();  // Load on page load
    </script>
</body>
</html>