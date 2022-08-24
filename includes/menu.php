<div class="card">
    <div class="card-header">
        Menu
    </div>
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-link">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-link">
                <a class="nav-link" href="index.php">Cadastre-se</a>
            </li>
            <li class="nav-link">
                <a class="nav-link" href="index.php">Login</a>
            </li>
            <li class="nav-link">
                <a class="nav-link" href="index.php">Incluir Post</a>
            </li>
            <?php if ((isset($_SESSION['login']))
                    && ($_SESSION['login']['usuario']['adm'] === '')) : ?>
            <li class="nav-link">
                <a class="nav-link" href="index.php">Usuários</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>