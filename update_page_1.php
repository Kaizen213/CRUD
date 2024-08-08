<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

    <?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        

        $query = "select * from `students` where `id` = '$id' ";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query Failed".mysqli_error());
        
        }
        else{
         
                $row = mysqli_fetch_assoc($result);

               




    }
    }







    ?>

    <?php

                if(isset($_POST['update_students'])){

                    if(isset($_GET['id_new'])){

                        $id_new=$_GET['id_new'];
                    }

                    

                    $f_name = $_POST['f_name'];
                    $l_name = $_POST['l_name'];
                    $age = $_POST['age'];

                    $query = "update `students` set `firstName`='$f_name', `lastName`='$l_name', `age`='$age' where `id`= $id_new ";

                    $result = mysqli_query($connection, $query);

                if(!$result){
                         die("query Failed".mysqli_error());
        
                 }
                else{
         
                header('location:index.php?update_msg= You have successfully updated the data.');
               
    }
}
?>






        <form  action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
            <div class="form-group">
                    <label for="f_name">First Name</label>
                    <input type="text" name="f_name" class="form-control" value="<?php echo $row['firstName']?>">

                </div>

                <div class="form-group">
                    <label for="l_name">Last Name</label>
                    <input type="text" name="l_name" class="form-control" value="<?php echo $row['lastName']?>">

                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" class="form-control" value="<?php echo $row['age']?>">

            </div>
            <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
        </form>

<?php include ('footer.php'); ?>