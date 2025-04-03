<?php
$alunos =[
      'aluno1' => [
          'nome' => 'Kauany',
          'rm' => '20241010348',
          'telefone' => '1590028922',
          'foto' => 'https://i.pinimg.com/736x/84/d9/fe/84d9fe57ee96566d0a894d126a65762a.jpg'
      ],
      'aluno2' => [
          'nome' => 'Luci',
          'rm' => '20241010346',
          'telefone' => '1590028922',
          'foto' => 'https://i.pinimg.com/736x/f1/94/8f/f1948f175ae716b040b2b42afdfac309.jpg'
      ],
      'aluno3' => [
          'nome' => 'Duda',
          'rm' => '20241010223',
          'telefone' => '1590028922',
          'foto' => 'https://i.pinimg.com/736x/20/b8/91/20b8912184a268241d5e7907557c2fb4.jpg'
      ],
      'aluno4' => [
          'nome' => 'Nath',
          'rm' => '20241010659',
          'telefone' => '1590028922',
          'foto' => 'https://i.pinimg.com/736x/16/2f/cb/162fcb6560c86fd70ee4bc478e3553b8.jpg'
      ]
  ];
  foreach ($alunos as $key => $value) {
    echo "<br>Aluno:" . $value["nome"];
    echo "<br>Rm:" . $value["rm"];
    echo "<br>Telefone:" . $value["telefone"];
    echo "<br><img src='" .$value["foto"]. "' style='width: 300px;'>";
}

?>