<?php

            function createRecord()
            {
            // Store each database info in variable
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "movieflix_database";

            // Connect to database
                $con = mysqli_connect($servername, $username, $password, $database);

                if(!$con)
                {
                    die("Please check your connection".mysqli_connect_error());
                }
                else
                {
                    echo("Success!");
                }
            
            // Store user input in variable
                $moviename = $_POST["movie-name"];
                $moviegenre = $_POST["movie-genre"];
                $moviedirector = $_POST["movie-director"];

            // Insert data to database
                $sql = "INSERT INTO movieflix_table (Title, Genre, Director) VALUES('$moviename', '$moviegenre', '$moviedirector')";
            
                // Run the query
                if(mysqli_query($con, $sql))
                {
                    echo("Your entry will be verified and we will get back to you soon");
                }
                else
                {
                    echo("Please check you connection : ". mysqli_connect_error($con));
                }
            
            //Close the connection
                mysqli_close($con);
            
            //Redirect to index page
                header('location: index.php');

            }

            if(isset($_POST["create-button"]))
            {
                createRecord();
            }
        ?>
