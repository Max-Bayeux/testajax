  <?php
  DEFINE(SERVER,"localhost");
  DEFINE(LOGIN,"adminsql");
  DEFINE(MDP,"mdpsql");
  DEFINE(BASE,"mybase");

  $id=$_POST["var"];
  $connect=mysqli_connect(SERVER,LOGIN,MDP,BASE);
  $res=mysqli_query($connect,"SELECT * FROM testajax WHERE id=".$id);

  while ($data=mysqli_fetch_assoc($res)){

  echo "nom :".$data['nom']."<br/>";
  echo "prenom :".$data['prenom']."<br/>";
  echo "age :".$data['age']."<br/>";
  echo "profession :".$data['profession']."<br/>";
  echo "email :".$data['email']."<br/>";
  echo "telephone :".$data['telephone']."<br/>";

   }
   ?>
