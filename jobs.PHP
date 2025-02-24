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
    <title>Job Listings - Job Portal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        /* Header Styles */
        header {
            background-color: #007bff;
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 4px 2px -2px gray;
        }
        
        header h1 {
            margin: 0;
            font-size: 2rem;
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
            color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        
        nav ul li a:hover {
            background-color: #007bff;
            color: white;
        }
        
        /* Job Listing Container */
        .job-listing-container {
            max-width: 1000px;
            margin: auto;
            padding: 2rem;
        }
        
        .job-post {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color: white;
        }
        
        .job-post h3 {
            margin-top: 0;
        }
        
        .job-post .apply-button {
            background-color: #007bff;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            display: block;
            margin-top: 1rem;
            text-decoration: none;
        }
        
        .job-post .apply-button:hover {
            background-color: #0056b3;
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
        <section class="job-listing-container">
            <!-- Example job postings -->
            <div class="job-post">
                <h3>Software Engineer</h3>
                <p>Company: Tech Innovations</p>
                <p>Location: New York, NY</p>
                <p>Salary: $80,000 - $100,000 per year</p>
                <a href="apply.php?job=1" class="apply-button">Apply Now</a>
            </div>
            <div class="job-post">
                <h3>Product Manager</h3>
                <p>Company: Market Leaders</p>
                <p>Location: San Francisco, CA</p>
                <p>Salary: $90,000 - $120,000 per year</p>
                <a href="apply.php?job=2" class="apply-button">Apply Now</a>
            </div>
            <div class="job-post">
                <h3>Graphic Designer</h3>
                <p>Company: Creative Minds</p>
                <p>Location: Remote</p>
                <p>Salary: $50,000 - $70,000 per year</p>
                <a href="apply.php?job=3" class="apply-button">Apply Now</a>
            </div>
        </section>
    </main>
</body>
</html>
