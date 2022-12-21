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
                <form class="form flex_column" method="post" action="register.php" enctype="multipart/form-data">
                    <div class="row">
                        <label for="email">Inserisci il nome</label> 
                        <input type="text" id="name" name="name" placeholder="Mario">
                    </div>
                    <div class="row">
                        <label for="email">Inserisci il cognome</label> 
                        <input type="text" id="lastname" name="lastname" placeholder="Rossi">
                    </div>
                    <div class="row">
                        <label for="email">Inserisci l' e-mail</label> 
                        <input type="email" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="row">
                        <label for="password">Inserisci la password</label>
                        <input type="password" id="password" name="password" placeholder="Scrivila qui">
                    </div>                    
                    <button class="bottone" type="submit" value="Submit"> Registrati </button>
                </form> 
            </div> <!-- Chiusura Form Container -->   
            
            <img class="razzo" src="./assets/img/razzo.svg" alt="">  
            <img class="dark_blue_wave" src="./assets/img/dark_blue_wave.svg" alt="">
            <img class="blue_wave" src="./assets/img/blue_wave.svg" alt="">
            <img class="white_circle" src="./assets/img/Eclipse13.svg" alt="">
            <img class="small_white_circle" src="./assets/img/Eclipse12.svg" alt="">
            <img class="white_wave" src="./assets/img/white_wave.svg" alt="">
                   
        </div> <!-- Chiusura Main Container --> 
    </main>
</body>

</html>