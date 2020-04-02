<?php

    function deleteQuery(){

    // Store each database info in variable
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "movieflix_database";

    // Connect to database
        $connection = mysqli_connect($servername, $username, $password, $database);

    // Store user input in variable
        $movieID = $_POST["delete-ID"];

    // Delete data from the database
        $sql = "DELETE FROM movieflix_table WHERE ID='$movieID'";

    // Delete query
        $deleteQuery = mysqli_query($connection, $sql);
    
    // Run the query to delete the data
        if(!$deleteQuery){
            echo "Error :".$sql.mysqli_error($connection);
        }
        else
        {
            echo "Selected record has been deleted!";
        }

    // Close the connection
        mysqli_close($connection);
    
    // Redirect the page to index
        header("location: index.php");
    }

    if(isset($_POST["delete-button"])){
        deleteQuery();
    }

?>