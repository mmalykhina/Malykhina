<?php 

$conn = mysql_connect("localhost", "root", "pass123");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("publications")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

        $sql = "SELECT * FROM classics";
        $result= mysql_query($sql);
        if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
while ($row = mysql_fetch_array($result, MYSQL_BOTH))
                {
echo $row['author']."<br>";
echo $row['title']."<br>";
echo $row['category']."<br>";
echo $row['year']."<br>";
echo $row['isbn']."<br>";
echo "<br>";
}

?>
