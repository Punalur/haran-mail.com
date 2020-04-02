<?php
/*
    isset to call a function
    create a connection to the database
    store user input into variables
    setup INSERT query to run
    close the connection
    redirect user to index.php
*/

function insertInfo()
{
    //store database conection in variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "movieflix_database";

    //store connection in one variable
    $connection = mysqli_connect($servername, $username, $password, $database);

    //store user input in variables
    $movieID = $_POST["update-ID"];
    $movieName = $_POST["movie-name"];
    $movieGenre = $_POST["movie-genre"];
    $movieDirector = $_POST["movie-director"];

    //insert query
    $sql = "UPDATE movieflix_table SET Title='$movieName', Genre='$movieGenre', Director='$movieDirector' WHERE ID='$movieID'";

    //Plug in the connection and query
    $updateQuery = mysqli_query($connection, $sql);

    if(!$updateQuery)
        {
            echo("Error : ".$sql.mysqli_error($connection));
        }
    else
        {
            echo("Updated successfully!");
        }

    //close the connection
    mysqli_close($connection);

    //redirect the page
    header("location: index.php");
}


if(isset($_POST["submit-update"]))
{
    insertInfo();
}

?>