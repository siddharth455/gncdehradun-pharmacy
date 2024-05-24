<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Pie Chart Example</title>
    <style>
        .container {
            text-align: center;
            margin: 20px;
        }
        #myChart {
            max-width: 600px;
            height: 400px;
            margin: 20px auto;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <h2>Publication Book Years</h2>
        <canvas id="myChart"></canvas>

        <?php
        $data = [
            '2023' => 30,
            '2022' => 35,
            '2021' => 60,
            '2020' => 22,
            '2019' => 8
        ];
        ?>

        
    </div>
</body>
</html>
