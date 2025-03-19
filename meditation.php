<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditation Therapy</title>
    <link rel="stylesheet" href="meditation.css">
</head>
<body>

<header>
    <h1>Meditation Therapy</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="resources-articles.php">Resources</a></li>
            <li><a href="therapist-consultation.php">Consult a Therapist</a></li>
            <li><a href="community-support.php">Community</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Guided Meditation Section -->
    <section class="guided-meditation">
        <h2>Guided Meditation Sessions</h2>
        <p>Follow these expert-led meditation sessions to improve focus, reduce stress, and boost mindfulness.</p>
        <div class="media-container">
            <div class="media-item">
                <iframe src="https://www.youtube.com/embed/inpok4MKVLM" allowfullscreen></iframe>
                <p>10-Minute Mindfulness Meditation</p>
            </div>

            <div class="media-item">
                <iframe src="https://www.youtube.com/embed/ZToicYcHIOU" allowfullscreen></iframe>
                <p>Deep Breathing Relaxation Exercise</p>
            </div>
        </div>
    </section>



    <!-- Breathing Exercise -->
    <section class="breathing-exercise">
        <h2>Breathing Exercises</h2>
        <p>Practice this simple breathing technique to relax and clear your mind.</p>
        <button onclick="startBreathingExercise()" class="btn" >Start Exercise</button>
        <div id="breathing-guide"></div>
    </section>
</main>

<footer>
    <p>&copy; 2025 YourWebsite. All Rights Reserved.</p>
</footer>

<script>
    function startBreathingExercise() {
        const guide = document.getElementById("breathing-guide");
        guide.innerHTML = "Inhale... Hold... Exhale... (Repeat for 5 minutes)";
        guide.style.fontSize = "20px";
        guide.style.marginTop = "10px";
    }
</script>

</body>
</html>
