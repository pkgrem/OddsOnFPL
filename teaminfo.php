<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Beautiful</title>
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
    <!--Your name is: <?php echo $_POST['teamid']; ?><br />-->
    <?php

        $team_id = $_POST['teamid'];
        $url = "https://fantasy.premierleague.com/drf/teams/";


        //print_r($team_id); // tests to see if the team_id input works.
        //print_r($url); // prints the url to see if it parses correctly

        $json=file_get_contents($url); // requires auth, though when logging in on the site it doesn't allow me to request.
        // perhaps this https://www.npmjs.com/package/fpl-api-node
        //suggested to use http://docs.guzzlephp.org/en/stable/ instead of file_get_contents

        //$array = json_decode(json_encode($json), True);
        $data =  json_decode($json, true);
        //$arr1 = str_split($json);
        //$ArrayParameters = $data['entry_history']['event']['picks']; // chose the params from the json

        //print_r($data['picks']);
        //var_dump(json_decode($json, true));
        ?>
<?php
$data['entry_history']?> Team Points:</br></br>
<!-- https://msdn.microsoft.com/en-us/library/dd440739.aspx -->
    <table id ="customers">
        <tr>
          <th>Player ID</td>
          <th>Position</td>
      </tr>

      <?PHP
      foreach($data['name'] as $key=>$item)
      {
          ?>
          <tr>
              <td><?PHP echo $item['name']; ?></td>
              <td><?PHP echo $item['code']; ?></td>
          </tr>
          <?PHP
      }
      ?>
      </table>
  </body>
</html>
