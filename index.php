
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f4f8;
            color: #333;
            text-align: center;
        }

        header {
            background-color: #1e3a8a;
            color: white;
            padding: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
        }

        section {
            padding: 40px 20px;
        }

        h2 {
            color: #1e3a8a;
        }

        .project {
            background-color: white;
            margin: 15px auto;
            padding: 20px;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #ccc;
        }

        .btn {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        footer {
            background-color: #1e3a8a;
            color: white;
            padding: 15px;
        }
    </style>
</head>

<body>

    <header>
        <h1>My Portfolio</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="home">
        <h2>Hello, I'm Your Name</h2>
        <p>I am a Web Developer.</p>
        <p>Welcome to my personal portfolio website!</p>
        <a href="#projects" class="btn">View Projects</a>
    </section>

    <section id="about">
        <h2>About Me</h2>
        <p>I am learning web development and enjoy creating websites using HTML and CSS.</p>
    </section>

    <section id="projects">
        <h2>My Projects</h2>

        <div class="project">
            <h3>Project 1</h3>
            <p>My first website using HTML.</p>
        </div>

        <div class="project">
            <h3>Project 2</h3>
            <p>A simple webpage designed using CSS.</p>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <p>Email: yourname@example.com</p>
        <a href="mailto:yourname@example.com" class="btn">
            Send Email
        </a>
    </section>

    <footer>
        <p>&copy; 2026 My Portfolio</p>
    </footer>

</body>
</html>
