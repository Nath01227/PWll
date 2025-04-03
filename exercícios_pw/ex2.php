<?php
    $animais =[
        'animal1' => [
            'nome' => 'Lua',
            'raça' => 'Dachshund',
            'espécie' => 'mamífero',
            'cor' => 'Marrom',
            'peso' => '7kg',
            'idade' => '2 anos',
            'foto' => 'https://i.pinimg.com/736x/c6/fc/03/c6fc03845a651c8b34e878773d98b513.jpg',
        ],
        'animal2' => [
            'nome' => 'Davi',
            'raça' => 'siberiano',
            'espécie' => 'mamífero',
            'cor' => 'Branco',
            'peso' => '8kg',
            'idade' => '9 anos',
            'foto' => 'https://i.pinimg.com/736x/d5/5f/74/d55f7486cf550995d30baf4738170c11.jpg',
        ],
        'animal3' => [
            'nome' => 'Brilho',
            'raça' => 'Phascolarctos cinereus adustus',
            'espécie' => 'mamífero',
            'cor' => 'cinza',
            'peso' => '10kg',
            'idade' => '5 anos',
            'foto' => 'https://i.pinimg.com/736x/0b/96/5e/0b965ee52e9c6a95894624643e3c08d5.jpg',
        ],
        'animal4' => [
            'nome' => 'minecraft',
            'raça' => 'salamandra',
            'espécie' => 'A. mexicanum',
            'cor' => 'rosa',
            'peso' => '100g',
            'idade' => '2 anos',
            'foto' => 'https://i.pinimg.com/736x/63/80/98/63809831d3a74dba6f87b941c7c74a57.jpg',
        ],
        
    ];
    foreach ($animais as $key => $value) {
      echo "<br>nome:" . $value["nome"];
      echo "<br>raça:" . $value["raça"];
      echo "<br>espécie:" . $value["espécie"];
      echo "<br>cor:" . $value["cor"];
      echo "<br>peso:" . $value["peso"];
      echo "<br>idade:" . $value["idade"];
      echo "<br><img src='" .$value["foto"]. "' style='width: 300px;'>";
  }
  
?>