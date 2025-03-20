<?php

    $estacionamento = [
        'Fusca',
        'Uno',
        'Ferrari'


    ];

    foreach ($estacionamento as $key => $value) {
       echo "<hr>";
       echo "<b>Veiculo" . $key . ": </b>" . $value;
    
    }


    $patio = [
        [
            'nome' => 'Fusca',
            'placa' => 'abc123',
            'foto' => 'https://www.picellileiloes.com.br/arquivos/leiloes/lotes/imagens/06441a605b0faa.jpeg'
        ],
        [
            'nome' => 'Uno',
            'placa' => 'Jes001',
            'foto' => 'https://image1.mobiauto.com.br/images/api/images/v1.0/141363513/transform/fl_progressive,f_webp,q_70,w_592'
        ],
        [
            'nome' => 'Ferrari',
            'placa' => 'bts777',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXl5f2UdAbXlPHuktniEReDQKwr4aUGsIkqFx2r38TjlH4JJ20J__82XoYQXEQ2fRVQiU&usqp=CAU'
        ]

    ];

    foreach ($patio as $key => $value) {
        echo "<br>Veiculo: " . $value["nome"];
        echo "<br>Placa: " . $value["placa"];
        echo "<br><img src='" . $value["foto"] ."'style='width: 300px;'>";
        echo "<hr>";
    }
?>