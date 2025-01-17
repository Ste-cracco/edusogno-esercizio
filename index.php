<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edusogno</title>
</head>

<body>
    <header>
        <a href="index.php">
            <img src="./assets/img/logo-black.svg" alt="Logo Edusogno" class="logo">
        </a>
    </header>
    <main>
        <div class="main_container">
            <h1 class="titolo"> Hai già un account? </h1>
            <div class="form_container">   
                <form class="form flex_column" method="post" action="login.php" enctype="multipart/form-data">
                    <div class="row">
                        <label for="email">Inserisci l' e-mail</label> 
                        <input type="email" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="row">
                        <label for="password">Inserisci la password</label>
                        <input type="password" id="password" name="password" placeholder="Scrivila qui">
                        <i class="active fa-solid fa-eye "></i>
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>                    
                    <button class="bottone" type="submit" value="Submit"> Accedi </button>
                    <div class="registrati">
                        <span>Non hai ancora un profilo?</span>
                        <a href="create.php">
                            <span>Registrati</span>
                        </a> 
                    </div>
                </form> 
            </div> <!-- Chiusura Form Container -->               
            <img class="razzo" src="./assets/img/razzo.svg" alt="">  
            <img class="dark_blue_wave" src="./assets/img/dark_blue_wave.svg" alt="">
            <img class="blue_wave" src="./assets/img/blue_wave.svg" alt="">
            <img class="white_circle" src="./assets/img/Ellipse13.svg" alt="">
            <img class="small_white_circle" src="./assets/img/Ellipse12.svg" alt="">
            <img class="white_wave" src="./assets/img/white_wave.svg" alt="">                   
        </div> <!-- Chiusura Main Container --> 

        <script src="./assets/js/script.js"></script>
    </main>
</body>

</html>