<!-- header.php -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($title) ? $title : 'Uniplay'; ?></title>
    <link rel="stylesheet" href="CSS/style.css" />
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <a href="HTML/home.php">
            <img src="Pictures/UniplayText.png" alt="Uniplay" class="logo-text" />
        </a>
        <ul class="nav-links">
            <li><a href="index.php">Landing Page</a></li>
            <li><a href="HTML/home.php">Home</a></li>
            <li><a href="HTML/services.php">Services</a></li>
            <li><a href="HTML/contact.php">Contact</a></li>
            <li><a href="HTML/about.php">About</a></li>
        </ul>
        <div class="auth-links">
            <a href="HTML/login.php" class="login-btn">Login</a>
        </div>
    </nav>