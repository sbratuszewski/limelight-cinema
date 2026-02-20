<?php require_once('connect.php'); ?>

<form action="includes/update_user.inc.php" method="POST">
    <h4 class="text-heading text-white mb-3">Add or update a user</h4>
    <div class="row pb-5 mb-5">
        <div class="col-md-6">
            <!-- username -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                </div>
                <input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>
            <!-- password -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">password</span>
                </div>
                <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="col-md-6">
            <!-- email -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                </div>
                <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <!-- dob -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">DoB</span>
                </div>
                <input type="date" name="dob" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary mt-3 w-100" type="submit" name="add">add</button>
        </div>
        <div class="col-md-6">
            <!-- <button class="btn btn-warning mt-3 w-100" type="submit" name="update">update</button> -->
        </div>
    </div>
</form>

<h4 class="text-center text-heading text-white mb-3">User list</h4>
<table class='table table-hover table-sm'>
    <thead class="thead-dark">
        <tr class='table-dark text-uppercase'>
            <th scope='col'>#</th>
            <th scope='col'>username</th>
            <th scope='col'>email</th>
            <th scope='col'>dob</th>
            <th scope='col'>created on</th>
            <th scope='col'></th>
        </tr>
    </thead>
    <tbody>
        <?php
        //get all records from db
        $sql = "SELECT * FROM users_lime";
        $query = mysqli_query($conn, $sql);

        //displaying data from db on the subscribers table
        while ($result = mysqli_fetch_assoc($query)) { ?>
            <tr class='text-white'>
                <td>
                    <?php echo $result['id']; ?>
                </td>
                <td>
                    <?php echo $result['username']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['dob']; ?>
                </td>
                <td>
                    <?php echo $result['trn_date']; ?>
                </td>
                <td>
                    <a href="includes/del_user.inc.php?id=<?php echo $result['id']; ?>" class="btn btn-pink btn-sm"><span class="text-white">delete</span></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>