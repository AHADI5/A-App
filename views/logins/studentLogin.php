<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/login.css">
    <link rel="stylesheet" href="../../styles/general.css">
   

</head>
<body>
<div class="login-container flex">
    <div class="login-section grid">
        <div class="welcome-part flex">
            <div class="welcome-text flex">
                <span class="welcome-word">Bienvenue</span>
                <p>
                sur A+ Grade une application de résultats en ligne ! <br>
                Cette application vous permet de consulter facilement 
                vos résultats en ligne depuis le confort de votre foyer.
                 Il vous suffit de saisir votre numéro d'étudiant et votre 
                 mot de passe pour commencer.
                </p> 
            </div>
        </div>
        <div class="login-zone show">
            <div class="logo"><span class="a">A</span>+ <span class="grade">Grades</span></div>
            <div class="instructions flex">
                <div class="warning-icon"> <i class="bi-exclamation-lg"></i> </div>
                <div class="warning-info">
                    <p >Matricule : 1736</p> 
                    <p>Mot de passe : 12345</p>
                </div>
            </div>
            <form action="../../controllers/students/studentController.php" method = "post">
                    <div class="log-info">
                        <div class="label"> <label for="matricule">Matricule</label></div> 
                        <input type="number" name="matricule" id="matricule">
                    </div>
                    <div class="log-info">
                        <div class="label"><label for="matricule">Mot de passe</label></div>
                        
                        <input type="password" name="passWord" id="passWord">
                    </div>
                    <div class="forgotten">Mot de Passe oublié ?</div>
                    <div class="login-button"><button type="submit">Login</button></div>
            </form>
        </div>

        <div class="login-zone hide">
                <div class="logo"><span class="a">A</span>+ <span class="grade">Grades</span></div>
                <div class="instructions flex">
                    <div class="warning-icon"> <i class="bi-exclamation-lg"></i> </div>
                    <div class="warning-info">
                        <p >Ancien Mot de passe : 12345</p> 
                        <p>Nouveau Mot de passe : 12345</p>
                    </div>
                </div>
                <form action="">
                        <div class="log-info">
                            <div class="label"> <label for="matricule">Matricule</label></div> 
                            <input type="number" name="matricule" id="matricule">
                        </div>
                        <div class="log-info">
                            <div class="label"><label for="matricule">Mot de passe</label></div>
                            
                            <input type="number" name="matricule" id="matricule">
                        </div>
                      
                        <div class="login-button"><button type="submit">Login</button></div>
                </form>
        </div> 
    </div>
    <div class="made">Made by A-2G</div>
    
</div>
<script src="../../scripts/login.js"></script>
    
</body>
</html>