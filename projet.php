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
    <img class="imageCode" src="image/projet.png"/>
    <br/>
    <br/>
    <br/>
    <div class="container">  
      <div class="container container-main">
        <h4 class="heading-style-1 font-alt"id="experiencePro">- Projet</h4>
        <div class="indentation">
          J’ai eu l'opportunité d’effectuer durant ma formation des projet seul ou en groupe avec des thème divert.
          <br/>
          <br/>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">PPE Site Référentiel de jeux</h5>
                        <p class="card-text">Projet de groupe fait avec MARINI Noe</p>
                        <div class="card-footer">
                            <br/>
                            <button class="btn btn-primary" onclick="toggleCardSize()">Agrandir</button>
                            <br/>
                            <br/>
                            <div id="hiddenText" style="display:none;">
                                <p>
                                    Ce site est un site fait avec bootstrap en php avec une base de données MySQL, ce site étaient dans le but de classé les 5 meilleurs jeux par an depuis 2015 sellons nos préférences.
                                </p>
                                <a href="https://github.com/Obyssa/PPE"><button class="btn btn-primary">GitHub</button></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Projet gestion immobilière</h5>
                        <p class="card-text">Projet seul</p>
                        <div class="card-footer">
                            <br/>
                            <button class="btn btn-primary" onclick="toggleCardSize2()">Agrandir</button>
                            <br/>
                            <br/>
                            <div id="hiddenText2" style="display:none;">
                                <p>
                                    Ce projet a pour objectif de nous apprendre le langage WPF en nous mettant dans un possesseur de bien immobiliers qui veut gérer c'est bien, connaître la valeur savoir qui loue le bien...
                                    Pour ce faire nous utilisons l'interface graphique WPF pour créer cette application avec un ORM.
                                </p>
                                <a href="https://github.com/Obyssa/gestImmo"><button class="btn btn-primary">GitHub</button></a>
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
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Site du Garage des Trois Rivières</h5>
                        <p class="card-text">Projet seul</p>
                        <div class="card-footer">
                            <br/>
                            <button class="btn btn-primary" onclick="toggleCardSize3()">Agrandir</button>
                            <br/>
                            <br/>
                            <div id="hiddenText3" style="display:none;">
                                <p>
                                    Durant mon stage au Garage des Trois Rivières d'Is-sur-Tille, j'ai créé un site donnant les 
                                    informations ainsi qu'une page de connexion, d'inscription, mais aussi une page affichant les différentes 
                                    offres de voiture neuve ou d'occasion que le garage expose.
                                    Pour ce faire j'ai utilisé bootstrap, php ainsi qu'une BDD MySQL.
                                </p>
                                <a href="https://github.com/Obyssa/Garage"><button class="btn btn-primary">GitHub</button></a> 
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-sm">
                </div>
                <script>
                    function toggleCardSize3() {
                    var hiddenText = document.getElementById("hiddenText3");
                    if (hiddenText.style.display === "none") {
                        hiddenText.style.display = "block";
                    } else {
                        hiddenText.style.display = "none";
                    }
                    }
                </script>
            </div>
          
         
          <br/>
          <br/>
          <br/>
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