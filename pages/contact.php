<?php include('../includes/header.php'); ?>
<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
    }

    h1,
    h2,
    h3 {
        font-weight: bold;
    }

    a {
        text-decoration: none;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    /* Header Section (from header.php) */
    header {
        background-color: #4CAF50;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
        position: relative;
    }

    header .logo {
        font-size: 28px;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    header nav ul {
        list-style-type: none;
        display: flex;
        gap: 20px;
    }

    header nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        padding: 8px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    header nav ul li a:hover {
        background-color: #45a049;
    }

    /* Contact Form Styling */
    .contact-form-section {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .contact-form-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .contact-form-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .contact-form {
        max-width: 600px;
        margin: 0 auto;
        text-align: left;
    }

    .contact-form .form-group {
        margin-bottom: 20px;
    }

    .contact-form .form-group label {
        font-size: 18px;
        display: block;
        margin-bottom: 8px;
    }

    .contact-form .form-group input,
    .contact-form .form-group textarea {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .contact-form .form-group textarea {
        height: 150px;
    }

    .contact-form .submit-btn {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 15px 30px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .contact-form .submit-btn:hover {
        background-color: #45a049;
    }

    /* Contact Info Styling */
    .contact-info-section {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .contact-info-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .contact-info-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .contact-info-list {
        list-style-type: none;
        padding: 0;
        font-size: 18px;
        line-height: 1.8;
        text-align: left;
        margin: 0 auto;
        display: inline-block;
        max-width: 600px;
    }

    .contact-info-list li {
        padding-left: 20px;
        position: relative;
    }

    .contact-info-list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #4CAF50;
        font-size: 20px;
        top: 0;
    }

    /* Map Section Styling */
    .map-section {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .map-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    iframe {
        border: none;
        border-radius: 8px;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .contact-form .submit-btn {
            font-size: 16px;
        }

        .contact-info-list li {
            font-size: 16px;
        }
    }
</style>
<!-- Main Content -->
<main>
    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or inquiries, feel free to reach out to us through the form below or contact us directly using the information provided.</p>

            <!-- Contact Form -->
            <form action="submit_contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your full name">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email address">
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required placeholder="Enter the subject of your inquiry">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required placeholder="Write your message"></textarea>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info-section">
        <div class="container">
            <h2>Our Contact Information</h2>
            <p>We are here to assist you! You can contact us using the following methods:</p>

            <ul class="contact-info-list">
                <li><strong>Address:</strong> Mahilong, Ranchi, Jharkhand, 835103</li>
                <li><strong>Phone:</strong> +1 234 567 890</li>
                <li><strong>Email:</strong> info@schoolwebsite.com</li>
            </ul>
        </div>
    </section>

    <!-- Google Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Find Us</h2>
            <!-- Google Map Embed -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.748958895316!2d85.42123507408657!3d23.361107903612503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e2d8ef6343a1%3A0x7f1442678e0aa0df!2sB.M.B.S.T.Public%20School!5e0!3m2!1sen!2sin!4v1735889386686!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>

<?php include('../includes/footer.php'); ?>