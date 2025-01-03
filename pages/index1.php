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

    /* Carousel Styles */
    .carousel-container {
        position: relative;
        width: 100%;
        max-width: 100%;
        overflow: hidden;
    }

    .carousel-slides {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-slide {
        min-width: 100%;
        box-sizing: border-box;
    }

    .carousel-slide img {
        width: 100%;
        height: auto;
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .carousel-nav button {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 15px;
        font-size: 18px;
        cursor: pointer;
    }

    .carousel-nav button:hover {
        background-color: rgba(0, 0, 0, 0.8);
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

    <!-- Carousel Section -->
    <section class="carousel-container">
        <div class="carousel-slides">
            <div class="carousel-slide">
                <img src="carousel-image1.jpg" alt="Image 1">
            </div>
            <div class="carousel-slide">
                <img src="carousel-image2.jpg" alt="Image 2">
            </div>
            <div class="carousel-slide">
                <img src="carousel-image3.jpg" alt="Image 3">
            </div>
        </div>
        <div class="carousel-nav">
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
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

<script>
    // Carousel functionality
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const slides = document.querySelector('.carousel-slides');
    let currentSlide = 0;

    function showSlide(index) {
        if (index >= slides.children.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.children.length - 1;
        }
        slides.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    prevButton.addEventListener('click', () => {
        currentSlide--;
        showSlide(currentSlide);
    });

    nextButton.addEventListener('click', () => {
        currentSlide++;
        showSlide(currentSlide);
    });

    // Automatic slide change every 5 seconds
    setInterval(() => {
        currentSlide++;
        showSlide(currentSlide);
    }, 5000);
</script>

<?php include('../includes/footer.php'); ?>