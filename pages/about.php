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

    /* Main Sections Styles */
    main {
        padding: 40px 0;
    }

    /* Mission Section */
    .mission {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
    }

    .mission h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .mission p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    /* Vision Section */
    .vision {
        background-color: #f9f9f9;
        padding: 60px 0;
        text-align: center;
    }

    .vision h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .vision p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    /* History Section */
    .history {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
    }

    .history h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .history p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    /* Our Team Section */
    .our-team {
        background-color: #f9f9f9;
        padding: 60px 0;
        text-align: center;
    }

    .our-team h2 {
        font-size: 36px;
        margin-bottom: 40px;
        color: #4CAF50;
    }

    .team-list {
        display: flex;
        justify-content: space-around;
        gap: 30px;
        flex-wrap: wrap;
    }

    .team-member {
        background-color: #fff;
        padding: 20px;
        width: 30%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .team-member img {
        width: 100%;
        height: 200px;
        object-fit: cover;

        margin-bottom: 15px;
    }

    .team-member h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .team-member p {
        font-size: 16px;
        color: #777;
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
        .team-member {
            width: 100%;
            margin-bottom: 20px;
        }
    }
</style>
<!-- Main Content -->
<main>
    <!-- Mission Section -->
    <section class="mission">
        <div class="container">
            <h2>Our Mission</h2>
            <p>Our mission is to provide quality education that fosters the intellectual, social, and emotional development of every student. We aim to create a dynamic learning environment where students are encouraged to explore, innovate, and excel.</p>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="vision">
        <div class="container">
            <h2>Our Vision</h2>
            <p>Our vision is to be a leading institution that provides holistic education and nurtures the leaders of tomorrow. We aspire to create a diverse and inclusive community where all students have access to the resources they need to succeed.</p>
        </div>
    </section>

    <!-- History Section -->
    <section class="history">
        <div class="container">
            <h2>Our History</h2>
            <p>Founded in 2000, our school has a long-standing tradition of academic excellence. Over the years, we have expanded our offerings and facilities to meet the needs of a growing student population, always staying committed to our core values of integrity, innovation, and inclusivity.</p>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="our-team">
        <div class="container">
            <h2>Our Team</h2>
            <div class="team-list">
                <div class="team-member">
                    <img src="../assets/images/download.jpg" alt="Team Member 1">
                    <h3>Bimal Mahto</h3>
                    <p>Principal</p>
                </div>
                <div class="team-member">
                    <img src="../assets/images/download.jpg" alt="Team Member 1">
                    <h3>Ms. Jane Smith</h3>
                    <p>Head of Curriculum</p>
                </div>
                <div class="team-member">
                    <img src="../assets/images/download.jpg" alt="Team Member 1">
                    <h3>Mr. Michael Lee</h3>
                    <p>Head of Administration</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('../includes/footer.php'); ?>