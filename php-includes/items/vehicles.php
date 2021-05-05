        <form action="">
          <input type="text" name="search" placeholder="Search..">
        </form>        
        <table class="table" id="table-responsive-nd">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="row">Owner ID</th>
              <th scope="row">Model</th>
              <th scope="row">Cena</th>
              <th scope="row">Novac</th>
              <th scope="row">Materijali</th>
              <th scope="row">Brasno</th>
              <th scope="row">Semenke</th>
              <th scope="row">Oruzije</th>
              <th scope="row">Municija</th>
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
              <!------ID VOZILA-->
              <td><?php echo $result['id']; ?></td>
              <!------ID VLASNIKA-->
              <td><?php echo $result['owner_id']; ?></td>
              <!------MODEL VOZILA-->
              <td><?php echo $result['model']; ?></td>
              <!------CENA VOZILA-->
              <td><?php echo $result['price']; ?></td>
              <!------NOVAC U VOZILU-->
              <td><?php echo $result['money']; ?></td>
              <!------MATERIJALI U VOZILU-->
              <td><?php echo $result['mats']; ?></td>
              <!------BRASNO U VOZILU-->
              <td><?php echo $result['drugs']; ?></td>
              <!------SEMENKE U VOZILU-->
              <td><?php echo $result['seeds']; ?></td>
              <!------ORUZIJE U VOZILU-->
              <td><?php echo $result['gun']; ?></td>
              <!------MUNICIJA U VOZILU-->
              <td><?php echo $result['ammo']; ?></td>
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