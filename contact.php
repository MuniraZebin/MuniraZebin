<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munira Zebin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- navbar section starts  -->

    <?php include("./components/navbar.php") ?>

    <!-- navbar section ends -->

    <!-- contact section starts  -->

    <section class="contact">

        <h1 class="heading"> contact <span>me</span> </h1>

        <div class="row">

            <div class="info-container">

                <h1>get in touch</h1>

                <p>Thank you for visiting my website! I'd love to hear from you and connect. Whether you have questions, feedback, or just want to say hello, Please feel free to reach out to me.</p>

                <div class="box-container">

                    <div class="box">
                        <i class="fas fa-map"></i>
                        <div class="info">
                            <h3>address :</h3>
                            <p>Dhaka Cantonment, Dhaka-1206, Bangladesh</p>
                        </div>
                    </div>

                    <div class="box">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <h3>email :</h3>
                            <p>munirazebin229@gmail.com</p>
                        </div>
                    </div>

                </div>

                <div class="share">
                    <a href="https://www.facebook.com/christinajenifer.christinajenifar" target="_blank" class="fab fa-facebook-f"></a>
                    <a href="https://www.linkedin.com/in/munirazebin/" target="_blank" class="fab fa-linkedin"></a>
                    <a href="https://github.com/MuniraZebin" target="_blank" class="fab fa-github"></a>
                    <a href="https://www.instagram.com/zebin_ruhi/" target="_blank" class="fab fa-instagram"></a>
                </div>

            </div>

            <form action="./controller/contactController" method="POST">

                <div class="inputBox">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="number" name="phone" placeholder="Your Phone(optinal)" required>
                </div>

                <div class="inputBox">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>

                <textarea name="message" placeholder="Message" id="" cols="30" rows="10" required></textarea>

                <input type="submit" value="send message" class="btn">
                <?php
                if (isset($_COOKIE["error"])) {
                    echo $_COOKIE["error"];
                }
                ?>
            </form>
        </div>

    </section>

    <!-- contact section ends -->

</body>

</html>