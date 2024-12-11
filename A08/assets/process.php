<?php
include("connect.php");

$personalityQuery = "SELECT * FROM islandsofpersonality";
$resultPersonality = executeQuery($personalityQuery);

while ($row = $resultPersonality->fetch_assoc()) {
    $islands[] = $row;
}


$queryContents = " SELECT islandcontents.*, islandsofpersonality.name, islandcontents.content 
FROM islandcontents JOIN islandsofpersonality 
ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID
";
$resultContents = executeQuery($queryContents);

while ($islandContentsRow = mysqli_fetch_assoc($resultContents)) {
    $islandContents[$islandContentsRow['islandOfPersonalityID']][] = $islandContentsRow;
}
?>