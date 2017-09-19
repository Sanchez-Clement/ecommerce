<h6>Top 5 des vues</h6>
<table>


<thead>
  <tr>
    <th>Nom</th>
    <th>Nombre de vues</th>
  </tr>
</thead>
<tbody>





<!-- requete pour récuperer les 5 articles avec le plus grand nombre de vues -->
<?php
$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root','root');
$reponse = $bdd->query('SELECT id, name,vue FROM informatique ORDER BY vue DESC LIMIT 0 , 5');
while ($value = $reponse->fetch())
{
?>
<tr>
  <td><?php echo $value["name"] ?></td>
  <td><?php echo $value["vue"] ?></td>
</tr>

<?php } ?>


</tbody>
</table>
