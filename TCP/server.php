<?php

    function start_server($adress, $port){
        $server_socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        $socket_bind = socket_bind($address, $port);
        $server_socket->listen(1);
    }

    echo ("Server rodando.....$address:$port \n");

    while (true) {
        $client_socket = socket_accept($server_socket);
        $data = socket_read($client_socket, 1024);

        echo ("$address-Mensagem:$data \n");
        socket_close($client_socket);
    }
    
    $host = 'localhost';
    $port = 5000;
    
    start_server($host, $port);

?>