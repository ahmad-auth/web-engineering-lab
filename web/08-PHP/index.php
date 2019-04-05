<?php 
    $array = [
        [
            "Subject" => "Web Engineering",
            "Total Marks" => 100,
            "Obtained Marks" => 80 
        ],
        [
            "Subject" => "Database Systems",
            "Total Marks" => 100,
            "Obtained Marks" => 90 
        ]
    ];
    $data = [
        120,160,62,153,345,128,387,825,666,614,723,163,811,176,732,628,722,733,755,765,794,613,627
    ];
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab - 08</title>
</head>
<body>
    <h2>Activity 01</h2>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Total Marks</th>
                <th>Obtained Marks</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($array as $d): ?>
                <tr>
                    <td><?php echo $d["Subject"]; ?></td>
                    <td><?php echo $d["Total Marks"]; ?></td>
                    <td><?php echo $d["Obtained Marks"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <h2>Activity 02</h2>
    <hr>
    <p>Sum: <?php echo array_sum($data); ?></p>
    <p>Average: <?php echo (int) (array_sum($data)/count($data)); ?></p>
    <p>Higest 5: <?php rsort($data); echo json_encode(array_slice($data, 0, 5, true)); ?></p>
    <p>Lowest 5: <?php sort($data); echo json_encode(array_slice($data, 0, 5, true)); ?></p>

    <h2>Activity 03</h2>
    <hr>
    <table border="1">
        <tbody>
            <?php for($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <?php for($j = 1; $j <= 5; $j++): ?>
                        <td><?php echo "$i + $j = " . ($i + $j); ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    
    <h2>Activity 04</h2>
    <hr>
    <form method="POST">
        <input type="number" required name="count" value="<?php echo (isset($_POST['count']) ? (int) $_POST['count'] : 10); ?>" />
        <button type="submit">Submit</button>
    </form>
    <table border="1">
        <tbody>
            <?php for($i = 1; $i <= (isset($_POST['count']) ? (int) $_POST['count'] : 10); $i++): ?>
                <tr>
                    <?php for($j = 1; $j <= 5; $j++): ?>
                        <td><?php echo "$i + $j = " . ($i + $j); ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>