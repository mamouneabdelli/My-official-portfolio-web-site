<?php
// Configuration
$site_title = "Portfolio Website";
$name = "Abdelli Abdelmoumen";
$current_year = date("Y");
$next_year = date("Y") + 1;

// Projects Data
$projects = [
    [
        'image' => 'qareeb.png',
        'title' => 'Qareeb Dashboard',
        'description' => 'Full dashboard for managers to monitor employees, combined with a face recognition system.'
    ],
    [
        'image' => 'association web site (1).png',
        'title' => 'Association Website',
        'description' => 'Full website for an association of Muslim schools to register their students for Quran studies.'
    ],
    [
        'image' => 'Ecommerce web site.png',
        'title' => 'E-commerce Website',
        'description' => 'Front-end for my e-commerce website "Am Shop 24".'
    ],
    [
        'image' => 'Capture d\'écran (299).png',
        'title' => 'TG-Blocks Platform',
        'description' => 'A website to help beginners in programming learn algorithms from scratch like Google Blockly, without syntax errors.'
    ]
];

// Certifications Data
$certifications = [
    [
        'image' => 'coursera.png',
        'title' => 'Machine Learning Certificate',
        'description' => 'In this course, I learned many useful concepts in machine learning and implemented several well-known algorithms like linear regression.'
    ],
    [
        'image' => 'web front.png',
        'title' => 'Web Front-end Certificate',
        'description' => 'In this course, I learned and implemented how to create beautiful front-ends using HTML, CSS, CSS frameworks like Bootstrap, as well as JavaScript and jQuery library.'
    ],
    [
        'image' => 'english.png',
        'title' => 'English Proficiency Certificate',
        'description' => 'This is my level in English - I scored 48 points, close to B2, after passing a test on the well-known website Education First.'
    ],
    [
        'image' => 'hackathon.png',
        'title' => 'Hackathon Winner',
        'description' => 'Winning certificate from the Guelma University AI Day hackathon with Qareeb startup.'
    ]
];

// Social Links
$social_links = [
    [
        'url' => 'https://github.com/mamouneabdelli',
        'icon' => 'fab fa-github',
        'title' => 'GitHub'
    ],
    [
        'url' => 'https://www.linkedin.com/in/abdelli-abdelmoumen',
        'icon' => 'fab fa-linkedin',
        'title' => 'LinkedIn'
    ],
    [
        'url' => 'https://www.instagram.com/mamoun_abdelii',
        'icon' => 'fab fa-instagram',
        'title' => 'Instagram'
    ]
];

// Navigation Menu
$nav_menu = [
    ['href' => '#home', 'label' => 'Home'],
    ['href' => '#projects', 'label' => 'Projects'],
    ['href' => '#contact', 'label' => 'Contact']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo htmlspecialchars($site_title); ?></title>
    
    <!-- Font Awesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- jQuery Library from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, sans-serif;
            background-color: darkslategray;
        }

        :root {
            --primary-color: darkslategray;
            --secondary-color: #00fff0;
            --layouts-color-background: #abc7ff;
            --title-layouts-color: #6de195;
        }

        .header {
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 2rem 1rem;
        }

        .header-title:hover {
            color: var(--title-layouts-color);
            transform: rotate3d(1,1,0,360deg);
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .nav {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ul {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 2rem;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 1rem 3rem;
            border-radius: 50px;
        }

        .il {
            font-size: 1.1rem;
            font-family: Arial, Helvetica, sans-serif;
            transition: transform 0.3s ease;
        }

        .il a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            display: block;
            transition: color 0.3s ease;
        }

        .il a:hover {
            color: var(--secondary-color);
            transform: scale(1.1);
        }

        .secondcontainer {
            display: flex;
            position: relative;
            flex-direction: column;
            align-items: flex-start;
            padding: 2rem 4rem;
            min-height: 400px;
        }

        .titlediv {
            display: flex;
            color: #00fff0;
            align-items: flex-start;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 45px;
            z-index: 2;
            position: relative;
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        .titlediv:hover {
            color: white;
            text-transform: uppercase;
            transform: scale(1.05);
        }

        .myimg {
            position: absolute;
            right: 10%;
            top: 20%;
            z-index: 1;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid #00fff0;
            box-shadow: 0 0 30px rgba(0, 255, 240, 0.5);
            transition: all 0.3s ease;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .myimg:hover {
            transform: scale(1.05);
            box-shadow: 0 0 50px rgba(0, 255, 240, 0.8);
        }

        .myimg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hirmebutton {
            background-color: var(--title-layouts-color);
            color: white;
            font-size: 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border: 3px ridge #abc7ff;
            border-radius: 5px;
            padding: 15px 40px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .hirmebutton:hover {
            background-color: var(--secondary-color);
            color: black;
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 255, 240, 0.6);
        }

        /* Projects Section */
        .projects-section {
            padding: 3rem 4rem;
        }

        .projects-section h1 {
            color: var(--secondary-color);
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3rem;
        }

        .projects-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .project-card {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 1.5rem;
            border: 2px solid var(--secondary-color);
            transition: all 0.3s ease;
            min-height: 350px;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 255, 240, 0.4);
        }

        .project-image {
            width: 100%;
            height: 200px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 1px dashed var(--secondary-color);
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-title {
            color: var(--title-layouts-color);
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .project-description {
            color: white;
            font-size: 1rem;
            line-height: 1.5;
        }

        /* Feedback Section */
        .feedback-section {
            padding: 3rem 4rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .feedback-section h2 {
            color: var(--secondary-color);
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .feedback-form {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 2rem;
            border-radius: 15px;
            border: 2px solid var(--secondary-color);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: var(--secondary-color);
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border-radius: 5px;
            border: 2px solid var(--title-layouts-color);
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            font-family: inherit;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background-color: var(--title-layouts-color);
            color: white;
            font-size: 1.2rem;
            padding: 12px 40px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: var(--secondary-color);
            color: black;
            transform: scale(1.02);
        }

        /* Social Links */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            padding: 3rem;
        }

        .social-icon {
            color: var(--secondary-color);
            font-size: 3rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.3);
            border: 2px solid var(--secondary-color);
        }

        .social-icon:hover {
            color: var(--title-layouts-color);
            transform: scale(1.2) rotate(360deg);
            background-color: rgba(109, 225, 149, 0.1);
            border-color: var(--title-layouts-color);
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 2rem;
            font-size: 1.5rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: aliceblue;
        }

        @media (max-width: 768px) {
            .secondcontainer {
                padding: 2rem;
            }

            .titlediv {
                font-size: 30px;
            }

            .myimg {
                position: static;
                margin: 2rem auto;
                transform: none;
            }

            .hirmebutton {
                font-size: 20px;
                padding: 10px 25px;
            }

            .projects-container {
                grid-template-columns: 1fr;
            }
            
            .social-icon {
                width: 60px;
                height: 60px;
                font-size: 2rem;
            }

            .footer {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <ul class="ul">
                    <?php foreach ($nav_menu as $item): ?>
                        <li class="il">
                            <a href="<?php echo htmlspecialchars($item['href']); ?>">
                                <?php echo htmlspecialchars($item['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>

    <div class="secondcontainer" id="home">
        <div class="titlediv">
            Welcome! Hi, I'm <?php echo htmlspecialchars($name); ?> <br>
            Student of Computer Science <br>
            Engineering and passionate <br>
            about web front-end development and AI
        </div>
        <button class="hirmebutton">Download CV!</button>
        <div class="myimg">
            <img src="photo_2024-11-19_13-30-30 (2).jpg" alt="<?php echo htmlspecialchars($name); ?> portfolio image">
        </div>
    </div>

    <div class="projects-section" id="projects">
        <h1>My Projects</h1>
        <div class="projects-container">
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" 
                             alt="<?php echo htmlspecialchars($project['title']); ?>">
                    </div>
                    <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                    <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="projects-section">
        <h1>My Certifications</h1>
        <div class="projects-container">
            <?php foreach ($certifications as $cert): ?>
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo htmlspecialchars($cert['image']); ?>" 
                             alt="<?php echo htmlspecialchars($cert['title']); ?>">
                    </div>
                    <h3 class="project-title"><?php echo htmlspecialchars($cert['title']); ?></h3>
                    <p class="project-description"><?php echo htmlspecialchars($cert['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="feedback-section" id="contact">
        <h2>Get In Touch</h2>
        <form class="feedback-form" action="contact_handler.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>

    <div class="social-links">
        <?php foreach ($social_links as $link): ?>
            <a href="<?php echo htmlspecialchars($link['url']); ?>" 
               target="_blank" 
               class="social-icon" 
               title="<?php echo htmlspecialchars($link['title']); ?>">
                <i class="<?php echo htmlspecialchars($link['icon']); ?>"></i>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="footer">
        All rights reserved <?php echo $current_year; ?>-<?php echo $next_year; ?>
    </div>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
