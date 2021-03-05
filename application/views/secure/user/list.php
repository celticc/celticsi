              <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Advanced Table</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                 
                    <div class="table-responsive">
                      <table class="table table-hover" id="user">
                        <tr>
                          <th>NO</th>
                          <th>NIDN</th>
                          <th>NAMA</th>
                          <th>Alamat</th>
                          <th>Status</th>
                        </tr>
                        <tr>
                             <?php $no=1; foreach($user as $user) { ?>
                              <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $user->nidn ?></td>
                                <td><?php echo $user->nama ?></td>
                                <td><?php echo $user->alamat ?></td>
                                <td><div class="badge badge-success"><?php echo $user->status ?></div></td>
                              </tr>
                             <?php $no++; } ?>
                        </tr>
                      </table>
                  </div>
                </div>
              </div>
            </div>


<!--     <script>
      $(document).ready( function () {
    $('user').DataTable();
} );
    </script> -->