<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>

    <title>Portfolio Lapena Matheo</title>
    
  </head>
  <body>
    
    <?php include 'navbar.php' ?>
    <img class="imageCode" src="image/profil.png"/>
    <br/>
    <br/>
    <br/>
    <div class="container">  
      <div class="container container-main">
        <h4 class="heading-style-1 font-alt"id="moi">- A PROPOS DE MOI</h4>
        <div class="indentation">
          Bonjour, je suis Mathéo Lapena, je suis née le 19 décembre 2002 et j'ai donc 20 ans.
          Je suis actuellement en 2ème année de BTS SIO (Services informatiques aux organisations) option SLAM au lycée et institue supérieur Saint-Denis à Annonay.
          Depuis mon plus jeune âge, j’ai toujours été attiré par l’informatique et les nouvelles technologies. C’est tout naturellement que je me suis tourné vers ces études, faisant des études similaires et des recherches par passion personnelle.
          <br/>
          <br/>
          <br/>
        </div>
        <h4 class="heading-style-1 font-alt"id="experiencePro">- EXPERIENCE PROFESSIONNEL</h4>
        <div class="indentation">
          J’ai eu l'opportunité d’effectuer des stages en milieu professionnel, dans différentes entreprises, disposant d’un service informatique de développement. Les études que j’ai entreprises répondent, à une passion et à un réel intérêt pour l'innovation informatique et technologique.
          <br/>
          <br/>
          <div class="row">
            <div class="col-sm">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">1er Stage</h5>
                  <p class="card-text">Stage à Platon Formation à Annonay</p>
                  <div class="card-footer">
                    <br/>
                    <button class="btn btn-primary" onclick="toggleCardSize()">Agrandir</button>
                    <br/>
                    <br/>
                    <div id="hiddenText" style="display:none;">
                      <p>
                        Pour mon premier stage de ma formation pour le BTS SIO option SLAM, je me suis tourné vers Platon Formation se situant 
                        au 15 rue Sadi Carnot, 07100 Annonay. Gérer par M. CHAFFANJON Jonathan qui fut aussi mon maître de stage. Grâce à ce stage, 
                        j'ai pu voir un nouveau langage de programmation qui fut le Ruby on Rails et j'ai ainsi pu combler différentes lacunes que j'avais.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">2eme Stage</h5>
                  <p class="card-text">Stage au Garage des Trois Rivières à Is-sur-Tille</p>
                  <div class="card-footer">
                    <br/>
                    <button class="btn btn-primary" onclick="toggleCardSize2()">Agrandir</button>
                    <br/>
                    <br/>
                    <div id="hiddenText2" style="display:none;">
                      <p>
                        Pour mon deuxième stage de ma formation pour le BTS SIO option SLAM, je suis allée au Garage des Trois Rivières se situant aux 19 
                        route de Dijon, 21120 Is-sur-Tille. Gérer par M. LAPENA Alexandre ainsi que Mme. PETILLAT Francoise qui fut aussi mon maître de stage. 
                        Grâce à ce stage, qui ne disposait pas de service informatique, j'ai dû faire un site prenant comme thème le Garage des Trois Rivières, 
                        je me suis amélioré dans la création d'un site web en autonomie totale me permettant de m'améliorer dans la recherche de solution lors d'un problème.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
            function toggleCardSize() {
              var hiddenText = document.getElementById("hiddenText");
              if (hiddenText.style.display === "none") {
                hiddenText.style.display = "block";
              } else {
                hiddenText.style.display = "none";
              }
            }
          </script>
          <script>
            function toggleCardSize2() {
              var hiddenText = document.getElementById("hiddenText2");
              if (hiddenText.style.display === "none") {
                hiddenText.style.display = "block";
              } else {
                hiddenText.style.display = "none";
              }
            }
          </script>


 
          <br/>
          <br/>
          <br/>
        </div>
            
        <h4 class="heading-style-1 font-alt"id="projetPro">- PROJET PROFESSIONNEL</h4>
        <div class="indentation">
          Mon projet professionnel Future est de devenir « Développeur dans le domaine vidéoludique ».
          Actuellement en BTS SIO option SLAM pour suivre une formation de deux ans 2 ans, une formation diplômante bac+2 afin de devenir par la suite alternant en licence . Je souhaite par le biais de l’apprentissage en l’alternance participer à la construction et au développement de l’entreprise, en grandissant avec elle, en apportant mes compétences, ma motivation et en partageant ma passion de la haute technologie.
          <br/>
          <br/>
          <br/>
        </div>
              
        <h4 class="heading-style-1 font-alt"id="competence">- MES COMPETENCES</h4>
        <div class="row">
          <div class="col-12 col-md-6 align-self-center wow fadeInLeft">
            <div class="indentation font-alt w-80 sm-w-100 font-30 font-w-600 m-15px-b color-extra-dark-gray">
              <u>Compétences aquises</u> :
            </div>
            <p class="indentation w-80 sm-w-100">
              Toutes ces connaissances ont été acquises de différentes façons. Elles ont été acquises durant mes études et d'autres par ma propre initiative en essayant de mettre en place des solutions. J’ai également relevé les défis organisés, ce qui permet d’effectuer des recherches et aller encore plus loin.
            </p>
            <div class="indentation font-alt w-80 sm-w-100 font-30 font-w-600 m-15px-b color-extra-dark-gray">
             <u>Administration Réseau et Système</u> :
            </div>
            <p class="indentation w-80 sm-w-100">
              L'administration réseau et système est une chose importante qui ne doit pas être négligée, elle permet de transporter des informations, de ce fait si aucune précaution, ou aucune sécurité n'est appliquée des risques peuvent survenir comme: Perte de données, Rupture de confidentialité, Perte d'intégrité des données et aucune restriction d'accés.
            </p>
            <div class=" indentation font-alt w-80 sm-w-100 font-30 font-w-600 m-15px-b color-extra-dark-gray">
              <u>Programmation</u> :
            </div>
            <p class="indentation w-80 sm-w-100">
              La programmation est une compétence très utile et importante, elle nous permet de nous donner un ordre d'idée de fonctionnement d'une solution. La programmation informatique est l'écriture de programmes servant à créer un logiciel. Un programme contient l'ensemble des informations nécessaires pour que le logiciel remplisse sa tâche.
            </p>
          </div><!-- col -->

          <div class="col-12 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
            <div class="espace">
              <u>Systèmes d'exploitation</u> :
            </div>
            <div>
              
              <span>
                Linux
              </span>
              
              
            </div>
            
            <div>
              <span>
                Windows
              </span>
              
              
            </div>
            <br/>
            

            <div class="espace"><u>Programmation</u> :</div>
            <div>
              <span>
                PHP / HTML / CSS
              </span>              
            </div>
            <div >
              <span>
                C# / Python
              </span>            
            </div>
            <br/>
            <div class="espace"><u>Scripting</u> :</div>
            
            
            <div>
              <span>
                Python
              </span>              
            </div>
            
            

            <br/>

            
            

            <div class="espace">
              <u>Base de données</u> :
            </div>
            <div>
              <span>
                MySQL, MariaDB, SQLserver
              </span>              
            </div>

              
            
          </div>

        </div>
      



            <br>
            <br>
            <br>
        
          </div>
        </div>
      </div>
        <br/>
        <br/>
    </div> 
    <?php include 'footer.php'?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>