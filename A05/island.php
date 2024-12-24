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
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/bg.jpg') no-repeat center center/cover;
            animation: fadeIn 1s ease-in-out;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px 20px 50px;
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
            color: #e2edf5;
        }

        .w3-card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .w3-card:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .content-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .content-img:hover img {
            transform: scale(1.1);
        }
        .content-text {
            padding: 15px;
            text-align: center;
            color: #fff;
            font-family: "EB Garamond", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .w3-row-padding {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .w3-col {
            flex: 1 1 calc(33.333% - 40px);
            max-width: calc(33.333% - 40px);
        }

        @media (max-width: 768px) {
            .w3-col {
                flex: 1 1 calc(50% - 40px);
                max-width: calc(50% - 40px);
            }
        }

        @media (max-width: 480px) {
            .w3-col {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }

        .w3-button {
            padding: 10px 20px;
            margin: 40px auto;
            display: block;
            max-width: 200px;
            text-align: center;
            background-color: #FFC300;
            color: #333;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .w3-button:hover {
            background: #FFB300;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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
                    $colorToClass = [
                        'yellow' => 'joy',
                        'blue' => 'sadness',
                        'red' => 'anger',
                        'purple' => 'fear',
                        'green' => 'disgust'
                    ];

                    while ($content = $contentResult->fetch_assoc()) {
                        $emotionClass = $colorToClass[$content['color']] ?? '';
                        echo "<div class='w3-col'>";
                        echo "<div class='w3-card $emotionClass'>";
                        echo "<div class='content-img'>";
                        $imgSrc = !empty($content['image']) ? "img/{$content['image']}" : "img/placeholder.jpg";
                        echo "<img src='$imgSrc' alt='{$content['content']}'>";
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
        <a href="index.php" class="w3-button">Back to Home</a>
    </div>
</body>
</html>
