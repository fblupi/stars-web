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
                <h1 class="page-header">Add</h1>
                <form action="script/add.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="distance">Distance (yl):</label>
                        <input type="number" class="form-control" id="distance" min="0">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include 'php/footer.php' ?>

</body>

</html>