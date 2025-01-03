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

    /* Courses Page Styling */
    main {
        padding: 40px 0;
    }

    /* General Courses Section Styling */
    .courses-section {
        background-color: #ffffff;
        padding: 60px 0;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .courses-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .courses-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    /* Courses List */
    .course-list {
        list-style-type: none;
        padding: 0;
        font-size: 18px;
        line-height: 1.8;
        text-align: left;
        margin: 0 auto;
        display: inline-block;
        max-width: 600px;
    }

    .course-list li {
        padding-left: 20px;
        position: relative;
    }

    .course-list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #4CAF50;
        font-size: 20px;
        top: 0;
    }

    .courses-section ul {
        padding: 0;
        margin: 0;
    }

    .courses-section ul li {
        display: inline-block;
        width: 45%;
        margin: 10px 2.5%;
        background-color: #f4f4f4;
        padding: 20px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .courses-section ul li:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .course-list li {
            font-size: 16px;
        }

        .courses-section ul li {
            width: 100%;
            margin-bottom: 20px;
        }
    }
</style>
<!-- Main Content -->
<main>
    <!-- LKG to 2nd Grade Section -->
    <section class="courses-section lkg-to-2">
        <div class="container">
            <h2>LKG to 2nd Grade</h2>
            <p>At this level, our focus is on developing basic skills in reading, writing, arithmetic, and social behavior.</p>
            <ul class="course-list">
                <li>English Language</li>
                <li>Mathematics</li>
                <li>Environmental Science</li>
                <li>Arts & Craft</li>
                <li>Physical Education</li>
                <li>Music</li>
                <li>General Knowledge</li>
            </ul>
        </div>
    </section>

    <!-- 3rd to 5th Grade Section -->
    <section class="courses-section 3rd-to-5">
        <div class="container">
            <h2>3rd to 5th Grade</h2>
            <p>In these grades, we introduce more advanced subjects and encourage interactive learning through activities and practicals.</p>
            <ul class="course-list">
                <li>English Language</li>
                <li>Mathematics</li>
                <li>Science</li>
                <li>Social Science</li>
                <li>Computer Science</li>
                <li>Hindi/Tamil (Regional Language)</li>
                <li>Arts & Craft</li>
                <li>Physical Education</li>
            </ul>
        </div>
    </section>

    <!-- 6th to 8th Grade Section -->
    <section class="courses-section 6th-to-8">
        <div class="container">
            <h2>6th to 8th Grade</h2>
            <p>At this stage, we focus on deeper understanding and preparation for high school level subjects with emphasis on practicals and projects.</p>
            <ul class="course-list">
                <li>English Language</li>
                <li>Mathematics</li>
                <li>Science (Physics, Chemistry, Biology)</li>
                <li>Social Science (History, Geography, Civics)</li>
                <li>Computer Science</li>
                <li>Hindi/Tamil (Regional Language)</li>
                <li>Physical Education</li>
                <li>Arts & Craft</li>
            </ul>
        </div>
    </section>

    <!-- 9th to 10th Grade Section -->
    <section class="courses-section 9th-to-10">
        <div class="container">
            <h2>9th to 10th Grade</h2>
            <p>This is the crucial stage where students prepare for their State Board examinations, with specialized subjects and advanced topics in each field.</p>
            <ul class="course-list">
                <li>English Language</li>
                <li>Mathematics (Algebra, Geometry, Trigonometry)</li>
                <li>Science (Physics, Chemistry, Biology)</li>
                <li>Social Science (History, Geography, Civics, Economics)</li>
                <li>Hindi/Tamil (Regional Language)</li>
                <li>Computer Science (Optional)</li>
                <li>Physical Education</li>
                <li>Work Education</li>
            </ul>
        </div>
    </section>
</main>

<?php include('../includes/footer.php'); ?>