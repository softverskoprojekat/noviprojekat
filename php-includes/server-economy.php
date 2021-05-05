<?php 
  function server_economy($con, $table_name, $column_name){
    $query = "SELECT SUM(`$column_name`)
    FROM `$table_name` WHERE `$column_name`>0";
    $query_run = mysqli_query($con, $query);
    $result = mysqli_fetch_array($query_run);
    return $result[0];
  }
?>      

        <table class="table" id="table-responsive">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Lokacija</th>
              <th scope="row">Cifra</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Novac u kucama</td>
              <td><?php echo $houses_economy = number_format(server_economy($con, 'houses', 'safe'), 0, ',', '.'); ?> $</td>
            </tr>
            <tr>
              <td>Novac u firmama</td>
              <td><?php echo $businesses_economy = number_format(server_economy($con, 'businesses', 'safe'), 0, ',', '.'); ?> $</td>
            </tr>
            <tr>
              <td>Novac u banci</td>
              <td><?php echo $bank_economy = number_format(server_economy($con, 'users', 'bank'), 0, ',', '.'); ?> $</td>
            </tr>
            <tr>
              <td>Novac kod igraca</td>
              <td><?php echo $cash_economy = number_format(server_economy($con, 'users', 'cash'), 0, ',', '.'); ?> $</td>
            </tr>
          </tbody>
        </table>

        <br />
        <hr />
        <br />
