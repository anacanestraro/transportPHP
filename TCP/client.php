<?php

    function start_client($address, $port){
        $client_socket = socket_create(AF_INET, SOCK_STREAM);


        $client_socket->socket_connect($address, $port);

        $message = readline("Digite uma menssagem: ");
        $client_socket->socket_write($message, strlen($message));
    }

    $destination = 'localhost';
    $port = 5000;

    start_client($destination, $port);

?>