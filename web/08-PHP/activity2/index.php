<?php  
    $data = [
        120,160,62,153,345,128,387,825,666,614,723,163,811,176,732,628,722,733,755,765,794,613,627
    ];
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 2 | Lab 08</title>
</head>
<body>
    <p>Sum: <?php echo array_sum($data); ?></p>
    <p>Average: <?php echo (int) (array_sum($data)/count($data)); ?></p>
    <p>Higest 5: <?php rsort($data); echo json_encode(array_slice($data, 0, 5, true)); ?></p>
    <p>Lowest 5: <?php sort($data); echo json_encode(array_slice($data, 0, 5, true)); ?></p>
</body>
</html>