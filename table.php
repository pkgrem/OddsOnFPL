<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #242424;
    color: white;
}
</style>
</head>
<body>
<?php
$json=file_get_contents("https://fantasy.premierleague.com/drf/elements/");
//suggested to use http://docs.guzzlephp.org/en/stable/ instead of file_get_contents

$data =  json_decode($json, true);
?>
<table id ="customers">
<tr>
    <th>ID</td>
    <th>Web Name</td>
    <th>Code</td>
    <th>Full Name</td>
    <th>Team</td>
    <th>News</td>
    <th>Position</td>
    <th>Current Price</td>
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
