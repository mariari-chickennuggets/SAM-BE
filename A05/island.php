<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Island of Personality</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            animation: fadeIn 1s ease-in-out;

        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        p {
            text-align: center;
            font-size: 1.2em;
        }
        .w3-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .w3-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .content-img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow: hidden;
        }
        .content-img img {
            width: 100%;
            height: auto;
        }
        .content-text {
            padding: 10px;
            background: #f8f8f8;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
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
            $conn = new mysqli('localhost', 'root', '', 'corememories');
            if ($conn->connect_error) {
                die("<p style='text-align:center; color:red;'>Connection failed: " . $conn->connect_error . "</p>");
            }

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
                        echo "<div class='w3-col l4 m6 w3-margin-bottom'>";
                        echo "<div class='w3-card'>";
                        echo "<div class='content-img' style='background-color: {$content['color']}'>";
                        if (!empty($content['image'])) {
                            echo "<img src='{$content['image']}' alt='{$content['content']}'>";
                        } else {
                            echo "<img src='placeholder.jpg' alt='No image available'>";
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
