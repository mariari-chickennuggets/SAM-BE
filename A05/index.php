<!DOCTYPE html>
<html>
<head>
<title>Islands of Personality</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>


<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Personality</b> Islands</a>
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Islands</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px; position: relative; height: 800px;" id="home">
  <!-- YouTube Video Background -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden;">
    <iframe 
      width="100%" 
      height="100%" 
      src="https://www.youtube.com/embed/GQZPnK3tJYk?autoplay=1&loop=1&mute=1&playlist=GQZPnK3tJYk&controls=0&showinfo=0&modestbranding=1" 
      title="YouTube video player" 
      frameborder="0" 
      allow="autoplay; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen 
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none;">
    </iframe>
  </div>
  
  <!-- Header Content -->
  <div class="w3-display-middle w3-margin-top w3-center" style="z-index: 1; position: relative;">
    <h1 class="w3-xxlarge w3-text-white">
      <span class="w3-padding w3-Peach w3-opacity-min"><b>Maria's</b></span> 
      <span class="w3-hide-small w3-text-light-grey">Personality Islands</span>
    </h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Islands Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Islands of Personality</h3>
    <p>Here are some factors as to why I am me today. Of course not limited to those but that will have to wait.</p>
  </div>

  <!-- Dynamic Content -->
  <div class="w3-row-padding">
<?php
$conn = new mysqli('localhost', 'root', '', 'corememories');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT islandOfPersonalityID, name, shortDescription, image, color FROM islandsofpersonality";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['islandOfPersonalityID'];
        $name = $row['name'];
        $description = $row['shortDescription'] ?? 'No description available.';
        $image = $row['image'] ?? 'https://via.placeholder.com/300x200';
        $color = $row['color'] ?? '#f8f9fa';
        ?>
        <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="card" style="border: 3px solid <?= $color; ?>;">
    <img src="<?= $image ?>" alt="<?= $name ?>">
    <div class="card-content" style="background-color: <?= $color; ?>;">
        <h3><?= $name ?></h3>
        <p><?= $description ?></p>
        <a href="island.php?id=<?= $id ?>" class="theme-button">Explore</a>
    </div>
</div>

        </div>
        <?php
    }
} else {
    echo "<p>No islands found.</p>";
}
$conn->close();
?>
</div>


  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Thoughts on this</h3>
    <p>It's very fun to do. I find myself lacking in time to actually sit and assess myself so throughly like I did now. 
      24 hours a day is indeed long and I better learn how to manage my time better. I had a hard time figuring out what the content of each islandd should be. All I remember from the instructions is the Harry Potter and DOST example. 
      Then the question "how did it become a part of your personality?". I tried to dod it the  way I comprehended it which is usually wrong but i'll get to that
      once I got a hold of someone I can ask and learn to phrase my questions better.
    </p>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Have questions or want to learn more? </p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <textarea class="w3-input w3-section w3-border" placeholder="Message" required name="Message"></textarea>
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> DONT SEND A MESSAGE
      </button>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">W3.CSS</a></p>
</footer>

</body>
</html>
