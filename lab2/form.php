<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="response.php" method="post">
        <div class="m-input-section">
            Name: 
            <input type="text" name="Name" id="Name" placeholder="Enter your name">
            <br>
            <br>
            Student number: 
            <input type="text" name="std_id" id="std_id" placeholder="Enter your id">
        </div>
        <br> 
        <div class="m-combobox">
            Gender: 
            <select class="m-combobox" name="gender" id="gender">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <input class="submit" type="submit" value="submit">
    </form>
    <div>
        <?php
        echo "Hello, $Name <br>";
        echo "Gender: $gender <br>";
        echo "id: $std_id <br>";   
        ?>
    </div>
    
</body>
</html>