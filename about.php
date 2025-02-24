<?php
session_start();
include('config.php');  
$message = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Job Portal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        /* Header Styles */
        header {
            background-color: #17a2b8;
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 4px 2px -2px gray;
        }
        
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 1rem 0;
            display: flex;
            justify-content: center;
        }
        
        nav ul li {
            margin: 0 1rem;
        }
        
        nav ul li a {
            padding: 0.5rem 1rem;
            background-color: white;
            color: #17a2b8;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        
        nav ul li a:hover {
            background-color: #17a2b8;
            color: white;
        }
        
        /* About Section */
        .about-container {
            max-width: 1000px;
            margin: auto;
            padding: 2rem;
        }
        
        .about-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .about-container p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 2rem;
        }
        
        .team-member {
            flex: 1;
            max-width: 300px;
            margin: 1rem;
            padding: 1rem;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        
        .team-member h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Job Portal</h1><br><br>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jobs.php">Jobs</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="login.php">
                    <i class="fa fa-user">&nbsp;LOGIN</i>
                </a>
            </ul>
        </nav>
    </header>
    <main>
        <section class="about-container">
            <h2>About Us</h2>
            <p>Welcome to Job Portal, your go-to platform for finding the perfect job and hiring top talent. Our mission is to connect job seekers with their dream careers and help employers find the best candidates for their needs.</p>
            
            <h3>Our Mission</h3>
            <p>At Job Portal, we believe that finding a job should be a seamless and rewarding experience. Our goal is to simplify the job search process by providing a user-friendly platform that offers comprehensive job listings and valuable resources for both job seekers and employers.</p>
            
            <h3>Meet Our Team</h3>
            <div class="team">
                <div class="team-member">
                    
                    <h3>Jane Doe</h3>
                    <p>CEO & Founder</p>
                    <p>Jane is passionate about connecting talent with opportunity and leads our team with a vision for a more efficient job market.</p>
                </div>
                <div class="team-member">
                 
                    <h3>John Smith</h3>
                    <p>CTO</p>
                    <p>John oversees the technological development of our platform, ensuring that we provide a robust and user-friendly experience.</p>
                </div>
                <div class="team-member">
                   
                    <h3>Emily Johnson</h3>
                    <p>Marketing Director</p>
                    <p>Emily is responsible for our marketing strategies and outreach efforts, helping us grow and reach a wider audience.</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
