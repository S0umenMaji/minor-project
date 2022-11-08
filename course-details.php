<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <?php include 'header.php' ?>

        <h1 class="heading">Courses Details </h1>
        <?php
        include 'dbconnect.php';
        $course_id=$_GET['cid'];
        $sql="SELECT * FROM `courses` WHERE `course_id`='$course_id'";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
           
            $course_name=$row['name'];
            $course_desc=$row['description'];
            $course_path=$row['path'];
            $course_price=$row['price'];
            if($course_price==0){
                $course_price="Free";
            }
            else{
                $course_price="₹".$course_price;
            }

       echo' <section class="course-details">
            <div class="course-cont">
                
                <h2 class="course-heading">'.$course_name.'</h2>
                <h4 class="course-description">Course Description</h4>
                <p>'.$course_desc.'</p>
            </div>
            <div class="course-img">
            <img src="'.$course_path.''.$course_id.'.jpg" alt="">
            </div>
        </section>
       
        <section class="course-details">
            <div class="course-cont">
                <h2 class="course-heading">Requirements</h2>
                <!-- <h4 class="course-description">Requirements</h4> -->

                <ul>
                    <li>Computer/Laptop</li>
                    <li>Internet Connection</li>
                    <li>No programming experience needed - I'.'ll teach you everything you need to know</li>
                    <li>No paid software required</li>
                    <li>I'.'ll walk you through, step-by-step how to get all the software installed and set up</li>
                </ul>

            </div>
            <div class="course-img course">
                <div class="box">
                    <p class="course-price">Course Price</p>
                    <p class="course-price">'.$course_price.' <small>100% off<small></p>';
                }
                ?>
        <div class="course-includes">
            <h4>This Course Includes:-</h4>
            <ul>
                <li>5 hours on-demand video</li>
                <li>40 articles</li>
                <li>9 downloadable resources</li>
                <li>3 live projects</li>
                <li>Full lifetime access</li>
                <li>Certificate of completion</li>
            </ul>
        </div>
        <div class="buttons-cart">
            <a href="#" class="btn">Add To Cart</a>
            <a href="#" class="btn bn">Buy Now</a>
        </div>
        <p class="text-center">30 days Money Back Gurantee</p>
    </div>
    </div>

    </section>

    <h2 class="course-heading-review">Course Review</h2>
    <section class="review course-review">
        <?php
             include 'dbconnect.php';
            $cour_id=$_GET['cid'];
             $found=false;
             $sql3="SELECT * FROM `course_review` WHERE `course_id`='$cour_id'";
                $result3=mysqli_query($conn,$sql3);
                while ($row = mysqli_fetch_assoc($result3)) {
                    $found=true;
                 $path="images/profile";
                    $files=scandir($path);
                    $count=count($files);
                    $index=rand(2,($count-1));
                    $filename=$files[$index];
                    $user_id=$row['user_id'];
                    $rating=$row['rating'];
                    $review_desc=$row['course_rev'];
                    $sql4="SELECT * FROM `user` WHERE `slno`='$user_id'";
                    $result4=mysqli_query($conn,$sql4);
                    $row4=mysqli_fetch_assoc($result4);
                    $user_name=$row4['name'];

    echo '
    <div class="box">
        <div class="students">
            <div class="students-info">
            <img src="'.$path.'/'.$filename.'" alt="">
                <div class="info">
                    <h3>'. $user_name.'</h3>
                    <span>Student</span>

                </div>
            </div>
            
        </div>';
        include 'rating.php';
       echo ' <p class="text"><i class="fas fa-quote-left"></i>'.$review_desc.'<i class="fas fa-quote-right"></i></p>
    </div>';
            
        }
        if(!$found){
            echo '<div class="box">
            <div class="students">
                <div class="students-info">
                
              <div class="info text-center">
                 <h3 class="">No Reviews Found</h3>
                  <span></span>

              </div>
          </div>
          
      </div>
      <p class="text"><i class="fas fa-quote-left"></i>Be the First one to give Review<i class="fas fa-quote-right"></i></p>
  </div>';
        }
    ?>
    </section>
    <?php  
        $course_id=$_GET['cid'];
    if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
echo '<div class="all-courses reviews-all">
<a onclick='."popup('course-review-popup')".' class="btn bn">Add Review</a>
</div>



<div class="popup-container" id="course-review-popup">
<div class=" popup">
  <form action="index.php" method="POST">
     <h2><span>Reviews</span>
    <button type="reset" onclick='."popup('course-review-popup')".'>X</button>
    </h2>
    <select id="course-id-input" name="course-id-input">
      <option  value='."$course_id".'>'.$course_id.'</option>
    </select>
    <textarea style="border:1px solid gray;resize: none; display:flex;" name="course-review-content" id="" placeholder="Enter Your review Here" cols="30" rows="5"></textarea>
    <br>
    <div class="review-rating-range">
    <label for="rating">Give Your Rating</label><br>
    <input type="range" id="rating" min="1" max="5" name="course-rating" list="review-rating" />
    
    <datalist id="review-rating">
      <option value="1" label="1"></option>
      <option value="2" label="2"></option>
      <option value="3" label="3"></option>
      <option value="4" label="4"></option>
      <option value="5" label="5"></option>
    </datalist>
    </div>
   
    <button class="login-btn" type="submit" name="course-review-submit">Submit</button>
  </form>
</div>
</div>'; } 
else{
    echo '<div class="all-courses reviews-all">
    <a onclick='."popup('login-popup')".' class="btn bn">Login To Review</a>
</div>';
}
?>



    <?php include 'footer.php' ?>
    </div>
    <script src="script.js"></script>
    <script>
function popup(popup_name) {
    get_popup = document.getElementById(popup_name);
    if (get_popup.style.display == "flex") {
        get_popup.style.display = "none";

    } else {
        get_popup.style.display = "flex";
    }
}
</script>
<script>
var close = document.getElementsByClassName("closebtn-alert");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function() {
            div.style.display = "none";
        }, 600);
    }
}
</script>
</body>

</html>