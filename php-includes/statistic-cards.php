<?php 
function num_of_rows($con, $table_name){
  $query = "SELECT * FROM `$table_name`";
  $query_run = mysqli_query($con, $query);
  return mysqli_num_rows($query_run);
}
?>

<h2 class="mb-4">Osnovna statistika servera</h2>

        <div class="row">
          <div class="column">
            <div class="card">
              <h3>Korisnici</h3>
              <p>Broj registrovanih korisnika:</p>
              <p><?php echo num_of_rows($con, 'users'); ?></p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <h3>Banovani</h3>
              <p>Broj banovanih korisnika:</p>
              <p><?php echo num_of_rows($con, 'bans'); ?></p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <h3>Kuce na serveru</h3>
              <p>Broj kreiranih kuca:</p>
              <p><?php echo num_of_rows($con, 'houses'); ?></p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <h3>Biznisi na serveru</h3>
              <p>Broj kreiranih biznisa:</p>
              <p><?php echo num_of_rows($con, 'businesses'); ?></p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <h3>Vozila na serveru</h3>
              <p>Broj kupljenih vozila:</p>
              <p><?php echo num_of_rows($con, 'vehicles'); ?></p>
            </div>
          </div>
        </div>

        <br />
        <hr />
        <br />