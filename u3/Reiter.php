<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d0a105d246.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Reiter</title>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron mx-auto">

        <h1 align="center">Aufgabenplaner: Reiter</h1>

    </div>
    <div class="row">
        <?php include("sidebar.php")?>
        <div class="col-8" id="content">
                <table class="table">
                    <thead class="light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Beschreibung</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ToDo</td>
                        <td>Dinge die erledigt werden müssen</td>
                        <td><i class="fas fa-edit"></i></td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Erledigt</td>
                        <td>Dinge die erledigt sind</td>
                        <td><i class="fas fa-edit"></i></td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Verschoben</td>
                        <td>Verschobene Dinge</td>
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
                        <label for="Reitername">Bezeichnung des Reiters:</label>
                        <input type="text" class="form-control" id="Reitername" placeholder="Reiter">
                        <br>
                        <label for="Beschreibung">Beschreibung</label>
                        <textarea class="form-control" id="Beschreibung" placeholder="Beschreibung" rows="4"></textarea>
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