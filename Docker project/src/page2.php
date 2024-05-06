<!DOCTYPE html>
<html>


<head>

    <title>Student Data</title>

    <style>
        body {

            background: url("photo2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;

            overflow: hidden;
        }

        h1 {
            text-align: center;
            padding: 20px;
            font-size: 18;
            font-weight: 20px;
            color: rgb(173, 143, 106);
        }

        h2 {
            position: relative;
            top: -10px;
            
            color: rgb(224, 188, 145);
            margin: 15px;
            font-size: 20px;

        }

        img {
            border-radius: 500px;

            width: 65px;
            height: 65px;
        }

        h4 {
            position: relative;
            top: -10px;
            left: 10px;
            color: rgb(201, 166, 124);

            font-size: 15px;


        }
        .container{
          display:flex;
          position: relative;
          
          top: 60px;
        
        }
        
      .box{
          border: 3px solid rgb(105, 75, 58); ;
          background: rgba(0,0,0,0.5);
          height: 180%;
          margin: 10px;
          border-radius:10px;
      }
        html {
            scroll-behavior: smooth;
        }
  .submit{
    font-size: 15px;
    font-weight: 500;
    color: black;
    height: 45px;
    width: 10%;
    border: none;
    border-radius: 30px;
    outline: none;
    background: rgb(224, 188, 145);
    cursor: pointer;
    transition: .3s ease-in-out;
    margin: -2px;
    position: relative;
    top:500px;
    left: 1125px;
}
.submit:hover{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
    </style>
</head>

<body>
<div class="nav-button">
          <button class="submit" id="signoutBtn" onclick="signout()">
            Sign Out
          </button>
</div>
    <?php
    $conn = mysqli_connect("mysql", "root", "1234", "Students");
    if (!$conn) {
        // Log the error message
        error_log('MySQL connection error: ' . mysqli_connect_error());
    
        // Output an error message to the user
        die('Failed to connect to MySQL database');
    }
    $sql = "SELECT * FROM StudentInfo";
    $student_data = $conn->query($sql);
    ?>

    <h1>View Students Data</h1>
    <div class="container">
        <?php
        if ($student_data->num_rows > 0) :
            $rowCounter = 1;
            while ($row = $student_data->fetch_assoc()) :
        ?>
                <div class="box" <?= $rowCounter ?>>
                <!-- show data of student from data base -->

                <h2 class="Name"><?= $row['Nmae'] ?></h2>
                <h4 class="ID">ID:<?= $row['studentID'] ?></h4>
                <h4 class="age">Age:<?= $row['age'] ?></h4>
                <h4 class="CGPA">CGPA:<?= $row['CGPA'] ?></h4>
                </div>
        <?php
                $rowCounter++;
            endwhile;
        endif;
        $conn->close();
        ?>
    </div>

    <script>
    document.getElementById("signoutBtn").addEventListener("click", function() {
      window.location.assign ("./index.html");
    });
  </script>

</body>

</html>