<?php

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $msg = $_POST['message'];

   // You can add your own logic here to process the message sent

   $message[] = 'message sent successfully!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">experiences</a>
      <a href="#portfolio">projects</a>
      <a href="#extracurriculars">extracurriculars</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/sanjaya.subedi.33/" class="fab fa-facebook-f" target="_blank"></a>
      <a href="https://twitter.com/thesanjaysubedi" class="fab fa-twitter" target="_blank"></a>
      <a href="https://www.instagram.com/thesanjaysubedi/" class="fab fa-instagram" target="_blank"></a>
      <a href="https://www.linkedin.com/in/sanjaya-subedi/" class="fab fa-linkedin" target="_blank"></a>
      <a href="https://github.com/Sanjaya-subedi" class="fab fa-github" target="_blank"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am sanjay subedi</h3>
      <span data-aos="fade-up">software engineer</span>
      <p data-aos="fade-up">I am a senior at Howard University majoring in Computer Science.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>About Me</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">I am Sanjay. I am a senior student at Howard University pursuing Bachelor's in Computer Science. 
      </p>
      <p data-aos="fade-up">GO BISON!
      </p>
      <p data-aos="fade-up"> I am a creative developer with strong problem-solving skills and a high inclination toward Mathematics. 
         I am proficient in Software Development and AI/ML technologies. I will be graduating in May, 2024. I am currently looking for 2024 entry level Software Engineering or AI/ML roles. 
      </p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Sanjay Subedi </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> sanjaya.subedi@bison.howard.edu </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Washington, DC </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +662-380-0499 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="https://drive.google.com/file/d/10M5WxiIIp22ZQ4RsQOQT5Xv2PfR_3TPE/view?usp=sharing" class="btn" data-aos="fade-up" target="_blank">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>Python</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>React</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Swift</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>HTML</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>JavaScript</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Java</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>C</span> <span>60%</span></h3> </div>
         
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & employment</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <i class="fas fa-graduation-cap"></i><br>
               <span>( 2020 - 2024 )</span>
               <h3>Howard University </h3>
               <p>BSc. Computer Science</p>
               <p>GPA: 3.88</p>
            </div>

            <div class="box" data-aos="fade-right">
               <i class="fab fa-google"></i><br>
               <span>( 2022 - 2022 )</span>
               <h3>Google TechExchange Program </h3>
               <p>Software Engineering & Machine Learning<br>
                  Software Engineering: 4.0 <br>
                  Machine Learning:     4.0
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <i class="fas fa-laptop-code"></i><br>
               <span>( 2023 - 2023 )</span>
               <h3>CodePath</h3>
               <p>iOS App Development</p>
               <p> Grade: 4.0 </p><br>
               <a href="https://drive.google.com/file/d/1BnFkshOgXP5IwHslNM2pGCL90DZ1UoA1/view?usp=sharing" class="btn" data-aos="fade-up" target="_blank">Link to Certificate</a>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">employment</h3>

            <div class="box" data-aos="fade-left">
               <i class="fab fa-apple"></i><br>
               <span>( 2023 - 2023 )</span>
               <h3>iOS app developer intern </h3>
               <p>I am returning software engineering intern. I will be working under Apple Store team.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <i class="fab fa-apple"></i><br>
               <span>( 2022 - 2022 )</span>
               <h3>Software Engineering Internship</h3>
               <p> Developed a React JS dashboard to consolidate test automation results from 40+ applications using a Java API and Cassandra database, simplifying quality management and reporting.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <i class="fab fa-cc-mastercard"></i><br>
               <span>( 2022- 2022 )</span>
               <h3>ML Research Assistant </h3>
               <p>Achieved 90% accuracy in loan eligibility verification by implementing multiclass logistic regression on customer data and validating with matplotlib to analyze the relationship between annual income, employment length, and loan eligibility.</p>
            </div>

            

            

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>experiences</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Built an e-commercial website where users can sign up or log in to book different packages for traveling to different parts of Nepal and designed Frontend using HTML and CSS and Backend using Python, Flask, and MongoDB.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-apple"></i>
         <h3>iOS app development</h3>
         <p>Designed and developed a Swift UI iOS app with Back4App Parse to provide a reliable and affordable housing option for students during internships and academic years, contributing to one of the best UI designs for the Student Hive app at Howard University.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-robot"></i>
         <h3>Machine Learning</h3>
         <p>Utilized supervised learning techniques, conducted exploratory data analysis, implemented NLP techniques, developed and optimized deep learning models to achieve 80% accuracy, contributing to securing a top 9 rank amongst 25 teams.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-tasks"></i>
         <h3>Product Management</h3>
         <p>As a Product Manager for a budgeting app for college students, conducted extensive market research to identify unmet needs, pain-points, and product desires, collaborated with cross-functional teams to develop the Market Requirements Documents, and Product Requirements Documents, and successfully pitched the product to a pool of Google PMs with a high-fidelity Figma prototype.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-brain"></i>
         <h3> Math and CS Tutor</h3>
         <p>Taught college students 10 hours a week on various aspects of Mathematics and computer science including algebra, pre-calculus & calculus and evaluated students' learning styles, identified their strengths and weakness, and provided appropriate techniques for maximum understanding. Prepared students for their upcoming tests and exams by offering problem-solving techniques geared toward personal learning style.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-hands-helping"></i>
         <h3>volunteer</h3>
         <p>As a B.A.S.E. Camp fellow, I was selected to participate in a multi-day, immersive learning experience hosted at Salesforce's Trailblazer Ranch in northern California. This program was designed for students to connect with other computer science majors from schools around the nation, participate in skill-building workshops, impactful volunteer activities, and learn more about early career opportunities in tech.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/studenthive.png" alt="">
         <h3>Students Hive | iOS app Development</h3>
         <p>Designed and developed an innovative student housing app using Swift UI and Back4App Parse, aimed at addressing short-term rental problems and providing a seamless user experience for students.</p><br>
         <a href="https://github.com/Students-Hive/iOS-Final-Project.git" class="fab fa-github" target="_blank"></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/clothing.png" alt="">
         <h3>Clothing Website | web development</h3>
         <p> Developed a thrifting clothing website utilizing HTML, CSS, and JavaScript for the frontend, and Flask Python and MongoDB for the backend to create a seamless user experience.</p><br>
         <a href="https://github.com/Sanjaya-subedi/Clothing-Website.git" class="fab fa-github" target="_blank"></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/tweet.jpeg" alt="">
         <h3>Real disaster tweet prediction | ML</h3>
         <p>Developed Multi-CNN and Build embeddings machine learning models to classify real disaster tweets, pre-processed the data and achieved the best performance using embeddings-based model.</p><br>
         <a href="https://colab.research.google.com/drive/1L0RiR_-lLQ9ZxtFWUET6A1MbhrHoBTAc?usp=sharing" class="fab fa-google" target="_blank"></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/bereal.png" alt="">
         <h3>BeReal Clone | iOS app Development</h3>
         <p>Cloned the BeReal app, a social media platform, using Swift and SwiftUI, showcasing our ability to implement complex features such as image uploading, profile picture changing, and user authentication.</p><br>
         <a href="https://github.com/Sanjaya-subedi/BeRealPro.git" class="fab fa-github" target="_blank"></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/uiux.png" alt="">
         <h3>Inno-Homes | UI/UX Design</h3>
         <p>Showcased my skills and experience in UI and UX design, utilizing technologies such as Thunkable and Figma to create an innovative mobile application for finding safe and affordable housing, informed by user research and testing.</p><br>
         <a href="https://www.figma.com/proto/RqlNT03gxwKbYOUx2inF48/Housing-App?type=design&node-id=1-2&scaling=scale-down&page-id=0%3A1&starting-point-node-id=1%3A32" class="fas fa-palette" target="_blank"></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/finance.png" alt="">
         <h3>Product Management </h3>
         <p>Developed and pitched a college budgeting app to Google PMs, utilizing extensive market research and cross-functional collaboration to identify user needs and design a high-fidelity Figma prototype.</p><br>
         <a href="https://docs.google.com/presentation/d/1kcsl7OgEqW1mA6ML9BFY5kaxmSQSCC3TciPxL1Xhi8k/edit?usp=sharing" class="fab fa-google-drive" target="_blank"></a>
      </div>

   </div>

</section>


<section class="extracurriculars" id="extracurriculars">

   <h1 class="heading" data-aos="fade-up"> <span>extracurriculars</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/datagood.JPG" alt="">
         <h3>Data for Good Hackathon | JP Morgan Chase</h3>
         <p>Secured second place. Collaborated for 24 hours to develop a data-driven strategy for Starting With Today, a non-profit organization advocating for black wellness and liberation. Our proposal was based on thorough data analysis, wellness factors, target location, and future predictions. </p>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/huaws.JPG" alt="">
         <h3>AWS Deepracer Competition | Howard University</h3>
         <p>Secured third place. Dove into the world of machine learning with Amazon DeepRacer. Our team had the privilege of competing in a reinforcement learning model challenge where we programmed a car to achieve one of the fastest times on the track.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/googlecoding.jpeg" alt="">
         <h3>HBCU/HSI Coding Challenge | Google</h3>
         <p>Led the team of four participants. Completed programming challenges, competed against 100 other HBCU students, solved fundamental data structure/algorithm prompts in a collaborative environment.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/icontest.jpeg" alt="">
         <h3>iContest | Apple</h3>
         <p>Formulated an abstract of a project named iNutrify that helps to track the food by sending location based reminders if we eat out or by scanning the products through Camera's live Text feature and provides back the detailed health report.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/codegood.JPG" alt="">
         <h3>Code for Good | JP Morgan Chase</h3>
         <p>Got selected for SWE Internship. Designed a website dedicated to a non profit organization that helps to calculate how much they owe during educational years and in how many years they can pay after graduation, helping them to make a decision for what major and in which university should they enroll as per their current economic status.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/IMG_4334.jpg" alt="">
         <h3>IS&T Hackathon | Apple</h3>
         <p>Designed an IOS app named 'Lost and Found' that uses Machine Learning to identify the lost or found items and matched it with the people looking for it based on the name and location.</p>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+662-380-0499</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>sanjaya.subedi@bison.howard.edu</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Washington, DC, 20011</p>
      </div>

   </div>

</section>

<!-- contact section ends -->













<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>