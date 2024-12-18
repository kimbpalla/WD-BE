<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kim's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/iconofficial.png">
    <link rel="stylesheet" href="https://www.dafont.com/super-morning.font">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
            border: none;
            outline: none;
        }

        body {
            color: #fff;
            background: #191919;
        }

        header {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 1000;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            padding: 28px 11%;
            border-bottom: 1px solid transparent;
            transition: all ease .50s;
        }

        .logo {
            width: 100%;
            height: auto;
        }

        .navlist {
            display: flex;
        }

        .navlist a {
            color: #ffa1df;
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0 40px;
            transition: all ease .40s;
        }

        .navlist a:hover {
            color: #ffa1df;
        }

        #menu-icon {
            font-size: 42px;
            color: #fff;
            z-index: 9999;
            cursor: pointer;
            display: none;
        }

        section {
            padding: 120px 19% 100px;
        }

        #home {
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000;
        }

        header.sticky {
            padding: 15px 11%;
            background: #000;
            border-bottom: 1px solid #4e5055;
        }

        .about {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            align-items: center;
            gap: 4rem;
            background: black;
        }

        .about-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 900px;
        }

        .about-text h2 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: #ffa1df;
        }

        .about-text p {
            color: #c6c9d8bf;
            font-size: 1.1rem;
            line-height: 30px;
            margin-bottom: 3rem;
            text-align: justify;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .project {
            background: black;
        }

        .project-text h2 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 3.5rem;
            font-weight: 1000;
            margin-bottom: 10px;
            color: #ffa1df;
        }

        .project .button-container button {
            border: 2px solid #E67D7D;
            border-radius: 5px;
            padding: 15px 20px;
            font-size: 35px;
            background-color: black;
            color: #ffa1df;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .project .button-container button:hover {
            background-color: #000;
            color: #E67D7D;
            border-color: #E67D7D;
        }

        .project .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            margin-top: 20px;
        }


        @media (max-width: 768px) {
            .navlist {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 80px;
                right: 10px;
                background: black;
                padding: 10px;
                border-radius: 10px;
                width: 200px;
            }

            .navlist.active {
                display: flex;
            }

            #menu-icon {
                display: block;
                font-size: 36px;
                position: fixed;
                top: 15px;
                right: 15px;
                z-index: 1001;
                color: #ffa1df;
            }

            .logo img {
                max-width: 120px;
                height: auto;
            }
        }

        /* Responsive Home Section */
        @media (max-width: 800px) {
            #home .img-background {
                width: 450px;
                height: auto;
            }
        }
    </style>
</head>

<body>

    <header>
        <a href="#" class="logo"><img src="img/logo2.png"></a>
        <div id="menu-icon" aria-label="Toggle Navigation">&#9776;</div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#project">Project</a></li>
        </ul>
    </header>

    <section class="home" id="home">
        <div class="col-md-4 d-flex justify-content-center transparent">
            <img src="img/background2.png" alt="background-image" class="img-background">
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="img/about3.png" class="img-thumbnail" alt="...">
        </div>

        <div class="about-text">
            <h2>About Me</h2>
            <p>I am Kimberly Joan N. Palla, currently pursuing a Bachelor of Science in Information Technology in
                my third year at the Polytechnic University of the Philippines. I have a good knowledge of
                technology and understand the basics of multiple programming languages such as C++, C, Java, HTML,
                CSS, JavaScript, PHP, and Python. I'm interested to learn more about information technology and
                improve my skills.</p>
        </div>
    </section>

    <section class="project" id="project">
        <div class="project-text">
            <h2>Project</h2>
            <div class="button-container" id="project-buttons"></div>
        </div>
    </section>

    <script>
        const menuIcon = document.getElementById("menu-icon");
        const navList = document.querySelector(".navlist");

        menuIcon.addEventListener("click", function () {
            navList.classList.toggle("active");
        });

        const header = document.querySelector("header");

        window.addEventListener("scroll", function () {
            header.classList.toggle("sticky", window.scrollY > 200);
        });

        const projects = [
            { name: "Project 1", url: "A08/index.php" },
            { name: "Project 2", url: "#" },
            { name: "Project 3", url: "#" },
            { name: "Project 4", url: "#" },
            { name: "Project 5", url: "#" },
            { name: "Project 6", url: "#" }
        ];

        const projectContainer = document.getElementById('project-buttons');

        projects.forEach(project => {
            const button = document.createElement('a');
            button.href = project.url;
            button.innerHTML = `<button>${project.name}</button>`;
            projectContainer.appendChild(button);
        });
    </script>

</body>

</html>