<? 
$disc = array(array("Matemática",5,8.5),array("Português",2,9),array("Geofrafia",10,6),array("Educação Fisica",2,8));

echo $disc[0][0].":".$disc[0][1].":".$disc[0][2].".<br>";
echo $disc[1][0].":".$disc[1][1].":".$disc[1][2].".<br>";
echo $disc[2][0].":".$disc[2][1].":".$disc[2][2].".<br>";
echo $disc[3][0].":".$disc[3][1].":".$disc[3][2].".<br>";

echo "<table border = '1'>";
echo "<tr><th>Disciplina</th><th>Faltas</th><th>Media</th></tr>";
foreach ($disc as $l){
    echo"<tr>"; 
    echo"<td>".$l[0]."</td>";
    echo"<td>".$l[1]."</td>";
    echo"<td>".$l[2]."</td>";
    echo"</tr>";
}
?>