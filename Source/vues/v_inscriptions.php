
<html>
<div id="accueil">
<br>
</div>
<center><div id="contenu">
<table class="table table-striped table-dark">
  <thead class="thead-grice">
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Adhérent</th>
     
      
     
    </tr>
   </thead>

<?php
    $i = 0;
    foreach ($lesInscrits as $unInscrit)
    { ?>
    <tr>
        <td><?php echo $i ?>
        <td><?php echo $unInscrit['idAdherent'] ?></td>
        
        <td><a  href="index.php?action=pdfInscription&numInscription=<?php echo $i ?>" target="_blank"><img src="images/pdf.png"></a></td>
        <td><a  href="index.php?action=supprimerUnInscrit&numInscription=<?php echo $i ?>" target="_blank"><img src="images/del.png"></a></td>
    </tr>    
        
<?php $i++;
     } ?>
</table>
</div>
</html>