<html>
<body>
Your name is: <?php echo $_POST['teamid']; ?><br />

<?php
$json=file_get_contents("https://fantasy.premierleague.com/drf/entry/48049/event/24/picks"); // requires auth, though when logging in on the site it doesn't allow me to request.
// perhaps this https://www.npmjs.com/package/fpl-api-node

//$array = json_decode(json_encode($json), True);
$data =  json_decode($json, true);
//$arr1 = str_split($json);


//print_r($array);


?>

<tr>
    <td>Element</td>
    <td>Position</td>
</tr>

<?PHP
foreach($data as $key=>$item)
{
    ?>
    <tr>
        <td><?PHP echo $item['element']; ?></td>
        <td><?PHP echo $item['position']; ?></td>
    </tr>
    <?PHP
}
?>
</table>

</body>
</html>
