<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Islands of Personality</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Indie+Flower&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home"
                style="font-family: 'Poppins', serif; font-weight: 400; font-style: normal;"><b>My Personality
                    Islands</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#projects">Islands</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <button id="modeToggle" class="btn btn-outline-primary">Dark Mode</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px; position: relative; height: 800px;"
        id="home">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden;">
            <iframe width="100%" height="100%"
                src="https://www.youtube.com/embed/OWcCPIXUAo8?autoplay=1&loop=1&mute=1&si=XqLl60Jjq_IKlhhC&amp;&controls=0&showinfo=0&modestbranding=1"
                title="YouTube video player" frameborder="0"
                allow="autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none;"></iframe>
        </div>
        <div class="w3-display-middle w3-margin-top w3-center" style="z-index: 1; position: relative;">
            <h1 class="w3-xxlarge w3-text-white">
                <span class="w3-padding w3-opacity-min"
                    style="font-family: 'Averia Serif Libre', serif; font-weight: 300; font-style: normal;"><b>Who
                        is</b></span>
                <span class="w3-text-light-grey"
                    style="font-family: 'Berkshire Swash', serif; font-weight: 400; font-style: normal;">Maria?</span>
            </h1>
        </div>
    </header>

    <div class="w3-content w3-padding" style="max-width:1564px">
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Islands of Personality</h3>
            <p>Here are some factors as to why I am me today. Of course not limited to those but that will have to wait.
            </p>
        </div>

        <div class="row g-4">
            <?php
            $sql = "SELECT islandOfPersonalityId, name, shortDescription, image, color FROM islandsOfPersonality";
            $result = $conn->query($sql);
         
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['islandOfPersonalityId'];
                    $name = $row['name'] ?? 'Unnamed Island';
                    $description = $row['shortDescription'] ?? 'No description available.';
                    $image = "img/" . ($row['image'] ?? 'meme.gif');
                    $color = $row['color'] ?? '#f8f9fa';
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100 d-flex flex-column" style="border: 3px solid <?= $color ?>;">
                    <img src="<?= $image ?>" class="card-img-top" alt="<?= $name ?>"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column" style="background-color: <?= $color ?>;">
                        <h5 class="card-title"><?= htmlspecialchars($name) ?></h5>
                        <p class="card-text flex-grow-1"><?= htmlspecialchars($description) ?></p>
                        <a href="island.php?id=<?= $id ?>" class="themeButton">More</a>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<p>No islands found.</p>";
            }
            ?>
        </div>

        <div class="w3-container w3-padding-32" id="about">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Thoughts on this</h3>
            <p>It's very fun to do. I find myself lacking in time to actually sit and assess myself so thoroughly...</p>
        </div>

        <div class="w3-container w3-padding-32" id="contact">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
            <form action="/actionPage.php" target="_blank">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
                <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="email">
                <textarea class="w3-input w3-section w3-border" placeholder="Message" required
                    name="message"></textarea>
                <button class="w3-button w3-black w3-section" type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <footer class="text-center bg-dark text-white py-3">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
                class="text-success">W3.CSS</a></p>
    </footer>


    <script>
    const modeToggle = document.getElementById('modeToggle');
    const body = document.body;

    let isDarkMode = false;

    modeToggle.addEventListener('click', () => {
        isDarkMode = !isDarkMode;
        body.classList.toggle('dark-mode', isDarkMode);
        modeToggle.textContent = isDarkMode ? 'Light Mode' : 'Dark Mode';
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>