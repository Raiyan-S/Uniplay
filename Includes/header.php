<!-- ID: 2136108 
Name: Raiyan Subedar -->

<!-- header.php -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($title ?? 'Uniplay', ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="../CSS/style.css" type="text/css" />
    <link rel="stylesheet" href="../CSS/print.css" type="text/css" media="print" />
</head>

<body>
    <!-- Navbar Section -->
    <div class="navbar">
        <a href="home.php">
            <img src="../Pictures/UniplayText.png" alt="Uniplay" class="logo-text" />
        </a>
        <ul class="nav-links">
            <li><a href="../index.php">Landing Page</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="table.php">Movies/Shows Schedule</a></li>
            <li><a href="picture.php">Picture Gallery</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="feedback.php">Feedback Form</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="search.php">Search</a></li>
        </ul>
        <div class="auth-links">
            <a href="login.php" class="login-btn">Login</a>
        </div>
    </div>
