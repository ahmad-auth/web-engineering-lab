<?php 
    $data = [
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
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 1 | Lab - 08</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Total Marks</th>
                <th>Obtained Marks</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d): ?>
                <tr>
                    <td><?php echo $d["Subject"]; ?></td>
                    <td><?php echo $d["Total Marks"]; ?></td>
                    <td><?php echo $d["Obtained Marks"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>