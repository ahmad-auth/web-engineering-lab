<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 3 | Lab - 08</title>
</head>
<body>
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
</body>
</html>