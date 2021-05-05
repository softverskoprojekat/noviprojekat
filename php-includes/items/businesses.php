        <form action="">
          <input type="text" name="search" placeholder="Search..">
        </form>
        <table class="table" id="table-responsive-nd">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="row">Owner</th>
              <th scope="row">Tip</th>
              <th scope="row">Naziv</th>
              <th scope="row">Cena</th>
              <th scope="row">Novac</th>
              <th scope="row">Produkti</th>
              <th scope="row">Upgrade</th>
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
              <!------ID BIZNISA-->
              <td><?php echo $result['id']; ?></td>
              <!------IME VLASNIKA-->
              <td><?php echo $result['owner']; ?></td>
              <!------TIP BIZNISA-->
              <td><?php echo $result['type']; ?></td>
              <!------NAZIV BIZNISA-->
              <td><?php echo $result['name']; ?></td>
              <!------CENA BIZNISA-->
              <td><?php echo $result['price']; ?></td>
              <!------NOVAC U SEFU BIZNISA-->
              <td><?php echo $result['safe']; ?></td>
              <!------PRODUKTI ZA RAD BIZNISA-->
              <td><?php echo $result['products']; ?></td>
              <!------UNAPREDJENJE BIZNISA-->
              <td><?php echo $result['upgrade']; ?></td>
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