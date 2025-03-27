<?php

 $pessoas = [
    [
        'nome' => 'Mano Diogo',
        'idade' => 30
    ],
    [
        'nome' => 'Napaula',
        'idade' => 18
    ],
    [
        'nome' => 'Amaurizin',
        'idade' => 12
    ]
 ];
   verificarVotacao($pessoas);

   function verificarVotacao($pessoas){

    foreach ($pessoas as $key => $pessoa) {
    if($pessoa['idade'] < 16)
    echo $pessoa ['nome'] .  ' Não pode votar';

    else if ($pessoa['idade'] >= 16 && $pessoa['idade'] <18)
    echo  $pessoa ['nome'] .' voto opcional';

    else if ($pessoa['idade'] >= 18 && $pessoa['idade'] <70)
    echo  $pessoa ['nome'] .' voto obrigatório';

    else
    echo $pessoa ['nome'] .'voto opcional';

    echo '<br>';
}
   }
   

?>