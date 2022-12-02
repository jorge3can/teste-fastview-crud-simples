<?php include __DIR__ . '/../inicio-html.php'; ?>

<main class="form-signin bg-cinza">
    <div class="d-flex justify-content-center pt-3">
        <img class="rounded" src="/images/logo.png" />
    </div>

    <form action="/realiza-login" method="post">
        <h1 class="h3 mt-3 mb-3 fw-normal">Logar</h1>
        <div class="form-floating">
            <input 
                type="email"
                name="email"
                id="floatingInput"
                class="form-control form-signin mt-2 mb-2"
                placeholder="email@provedor.com"
                required="required"
                autofocus />
            <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating">
            <input
                type="password"
                name="senha"
                id="floatingPassword"
                class="form-control form-signin mt-2 mb-2"
                required="required" />
            <label for="floatingPassword">Senha</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary">
            Entrar
        </button>

        <p class="mt-5 mb-3 text-muted">&copy; Jorge Domingues 2022</p>
    </form>
</main>
<!-- JS necessario para funcionar o botao Fechar da mensagem -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>