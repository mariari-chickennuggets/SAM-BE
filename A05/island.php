<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Island Content</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0; 
            color: #333;
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
            animation: fadeIn 1s ease-in-out;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        h1 {
            font-family: 'Fredoka One', sans-serif;
            text-align: center;
            font-size: 3em;
            margin-bottom: 20px;
            color: #FFC300; 
            text-shadow: 2px 2px #FF5733;
        }
        p {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 30px;
            color:rgb(226, 237, 245);
        }
        .w3-card {
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            border-radius: 10px;
        }
        .w3-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .content-img img {
            width: 100%;
            height: auto;
            transition: transform 0.3s;
        }
        .content-img:hover img {
            transform: scale(1.1);
        }
        .content-text {
            padding: 20px;
            background: #fff;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            text-align: center;
        }

        .content-text p {
            font-family: 'Poppins', sans-serif;
            color: #34495E; 
        }
        .joy {
            background-color: #FFEB3B;
        }
        .sadness {
            background-color: #2196F3;
        }
        .anger {
            background-color: #F44336;
        }
        .fear {
            background-color: #9C27B0;
        }
        .disgust {
            background-color: #4CAF50;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .w3-card {
            animation: slideIn 0.6s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);

            $islandSql = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = $id";
            $islandResult = $conn->query($islandSql);

            $contentSql = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = $id";
            $contentResult = $conn->query($contentSql);

            if ($islandResult->num_rows > 0) {
                $island = $islandResult->fetch_assoc();
                echo "<h1>{$island['name']}</h1>";
                echo "<p>{$island['longDescription']}</p>";

                echo "<div class='w3-row-padding'>";
                if ($contentResult->num_rows > 0) {
                    while ($content = $contentResult->fetch_assoc()) {
                        $emotionClass = '';
                        switch ($content['color']) {
                            case 'yellow': $emotionClass = 'joy'; break;
                            case 'blue': $emotionClass = 'sadness'; break;
                            case 'red': $emotionClass = 'anger'; break;
                            case 'purple': $emotionClass = 'fear'; break;
                            case 'green': $emotionClass = 'disgust'; break;
                        }
                        echo "<div class='w3-col l4 m6 w3-margin-bottom'>";
                        echo "<div class='w3-card $emotionClass'>";
                        echo "<div class='content-img'>";
                        if (!empty($content['image'])) {
                            echo "<img src='img/{$content['image']}' alt='{$content['content']}'>";
                        } else {
                            echo "<img src='img/placeholder.jpg' alt='No image available'>";
                        }
                        echo "</div>";
                        echo "<div class='content-text'>";
                        echo "<p>{$content['content']}</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No contents found for this island.</p>";
                }
                echo "</div>";
            } else {
                echo "<p>Island not found.</p>";
            }

            $conn->close();
        } else {
            echo "<p>No island selected.</p>";
        }
        ?>
    </div>
</body>
</html>
