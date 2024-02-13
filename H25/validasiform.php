<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>validasiform</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='validasiform.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="contact-name" placeholder="Enter Your Name" id="contact-name" onkeyup="validateName()">
                <span id="name-error"></span>
            </div>

            <div class="input-group">
                <label>Phone No.</label>
                <input type="tel" name="contact-phone" placeholder="123 456 78910" id="contact-phone" onkeyup="validatePhone()">
                <span id="phone-error"></span>
                
            </div>

            <div class="input-group">
                <label>Email Id</label>
                <input type="email" name="contact-email" placeholder="Enter Email" id="contact-email" onkeyup="validateEmail()">
                <span id="email-error"></span>
            </div>

            <div class="input-group">
                <label>Your Message</label>
                <textarea rows="5" name="contact-message" placeholder="Enter Your Message" id="contact-message" onkeyup="validateMessage()"></textarea>
                <span id="message-error"></span>
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
  <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['contact-name'];
            $phone = $_POST['contact-phone'];
            $email = $_POST['contact-email'];
            $message = $_POST['contact-message'];

            echo "<div class='gatau'>";
            echo "<h2>Dashboard</h2>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Phone No.: $phone</p>";
            echo "<p>Message: $message</p>";
            echo "</div>";
        }
        ?>
      
    </div>

    <script src="script.js"></script>
</body>
</html>

