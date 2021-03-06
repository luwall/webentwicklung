<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d0a105d246.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Personen</title>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron mx-auto">

        <h1 align="center">Aufgabenplaner: Personen</h1>

    </div>
    <div class="row">


                <?php include("sidebar.php")?>

        <div class="col-8" id="content">
            <table class="table">
                <thead class="light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">In Projekt</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Max Mustermann</td>
                    <td>mustermann@muster.de</td>
                    <td><input class="form-check-input" type="checkbox"> </td>
                    <td><i class="fas fa-edit"></i></td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr>
                    <td>Petra Müller</td>
                    <td>petra@mueller.de</td>
                    <td><input class="form-check-input" type="checkbox"> </td>
                    <td><i class="fas fa-edit"></i></td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <div class="form-group">
                <h3>Bearbeiten/erstellen</h3>
                <label for="Name">Username:</label>
                <input type="text" class="form-control" id="Name" placeholder="Username">
                <br>
                <label for="email">E-Mail Adresse:</label>
                <input type="text" class="form-control" id="email" placeholder="E-Mail Adresse eingeben">
                <br>
                <label for="passwort">Passwort</label>
                <input type="password" class="form-control" id="passwort" placeholder="Passwort">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary">Speichern</button>
                <button type="button" class="btn btn-info">Reset</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>