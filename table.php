<?php
$json=file_get_contents("https://fantasy.premierleague.com/drf/elements/");
$data =  json_decode($json, true);
?>
<table>
<tr>
    <td>ID</td>
    <td>Web Name</td>
    <td>Code</td>
    <td>Full Name</td>
    <td>Team</td>
    <td>News</td>
    <td>Position</td>
    <td>Current Price</td>
</tr>

<?PHP
foreach($data as $key=>$item)
{
    ?>
    <tr>
        <td><?PHP echo $item['id']; ?></td>
        <td><?PHP echo $item['web_name']; ?></td>
        <td><?PHP echo $item['code']; ?></td>
        <td><?PHP echo $item['first_name']; ?> <?PHP echo $item['second_name']; ?></td>
        <td><?PHP echo $item['team_code']; ?></td>
        <td><?PHP echo $item['news']; ?></td>
        <td><?PHP echo $item['element_type']; ?></td>
        <td><?PHP echo $item['now_cost']; ?></td>
    </tr>
    <?PHP
}
?>
</table>
