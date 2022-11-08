<?php

$showError="false";
if(isset($_POST['register'])){
    include 'dbconnect.php';
    $full_name=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $existsSql="SELECT * FROM `user` WHERE email='$email'";
    $resultSQL=mysqli_query($conn,$existsSql);
    $numRow=mysqli_num_rows($resultSQL);
    if($numRow>0){
        header("Location: index.php?signupemailmatch=true");
    }else{
        if($password==$cpassword)
            {
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `user` (`name`,`email`,`password`,`time`) VALUES( '$full_name','$email','$hash',current_timestamp());";
                $result=mysqli_query($conn,$sql);
                if($result){
                    $showError=true;
                    header("Location: index.php?signupsuccess=true");
                }
            }
            else
            {
                header("Location: index.php?signupfailed=true");
            }
        }
    }
    if(isset($_POST['review-submit'])){
        include 'dbconnect.php';
        $review_content=$_POST['review-content'];
        $review_rating=$_POST['rating'];
        $reviewer_id= $_SESSION['session_user_id'];
        echo $reviewer_id;
        $sql2="INSERT INTO `reviews` (`review_cont`,`user_id`,`rating`,`timestamp`)values('$review_content','$reviewer_id','$review_rating',current_timestamp());";
        $result2=mysqli_query($conn,$sql2);
        if($result2)
        {
            header("Location: index.php?reviewsuccess=true");
        }else{
            header("Location: index.php?reviewfailed=true");
        }
     }
?>
<?php
 if(isset($_POST['course-review-submit'])){
    include 'dbconnect.php';
    $review_content=$_POST['course-review-content'];
    $review_rating=$_POST['course-rating'];
    $reviewer_id= $_SESSION['session_user_id'];
    $cour_id=$_POST['course-id-input'];
    echo $cour_id;
    $sql2="INSERT INTO `course_review` (`course_id`,`user_id`,`rating`,`course_rev`,`timestamp`)values('$cour_id','$reviewer_id','$review_rating','$review_content',current_timestamp());";
    $result2=mysqli_query($conn,$sql2);
    // if($result2)
    // {
    //     header("Location: course-details.php?cid=$cour_id&reviewsuccess=true");   
    // }else{
    //     header("Location: course-details.php?cid=$cour_id&reviewfailed=true");
    // }

}


?>

<?php
if(isset($_POST['login'])){
    include 'dbconnect.php';
    $log_email=$_POST['login_email'];
    $log_password=$_POST['login_password'];
    $sql="SELECT * FROM `user` WHERE `email`='$log_email'";
    $result=mysqli_query($conn,$sql);
    $numRow=mysqli_num_rows($result);
    if($numRow==1){
        $row=mysqli_fetch_assoc($result);
        $user_name=$row['name'];
        $user_id=$row['slno'];
        if(password_verify($log_password,$row['password'])){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['session_email']=$log_email;
            $_SESSION['session_user']=$user_name;
            $_SESSION['session_user_id']=$user_id;
            // header("Location: index.php");
             echo '<script>window.location.href="index.php"</script>';
        }else{
            header("Location: index.php?loginfailed=true");
        }
    }else{
        header("Location: index.php?emaildoesnotexists=true");
    }
}




?>