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
        <h1 class="heading">All Reviews </h1>
        <?php
include 'dbconnect.php';

echo '<section class="review">';
$found=false;
            $sql="SELECT * FROM `reviews`";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    $found=true;
    $review_cont=$row['review_cont'];
    $rid=$row['review_id'];
    $ruid=$row['user_id'];
    $rating=$row['rating'];
    $sql2="SELECT * FROM `user` WHERE slno='$ruid'";
    $result2= mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
       if($found){
        $review_user=$row2['name'];
        $path="images/profile";
$files=scandir($path);
$count=count($files);
$index=rand(2,($count-1));
$filename=$files[$index];
              echo'<div class="box">
              <div class="students">
                  <div class="students-info">
                  <img src="'.$path.'/'.$filename.'" alt="">
                <div class="info">
                    <h3>'.$review_user.'</h3>
                    <span>Student</span>

                </div>
            </div>
            
        </div>';
        include 'rating.php';
      echo   '<p class="text">
        
        
        
        <i class="fas fa-quote-left"></i>'.$review_cont.'<i class="fas fa-quote-right"></i></p>
    </div>';
       }
}
if(!$found){
    echo'<div class="box">
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

echo'</section>';

?>
<?php  if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
echo '<div class="all-courses reviews-all">
<a href="all_reviews.php" class="btn">All Reviews</a>
<a onclick='."popup('review-popup')".' class="btn bn">Add Review</a>
</div>



<div class="popup-container" id="review-popup">
<div class=" popup">
  <form action="index.php" method="POST">
     <h2><span>Reviews</span>
    <button type="reset" onclick='."popup('review-popup')".'>X</button>
    </h2>
    <textarea style="border:1px solid gray;resize: none; display:flex;" name="review-content" id="" placeholder="Enter Your review Here" cols="30" rows="5"></textarea>
    <div class="review-rating-range">
    <label for="rating">Give Your Rating</label><br />
    <input type="range" id="rating" min="1" max="5" name="rating" list="review-rating" />
    
    <datalist id="review-rating">
      <option value="1" label="1"></option>
      <option value="2" label="2"></option>
      <option value="3" label="3"></option>
      <option value="4" label="4"></option>
      <option value="5" label="5"></option>
    </datalist>
    </div>
   
    <button class="login-btn" type="submit" name="review-submit">Submit</button>
  </form>
</div>
</div>'; } 
else{
    echo '<div class="all-courses reviews-all">
   <a href="all_reviews.php" class="btn">All Reviews</a>
    <a onclick='."popup('login-popup')".' class="btn bn">Login To Review</a>
</div>';
}
?>
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

        <?php include 'footer.php'; ?>
</div>
</body>
</html>