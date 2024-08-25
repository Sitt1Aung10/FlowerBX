<footer>
    <div class="popular_shortcut_section">

    </div>
    <div class="email_section">
        <input class="userEmail" type="email" placeholder="Enter Your Email Address" required>
        <button id="submitButton">Submit</button>
        <span id="messageSpan">Can't Subscribe Right Now.Excitement Is Yet to Come!</span>
        <script>
            const userEmail = document.querySelector(".userEmail");
            const submitButton = document.querySelector("#submitButton");
            const messageSpan = document.querySelector("#messageSpan");

            // Add event listener to the button
            submitButton.addEventListener('click', function() {
                // Show the span message
                messageSpan.style.display = 'inline';

                // Trigger the animation
                messageSpan.classList.add('floating-message');

                // Hide the span message after 2 seconds
                setTimeout(function() {
                    messageSpan.style.display = 'none';
                    messageSpan.classList.remove('floating-message');
                }, 2000);
            });
        </script>
        <p>CONNECT WITH US ON SOCIAL</p>
        <a style="font-size: .8rem;" href="https://www.instagram.com/theflowerbx/?hl=en"><i
                class="fa-brands fa-instagram"></i>FowerBX</a>
    </div>

    <div class="question_section">
        <p>Do you have a special request? Or are you in doubt about something? Send a message to our
            Customer
            Support Team, who will do their best to reply as soon as possible.</p>
        <a class="ask_why" href=""><i class="fa-solid fa-message"></i>Ask Why?</a>
    </div>

    <div class="chat-box">
        <div class="chat-header">Chat with us</div>
        <div class="chat-message">Sorry, we aren't online at the moment. Leave a message and we'll get back to you.</div>
        <div class="operating-hours">Our Operating Hours</div>
        <form action="/submit_form" method="post">
            <input type="text" id="name" name="name" placeholder="Name" required>
            <input type="email" id="email" name="_replyto" placeholder="Email" required>
            <input type="text" id="phone" name="phone_number" placeholder="Phone Number (optional)">
            <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea><br>
            <input type="submit" class="chatSubmit" value="Send message">
            <span class="chatSpan">Excitement Is Yet To Come!</span>
        </form>
        <div class="zendesk-logo">zendesk</div>
    </div>
   

    <script>
        // Select the chat box
        const chatBox = document.querySelector('.chat-box');
        //select ask why
        const ask_why = document.querySelector(".ask_why");
        ask_why.addEventListener('click', function() {
            // Prevent the default action
            event.preventDefault();
            chatBox.style.display = "block";
        })


        // Add event listener to the chat box
        chatBox.addEventListener('click', function(event) {
            // Get the computed style of the ::before pseudo-element
            const pseudoElementStyle = window.getComputedStyle(chatBox, '::before');
            if (pseudoElementStyle.content) {
                // Hide the chat box
                chatBox.style.display = 'none';
            }
        });

    </script>
</footer>