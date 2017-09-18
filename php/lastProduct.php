<h6>derniers ajouts</h6>
<table>


<thead>
  <tr>
    <th>Titre</th>
    <th>auteur</th>
  </tr>
</thead>
<tbody>






<?php
$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root','root');
$reponse = $bdd->query('SELECT id, name,auteur FROM informatique ORDER BY id DESC LIMIT 0 , 5');
while ($value = $reponse->fetch())
{
?>
<tr>
  <td><?php echo $value["name"] ?></td>
  <td><?php echo $value["auteur"] ?></td>
</tr>

<?php } ?>


</tbody>
</table>
