<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/contact-us.css" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a84b1d6a92.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="sidebar">
            <div class="icons">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <h2>WDC Creative</h2>

        </nav>
        <nav class="navbar">
            <div class="nav-links">
                <a href="#">About us</a>
                <a href="#">Services</a>
                <a href="#">Work</a>
                <a href="#">Sustainable design</a>
                <a href="#">Insights</a>
                <a href="#" class="active">Contact</a>
            </div>

            <!-- <i class="fa-solid fa-bars"></i> -->
            <form action="#" class="search">
                <input type="text" placeholder="Search WDC Creative" class="search-bar">
                <i class="fa-solid fa-magnifying-glass"></i>

            </form>
        </nav>
        <section class="contact-header">
            <h1>Let's talk.</h1>
            <p>
                If you'd like to discuss about your design needs, please get in touch.
            </p>
        </section>
    </header>
    <section class="contact-container">
        <div class="contact-wrapper">
            <h2>How can we help you?</h2>
            <p>We'll get back to you with a response as soon as possible.</p>
            <form method="post" action="index.php" class="contact-form">
                <input type="text" placeholder="Full name" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" required class="text-field" />
                <input type="text" placeholder="Email address" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required class="text-field" />
                <textarea placeholder="Your message" name="message" required class="contact-form-textarea"><?= isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                <label for="">*Your personal information will be used to contact you in relation to this enquiry
                    only and won’t be used for marketing purposes or shared with third parties.</label>
                <div class="checkbox-container">
                    <input type="checkbox" name="terms" value="Yes">
                    <label for="terms">I have read and accepted the <a href="#">Privacy Policy</a></label>
                </div>
                <p style="color: red"><?= isset($errorMessage) ? $errorMessage : '' ?></p>
                <p style="color: #39bd5c"><?= isset($isMailSent) ? 'Your message has been sent' : '' ?></p>
                <input type="submit" class="submit" name="submit" value="Submit">
                <p class="address"><strong>WDC Creative <br></strong>1st Floor, Studio 14,<br>14 Little Lever Street, <br>Manchester UK, <br>M1 1HR</p>
            </form>
        </div>
        <div class="map-div">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.2378950923476!2d-2.235988123025864!3d53.4820790645585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1b8c134e395%3A0x6b286bf4ae200dbf!2sWDC%20Creative!5e0!3m2!1sen!2suk!4v1738336891432!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <address>
                <div>
                    <p>
                        WDC Creative,<br>
                        1st Floor, Studio 14,<br>
                        14 Little Lever Street,<br>
                        Manchester UK, M1 1HR
                    </p>

                </div>
            </address>
            <div class="footer-nav-1">

            </div>
            <div class="footer-nav-1"></div>
            <div class="footer-nav-1"></div>
            <div class="icons">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
    </footer>
</body>

</html>