<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>personal portfolio</title>
</head>
<body id="home">
    <!-- navbar -->
    <nav>
        <div class="home-link">
            <a href="#">portfolio</a>
        </div>

        <div>
            <a href="#home">Home</a>
            <a href="#about-me">About me</a>
            <a href="#skills">Skills</a>
            <a href="#contact-me">Contact me</a>
            
        </div>

        <div class="sign-button">
            <a href="./sign-up.php">Sign up</a>
            <a href="./sign-in.php">Sign in</a>
            
        </div>
    </nav>


    <div class="intro-landing">
        <div class="intro-container">
            <p id="intro-text-1">Hello there,</p>
            <p id="intro-text-2">I'm Amin Bashir</p>
            <p id="intro-text-3">Web designer & developer</p>
        </div>
    </div>


    <div class="aboutme-container" id="about-me">
        <div class="aboutme-info-holder">
            <div class="aboutme-card">
                <div class="row">
                    <div class="column-1 img-column">
                        <div class="img-wrapper">
                            <img src="https://github.com/aminbashir/amin-porfolio/raw/main/aninbash.jpeg" alt="Amin bashir photo" height="200" width="200">
                        </div>
                    </div>
                  
                    <div class="column-2 Aboutme-text">
                      <div class="aboutme-info-header">
                          <h2>About me</h2>
                        </div>

                        <div class="aboutme-info-text">
                            <p>
                                I am Amin Abdi Bashir currently in the Catholic University of Eastern Africa pursuing Information Technology course ..I studied High School in Wamy High School and Primary School in Mnara Junior Academy!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="skills-container" id="skills">
        <div class="skill-header">
            <h2>
                Skills
            </h2>
        </div>

        <div class="skill-text">
            <p>
                I have several skills icluding playing pianos but above all that I have skills in HTML , CSS and PHP.
            </p>
        </div>

        <div class="skill-graphs">

            <div class="graph-spacing">
                <div class="graph-title">
                    HTML
                </div>
                <div class="graph-section">
                    <div class="w-80">80%</div>
                </div>
            </div>

            <div class="graph-spacing">
                <div class="graph-title">
                    CSS
                </div>
                <div class="graph-section">
                    <div class="w-60">60%</div>
                </div>
            </div>

            <div class="graph-spacing">
                <div class="graph-title">
                    PHP
                </div>
                <div class="graph-section">
                    <div class="w-58">58%</div>
                </div>
            </div>
        </div>
    </div>


    <div class="contactme-container" id="contact-me">
        <div class="row">
            <div class="column-1">
                ​<div class="contact-text">
                    <h2>Contact me</h2>
                    <p>
                        Hello There welcome again , You can reach me through my Telephone 0111388449 or my email @abdiamin259@gmail.com.
                        <br>
                        You can fill the form below and the message would be deliverd to my E-mail.
                        <br>
                        Below are the usernames to my social media handles and you can reach to me through them
                    </p>
                </div>

                <!-- Add font awesome icons -->
                <div class="contact-icons">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                                Amin Abdi
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                                amin abdi
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                                abdiyarow_jnr
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>

            <?php
                include("connection.php");
                if (isset($_POST['submit'])) {
                    $sql="INSERT INTO contacts (name, email, subject, message) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
                    mysqli_query($conn, $sql);
                    echo("<script>alert('event booked successfully')</script>");
                
                }
            ?>

            <div class="column-2">
                <div class="contact-form">
                    <form action="#" method="POST">
                    <code>
                            (Leave a message!!)
                        </code>

                        <br><br>

                        <label for="name">Your Name </label>
                        <input type="text" id="name" name="name" placeholder="Please enter your name.." required>

                        <label for="email">Your Email </label>
                        <input type="text" id="email" name="email" placeholder="Your email address.." required>

                        <label for="subject">Subject </label>
                        <input type="text" id="subject" name="subject" placeholder="" required>

                        <label for="subject">Message </label>
                        <textarea id="message" name="message" placeholder="Write something.." style="height:80px"></textarea>

                        <input name="submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="copyright">
            <p style="text-align:center">&copy; 2020 | Amin Bashir Personal Portfolio</p>
        </div>
    </footer>
</body>
</html>
