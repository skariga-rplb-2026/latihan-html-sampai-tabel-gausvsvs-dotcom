<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suhu</title>
</head>
<body>
    <?php 
    function kelvin($celcius)
    {
        $k = 273.15 + $celcius;
        return $k;
    }
    function fahrenheit($celcius)
    {
        $f = 32 + 1.8 * $celcius;
        return $f;

    }
    
    ?>
</body>
</html>