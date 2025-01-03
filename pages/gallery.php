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

    /* Gallery Section Styling */
    .gallery-section {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .gallery-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .gallery-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 20px;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .gallery-item img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .gallery-item img {
            border-radius: 5px;
        }
    }

    @media (max-width: 480px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<!-- Main Content -->
<main>
    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <h2>Our School Gallery</h2>
            <p>Explore some of the memorable moments and events from our school. Click on any image to view it in a larger size.</p>

            <div class="gallery-grid">
                <!-- Gallery Images -->
                <a href="../assets/images/gallery1.jpg" class="gallery-item" data-lightbox="school-gallery">
                    <img src="../assets/images/gallery1.jpg" alt="Gallery Image 1">
                </a>
                <a href="../assets/images/gallery2.jpg" class="gallery-item" data-lightbox="school-gallery">
                    <img src="../assets/images/gallery2.jpg" alt="Gallery Image 2">
                </a>
                <a href="../assets/images/gallery3.jpg" class="gallery-item" data-lightbox="school-gallery">
                    <img src="../assets/images/gallery3.jpg" alt="Gallery Image 3">
                </a>
                <a href="../assets/images/gallery4.jpg" class="gallery-item" data-lightbox="school-gallery">
                    <img src="../assets/images/gallery4.jpg" alt="Gallery Image 4">
                </a>
                <a href="../assets/images/gallery5.jpg" class="gallery-item" data-lightbox="school-gallery">
                    <img src="../assets/images/gallery1.jpg" alt="Gallery Image 5">
                </a>
                <a href="../assets/images/gallery6.jpg" class="gallery-item" data-lightbox="school-gallery">
                    <img src="../assets/images/gallery6.avif" alt="Gallery Image 6">
                </a>
                <!-- Add more images as needed -->
            </div>
        </div>
    </section>
</main>

<?php include('../includes/footer.php'); ?>