<?php
    include './database.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="h-100 w-100 d-flex align-items-center mt-5">

        <form class="w-75 m-auto " action="" method="post"> 
            <h3 class="text-center text-secondary">Student Information</h3>
            <div class="d-flex justify-content-end mb-3">
                <a href="./insert.php" class="btn btn-primary ml-auto">Add new</a>
            </div>
        
            <table class="table table-striped table-light">
                <thead>
                    <tr class="table-dark">
                        <th>ID</th>
                        <th class="w-25">Name</th>
                        <th class="w-25">Email</th>
                        <th class="w-25">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $select = "SELECT * FROM students";
                        $sql = mysqli_query($connect,$select);
                        while($row=mysqli_fetch_assoc($sql)){
                            // print_r($row);
                    ?>
                        <tr>
                            <th><?php echo $row['id'] ?></th>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <a class="text-primary" href="edit.php?ID=<?php echo $row['id'] ?>">Edit&nbsp;<i class="fa-solid fa-pen-to-square"></i></a>&numsp;&numsp;
                                <a class="text-danger" href="delete.php?id=<?php echo $row['id']?>">Delete&nbsp;<i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                    ?>

                    
                </tbody>
            </table>
            
        </form>
    </div>
</body>
</html>