<!DOCTYPE html>
<?php
    $Tprisma= 5.400;
    $Asegitiga= 3.500;
    $Tsegitiga= 4.400;
    $volume = ($Asegitiga*$Tsegitiga/2)*$Tprisma;
    echo number_format($volume,3).(" m3");
?>
</html>