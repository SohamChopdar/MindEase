<?php
session_start();
require 'conn.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user data
$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT name, email FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("User not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        .dashboard-container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .recommendation-list { list-style-type: disc; margin-left: 20px; }
    </style>
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
    <main>
        <div class="dashboard-container">
            <!-- User Profile Section -->
            

            <!-- Mental Health Tracking -->
            <section class="section">
                <h2>Mood Tracking</h2>
                <canvas id="moodChart"></canvas>
                <script>
                    var ctx = document.getElementById('moodChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'],
                            datasets: [{
                                label: 'Mood Rating',
                                data: [7, 8, 6, 9, 7], // Replace with actual mood data
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: { y: { beginAtZero: true, max: 10 } }
                        }
                    });
                </script>
            </section>

            <!-- Treatment Recommendations -->
            <section class="section">
                <h2>Treatment Recommendations</h2>
                <?php if (!empty($treatments)): ?>
                    <ul class="recommendation-list">
                        <?php foreach ($treatments as $treatment): ?>
                            <li><?php echo htmlspecialchars($treatment); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No treatment recommendations available.</p>
                <?php endif; ?>
            </section>

            <!-- Chatbot Section -->
            <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = "module";
                s.async = true;
                s.addEventListener('load', function() {
                    myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2825823-TC9ITKGDVJKH683R/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs';
                document.head.appendChild(s);
            }
        }
    </script>

           
        </div>
    </main>
    <footer>
        <div class="dashboard-container">
            <p>&copy; <?php echo date("Y"); ?> Mental Wellness Platform</p>
        </div>
    </footer>
</body>
</html>
