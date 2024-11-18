<?php require_once('./assets/layout/header.php'); ?>
<body>
    <div class="container">
        <h1>About</h1>
        <p>Durch die Arbeit mit HTML habe ich gelernt, wie man die Grundstruktur einer Website erstellt. Dabei geht es um das Erstellen von Elementen wie Überschriften, Absätzen, Listen und Bildern. CSS hat mir gezeigt, wie ich das Design und die Darstellung dieser Elemente anpassen kann, Schriftarten oder Layouts. Mit Bootstrap konnte ich lernen, wie man responsive Designs erstellt, die auf verschiedenen Geräten gut aussehen, und wie man vorgefertigte Komponenten wie Buttons, Navigationen oder Grid-Systeme effizient einsetzt. Insgesamt habe ich ein besseres Verständnis für die Grundlagen moderner Webentwicklung erlangt. Wenn du fragen hast, Kontaktiere mich.</p>
        <h2>Kontakt</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Ihr Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Ihre Email" required>
            </div>
            <div class="form-group">
                <label for="message">Nachricht:</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Absenden</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
<?php require_once('./assets/layout/footer.php'); ?>