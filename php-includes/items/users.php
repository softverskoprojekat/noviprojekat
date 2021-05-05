        <form action="">
          <input type="text" name="search" placeholder="Search..">
        </form>
        <table class="table" id="table-responsive-nd">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="row">Username</th>
              <th scope="row">Admin</th>
              <th scope="row">Gamemaster</th>
              <th scope="row">Promoter</th>
              <th scope="row">Level</th>
              <th scope="row">Banka</th>
              <th scope="row">Novac</th>
              <th scope="row">Brasno</th>
              <th scope="row">Materijali</th>
              <th scope="row">Akcija</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $query = "SELECT * FROM `$item_type`";
              $query_run = mysqli_query($con, $query);
              while($result = mysqli_fetch_array($query_run)){
            ?>
            <tr>
              <td><?php echo $result['id']; ?></td>
              <!------BRASNO-->
              <td><?php echo $result['username']; ?></td>
              <!------MATERIJALI-->
              <td><?php echo $result['admin']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['gm']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['promoter']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['level']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['bank']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['cash']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['drugs']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['mats']; ?></td>
              <td>
                <button type="button" class="btn btn-primary">Pregledaj</button>
                <button type="button" class="btn btn-warning">Izmeni</button>
                <button type="button" class="btn btn-danger">Obrisi</button>
              </td>
            </tr>

            <?php
              }

            ?>
          </tbody>
        </table>