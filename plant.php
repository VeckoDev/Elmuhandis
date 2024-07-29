<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>معلومات النبات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 20px;
            direction: rtl;
            text-align: right;
        }
        h1, h2 {
            color: #2e8b57;
            text-align: center;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 2em;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .content {
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .plant-info {
            font-size: 1.2em;
            line-height: 1.6;
            color: #555;
        }
        .back-link {
            display: block;
            margin: 20px 0;
            text-align: center;
        }
        .back-link a {
            text-decoration: none;
            color: #2e8b57;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        .back-link a:hover {
            color: #00695c;
        }
    </style>
</head>
<body>
    <h1>معلومات النبات</h1>
    <div class="content">
        <?php
        $plantname = $_GET['plantname'];

        // Simulated plant data (you would retrieve this from a database)
        $plants = [
            'Rose' => 'الوردة هي نوع من أنواع الأزهار...',
            'Tulip' => 'التوليب هو نوع من أنواع الأزهار...'
        ];

        if (array_key_exists($plantname, $plants)) {
            echo "<h2>" . htmlspecialchars($plantname) . "</h2>";
            echo "<p class='plant-info'>" . htmlspecialchars($plants[$plantname]) . "</p>";
        } else {
            echo "<p class='plant-info'>معلومات عن النبات غير متوفرة.</p>";
        }
        ?>
        <div class="back-link">
            <a href="index.html">العودة إلى قائمة النباتات</a>
        </div>
    </div>
</body>
</html>
