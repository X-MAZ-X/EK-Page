<?php require_once('./assets/layout/header.php'); ?>

<h1>Login</h1>
    <form>
        <div class="form-group">
            <label for="username">Benutzername:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="password">Passwort:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password">
        </div>
        <p></p>
        <p class="text-center text-body-secondary"> <button type="submit" class="btn btn-primary">Einloggen</button>
    </form>
<?php require_once('./assets/layout/footer.php'); ?>