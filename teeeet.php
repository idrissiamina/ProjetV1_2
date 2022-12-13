<?php
function mysql_tableau($requete,$champ_identifiant="id",$erreur=NULL)
{
    $results = mysql_query($requete) OR DIE ("Erreur" . $erreur);
    while ($result = mysql_fetch_assoc($results))
    {
        if ($result[$champ_identifiant])
        {
            $array[ $result[$champ_identifiant] ] = $result;
        }
        else
        {
            $array[] = $result;
        }
    }
    return $array;
}

$articles = mysql_tableau("SELECT * FROM gestion_site WHERE membre_id=2 ORDER BY id DESC");
foreach ($articles as $article)
{
    print $article['id'] . ' : ' . $article['stats'] . ',';
}
?>