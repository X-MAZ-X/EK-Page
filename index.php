<?php require_once('./assets/layout/header.php'); ?>
<body>
    <div class="container">
        <h1>Willkommen auf meiner EK Website!</h1>
        <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
        <p>Informatiker Winter 2024</p>
        <p>Name: Mark A. Zöphel</p>
        <p>Standort: DAA herford</p>
        <form>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="message">Nachricht:</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kontaktiere mich</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
<?php require_once('./assets/layout/footer.php'); ?>