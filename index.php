<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PadhloBeta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <?php include'header.php' ?>



        <!-- navbar -->
        <!-- body content -->

        <section class="home">
            <div class="content">
                <h3>Get The Best Online Course</h3>
                <p>And Study from the Best Teachers <br> Around the Globe.</p>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                    echo '<a href="all_courses.php" class="btn">Explore Courses</a>';
                }
                else{
                    echo '<a href="all_courses.php" class="btn">Explore Courses</a>
                    <button class="btn bn" onclick='."popup('register-popup')".'>Register Today</button>
                    ';
                }
                

                


                
                ?>
                </div>
            <div class="image"><img src="images/img-b.png" alt=""></div>
        </section>
        <!-- body content -->


        <!-- about us -->
        <div id="about-us">
            <?php include'about.php' ?>

        </div>

        <!-- about us -->



        <!-- course section -->
        <div id="courses">
            <?php include'course.php' ?>

        </div>
        <!-- gallery -->

        <!-- <div id="gallery">

    <?php include'gallery.php' ?> 
</div> -->
        <div id="reviews">

            <?php include'review.php' ?>
        </div>
        <div id="members">
                    
                <?php include'members.php' ?>
        </div>
        <div id="contact-us">

            <?php include'contact.php' ?>
        </div>


        <!-- footer -->
        <?php include'footer.php' ?>
        <!-- footer -->
    </div>
    <script src="script.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
    </script>
</body>

</html>