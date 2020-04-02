<!DOCTYPE html>
<html>
<head>
    <title>MovieFlex - CRUD</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main-div">
    <?php require_once 'createData.php'; ?>
    <div>
        <h2>MovieFlix CRUD</h2>
    <?php
        $servername = "localhost" ;
        $username = "root";
        $password = "";
        $database = "movieflix_database";
        
        $con = mysqli_connect($servername, $username, $password, $database);
        $sql = "SELECT * FROM movieflix_table";
        $connect = mysqli_query($con, $sql);
        $rowCount =mysqli_num_rows($connect);

        if($rowCount > 0)
        {
            echo "
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Genre</th>
                            <th>Director</th>
                        <tr>
                    </thead>
            ";
        }
    ?>

        <?php
        while($row = $connect->fetch_assoc()):
        ?>
            <tr>
                <td> <?php echo $row ['ID'] ?></td>
                <td> <?php echo $row ['Title'] ?> </td>
                <td> <?php echo $row ['Genre'] ?> </td>
                <td> <?php echo $row ['Director'] ?> </td>
            </tr>
        <?php endwhile ?>
            </table>  

    </div>

                <div class="content-wrapper">
                    <button id="create-button">Crete Record</button>
                    <button id="update-button">Edit Record </button>
                    <button id="delete-record">Delete Record</button><br/><br/><br/>

                    <form action="index.php" method="POST" id="create-form">
                        <input type="text" placeholder="Movie name" name="movie-name"> <br/> <br/>
                        <input type="text" placeholder="Genre" name="movie-genre"> <br/> <br/>
                        <input type="text" placeholder="Director" name="movie-director"> <br/> <br/> <br/>
                        <input type="submit" value="Submit" name="create-button" class="small-button">
                        <br/> <br/> <br/>
                    </form>

                    <form action="update.php" method="POST" id="update-form">
                        <input type="text" placeholder="Enter record ID" name="update-ID"> <br/> <br/>
                        <input type="text" placeholder="Movie name" name="movie-name"> <br/> <br/>
                        <input type="text" placeholder="Genre" name="movie-genre"> <br/> <br/>
                        <input type="text" placeholder="Director" name="movie-director"> <br/> <br/> <br/>
                        <input type="submit" value="Submit" name="submit-update" class="small-button">
                    </form>

                    <form action="delete.php" method="POST" id="delete-form">
                        <input type="text" placeholder="Enter record ID" name="delete-ID"> <br/>
                        <input type="submit" value="Save" name="delete-button" class="small-button">
                    </form>
            
                </div>
                
                </div>
            </div>
    <script src="script.js"></script>
</body>
</html>