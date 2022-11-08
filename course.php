<h1 class="heading">Top Courses </h1>

<section class="course">
<?php 
include 'dbconnect.php';
$sql="SELECT * FROM `courses`Limit 0,5";
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
<div class="all-courses">

    <a href="all_courses.php" class="btn">View All Courses</a>
</div>
<!-- course section -->