<?php

// Protocolos de encriptacion SSL TLS

    // Generrar llave Publica y Privada

    $pKey = [

        'privateKey' => 2048,
        'provatekeyType' => OPENSSL_KEYTYPE_RSA
    ];

    $privateKey = openssl_pkey_new($pKey);
    
    
    // GUARDAMOS LA LLAVE PRIVADA EN UN ARCHIVO NO COMPARTIDO CON NADIE

    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum facilis culpa, voluptatum voluptates neque eligendi in tenetur, saepe delectus esse temporibus omnis, aut consequuntur eos accusamus possimus quasi inventore quo.";

    // string gzcompress(string $str, int $ratio_compresion [1-9])
    // Se utiliza -1 porque de esta forma obtiene el formato mas actual.

    $z = gzcompress($str, 9); // comprime strings
    
    // string gzuncompress(string $str);

    $u = gzuncompress($z); // Descomprime string

    var_dump($u);
