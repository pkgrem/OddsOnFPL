<!DOCTYPE html>
<html>
<head>
    <script>
    function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}

function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
    </script>
<style>
#player_info {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#player_info td, #player_info th {
    border: 1px solid #ddd;
    padding: 8px;
}

#player_info tr:nth-child(even){background-color: #f2f2f2;}

#player_info tr:hover {background-color: #ddd;}

#player_info th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #242424;
    color: white;
}
</style>
</head>
<body>
<button onclick="exportTableToCSV('fplinfo.csv')">Export HTML Table To CSV File</button>
<?php
$json=file_get_contents("https://fantasy.premierleague.com/drf/bootstrap-static");
//suggested to use http://docs.guzzlephp.org/en/stable/ instead of file_get_contents

$data =  json_decode($json, true);
?>
<table id ="player_info">
<tr>
    <th>ID</th>
    <th>Web Name</th>
    <th>Player ID</th>
    <th>Full Name</th>
    <th>Team</th>
    <th>News</th>
    <th>Position</th>
    <th>Current Price</th>
    <th>Value Season</th>
    <th>Cost Change from Start</th>
    <th>Percentage selected by</th>
    <th>Transfers In</th>
    <th>Transfers Out</th>
    <th>Points Per Game</th>
    <th>Minutes</th>
    <th>Goals Scored</th>
    <th>Assists</th>
    <th>Clean Sheets</th>
    <th>Goals Conceded</th>
    <th>Own Goals</th>
    <th>Penalties Saved</th>
    <th>Penalties Missed</th>
    <th>Yellow Cards</th>
    <th>Red Cards</th>
    <th>Saves</th>
    <th>Bonus Points</th>
    <th>Bonus Point System Score</th>
    <th>Influence</th>
    <th>Creativity</th>
    <th>Threat</th>    
    <th>ICT Index</th>
    <th>EA Index</th>
</tr>

<?PHP
foreach($data['elements'] as $key=>$item)
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
        <td><?PHP echo $item['value_season']; ?></td>
        <td><?PHP echo $item['cost_change_start']; ?></td>
        <td><?PHP echo $item['selected_by_percent']; ?></td>
        <td><?PHP echo $item['transfers_in']; ?></td>
        <td><?PHP echo $item['transfers_out']; ?></td>
        <td><?PHP echo $item['points_per_game']; ?></td>
        <td><?PHP echo $item['minutes']; ?></td>
        <td><?PHP echo $item['goals_scored']; ?></td>
        <td><?PHP echo $item['assists']; ?></td>
        <td><?PHP echo $item['clean_sheets']; ?></td>
        <td><?PHP echo $item['goals_conceded']; ?></td>
        <td><?PHP echo $item['own_goals']; ?></td>
        <td><?PHP echo $item['penalties_saved']; ?></td>
        <td><?PHP echo $item['penalties_missed']; ?></td>
        <td><?PHP echo $item['yellow_cards']; ?></td>
        <td><?PHP echo $item['red_cards']; ?></td>
        <td><?PHP echo $item['saves']; ?></td>
        <td><?PHP echo $item['bonus']; ?></td>
        <td><?PHP echo $item['bps']; ?></td>
        <td><?PHP echo $item['influence']; ?></td>
        <td><?PHP echo $item['creativity']; ?></td>
        <td><?PHP echo $item['threat']; ?></td>
        <td><?PHP echo $item['ict_index']; ?></td>
        <td><?PHP echo $item['ea_index']; ?></td>
    </tr>
    <?PHP
}
?>
</table>

