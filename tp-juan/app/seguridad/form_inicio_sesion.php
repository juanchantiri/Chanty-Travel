<?php require_once 'view/templates/header.phtml'?>

<?php if($error): ?>
    <div class='alert alert-danger' role = 'alert'>
        <?= $error ?>
    </div>
<?php endif ?>


<body>
<h2>Iniciar Sesión</h2>
        <form action="Login" method="post">
            <div class="form-group">
                <label for = "email">Email:</label>
                <input type="email" class= "form-control "name="email" id="email" required>

                <label for = "password">Password:</label>
                <input type="password" name="password" placeholder="Password" id = "password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
