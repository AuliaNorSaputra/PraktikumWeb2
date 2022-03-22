<!DOCTYPE html>
<html>
    <head>
            <style>
                table, th, td {
                border: 1px solid black;
                }
            </style>
        <title>4</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php
                $samsung=array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung A03", "Samsung Galaxy Xcover 5");
                foreach($samsung as $smartphone):
            ?>
            <tr>
                <td><?php echo $smartphone;?></td>
            </tr>
            <?php endforeach?>
            </table>
        </body>
</html>