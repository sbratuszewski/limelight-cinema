 <?php require_once('connect.php'); ?>

 <form action="includes/movie_update.inc.php" method="POST" enctype="multipart/form-data">
     <h4 class="text-heading text-white mb-3">Add or update a movie</h4>
     <div class="row">
         <div class="col-md-6">
             <!-- title -->
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                 </div>
                 <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
             </div>
             <!-- add a poster -->
             <div class="input-group my-3">
                 <div class="custom-file">
                     <input type="file" name="img" class="custom-file-input" id="inputGroupFile02">
                     <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Poster
                         ratio: 1.4x2</label>
                 </div>
             </div>
             <div class="row">
                 <!-- world premiere -->
                 <div class="col-6">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
                         </div>
                         <input type="text" name="premiere" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                     </div>
                 </div>
                 <div class="col-6">
                     <!-- stock -->
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                             <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
                         </div>
                         <input type="text" name="stock" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                     </div>
                 </div>
             </div>
             <button class="btn btn-primary mt-3 w-100" type="submit" name="add">add</button>
         </div>
         <div class="col-md-6">
             <!-- director -->
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-default">Directed by</span>
                 </div>
                 <input type="text" name="director" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
             </div>
             <!-- Genre -->
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <label class="input-group-text" for="inputGroupSelect01">Genre
                     </label>
                 </div>
                 <select class="custom-select" id="inputGroupSelect01" name="genre">
                     <option selected>select...</option>
                     <option value="action">action</option>
                     <option value="animation">animation</option>
                     <option value="comedy">comedy</option>
                     <option value="crime">crime</option>
                     <option value="drama">drama</option>
                     <option value="family">family</option>
                     <option value="fantasy">fantasy</option>
                     <option value="horror">horror</option>
                     <option value="sci-fi">sci-fi</option>
                     <option value="horror">thriller</option>
                 </select>
             </div>
             <!-- add synopsis -->
             <div class="input-group my-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text">Add synopsis</span>
                 </div>
                 <textarea type="text" name="synopsis" class="form-control" aria-label="With textarea"></textarea>
             </div>
             <!-- <button class="btn btn-warning mt-3 w-100" type="submit" name="update">update</button> -->
         </div>
     </div>
     <div class="row">
         <div class="col-6">
             <h4 class="text-heading text-white mb-3 mt-3 pt-5">Set the price for the ticket</h4>
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                 </div>
                 <input type="text" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
             </div>
             <button class="btn btn-primary mt-3 w-100" type="submit" name="set_price">set</button>
         </div>
     </div>
 </form>

 <h4 class="text-center text-heading text-white mb-3 mt-5 pt-5">Movie list</h4>
 <table class='table table-hover table-sm'>
     <thead class="thead-dark">
         <tr class='table-dark text-uppercase'>
             <th scope='col'>#</th>
             <th scope='col'>picture</th>
             <th scope='col'>title</th>
             <th scope='col'>director</th>
             <th scope='col'>premiere</th>
             <th scope='col'>genre</th>
             <th scope='col'>synopsis</th>
             <th scope='col'>stock</th>
             <th scope='col'></th>
         </tr>
     </thead>
     <tbody>
         <?php
            //get all records from db
            $sql = "SELECT * FROM movie";
            $query = mysqli_query($conn, $sql);

            //displaying data from db on the subscribers table
            while ($result = mysqli_fetch_assoc($query)) { ?>
             <tr class='text-white'>
                 <td>
                     <?php echo $result['ID']; ?>
                 </td>
                 <td>
                     <?php echo "<img src='images/" . $result['img'] . "' class='card-img-top mx-auto img-fluid' alt='poster'>"; ?>
                 </td>
                 <td>
                     <?php echo $result['title']; ?>
                 </td>
                 <td>
                     <?php echo $result['director']; ?>
                 </td>
                 <td>
                     <?php echo $result['premiere']; ?>
                 </td>
                 <td>
                     <?php echo $result['genre']; ?>
                 </td>
                 <td>
                     <?php echo $result['synopsis']; ?>
                 </td>
                 <td>
                     <?php echo $result['stock']; ?>
                 </td>
                 <td>
                     <a href="includes/del_movie.inc.php?id=<?php echo $result['ID']; ?>" class="btn btn-pink btn-sm"><span class="text-white">delete</span></a>
                 </td>
             </tr>
         <?php } ?>
     </tbody>
 </table>