<?php

    $senha = "admin";

    $senhaCriptografada = password_hash($senha, PASSWORD_ARGON2I);

    echo "$senhaCriptografada";
