<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Wellness Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- C
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myLandbot;
            function initLandbot() {
                if (!myLandbot) {
                    var s = document.createElement('script');
                    s.type = "module";
                    s.async = true;
                    s.onload = function() {
                        myLandbot = new Landbot.Livechat({
                            configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2825823-TC9ITKGDVJKH683R/index.json',
                        });
                    };
                    s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs';
                    document.head.appendChild(s);
                }
            }
            window.addEventListener('mouseover', initLandbot, { once: true });
            window.addEventListener('touchstart', initLandbot, { once: true });
        });
    </script>---->



<script>
    document.addEventListener('DOMContentLoaded', function () {
        var script = document.createElement('script');
        script.type = "module";
        script.async = true;
        script.onload = function () {
            new Landbot.Livechat({
                configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2825823-TC9ITKGDVJKH683R/index.json',
            });
        };
        script.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs';
        document.head.appendChild(script);
    });
</script>

    <!-- Header & Navigation -->
    <header>
        <nav>
            <h1>Mental Wellness</h1>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="therapist-consultation.php">Therapists</a></li>
                <li><a href="resources-articles.php">Resources</a></li>
                <li><a href="community-support.php">Community Support</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <button id="dark-mode-toggle">🌙 Dark Mode</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Your Mental Wellness, Our Priority</h2>
        <p>Find resources, connect with professionals, and improve your well-being.</p>
        <a href="dashboard.html" class="btn">Get Started</a>
    </section>

    <!-- About Section -->
    <section class="about">
        <h2>About Mental Wellness</h2>
        <p>Our platform provides mental health resources, therapy sessions, and a supportive community to help you on your journey to well-being.</p>
    </section>

    <!-- Services Section -->
    <section class="services">
    <h2>Our Services</h2>
    <div class="service-box" onclick="window.location.href='therapist-consultation.php'">
        <h3>🧑‍⚕️ Therapist Consultation</h3>
        <p>Connect with certified mental health professionals.</p>
    </div>
    <div class="service-box" onclick="window.location.href='resources-articles.php'">
        <h3>📚 Resources & Articles</h3>
        <p>Access expert-written guides and self-help materials.</p>
    </div>
    <div class="service-box" onclick="window.location.href='community-support.php'">
        <h3>💬 Community Support</h3>
        <p>Join a supportive community and share your experiences.</p>
    </div>
    <div class="service-box" onclick="window.location.href='meditation.php'">
    <h3>🧘 Meditation Therapy</h3>
    <p>Guided meditation sessions to help users relax and reduce stress.</p>
</div>

</section>

    <!-- Testimonials -->
    <section class="testimonials">
        <h2>What Our Users Say</h2>
        <p>"This platform changed my life! The therapists are amazing and the resources are very helpful." – <strong>Sarah K.</strong></p>
        <p>"I finally found a community that understands me. Thank you for this!" – <strong>James L.</strong></p>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Contact & Support</h2>
        <p>Email: support@mentalwellness.com</p>
        <p>Helpline: +1 234 567 890</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Mental Wellness Platform. All rights reserved.</p>
    </footer>

    <!-- Dark Mode Script -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const darkModeToggle = document.getElementById("dark-mode-toggle");
        if (localStorage.getItem("dark-mode") === "enabled") {
            document.body.classList.add("dark-mode");
        }
        darkModeToggle.addEventListener("click", function () {
            document.body.classList.toggle("dark-mode");
            localStorage.setItem("dark-mode", document.body.classList.contains("dark-mode") ? "enabled" : "disabled");
        });
    });
</script>


    <script src="script.js"></script>
</body>
</html>
