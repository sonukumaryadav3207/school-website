<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>
    <style>
        /* Basic reset for margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and general styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
        }

        /* Header styling */
        header {
            background-color: #4CAF50;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            position: relative;
        }

        /* Logo styling */
        .logo {
            font-size: 28px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Navigation styling */
        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #45a049;
        }

        /* Hamburger menu icon (hidden by default) */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
        }

        .hamburger span {
            background-color: white;
            width: 30px;
            height: 3px;
        }

        /* For small screens (mobile view) */
        @media (max-width: 768px) {
            /* Initially hide the navigation menu */
            nav ul {
                display: none; /* Hide the menu by default */
                flex-direction: column;
                gap: 10px;
                position: absolute;
                top: 70px;
                right: 20px;
                background-color: #4CAF50;
                padding: 15px;
                border-radius: 8px;
                width: 200px;
            }

            nav ul li a {
                padding: 10px 20px;
                font-size: 18px;
            }

            /* Display hamburger menu in mobile view */
            .hamburger {
                display: flex;
            }

            /* When hamburger is clicked, show the menu */
            nav.active ul {
                display: flex;
            }
        }
    </style>
</head>

<body>

    <header>
        <!-- Logo -->
        <div class="logo">
            B.M.B.S.T School
        </div>

        <!-- Hamburger Menu -->
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Navigation Bar -->
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="news_event.php">News & Events</a></li>
                <li><a href="school_member.php">Facilities</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <script>
        // Hamburger menu toggle script
        const hamburger = document.getElementById('hamburger');
        const nav = document.getElementById('nav');

        // Toggle the navigation menu when hamburger is clicked
        hamburger.addEventListener('click', () => {
            nav.classList.toggle('active'); // Add or remove the 'active' class to show/hide the menu
        });
    </script>

</body>

</html>
