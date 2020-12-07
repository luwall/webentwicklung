<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Projekte</title>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron mx-auto">

        <h1 align="center">Aufgabenplaner: Projekte</h1>

    </div>
    <div class="row">
        <?php include("sidebar.php")?>
        <div class="col-8" id="content">
            <label for="Projektwahl"><h3>Projekt auswählen</h3></label>
            <select class="form-control" id="Projektwahl">
                <option selected disabled>Projekt auswählen</option>
                <option value="#">Projekt 1</option>
                <option value="#">Projekt 2</option>
                <option value="#">Projekt 3</option>
            </select>
            <br>
            <div class="form-group">
                <button type="button" class="btn btn-primary">Auswählen</button>
                <button type="button" class="btn btn-primary">Bearbeiten</button>
                <button type="button" class="btn btn-danger">Löschen</button>
            </div>
            <h3>Projekt bearbeiten/erstellen</h3>
            <div class="form-group">
                <label for="Projektname">Projektname</label>
                <input type="text" class="form-control" id="Projektname" placeholder="Projektnamen eingeben">
                <br>
                <label for="Projektname">Projektbeschreibung</label>
                <textarea class="form-control" id="Projektbeschreibung" placeholder="Projektbezeichnung eingeben" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary">Speichern</button>
                <button type="button" class="btn btn-info">Reset</button>
            </div>
        </div>
    </div>
</body>
</html>