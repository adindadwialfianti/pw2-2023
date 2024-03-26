<?php

    require_once 'class_HariRaya.php';

    //object
    $IedulFitri= new IedulFitri('Islam', '10 April ', 'sholat ied');
    $Natal= new Natal('Kristen', '25 Desember', 'ibadah ke gereja');
    $Imlek= new Imlek('Budha', '10 Februari', 'doa dan tradisi');

    echo 'Info IedulFitri:<br>';
    $IedulFitri->getInfoIedulFitri();
    echo '<br>';

    echo 'Info Natal:<br>';
    $Natal->getInfoNatal();
    echo '<br>';

    echo 'Info Imlek:<br>';
    $Imlek->getInfoImlek();