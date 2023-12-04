<?php
$generatedCode = isset($_GET['code']) ? urldecode($_GET['code']) : 'No code provided';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Code</title>
</head>
<body>

    <h2>Generated Code</h2>

    <p><?php echo $generatedCode; ?></p>

</body>
</html>
