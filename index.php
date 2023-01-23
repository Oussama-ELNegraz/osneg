<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        // Creating Array of Errors
        $formErrors = array();
        if (strlen($name) <= 3) {
            $formErrors[] = 'Username Must Be Larger Than <strong>3</strong> Characters';
        }
        if (strlen($msg) < 10) {
            $formErrors[] = 'Message Can\'t Be Less Than <strong>10</strong> Characters'; 
        }

        if (empty($formErrors)) {
            // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]

            $headers = 'Name : ' . $name . "\r\n". 'From: ' . $mail ."\r\n" . "\r\n\r";
            $myEmail = 'oussama@osneg.com';
            $subject = 'Contact Form' ;
            $msg = $headers . $msg;

            mail($myEmail, $subject, $msg, $headers);
            
            $name = '';
            $mail = '';
            $msg = '';
            
        }
    
        
        header("Location: /"); 
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am Oussama El Negraz, a student engineer and freelance developer. I mostly work and focus on front end development">
    <meta name="keywords" content="Oussama El Negraz , osneg , freelancer , developer , engineer"/>
    <meta name="author" content="Oussama El Negraz"/>
    <link rel="canonical" href="https://osneg.com">
    <title>Oussama El Negraz</title>
    <link rel="icon" href="images/logo3.png">

    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <nav class="x-center">
        <div class="container1 row flex-y-center">
            <div class="logo">
                <svg width="379" height="74.43170887887497" viewBox="0 0 349.79752222934513 68.69664206101956"
                    class="css-1j8o68f">
                    <defs id="SvgjsDefs2141"></defs>
                    <g id="SvgjsG2142" featurekey="symbolFeature-0"
                        transform="matrix(0.880726158618927,0,0,0.880726158618927,0.0008770926606620846,-22.018154506737037)"
                        fill="#000">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M74.313 0l-28.094 78h8.469l28.094-78h-8.469zm-36.313 11.25l-2.188 1.406-34 22-1.813 1.156v4.25l1.688 1.219 34 24 2.313 1.594v-9.781l-26.844-18.969 26.844-17.375v-9.5zm52 0v9.5l26.844 17.375-26.844 18.969v9.781l2.313-1.594 34-24 1.688-1.219v-4.25l-1.813-1.156-34-22-2.188-1.406z"
                            transform="translate(0 25)"></path>
                    </g>
                    <g id="SvgjsG2143" featurekey="nameFeature-0"
                        transform="matrix(1.1441006660461426,0,0,1.1441006660461426,129.18092679841683,2.606906245170009)"
                        fill="#000">
                        <path
                            d="M33.209 19.299 c1.8355 1.8198 1.8204 4.452 1.7971 8.4364 c-0.0018359 0.29664 -0.0033984 0.604 -0.0046876 0.92236 c-0.0089064 2.3647 -0.015195 4.0732 -0.26344 5.514 c-0.21137 1.2284 -0.69948 2.9991 -2.4872 4.1908 c-2.2642 1.5093 -5.6464 1.5434 -13.056 1.6174 c-1.1572 0.011524 -2.2245 0.020156 -3.2091 0.020156 c-5.8708 0 -8.822 -0.31074 -10.708 -2.1844 c-1.964 -1.9514 -1.953 -4.8252 -1.9368 -9.1752 c0.018047 -4.8536 0.029024 -7.7832 2.4894 -9.602 c2.1227 -1.569 5.2056 -1.6103 11.96 -1.7011 l1.3479 -0.018555 c8.4176 -0.12031 11.902 -0.17027 14.071 1.9805 z M30.343 27.708 c0.013086 -2.2896 0.026914 -4.6576 -0.41728 -5.0976 c-0.55112 -0.54644 -3.0246 -0.67276 -6.3168 -0.67276 c-1.3547 0 -2.8484 0.021445 -4.4036 0.043672 l-1.3521 0.018555 c-4.8388 0.064884 -8.3348 0.11195 -9.25 0.78812 c-0.5776 0.42692 -0.587 2.9488 -0.59796 5.8692 c-0.010195 2.7118 -0.019883 5.2732 0.56032 5.8496 c0.9108 0.90508 5.8276 0.85564 10.583 0.80856 c5.4604 -0.054412 9.4056 -0.093908 10.516 -0.8342 c0.65372 -0.4358 0.66208 -2.7032 0.67384 -5.8416 c0.0010547 -0.32148 0.0028906 -0.632 0.0047264 -0.93176 z M48.239999999999995 22.009 c-0.43632 0.24117 -0.88236 0.64612 -0.88236 1.8193 c0 0.91448 0.29558 1.4144 1.0547 1.7822 c0.76772 0.37195 1.6239 0.39914 1.6671 0.4002 l17.067 0.06672 c2.9656 0 7.3912 1.8316 7.3912 6.8776 s-4.1128 6.8776 -6.8776 6.8776 l-24.997 0 l0 -4.6954 l24.977 0 c0.2048 -0.0070704 0.81636 -0.08422 1.3204 -0.36305 c0.43656 -0.24144 0.88256 -0.64636 0.88256 -1.8193 c0 -0.91448 -0.29558 -1.4144 -1.0547 -1.7822 c-0.7654 -0.37094 -1.6208 -0.39894 -1.6686 -0.40024 l-17.056 -0.07586 l0 0.0091406 c-2.975 0 -7.4008 -1.8316 -7.4008 -6.8776 s4.1128 -6.8776 6.8776 -6.8776 l24.997 0 l0 4.6954 l-24.976 0 c-0.20457 0.0070704 -0.81668 0.08422 -1.321 0.36305 z M109.366 17.185 l4.6952 0 l0 22.5 l-27.179 -14.196 l0 14.511 l-4.6954 0 l0 -22.5 l27.18 14.196 l0 -14.511 z M153.586 21.902 l-27.18 0.000039062 l0 4.3726 l18.128 0.0675 l-0.017266 4.6956 l-18.111 -0.0675 l0 4.3564 l27.18 0 l0 4.6954 l-31.875 0 l0 -22.815 l31.875 0 l0 4.6951 z M192.79500000000002 28.789 c-0.039766 2.7314 -0.0003125 8.8604 0.00046876 8.9216 l0.01543 2.3398 l-15.796 0 c-4.7468 0 -8.7176 -1.0623 -11.483 -3.0715 c-2.7712 -2.0134 -4.2972 -4.934 -4.2972 -8.224 c0 -2.7283 1.0293 -5.1928 2.9771 -7.126 c2.7887 -2.7683 7.2208 -4.2116 12.82 -4.1692 c3.4152 0.025117 13.333 0.00027344 13.433 0 l2.3244 -0.0060156 l0.011758 4.6492 l-2.3244 0.0060156 c-0.1002 0.00027344 -10.041 0.025391 -13.479 0 c-4.2752 -0.03375 -7.648 0.9702 -9.5112 2.8196 c-1.0641 1.0562 -1.6035 2.3435 -1.6035 3.8266 c0 4.0992 4.2652 6.646 11.132 6.646 l11.12 0 c-0.0049608 -1.2739 -0.0086328 -2.879 -0.0049608 -4.3216 l-8.9542 0 l0 -4.6491 l13.654 0 z">
                        </path>
                    </g>
                </svg>
            </div>
            <i class="fas fa-bars hide" id="menuBar"></i>
            <ul class="links row" id="links">
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="button" data-screen="smallscreen"><a>Hire Me</a></li>
            </ul>
            <button class="button" data-screen="largescreen">Hire me</button>
        </div>
    </nav>
    <header id="header">
        <div class="container1 column flex-center"  data-aos="fade-up" data-aos-duration="750">
            <div class="text y-center" >
                <h5 >Hi, My name is</h5>
                <h1>Oussama El Negraz</h1>
                <p>I am a student engineer and freelance developer. I mostly work and focus on front end development</p>
            </div>
            <!-- <img src="images/mypic2.JPG" alt="My Picture"> -->
            <img class="y-center" src="images/Work time.gif" alt="Picture">
        </div>
    </header>
    <main>
        <section id="about">
            <div class="container">
                <div class="title"  data-aos="fade-up" data-aos-duration="750">
                    <h2>About Me</h2>
                    <p>Let's get to know each other</p>
                </div>
            </div>
            <div class="container flex row flex-y-center"">
                <div class=" picture"  data-aos="fade-up" data-aos-duration="750">
                <div>
                    <img src="images/myPicture.jpg" alt="">
                </div>
            </div>
            <div class="info"  data-aos="fade-up" data-aos-duration="750">
                <h4>I'M Oussama El Negraz</h4>
                <h6>A <span>Front End</span> designer</h6>
                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern
                    websites, web services and online stores. My passion is to design digital user experiences through
                    the bold interface and meaningful interactions. Check out my Portfolio</p>
                <ul class="row">
                    <li class="col-sm-md2 col-sm1">
                        <label>E-mail:</label>
                        <p><a href="mailto:elnegraz@osneg.com">elnegraz@osneg.com</a></p>
                    </li>
                    <li class="col-sm-md2 col-sm1">
                        <label>Phone:</label>
                        <p><a href="tel:+212 612-740785">+212 612-740785</a></p>
                    </li>
                    <li class="col-sm-md2 col-sm1">
                        <label>Date of Birth:</label>
                        <p>June 23, 2002</p>
                    </li>
                    <li class="col-sm-md2 col-sm1">
                        <label>Nationnality:</label>
                        <p>Moroccan</p>
                    </li>
                    <li class="col-sm-md2 col-sm1">
                        <label>Address:</label>
                        <p>Tetouan, Morocco</p>
                    </li>
                </ul>
                <button class="button-2">Download CV</button>
            </div>
            </div>
        </section>
        <section id="skills">
            <div class="container">
                <div class="title"  data-aos="fade-up" data-aos-duration="750">
                    <h2>My Skills</h2>
                    <p>Let's get to know each other</p>
                </div>
                <div class="row space-arround">
                    <div class="tech-skills" data-aos="fade-up" data-aos-duration="750">
                        <h5>Technical Skills</h5>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>HTML & CSS</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>JavaScript & jQuery</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="85"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Bootstrap</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="95"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>PHP</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="65"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>SQL & MySQL</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="60"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Photoshop & XD & Figma</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="85"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-skills" data-aos="fade-up" data-aos-duration="750">
                        <h5>Professional Skills</h5>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Teamwork</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="80"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Flexibility</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="90"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Communication</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="70"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Openness to learning</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="75"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Leadership</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="60"></div>
                            </div>
                        </div>
                        <div class="skill-container">
                            <div class="row space-between">
                                <label>Problem-solving</label>
                                <label><span class="counter"></span>%</label>
                            </div>
                            <div class="progress">
                                <div data-width="80"></div>
                            </div>
                        </div>
                    </div>
                    <div class="lang-skills" data-aos="fade-up" data-aos-duration="750">
                        <h5>Language Skills</h5>
                        <div class="row space-arround">
                            <div class="skill-container">
                                <div class="circle-progress" data-width="1" data-size="150" data-thickness="8">
                                    <label class="center">Arabic<br><span>Native</span></label>
                                </div>
                            </div>
                            <div class="skill-container">
                                <div class="circle-progress" data-width="0.75" data-size="150" data-thickness="8">
                                    <label class="center">Frensh<br><span>B2</span></label>
                                </div>
                            </div>
                            <div class="skill-container">
                                <div class="circle-progress"  data-width="0.65" data-size="150" data-thickness="8"><label
                                        class="center">English<br><span>B1</span></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="title"  data-aos="fade-up" data-aos-duration="750">
                    <span>Services</span>
                    <h2>We do awesome services for our clients</h2>
                    <p>Let's get to know each other</p>
                </div>
                <div class="row space-between">
                    <div class="service-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="card column flex-center">
                            <img src="images/web-design.png" alt="">
                            <h5>Web Design</h5>
                            <p>10 Projects</p>
                        </div>
                    </div>
                    <div class="service-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="card column flex-center">
                            <img src="images/software-development.png" alt="">
                            <h5>Web Development</h5>
                            <p>10 Projects</p>
                        </div>
                    </div>
                    <div class="service-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="card column flex-center">
                            <img src="images/device.png" alt="">
                            <h5>Responsive WebSite</h5>
                            <p>10 Projects</p>
                        </div>
                    </div>
                    <div class="service-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="card column flex-center">
                            <img src="images/seo.png" alt="">
                            <h5>SEO</h5>
                            <p>10 Projects</p>
                        </div>
                    </div>
                </div>
                <div class="counters row space-between">
                    <div class="counter-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750">
                        <div class="counter column flex-center">
                            <h4><span class="counter-number" data-number="2"></span> +</h4>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <div class="counter-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750">
                        <div class="counter column flex-center">
                            <h4><span class="counter-number"data-number="3"></span> +</h4>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                    <div class="counter-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750">
                        <div class="counter column flex-center">
                            <h4><span class="counter-number"data-number="100"></span> +</h4>
                            <p>Design Items</p>
                        </div>
                    </div>
                    <div class="counter-container col-md4 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750">
                        <div class="counter column flex-center">
                            <h4><span class="counter-number" data-number="10"></span> +</h4>
                            <p>Clients Served</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="title" data-aos="fade-up" data-aos-duration="750">
                    <span>Portfolio</span>
                    <h2>LATEST WORKS </h2>
                    <p>Let's get to know each other</p>
                </div>
                <div class="portfolio-container row space-between">
                    <div class="col-md3 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="hover">
                            <div class="img">
                                <img src="images/Site1.png" alt="">
                            </div>
                            <a href="https://oussama-gif.github.io/template4/" target="_blank">
                                <div class="info column flex-center">
                                    <h6>Creative Design</h6>
                                    <span>Website</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md3 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="hover">
                            <div class="img">
                                <img src="images/Site2.png" alt="">
                            </div>
                            <a href="https://oussama-gif.github.io/Template-3/" target="_blank">
                                <div class="info column flex-center">
                                <h6>Creative Design</h6>
                                <span>Website</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md3 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="hover">
                            <div class="img">
                                <img src="images/Site3.png" alt="">
                            </div>
                            <a href="https://oussama-gif.github.io/parallax/" target="_blank">
                                <div class="info column flex-center">
                                    <h6>Creative Design</h6>
                                    <span>Website</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md3 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="hover">
                            <div class="img">
                                <img src="images/Site4.png" alt="">
                            </div>
                            <a href="https://oussama-gif.github.io/template2/" target="_blank">
                                <div class="info column flex-center">
                                    <h6>Creative Design</h6>
                                    <span>Website</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md3 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="hover">
                            <div class="img">
                                <img src="images/Site5.png" alt="">
                            </div>
                            <a href="https://oussama-gif.github.io/Clipboard-landing-page/" target="_blank" rel="noopener noreferrer">
                                <div class="info column flex-center">
                                    <h6>Creative Design</h6>
                                    <span>Website</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md3 col-sm-md2 col-sm1" data-aos="fade-up" data-aos-duration="750" >
                        <div class="hover">
                            <div class="img">
                                <img src="images/Site6.png" alt="">
                            </div>
                            <a href="https://oussama-gif.github.io/template1/" target="_blank">
                                <div class="info column flex-center">
                                    <h6>Creative Design</h6>
                                    <span>Website</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container"  data-aos="fade-up" data-aos-duration="750">
                <div class="title">
                    <h2>CONTACT US</h2>
                    <p>Let's get to know each other</p>
                </div>
            </div>
            <div class="container row space-between">
                <div class="form-container" data-aos="fade-up" data-aos-duration="750">
                    <h4>Send us a message</h4>
                    <form action="" method="post" class="row space-between">
                        <div class="col-sm-md2 col-sm1">
                            <label for="name">Company name</label>
                            <input type="text" name="name" id="name" placeholder="e.g. Facebook, Google, Amazon" minlength="3" required>
                        </div>
                        <div class="col-sm-md2 col-sm1">
                            <label for="email">Company email</label>
                            <input type="email" name="email" id="email" placeholder="company@company.com" required>
                        </div>
                        <div class="textarea input col-sm1">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"
                                placeholder="Hey El Negraz Oussama, We would like to create some awesome with you..."
                                minlength="10" required></textarea>
                        </div>
                        <div class="col-sm1">
                            <button type="submit" class="button">Send</button>
                        </div>
                    </form>
                </div>
                <div class="info-container" data-aos="fade-up" data-aos-duration="750">
                    <h4>Ways to contact me</h4>
                    <div>
                        <label>Address</label>
                        <p>Tetouan, Morocco</p>
                    </div>
                    <div>
                        <label>Email</label>
                        <p><a href="mailto:elnegraz@osneg.com">elnegraz@osneg.com</a></p>
                    </div>
                    <div>
                        <label>Call Me</label>
                        <p><a href="tel:+212 612-740785">+212 612-740785</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="logo">
                <svg width="379" height="74.43170887887497" viewBox="0 0 349.79752222934513 68.69664206101956"
                    class="css-1j8o68f">
                    <defs id="SvgjsDefs2141"></defs>
                    <g id="SvgjsG2142" featurekey="symbolFeature-0"
                        transform="matrix(0.880726158618927,0,0,0.880726158618927,0.0008770926606620846,-22.018154506737037)"
                        fill="#000">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M74.313 0l-28.094 78h8.469l28.094-78h-8.469zm-36.313 11.25l-2.188 1.406-34 22-1.813 1.156v4.25l1.688 1.219 34 24 2.313 1.594v-9.781l-26.844-18.969 26.844-17.375v-9.5zm52 0v9.5l26.844 17.375-26.844 18.969v9.781l2.313-1.594 34-24 1.688-1.219v-4.25l-1.813-1.156-34-22-2.188-1.406z"
                            transform="translate(0 25)"></path>
                    </g>
                    <g id="SvgjsG2143" featurekey="nameFeature-0"
                        transform="matrix(1.1441006660461426,0,0,1.1441006660461426,129.18092679841683,2.606906245170009)"
                        fill="#000">
                        <path
                            d="M33.209 19.299 c1.8355 1.8198 1.8204 4.452 1.7971 8.4364 c-0.0018359 0.29664 -0.0033984 0.604 -0.0046876 0.92236 c-0.0089064 2.3647 -0.015195 4.0732 -0.26344 5.514 c-0.21137 1.2284 -0.69948 2.9991 -2.4872 4.1908 c-2.2642 1.5093 -5.6464 1.5434 -13.056 1.6174 c-1.1572 0.011524 -2.2245 0.020156 -3.2091 0.020156 c-5.8708 0 -8.822 -0.31074 -10.708 -2.1844 c-1.964 -1.9514 -1.953 -4.8252 -1.9368 -9.1752 c0.018047 -4.8536 0.029024 -7.7832 2.4894 -9.602 c2.1227 -1.569 5.2056 -1.6103 11.96 -1.7011 l1.3479 -0.018555 c8.4176 -0.12031 11.902 -0.17027 14.071 1.9805 z M30.343 27.708 c0.013086 -2.2896 0.026914 -4.6576 -0.41728 -5.0976 c-0.55112 -0.54644 -3.0246 -0.67276 -6.3168 -0.67276 c-1.3547 0 -2.8484 0.021445 -4.4036 0.043672 l-1.3521 0.018555 c-4.8388 0.064884 -8.3348 0.11195 -9.25 0.78812 c-0.5776 0.42692 -0.587 2.9488 -0.59796 5.8692 c-0.010195 2.7118 -0.019883 5.2732 0.56032 5.8496 c0.9108 0.90508 5.8276 0.85564 10.583 0.80856 c5.4604 -0.054412 9.4056 -0.093908 10.516 -0.8342 c0.65372 -0.4358 0.66208 -2.7032 0.67384 -5.8416 c0.0010547 -0.32148 0.0028906 -0.632 0.0047264 -0.93176 z M48.239999999999995 22.009 c-0.43632 0.24117 -0.88236 0.64612 -0.88236 1.8193 c0 0.91448 0.29558 1.4144 1.0547 1.7822 c0.76772 0.37195 1.6239 0.39914 1.6671 0.4002 l17.067 0.06672 c2.9656 0 7.3912 1.8316 7.3912 6.8776 s-4.1128 6.8776 -6.8776 6.8776 l-24.997 0 l0 -4.6954 l24.977 0 c0.2048 -0.0070704 0.81636 -0.08422 1.3204 -0.36305 c0.43656 -0.24144 0.88256 -0.64636 0.88256 -1.8193 c0 -0.91448 -0.29558 -1.4144 -1.0547 -1.7822 c-0.7654 -0.37094 -1.6208 -0.39894 -1.6686 -0.40024 l-17.056 -0.07586 l0 0.0091406 c-2.975 0 -7.4008 -1.8316 -7.4008 -6.8776 s4.1128 -6.8776 6.8776 -6.8776 l24.997 0 l0 4.6954 l-24.976 0 c-0.20457 0.0070704 -0.81668 0.08422 -1.321 0.36305 z M109.366 17.185 l4.6952 0 l0 22.5 l-27.179 -14.196 l0 14.511 l-4.6954 0 l0 -22.5 l27.18 14.196 l0 -14.511 z M153.586 21.902 l-27.18 0.000039062 l0 4.3726 l18.128 0.0675 l-0.017266 4.6956 l-18.111 -0.0675 l0 4.3564 l27.18 0 l0 4.6954 l-31.875 0 l0 -22.815 l31.875 0 l0 4.6951 z M192.79500000000002 28.789 c-0.039766 2.7314 -0.0003125 8.8604 0.00046876 8.9216 l0.01543 2.3398 l-15.796 0 c-4.7468 0 -8.7176 -1.0623 -11.483 -3.0715 c-2.7712 -2.0134 -4.2972 -4.934 -4.2972 -8.224 c0 -2.7283 1.0293 -5.1928 2.9771 -7.126 c2.7887 -2.7683 7.2208 -4.2116 12.82 -4.1692 c3.4152 0.025117 13.333 0.00027344 13.433 0 l2.3244 -0.0060156 l0.011758 4.6492 l-2.3244 0.0060156 c-0.1002 0.00027344 -10.041 0.025391 -13.479 0 c-4.2752 -0.03375 -7.648 0.9702 -9.5112 2.8196 c-1.0641 1.0562 -1.6035 2.3435 -1.6035 3.8266 c0 4.0992 4.2652 6.646 11.132 6.646 l11.12 0 c-0.0049608 -1.2739 -0.0086328 -2.879 -0.0049608 -4.3216 l-8.9542 0 l0 -4.6491 l13.654 0 z">
                        </path>
                    </g>
                </svg>
            </div>
            <ul class="links row flex-x-center" id="links">
                <li class="active col-sm1"><a href="#header">Home</a></li>
                <li class="col-sm1"><a href="#about">About</a></li>
                <li class="col-sm1"><a href="#skills">Skills</a></li>
                <li class="col-sm1"><a href="#services">Services</a></li>
                <li class="col-sm1"><a href="#portfolio">Projects</a></li>
                <li class="col-sm1"><a href="#contact">Contact</a></li>
            </ul>
            <ul class="social row flex-x-center">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-reddit-alien"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
            <p>&copy; All rights reserved. <wbr> This template made with &#128151; by Osneg</p>
        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/script.js"></script>
</body>

</html>