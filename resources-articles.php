<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Resources & Articles</title>
    <link rel="stylesheet" href="resources-css.css">
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
        <h2>Mental Health Resources & Articles</h2>
        <p>Find expert-written guides and self-help materials to improve your mental well-being.</p>
    </section>

    <!-- Featured Articles -->
    <section class="articles">
        <h2>Featured Articles</h2>
        <div class="article-list">
            <div class="article-card">
                <img src="ManagingAnxiety.jpg" alt="Managing Anxiety">
                <h3>Managing Anxiety: Tips & Strategies</h3>
                <p>Learn how to manage and reduce anxiety with simple and effective strategies.</p>
                <a href="article1.php">Read More</a>
            </div>

            <div class="article-card">
                <img src="BurnoutPrevention&Recovery.jpg" alt="Burnout Prevention">
                <h3>Burnout Prevention & Recovery</h3>
                <p>Understand burnout, its causes, and steps to recover and maintain balance.</p>
                <a href="article2.php">Read More</a>
            </div>

            <div class="article-card">
                <img src="sleep.jpg" alt="Importance of Sleep">
                <h3>Why Sleep is Crucial for Mental Health</h3>
                <p>Discover the link between sleep and mental health and how to improve sleep quality.</p>
                <a href="article3.php">Read More</a>
            </div>
        </div>
    </section>

    <!-- Self-Help Guides -->
    <section class="guides">
        <h2>Self-Help Guides</h2>
        <ul>
            <li><a href="guide-stress-management.php">📖 Stress Management Techniques</a></li>
            <li><a href="guide-mindfulness.php">🧘 Mindfulness & Meditation for Beginners</a></li>
            <li><a href="guide-coping-skills.php">🛠️ Coping Skills for Emotional Well-being</a></li>
            <li><a href="guide-self-care.php">💆 The Importance of Self-Care</a></li>
            <li><a href="guide-cbt.php">🧠 Understanding Cognitive Behavioral Therapy (CBT)</a></li>
        </ul>
    </section>

    <!-- Video & Audio Resources -->
    <section class="media">
    <h2>Watch & Listen</h2>
    <div class="media-list">
        <!-- YouTube Video 1 -->
        <div class="media-item">
            <a href="https://youtu.be/6p_yaNFSYao?si=XJcDMiKNRJZvzFjj" target="_blank">
                <img src="https://img.youtube.com/vi/2F8VZlzZKZc/0.jpg" alt="Mindfulness Meditation">
            </a>
            <p>Mindfulness Meditation for Beginners</p>
        </div>

        <!-- YouTube Video 2 -->
        <div class="media-item">
     
            <a href="https://youtu.be/bsaOBWUqdCU?si=AlJBdAF4C_sLO4HI" target="_blank">
                <img src="https://img.youtube.com/vi/EBfP5jF3N2o/0.jpg" alt="Reduce Anxiety">
            </a>
            <p>How to Reduce Anxiety & Stress</p>
        </div>

        <!-- Audio File -->
    s
    </div>
</section>


    <!-- Community Discussion -->
    <section class="community">
        <h2>Join the Discussion</h2>
        <p>Share your thoughts and experiences with others.</p>
        <a href="community-support.php" class="btn">Visit Community</a>
    </section>

    <footer>
        <p>&copy; 2025 Mental Wellness Platform. All rights reserved.</p>
    </footer>

</body>
</html>
