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

h1, h2, h3 {
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

/* School Members Section Styling */
.school-members-section {
    background-color: #ffffff;
    padding: 60px 0;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.school-members-section h2 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #4CAF50;
}

.school-members-section p {
    font-size: 18px;
    margin-bottom: 30px;
}

/* Members Grid Layout */
.members-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
}

.member-card {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.member-card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
}

.member-card h3 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}

.member-card .role {
    font-size: 18px;
    margin-bottom: 15px;
    color: #555;
}

.member-card .contact-info {
    font-size: 16px;
    color: #777;
}

.member-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .members-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .members-grid {
        grid-template-columns: 1fr;
    }
}

</style>
<!-- Main Content -->
<main>
    <section class="school-members-section">
        <div class="container">
            <h2>Our School Members</h2>
            <p>Meet our dedicated and experienced team members who are committed to providing the best education to our students.</p>

            <div class="members-grid">
                <!-- Member Card 1 -->
                <div class="member-card">
                    <img src="../assets/images/download.jpg" alt="Member Photo">
                    <h3>Bimal Mahto</h3>
                    <p class="role">Principal</p>
                    <p class="contact-info">
                        <strong>Email:</strong> bimal@school.com<br>
                        <strong>Phone:</strong> +1 234 567 890
                    </p>
                </div>

                <!-- Member Card 2 -->
                <div class="member-card">
                    <img src="../assets/images/download.jpg" alt="Member Photo">
                    <h3>Jane Smith</h3>
                    <p class="role">Math Teacher</p>
                    <p class="contact-info">
                        <strong>Email:</strong> janesmith@school.com<br>
                        <strong>Phone:</strong> +1 234 567 891
                    </p>
                </div>

                <!-- Member Card 3 -->
                <div class="member-card">
                    <img src="../assets/images/download.jpg" alt="Member Photo">
                    <h3>Emily Brown</h3>
                    <p class="role">Science Teacher</p>
                    <p class="contact-info">
                        <strong>Email:</strong> emilybrown@school.com<br>
                        <strong>Phone:</strong> +1 234 567 892
                    </p>
                </div>

                <!-- Member Card 4 -->
                <div class="member-card">
                    <img src="../assets/images/download.jpg" alt="Member Photo">
                    <h3>Michael Johnson</h3>
                    <p class="role">English Teacher</p>
                    <p class="contact-info">
                        <strong>Email:</strong> michaeljohnson@school.com<br>
                        <strong>Phone:</strong> +1 234 567 893
                    </p>
                </div>

                <!-- Add more member cards as needed -->
            </div>
        </div>
    </section>
</main>

<?php include('../includes/footer.php'); ?>
