
         <table class="table" id="table-responsive-nd">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Organizacija</th>
              <th scope="row">Brasno</th>
              <th scope="row">Materijali</th>
              <th scope="row">Novac</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $query = "SELECT * FROM `factions` WHERE `type`=6 OR `type`=5";
              $query_run = mysqli_query($con, $query);
              while($result = mysqli_fetch_array($query_run)){
            ?>
            <tr>
              <td><?php echo $result['slug']; ?></td>
              <!------BRASNO-->
              <td><?php echo $result['drugs']; ?></td>
              <!------MATERIJALI-->
              <td><?php echo $result['mats']; ?></td>
              <!------NOVAC-->
              <td><?php echo $result['safe']; ?></td>
            </tr>

            <?php
              }

            ?>
          </tbody>
        </table>