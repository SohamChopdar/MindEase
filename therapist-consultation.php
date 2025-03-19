<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapist Consultation</title>
    <link rel="stylesheet" href="therapystyles.css">
</head>
<body>

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

    <section class="hero">
        <h2>Therapist Consultation</h2>
        <p>Connect with certified mental health professionals for personalized guidance and support.</p>
    </section>

    <!-- Available Therapists -->
    <section class="therapists">
        <h2>Available Therapists</h2>
        <div class="therapist-list">
            <div class="therapist-card">
               
                <h3>Dr. Aisha Khan</h3>
                <p>Specialization: Anxiety & Stress Management</p>
                <button onclick="bookSession('Dr. Aisha Khan')">Book a Session</button>
            </div>

            <div class="therapist-card">
                <h3>Dr. Raj Mehta</h3>
                <p>Specialization: Depression & Emotional Well-being</p>
                <button onclick="bookSession('Dr. Raj Mehta')">Book a Session</button>
            </div>

            <div class="therapist-card">
                <h3>Dr. Sophia Fernandes</h3>
                <p>Specialization: Relationship & Family Therapy</p>
                <button onclick="bookSession('Dr. Sophia Fernandes')">Book a Session</button>
            </div>
        </div>
    </section>

    <!-- Booking Form (Hidden initially) -->
    <section class="booking-form" id="bookingForm" style="display: none;">
        <h2>Book a Session</h2>
        <form action="book-appointment.php" method="POST">
            <input type="hidden" id="therapistName" name="therapist">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>

            <button type="submit">Confirm Booking</button>
        </form>
    </section>

    <!-- Contact Support -->
    <section class="contact">
        <h2>Need Help?</h2>
        <p>Email: support@mentalwellness.com</p>
        <p>Helpline: +1 234 567 890</p>
    </section>

    <footer>
        <p>&copy; 2025 Mental Wellness Platform. All rights reserved.</p>
    </footer>

    <script>
        function bookSession(therapistName) {
            document.getElementById("therapistName").value = therapistName;
            document.getElementById("bookingForm").style.display = "block";
        }
    </script>

</body>
</html>
