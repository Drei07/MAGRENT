<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add your styles here */
    </style>
    <title>Numbered List</title>
</head>
<body>

    <ul>
        <!-- Numbers 1 to 200 will be added here dynamically -->
        <script>
            for (var i = 1; i <= 200; i++) {
                document.write('<li><i class="icon-' + i + '"></i></li>');
            }
        </script>
    </ul>

</body>
</html>
