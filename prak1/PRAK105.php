<!DOCTYPE html>
<html>
    <head>
            <style>
                table, th, td {
                border: 1px solid black;
                }
            </style>
        <title>5</title>
    </head>
    <body>
        <table>
            <tr style="background-color:#FF0000;" height="50px">
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php
                $samsung=array("samsung1"=>"Samsung Galaxy S22", "samsung2"=>"Samsung Galaxy S22+", "samsung3"=>"Samsung A03", "samsung4"=>"Samsung Galaxy Xcover 5");
                foreach($samsung as $smartphone):
            ?>
            <tr>
                <td><?php echo $smartphone;?></td>
            </tr>
            <?php endforeach?>
            </table>
        </body>
</html>