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

    /* Header Section (from the header.php) */
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

    /* Main Sections Styles */
    main {
        padding: 40px 0;
    }

    /* Welcome Section */
    .welcome {
        background-color: #4CAF50;
        color: white;
        padding: 120px 0;
        text-align: center;
        background-image: url('welcome-bg.jpg');
        background-size: cover;
        background-position: center;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    .welcome h1 {
        font-size: 48px;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
        animation: fadeIn 2s ease-out;
    }

    .welcome p {
        font-size: 18px;
        margin-bottom: 30px;
        animation: fadeIn 2s ease-out;
    }

    .welcome .btn {
        background-color: #fff;
        color: #4CAF50;
        padding: 15px 30px;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s ease;
        animation: fadeIn 2s ease-out;
    }

    .welcome .btn:hover {
        background-color: #45a049;
        color: white;
    }

    /* About Us Section */
    .about-us {
        background-color: #ffffff;
        padding: 80px 0;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .about-us h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .about-us p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .about-us .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 18px;
    }

    .about-us .btn:hover {
        background-color: #45a049;
    }

    /* Courses Section */
    .courses {
        background-color: #f9f9f9;
        padding: 80px 0;
        text-align: center;
    }

    .courses h2 {
        font-size: 36px;
        margin-bottom: 40px;
        color: #4CAF50;
    }

    .course-list {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        flex-wrap: wrap;
    }

    .course-item {
        background-color: #fff;
        padding: 30px;
        width: 30%;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .course-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .course-item h3 {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .course-item p {
        font-size: 16px;
    }

    /* Contact Section */
    .contact {
        background-color: #ffffff;
        padding: 80px 0;
        text-align: center;
    }

    .contact h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .contact p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .contact .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 18px;
    }

    .contact .btn:hover {
        background-color: #45a049;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .course-item {
            width: 100%;
            margin-bottom: 20px;
        }

        .welcome h1 {
            font-size: 36px;
        }

        .welcome p {
            font-size: 16px;
        }

        .welcome .btn {
            font-size: 16px;
        }
    }
</style>
<!-- Main Content -->
<main>
    <!-- Welcome Section -->
    <section class="welcome">
        <div class="container">
            <h1>Welcome to Our School</h1>
            <p>Providing quality education with a focus on holistic development for all students.</p>
            <a href="about.php" class="btn">Learn More</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="container">
            <h2>About Us</h2>
            <p>Our school offers a wide range of educational programs designed to foster academic excellence, creativity, and leadership skills. We are committed to nurturing students to become responsible global citizens.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses">
        <div class="container">
            <h2>Our Courses</h2>
            <div class="course-list">
                <div class="course-item">
                    <h3>Mathematics</h3>
                    <p>Our mathematics program focuses on building problem-solving skills and logical reasoning.</p>
                </div>
                <div class="course-item">
                    <h3>Science</h3>
                    <p>Our science curriculum emphasizes hands-on experiments and a deep understanding of the world around us.</p>
                </div>
                <div class="course-item">
                    <h3>Languages</h3>
                    <p>We offer various language programs to enhance communication and cultural understanding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or want to know more about our school, feel free to reach out to us.</p>
            <a href="contact.php" class="btn">Get in Touch</a>
        </div>
    </section>
</main>

<?php include('../includes/footer.php'); ?>