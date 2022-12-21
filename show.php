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
    <?php

        session_start();

        $email = $_SESSION['email'];

        include('db_connection.php');

        $recupera_utente = "SELECT nome, cognome FROM utenti WHERE email='$email' ";
        $recupera_evento = "SELECT * FROM eventi WHERE attendees LIKE '%$email%'";

        $result_recupera_utente = mysqli_query($conn, $recupera_utente);
        $result_recupera_evento = mysqli_query($conn, $recupera_evento);


        if (!$result_recupera_utente) {
            die("Errore nella query: " . mysqli_error($conn));
        }

        if (!$result_recupera_evento) {
            die("Errore nella query: " . mysqli_error($conn));
        }
        
        $utente = mysqli_fetch_assoc($result_recupera_utente);
        $evento = mysqli_fetch_assoc($result_recupera_evento);

        if(isset($_POST['reset_password'])) {
            $to = $_SESSION['email'];            
            $subject = "Reimposta password";            
            $message = "Ciao,\n\nHai richiesto di reimpostare la tua password";
            $headers = "From: Edusogno <noreply@edusogno.com>\r\n";
            mail($to, $subject, $message, $headers);
            echo "Una email di reimpostazione password è stata inviata al tuo indirizzo email.";
        }
          
    ?>

    <header>
        <a href="index.php">
            <img src="./assets/img/logo-black.svg" alt="Logo Edusogno" class="logo">
        </a>
    </header>
    <main>
        <div class="main_container">               
            <h1 class="titolo"> Ciao <?php echo $utente['nome'] . " " . $utente['cognome'] ?> </h1>                
            <div class="event_container flex_column">
                <?php while($evento = mysqli_fetch_assoc($result_recupera_evento)): ?>
                    <div class="event_box flex_column">
                        <h2> <?php echo $evento['nome_evento'] ?> </h2>
                        <span> <?php echo $evento['data_evento'] ?> </span>
                        <button class="bottone"> JOIN </button>
                    </div>
                <?php endwhile; ?>
                <form method="post">
                    <button class="bottone" type="submit" name="reset_password" value="reset_password">Reimposta Password</button>
                </form>
            </div>                    
        </div>            
            
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