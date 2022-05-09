<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mon cv</title>
    <link rel="stylesheet" href="cvnafissatou.css">

</head>
<body>

            <nav>
                <div class="profile">
                    <img src="nafi.jpg" alt="profile photo" />
                    <h1>Nafissatou Ndiaye</h1>
                </div>
                <ul>
                    <li><a href="#page-1">Accueil</a></li>
                    <li><a href="#page-2">Mon profil</a></li>
                    <li><a href="#page-3">Mes projets</a></li>
                    <li><a href="#page-4">Contact</a></li>
                </ul>
            </nav>
            <section class="page-content" id="page-4">
                    <header>
                        <h1>bonjour,je me nomme nafissatou.</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
                            debitis, facilis aliquam voluptates fugiat ipsum odio, nihil
                            architecto fuga laboriosam tempore necessitatibus quas? Incidunt nobis
                            ducimus vel, delectus sit quod Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                        <button>Dites Hey</button>
                    </header>
        
                    <section class="presentation-image">
                        <img src="font.jpeg"/>
                    </section>
                    <div>
                            <section class="projects-section" id="page-1">
                                <div>
                                        <div class="scroll-page">
                                                <h1>Mon profil</h1>
                                                <div class="projects">
                                                    <div class="project">
                                                        <h4>Front-End</h4>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                            Molestias sunt, atque aliquid pariatur.
                                                        </p>
                                                        <p class="dates">Dates 22021 - 2022</p>
                                                    </div>
                                                    <div class="project">
                                                        <h4>Back-End</h4>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                            Molestias sunt, atque aliquid pariatur.
                                                        </p>
                                                        <p class="dates">Dates 2021 - 2022</p>
                                                    </div>
                                                    <div class="project">
                                                        <h4>Tools</h4>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                            Molestias sunt, atque aliquid pariatur.
                                                        </p>
                                                        <p class="dates">Dates 2021 - 2022</p>
                                                    </div>
                                                    <div class="project">
                                                        <h4>Microsoft office</h4>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                            Molestias sunt, atque aliquid pariatur.
                                                        </p>
                                                        <p class="dates">Dates 22021 - 2022</p>
                                                    </div>
                                                </div>
                                        </div> 
                                </div>   
                            </section>
                    </div>
                    <section class="projects-section" id="page-3">
                        <h1>Mes projets</h1>
                        <div class="projects">
                            <div class="project">
                                <h4>Créer mon Portfolio Avec HTML Et CSS</h4>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Molestias sunt, atque aliquid pariatur.
                                </p>
                                <p class="dates">Dates 2021 - 2022</p>
                            </div>
                            <div class="project">
                                <h4>Ajouter Un Formulaire De Contact Sur mon Portfolio</h4>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Molestias sunt, atque aliquid pariatur.
                                </p>
                                <p class="dates">Dates 2021 - 2022</p>
                            </div>
                            <div class="project">
                                <h4>Créer mon Blog Avec PHP Et Mysql </h4>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Molestias sunt, atque aliquid pariatur.
                                </p>
                                <p class="dates">Dates 2021 - 2022</p>
                            </div>
                            <div class="project">
                                <h4>Créer Une Plateforme De Gestion De Rendez-Vous Avec Laravel</h4>
                                <p class="description">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Molestias sunt, atque aliquid pariatur.
                                </p>
                                <p class="dates">Dates 2021 - 2022</p>
                            </div>
                            
                        </div>
                    </section>
                 <footer>
                     <div class="contact" id="page-2">
                            <h4>Contact: </h4>
                           <p>Address : Bamblor, Dakar, Senegal</p> 
                           <p> Email : nafissatoufina99@gmail.com</p>
                           <p> phone : +221 77 236 01 71</p>
                           <p>  whatsapp : +221 77 236 01 71</p>
                     </div>
                            <!--formulaire-->
                            <form method="post" action="form.php">
                                    <fieldset>
                                      <legend> vous pouvez aussi  m ecrire :</legend>
                                      <div class="champ">
                                        <label for="nom">Nom :</label>
                                        <input type="text" id="nom" name="nom">
                                      </div>
                                      <div class="champ">
                                        <label for="prenom">Prénom :</label>
                                        <input type="text" id="prenom" name="prenom">
                                      </div>
                                      <div class="champ">
                                        <label for="mail">Adresse mail :</label>
                                        <input type="email" id="adresse_email" name="mail">
                                       </div>
                                    </div>
                                    <div class="champ">
                                            <label for="nom">Message :</label>
                                      <textarea name="message" placeholder="votre message"></textarea>
                                     </div>  
                                    </fieldset>
                                    <fieldset>
                                      <input type="submit" value="Envoyer" name="send">
                                    </fieldset>
                                  </form>
                </footer>
</body>
</html>