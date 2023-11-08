<main class="content">
    <?php
        renderTitle(
            'Cadastro de Usuário',
            'Crie e atualize o usuário',
            'icofont-user'
        );

        include(TEMPLATE_PATH . "messages.php");
    ?>

    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome"
                    class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>"
                    value="<?= $name ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" id="email" email="email" placeholder="Informe o email"
                    class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                    value="<?= $email ?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Informe a senha"
                    class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirmação de Senha</label>
                <input type="password" id="confirm_password" email="confirm_password" placeholder="Confirme sua Senha"
                    class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start-date">Data de Admissão</label>
                <input type="date" id="start-date" name="start-date"
                    class="form-control <?= $errors['start-date'] ? 'is-invalid' : '' ?>
                    value="<?= $start_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['start-date'] ?>
                </div>
            <div class="form-group col-md-6">
                <label for="end-date">Data de Desligamente</label>
                <input type="date" id="end-date" email="end-date"
                    class="form-control <?= $errors['end-date'] ? 'is-invalid' : '' ?>"
                    value="<?= $end_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['end-date'] ?>
                </div>
            </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="is_admin">Administrador?</label>
                <input type="check-box" id="is_admin" name="is_admin"
                    class="form-control <?= $errors['is_admin'] ? 'is-invalid' : '' ?>"
                    <?= $is_admin ? 'checked' : '' ?>>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            
        </div>
        <div>
            <button class="btn btn-primary btl-lg">Salvar</button>
            <a href="users.php"
                class="btn btn-secondary btl-lg">Cancelar</a>
        </div>
    </form>
</main>
