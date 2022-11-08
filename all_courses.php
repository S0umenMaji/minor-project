<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <?php include 'header.php' ?>
        <h1 class="heading">All Courses </h1>
        <!-- <div class="all_course">
           
            // include 'dbconnect.php';
            // $sql = "SELECT * FROM `courses`";
            // $result = mysqli_query($conn, $sql);
            // while ($row = mysqli_fetch_assoc($result)) {
            //     $course_id = $row['course_id'];
            //     $course_name = $row['name'];
            //     $course_desc = $row['description'];
            //     $course_path = $row['path'];
            //     $rating = $row['rating'];
            //     echo '  
            //     <p>
            //         <img src="' . $course_path . '' . $course_id . '.jpg" alt="" style="width:170px;height:170px;margin-right:15px;float:left;">
            //         '.$course_desc.'

            //     </p> -->

                
            <section class="course">
<?php 
include 'dbconnect.php';
$sql="SELECT * FROM `courses`";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
$course_id=$row['course_id'];
$course_name=$row['name'];
$course_desc=$row['description'];
$course_path=$row['path'];
$rating=$row['rating'];
$duraton=$row['duration'];
  echo'  <div class="box">
        <span class="amount">New</span>
        <img src="'.$course_path.''.$course_id.'.jpg" alt="">';
        
           include 'rating.php';
        echo '
        <h3>'.$course_name.'</h3>
        <p>'.substr($course_desc,0,150).'....</p>
        <a href="course-details.php?cid='.$course_id.'" class=btn>Learn More</a>
        <div class="icons">
            <!-- <p><i class="far fa-clock"></i>2 hours</p> -->
            <p><i class="fa-solid fa-calendar"></i>'.$duraton.' months</p>
            <!-- <p><i class="far fa-calender"></i></p> -->
        </div>
    </div>';
       }
    ?>
</section>


        <?php include 'footer.php'; ?>
</div>
</body>
</html>