<?php

            function createRecord()
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "movieflix_database";

                $con = mysqli_connect($servername, $username, $password, $database);

                if(!$con)
                {
                    die("Please check your connection".mysqli_connect_error());
                }
                else
                {
                    echo("Success!");
                }

                $moviename = $_POST["movie-name"];
                $moviegenre = $_POST["movie-genre"];
                $moviedirector = $_POST["movie-director"];

                $sql = "INSERT INTO movieflix_table (Title, Genre, Director) VALUES('$moviename', '$moviegenre', '$moviedirector')";

                if(mysqli_query($con, $sql))
                {
                    echo("Your entry will be verified and we will get back to you soon");
                }
                else
                {
                    echo("Please check you connection : ". mysqli_connect_error($con));
                }

                mysqli_close($con);

                header('location: index.php');

            }

            if(isset($_POST["create-button"]))
            {
                createRecord();
            }
        ?>