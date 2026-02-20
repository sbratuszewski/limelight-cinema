<h4 class="text-center text-heading text-white mb-3">Subscriber list</h4>
<?php
//get all records from db
$sql = "SELECT * FROM news_lime";
$query = mysqli_query($conn, $sql);
?>

<table class="table table-hover table-sm">
  <thead class="thead-dark text-uppercase">
    <tr class='table-dark text-uppercase'>
      <th scope="col">#</th>
      <th scope="col">e-mail</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
//displaying data from db on the subscribers table
while ($result = mysqli_fetch_assoc($query)) {?>
    <tr class='text-white'>
      <td>
        <?php echo $result['ID']; ?>
      </td>
      <td>
        <?php echo $result['email']; ?>
      </td>
      <td> 
        <a href="includes/del_subscr.inc.php?ID=<?php echo $result['ID'];?>" class="btn btn-pink btn-sm"><span class="text-white">delete</span></a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>