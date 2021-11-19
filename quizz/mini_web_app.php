<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Mini application<h1>
    </div>
    <div>
        <form action="Store_to_database.php">
            <div>
                <label for="name">Choose a name: </label>
                <select name="name" >
                    <option value="Kwame">Kwame</option>
                    <option value="Ama">Ama</option>
                    <option value="William">William</option>
                    <option value="Grace">Grace</option>
                </select>
            </div>
            <br><br>
            <div>
                <label for="preferences">list of preferences: </label>
                <select multiple name="preferences">
                    <option value="Football">Football</option>
                    <option value="Banku">Banku</option>
                    <option value="Rice">Rice</option>
                    <option value="Waakye">Waakye</option>
                </select>
            </div>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    
</body>
</html>