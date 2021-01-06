<?php

include __DIR__.'/vendor/autoload.php';

use \App\Model\Vaga;

$vagas = Vaga::getVagas(); 

include __DIR__.'/app/View/header.php';
include __DIR__.'/app/View/listagem.php';
include __DIR__.'/app/View/footer.php';