<?php
  //dados de entrada
  $sxMasculino = 20;
  $sxFeminino = 19;
  $alunosAprovados = 20;
   //calculando
  $totalAlunos = $sxMasculino + $sxFeminino;
  $porMasculino = (100 * $sxMasculino)/$totalAlunos;
  $porFeminino = (100 * $sxFeminino)/$totalAlunos;
  $porAlunosAprovados = (100 * $alunosAprovados)/$totalAlunos;

   //dados de saida
  echo "o total de alunos é: $totalAlunos, já a porcentagem de alunos masculinos é: $porMasculino, e a porcentagem de alunas femininas é: $porFeminino e a porcentagem de alunos aprovados é: $porAlunosAprovados";
