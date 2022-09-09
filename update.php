<?php 

   include "config.php";
   $CourseCode ="";
   $CourseTitle ="";
   $Units ="";

 //updating data to the database
    if (isset($_POST['update'])) {

        $user_id = $_POST['id'];

        $CourseCode = $_POST['CourseCode'];

        $CourseTitle = $_POST['Course Title'];

        $Units = $_POST['Units']; 

        $sql = "UPDATE 'coursereg' SET  'CourseCode'='$CourseCode','CourseTitle'='$CourseTitle','Units'='$Units' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

  //fetching data from the database
  if (isset($_GET['id'])) {

      $user_id = $_GET['id']; 

      $sql = "SELECT * FROM coursereg WHERE 'id'='$user_id'";

      $result = $conn->query($sql); 

        if ($result->num_rows > 0) {        

            while ($row = $result->fetch_assoc()) {
               $id = $row['user_id'];

               $CourseCode = $row['CourseCode'];

               $CourseTitle = $row['CourseTitle'];

               $Units = $row['Units'];

            } 
        }
    }

    ?>

        <h2> Update Course</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

          <fieldset>

            Course Code:<br>

            <input type="text" name="CourseCode" value="<?php echo $CourseCode; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Course Title:<br>

            <input type="text" name="CourseTitle" value="<?php echo $CourseTitle; ?>">

            <br>

            Units:<br>

            <input type="number" name="Units" value="<?php echo $Units; ?>">

           
            <br><br>
            <!-- <button onclick="location.href='view.php'">Update</button> -->
            <input type="submit" value="Update" name="Update">

          </fieldset>

        </form> 

        </body>

        </html> 

        <?php
            //  header('Location: view.php');
        ?> 

    
 