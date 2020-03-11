 <?php
 require_once __DIR__ . '/classes/Dipendente.php';
 require_once __DIR__ . '/classes/Dirigente.php';
 require_once __DIR__ . '/classes/Operaio.php';

 $marco = new Dirigente('12345', 'Marco', 'Patti', 'via Roma', 'cbvnusahgan', 'it77sdvsadv31e31', 3);
 var_dump($marco);

 try {
     $marco->setBonus(5);
 } catch (Exception $e) {
     echo 'errore' . $e->getMessage();
 }
 var_dump($marco);

 echo $marco->getBonus();
