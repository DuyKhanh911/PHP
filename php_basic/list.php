

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
        <div class="container">
        <div class="row">
        <h2>create</h2>
        <table class="table">
        
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">categories_id</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require 'connect.php';
            $page = $_GET['page'] ?? 1;
            $perPage = 5;
            $offset = ($page - 1) * $perPage;
            echo $page;
            $sql = "SELECT * FROM artical LIMIT $perPage OFFSET $offset";
            $result = $conn->query($sql);
            while  ($artical=$result ->fetch_object()){
                echo "<tr>
                        <td>$artical->title</td>
                        <td>$artical->content</td>
                        <td>$artical->categories_id</td>
                        <td><a href='edit.php?id=$artical->id'>sua</a></td>
                        <td><button><a href='list.php?id=$artical->id'>xoa</a></button</td>
                        </tr>";  
            }       
            if (isset($_POST['dele'])){
                $sql = "DELETE FROM artical WHERE id = $artical->id ";
                echo "<div> id=$artical->id</div>";
            }
 
        ?>
        </tbody>
        </table>
        <?php
             $sql = "SELECT count(*) as tong from artical";
             $result = $conn->query($sql);
             $artical = $result ->fetch_object();
             $total = $artical->tong;
             $count =ceil($total / $perPage);
                 for ( $i = 1 ; $i<= $count ; $i++){
                     echo "<a href ='list.php?page=$i'>$i  </a>";
                 }
        ?>
        <button name="create"><a href="create.php">Create</a></button>
        <form action="list.php?id=<?php echo $artical->id; ?>" method="post">
            <button name="dele">Dele</a></button>
        </form>
        </div>
        </div>

 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>