<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>To-do´s</title>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron mx-auto">

        <h1 align="center">Aufgabenplaner: Login</h1>

    </div>
    <div class="row">
        <div class="col-2" id="sidebar">
        </div>
    <div class="col-8">
        <div class="row">
            <div class="col">

                <form class="mb">
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-Mail Adresse</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EMail-Adresse eingeben">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Passwort</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Passwort">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">AGBs und Datenschutzbedingungen akzeptieren</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Einloggen</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Noch nicht registriert <a href="#" class="link">Registrieren</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Da der Login Vorgang technisch noch nicht realisiert wurde<a href="Projekte.php" class="link"> Überspringen</a></p>
            </div>
        </div>
    </div>
</body>
</html>