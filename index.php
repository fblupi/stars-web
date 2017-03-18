<!DOCTYPE html>
<html lang="en">

<?php include 'php/header.php' ?>

<body>

    <?php include 'php/navbar.php' ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List of stars</h1>

                <?php
                
                include_once "php/script/dbConnection.php";

                $conn = dbConnect();
                $sql = "SELECT * FROM star;";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo '<ul>';
                    while ($star = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $star['name'] . ' (' . $star['distance'] . ' ly)</li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'There are no stars yet. You can add a new star <a href="add.php">here</a>.';
                }

                ?>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include 'php/footer.php' ?>

</body>

</html>