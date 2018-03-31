<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $xml = simplexml_load_file('test.xml');

        foreach($xml->person[0] as $data){
            echo $data . '<br />';
        }
        ?>
    </body>
</html>
