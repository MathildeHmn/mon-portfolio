<!DOCTYPE html>

<?php error_reporting(0); ?>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PORTFOLIO - Mathilde Hamon | Développeuse Web à Angers.">

        <link rel="shortcut icon" type="image/png" href="./images/icon.png">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
        <link rel="stylesheet" href="./style1.css">
        <link rel="stylesheet" href="./mediaqueries1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <title>Mathilde Hamon - Développeuse Web à Angers.</title>
    </head>

    <body>
        <header>
            <div class="menu-toggler">
                <div class="bar half start"></div>
                <div class="bar"></div>
                <div class="bar half end"></div>
            </div>

            <nav class="top-nav">
                <ul class="nav-list">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">À propos</a></li>
                    <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                    <li><a href="#skills" class="nav-link">Compétences</a></li>
                    <li><a href="#education" class="nav-link">Formation</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>

            <div class="landing-text">
                <h5>Hello!</h5>
                <h2>Je m'appelle Mathilde Hamon.</h2>
                <h1>Et je suis Développeuse Web à Angers.</h1>
                <div class="trait"></div>
            </div>
        </header>

        <section class="about" id="about">
            <div class="container">
                <div class="profile-img" data-aos="fade-right" data-aos-delay="300">
                    <img class="profile-picture" src="./images/profile.jpeg" alt="profile-picture">
                </div>

                <div class="about-details" data-aos="fade-left" data-aos-delay="600">
                    <div class="about-heading">
                        <h5>Présentation -</h5>
                        <p>Passionnée par <span style="color: #899489;">la création</span> sous toutes ses formes et <span style="color: #899489;">l'univers du web</span> en général depuis quelques années, j'ai naturellement choisi de m'orienter vers le métier de Développeur Web. Durant ma formation, en Développement Web et Web Mobile, j'ai appris à connaître et apprivoiser un métier passionnant en constante évolution. Plutôt spécialisée dans le visuel, je me dirige davantage vers le Développement Frontend.</p>

                        <div class="social-media">
                            <ul class="nav-list">
                                <li><a href="https://www.linkedin.com/in/mathilde-hamon-769121189/" target="_blank" class="icon-link"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://github.com/MathildeHmn" target="_blank" class="icon-link"><i class="fab fa-github"></i></a></li>
                                <li><a href="https://www.pinterest.fr/mathildehmn/_saved/" target="_blank" class="icon-link"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="hobbies" id="hobbies" data-aos="fade-left" data-aos-delay="900">
                        <p>Quelques petites centres d'intérêt : l'art/le graphisme, la décoration d'intérieur, les séries TV (énormément), les jeux vidéos, les nouvelles technologies, les animaux, la cuisine et plein d'autres choses...</p>
                    </div>

                    <div class="cv">
                        <a href="./media/Mathilde Hamon - CV.pdf" target="_blank"><input type="button" value="Voir mon CV"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-heading">
                    <h4>PORTFOLIO</h4>
                    <h5>Quelques exemples de projets réalisés.</h5>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img" data-aos="fade-right" data-aos-delay="300">
                        <img class="portfolio-img" src="./images/portitem-4.png" alt="portfolio-item-4">
                    </div>

                    <div class="portfolio-description" data-aos="fade-left" data-aos-delay="300">
                        <h5>- Application météo</h5>

                        <p>J'ai réalisé une petite application de météo en anglais. Dès qu'on saisit la ville de son choix, et qu'on appuie sur "Entrée", la ville apparaît instantanément ainsi que la date, la température, le temps qu'il fait et enfin les minimales/maximales.</p>

                        <p class="technos">Technologies utilisées : <i class="fab fa-html5"></i> <i class="fab fa-css3"></i> <i class="fab fa-js"></i></p>

                        <a href="https://github.com/MathildeHmn/weather-app" target="_blank"><input type="button" value="Voir sur GitHub"></a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img" data-aos="fade-right" data-aos-delay="300">
                        <img class="portfolio-img" src="./images/portitem-2.png" alt="portfolio-item-2">
                    </div>

                    <div class="portfolio-description" data-aos="fade-right" data-aos-delay="300">
                        <h5>- Compte à rebours</h5>

                        <p>Une petite application de compte à rebours. Ici fixé à Noël 2020. J'ai réalisé ce compte à rebours avec HTML, CSS pour tout le visuel et les calculs se font avec JavaScript.</p>

                        <p class="technos">Technologies utilisées : <i class="fab fa-html5"></i> <i class="fab fa-css3"></i> <i class="fab fa-js"></i></p>

                        <a href="https://github.com/MathildeHmn/countdown-timer" target="_blank"><input type="button" value="Voir sur GitHub"></a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img" data-aos="fade-right" data-aos-delay="300">
                        <img class="portfolio-img" src="./images/portitem-3.png" alt="portfolio-item-3">
                    </div>

                    <div class="portfolio-description" data-aos="fade-left" data-aos-delay="300">
                        <h5>- Todo List</h5>

                        <p>Une petite application de Todo List qui permet de lister des tâches, les cocher quand elles sont terminées et les supprimer définitivement si on ne souhaite plus les voir.</p>

                        <p class="technos">Technologies utilisées : <i class="fab fa-html5"></i> <i class="fab fa-css3"></i> <i class="fab fa-js"></i> <i class="fab fa-sass"></i></p>

                        <a href="https://github.com/MathildeHmn/todolist-app" target="_blank"><input type="button" value="Voir sur GitHub"></a>
                    </div>
                </div>
        </section>

        <section class="skills" id="skills">
            <div class="container">
                <div class="section-heading">
                    <h4>COMPETENCES</h4>
                </div>

                <div class="my-skills">
                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-html5"></i>
                        </div>
                        <h6>HTML5</h6>
                    </div>

                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-css3"></i>
                        </div>
                        <h6>CSS3</h6>
                    </div>

                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-js"></i>
                        </div>
                        <h6>JavaScript</h6>
                    </div>

                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-react"></i>
                        </div>
                        <h6>React</h6>
                    </div>

                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-php"></i>
                        </div>
                        <h6>PHP</h6>
                    </div>

                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-symfony"></i>
                        </div>
                        <h6>Symfony</h6>
                    </div>

                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-bootstrap"></i>
                        </div>
                        <h6>Bootstrap</h6>
                    </div>

                    <div class="skill" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon-container">
                            <i class="fab fa-sass"></i>
                        </div>
                        <h6>Sass</h6>
                    </div>
                </div>

                <div class="tools" data-aos="fade-in" data-aos-delay="300">
                    <h6><i class="fas fa-star"></i> Bases de données -</h6>
                    <p>SQL Server, MySQL.</p>
                <div>

                <div class="tools" data-aos="fade-in" data-aos-delay="300">
                    <h6><i class="fas fa-star"></i> Outils -</h6>
                    <p>Git, GitHub.</p>
                <div>

                <div class="tools" data-aos="fade-in" data-aos-delay="300">
                    <h6><i class="fas fa-star"></i> IDE -</h6>
                    <p>VS Code, IntelliJ.</p>
                <div>

                <div class="tools" data-aos="fade-in" data-aos-delay="300">
                    <h6><i class="fas fa-star"></i> Hébergement -</h6>
                    <p>Hostinger.</p>
                <div>

                <div class="tools" data-aos="fade-in" data-aos-delay="300">
                    <h6><i class="fas fa-star"></i> Soft Skills -</h6>
                    <p>Créativité, sens esthétique, détermination, curiosité, esprit d'équipe.</p>
                <div>
            </div>
        </section>

        <section class="education" id="education">
            <div class="container">
                <div class="section-heading">
                    <h4>FORMATION</h4>
                </div>

                <div class="studies" data-aos="fade-down" data-aos-delay="300">
                    <ul>
                        <li class="educ-content">
                            <h6><i class="fas fa-star"></i> septembre 2019 - mai 2020</h6>
                            <h5>Formation au Développement Web et Web Mobile (Titre équivalent Bac+2) - Titre obtenu - à l'ENI École Informatique - Angers.</h5>
                        </li>
                        <br>
                        <br>

                        <li class="educ-content">
                            <h6><i class="fas fa-star"></i> septembre 2014 - juin 2017</h6>
                            <h5>Licence en Langues Étrangères Appliquées - Licence obtenue - à la Faculté de Lettres, Langues et Sciences Humaines - Angers.</h5>
                            <p>• Anglais/Espagnol, marketing, commerce international, économie, droit des entreprises.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <?php
            if (isset($_POST['submit'])) {

                $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
                $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
                $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
                $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

                if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
                    $name_error = 'Nom invalide.';
                }

                if (!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
                    $subject_error = 'Sujet invalide.';
                }

                if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
                    $email_error = 'Email invalide.';
                }

                if (strlen($message) === 0) {
                    $message_error = 'Le message ne peut pas être vide.';
                }
            }
        ?>

        <section class="contact" id="contact">
            <div class="container">
                <div class="section-heading">
                    <h4>CONTACT</h4>
                    <h5>N'hésitez pas à me laisser un petit mot.</h5>
                </div>

                <a name="myAnchor"></a>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#myAnchor" method="POST" data-aos="fade-up" data-aos-delay="300">
                    <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" maxlength="100" required>
                        <p><?php if (isset($name_error)) echo $name_error; ?></p>
                    
                    <label for="email">Email :</label>
                        <input type="email" id="email" name="email" maxlength="50" required>
                        <p><?php if (isset($email_error)) echo $email_error; ?></p>
                    
                    <label for="subject">Sujet :</label>
                        <input type="text" id="subject" name="subject" maxlength="100" required>
                        <p><?php if (isset($subject_error)) echo $subject_error; ?></p>
                    
                    <label for="message">Message :</label>
                        <textarea name="message" id="message" cols="10" rows="10" maxlength="500"></textarea>
                        <p><?php if (isset($message_error)) echo $message_error; ?></p>
                    
                    <input type="submit" name="submit" value="Envoyer">

                    <?php 
                        if (isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
                            $to = 'mathildehmnpro@gmail.com';
                            $body = " Nom: $name\n Email: $email\n Message:\n $message";
                            if (mail($to, $subject, $body)) {
                                echo '<p style="color: white; padding: 10px; font-size: 14px;">✓ Message envoyé.</p>';
                            } else {
                                echo '<p style="color: white; padding: 10px; font-size: 14px;">✗ Une erreur est survenue, veuillez réessayer ultérieurement.</p>';
                            }
                        }
                    ?>
                </form>
            </div>
        </section>

        <footer class="copyright">
            <div class="up" id="up">
                <i class="fas fa-chevron-up"></i>
            </div>
            <p>&copy; Créé avec ♥ par MathildeHmn(); 2020.</p>
        </footer>

        <script src="https://kit.fontawesome.com/8e770cc2bc.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="./main.js"></script>
        <!-- <script src="./snowflake.js"></script> -->
    </body>

</html>



