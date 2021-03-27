<?php
  $sql = "SELECT data,padai,eiles,vip,`nakt.val`,extra FROM new_table
  order by data asc
";
  $result = mysqli_query($conn, $sql);


  function display_projects($result)
  {
    $counter = 1;
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td> " . $counter++ . " </td> 
         <td> " . $row["data"] . " </td> 
        <td> " . $row["padai"] . " </td>
        <td> " . $row["eiles"] . " </td>
        <td> " . $row["vip"] . " </td>
        <td> " . $row["nakt.val"] . " </td>
        <td> " . $row["extra"] . " </td>
   
        </tr> ";
      }
    } else {
      echo "0 results";
    }
}

  // create-data
  if (isset($_POST['create-dataRow'])) {

    $stmt = $conn->prepare("INSERT INTO new_table (data,padai,eiles,vip,`nakt.val`,extra) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("siiiii", $data,$padai,$eiles,$vip,$nakt_val,$extra);
    $data = $_POST['data'];
    $padai=$_POST['padai'];
    $eiles=$_POST['eiles'];
    $vip=$_POST['vip'];
    $nakt_val=$_POST['nakt_val'];
    $extra=$_POST['extra'];
    $stmt->execute();
    $stmt->close();
    header('Location: ' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
    die;
  }


  $sql_count="SELECT sum(padai),sum(eiles),sum(vip),sum(`nakt.val`),sum(extra) FROM alga.new_table";
  $counted=mysqli_query($conn, $sql_count);
  if(mysqli_num_rows($counted)>0){
    while($row = mysqli_fetch_assoc($counted)){
      $padai=$row['sum(padai)'];
      $eiles=$row['sum(eiles)'];
      $vip=$row['sum(vip)'];
      $nakt_val=$row['sum(nakt.val)'];
      $extra=$row['sum(extra)'];
    }
  }