<h6>Top des ventes</h6>
<table>


<thead>
  <tr>
    <th>Nom</th>
    <th>Nombre de vues</th>
  </tr>
</thead>
<tbody>






<?php
$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root','root');
$reponse = $bdd->query('SELECT id, name FROM informatique');
while ($value = $reponse->fetch())
{
?>
<tr>
  <td><?php echo $value["name"] ?></td>
  <td>18</td>
</tr>

<?php } ?>


</tbody>
</table>
