
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>sua bai viet</h2>
            <?php
                require 'connect.php';
                $articalId = $_GET['id'] ?? null;
                $sql = "SELECT * FROM artical WHERE id = $articalId";
                $result = $conn->query($sql);
                $artical = $result->fetch_object();
                echo "<h2> $artical->title</h2>";
            ?>
            <div class="col-sm-4 " style="background-color:lavender;">
                 <form action="detail.php" method="post" >
                    <div class="form-group">
                        <label for="title1">Title</label>
                        <input type="text" class="form-control" id="title1" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content1">Content</label>
                        <textarea id="content1" name="content" rows="6" class="form-control">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="categories_id1">Content</label>
                        <input type="number" class="form-control" id="categories_id1" name="categories_id">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">save</button>
                </form>
                <button><a href="list.php">List</a></button>
            </div>        
        </div>
    </div>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>