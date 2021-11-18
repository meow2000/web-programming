<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <span>Select a destination :</span>
        <br><br>
        <form action="./CheckDistant.php" method="GET">
            <select name="destination" size=5 mulitple>
                <option>Boston</option>
                <option>Dallas</option>
                <option>Miami</option>
                <option>Nashville</option>
                <option>Las Vegas</option>
                <option>Pittsburgh</option>
                <option>Toronto</option>
            </select>
            <br><br>
            <input type="submit" value="Submit"> 
            <input type="reset" value="Reset">
        </form>
</body>
</html>