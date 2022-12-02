<?php

use Fastview\CrudSimples\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;


// replace with file to your own project bootstrap
// require_once 'bootstrap.php';
require_once __DIR__ . '/vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
//$entityManager = GetEntityManager();

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);

// execute no terminal os comandos vendor\bin\doctrine.bat
// vendor\bin\doctrine list
// vendor\bin\doctrine.bat orm:info
// vendor\bin\doctrine.bat orm:mapping:describe Cliente
// entityName Cliente
// CRIAR TABELAS MAPEADAS DAS CLASSES
// vendor\bin\doctrine.bat orm:schema-tool:create
// Atualiza as tabelas existentes
// vendor\bin\doctrine.bat orm:schema-tool:update
