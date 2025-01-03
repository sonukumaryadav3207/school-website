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

    /* Header Section (from header.php) */
    header {
        background-color: #4CAF50;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
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

    /* News Section Styling */
    .news-section {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .news-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .news-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .news-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .news-item {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .news-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .news-item h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .news-item .news-date {
        font-size: 16px;
        color: #888;
        margin-bottom: 10px;
    }

    .news-item .news-description {
        font-size: 16px;
        color: #555;
        margin-bottom: 15px;
    }

    .news-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .read-more {
        color: #4CAF50;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Events Section Styling */
    .events-section {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .events-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .events-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .events-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .event-item {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .event-item p {
        font-size: 16px;
        margin-bottom: 10px;
        color: #777;
    }

    .event-item h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .event-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {

        .news-list,
        .events-list {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {

        .news-list,
        .events-list {
            grid-template-columns: 1fr;
        }
    }
</style>
<!-- Main Content -->
<main>
    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <h2>Latest News</h2>
            <p>Stay updated with the latest news from our school.</p>

            <div class="news-list">
                <!-- News Article 1 -->
                <div class="news-item">
                    <img src="../assets/images/annual].jpg"  alt="News Image 1">
                    <div class="news-content">
                        <h3>School Annual Day Celebration</h3>
                        <p class="news-date">January 5, 2025</p>
                        <p class="news-description">
                            Our annual day celebration is coming up, and we are excited to showcase the talent of our students. Don’t miss it!
                        </p>
                        <a href="news_detail.php?id=1" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- News Article 2 -->
                <div class="news-item">
                    <img src="../assets/images/science.jpg"  alt="News Image 2">
                    <div class="news-content">
                        <h3>Science Fair 2025</h3>
                        <p class="news-date">December 15, 2024</p>
                        <p class="news-description">
                            Our annual science fair will feature exciting projects from our students. Get ready for some amazing discoveries!
                        </p>
                        <a href="news_detail.php?id=2" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- News Article 3 -->
                <div class="news-item">
                    <img src="../assets/images/sports.jpg"  alt="News Image 3">
                    <div class="news-content">
                        <h3>Inter-School Sports Meet</h3>
                        <p class="news-date">November 20, 2024</p>
                        <p class="news-description">
                            Our students participated in the inter-school sports meet. It was a great success with many medals won!
                        </p>
                        <a href="news_detail.php?id=3" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- More News Articles Here -->
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="events-section">
        <div class="container">
            <h2>Upcoming Events</h2>
            <p>Don’t miss our upcoming events and activities.</p>

            <div class="events-list">
                <!-- Event 1 -->
                <div class="event-item">
                    <p class="event-date">January 5, 2025</p>
                    <h3>Annual Day Celebration</h3>
                    <p class="event-description">
                        Join us for the grand Annual Day celebration with cultural performances and award ceremonies.
                    </p>
                </div>

                <!-- Event 2 -->
                <div class="event-item">
                    <p class="event-date">December 18, 2024</p>
                    <h3>Winter Carnival</h3>
                    <p class="event-description">
                        A fun-filled winter carnival with games, food stalls, and performances by the students.
                    </p>
                </div>

                <!-- Event 3 -->
                <div class="event-item">
                    <p class="event-date">November 25, 2024</p>
                    <h3>Parent-Teacher Meeting</h3>
                    <p class="event-description">
                        A meeting for parents to discuss their child's progress and development.
                    </p>
                </div>

                <!-- More Events Here -->
            </div>
        </div>
    </section>
</main>

<?php include('../includes/footer.php'); ?>