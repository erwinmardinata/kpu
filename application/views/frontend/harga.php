<div class="about">
  <div class="container">
    <h2 style="text-align: center;margin-bottom: 47px;font-weight: bold">HARGA SAMPAH </h2>
    <div class="col-md-10 col-md-offset-1" style="text-align: left;">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <?php
          foreach($kategori as $no => $row) {
        ?>
        <li role="presentation" class="<?php echo $no==0?"active":""; ?>"><a href="#home<?php echo $row->id; ?>" aria-controls="home<?php echo $row->id; ?>" role="tab" data-toggle="tab"><?php echo strtoupper($row->nama); ?></a></li>
        <?php
          }
        ?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php
          foreach($kategori as $no => $row) {

        ?>
        <div role="tabpanel" class="tab-pane <?php echo $no==0?"active":""; ?>" id="home<?php echo $row->id; ?>">
          <table class="table table-striped table-bordered" style="color: #000">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Keterangan</th>
                <th width="5%"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $x=1;
                $data = $this->db->where('id_kategori_sampah', $row->id)->get('harga_sampah')->result();
                foreach($data as $list) {
              ?>
              <tr>
                <td><?php echo $x++; ?></td>
                <td><?php echo $list->nama_sampah; ?></td>
                <td>Rp. <?php echo number_format($list->harga, 0, ".", "."); ?></td>
                <td>/<?php echo $list->satuan; ?></td>
                <td><?php echo $list->keterangan; ?></td>
                <td><button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#exampleModal<?php echo $list->id; ?>">Hitung Harga</button></td>
              </tr>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?php echo $list->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- <span aria-hidden="true">&times;</span> -->
                      </button>
                    </div>
                    <div class="modal-body">
                      <form style="color: #000">
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color: #000">Harga Beli</label>
                          <input type="text" readonly name="harga" id="harga<?php echo $list->id; ?>" value="<?php echo $list->harga; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color: #000">Satuan</label>
                          <input type="text" readonly name="berat<?php echo $list->id; ?>" value="<?php echo $list->satuan; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color: #000">Masukkan Berat Sampah(KG)</label>
                          <input type="text" name="hasil" id="berat<?php echo $list->id; ?>" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1" style="color: #000">Jumlah harga</label>
                          <input type="text" name="hasil" id="hasil<?php echo $list->id; ?>" class="form-control" id="exampleInputPassword1">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="hitung<?php echo $list->id; ?>">Hitung</button>
                    </div>
                  </div>
                </div>
              </div>
              <script>
              $(document).ready(function () {
                $('#hitung<?php echo $list->id; ?>').click(function() {
                  var harga = $("#harga<?php echo $list->id; ?>").val();
                  var berat = $("#berat<?php echo $list->id; ?>").val();
                  var hasil = parseFloat(harga) * parseFloat(berat);
                  $("#hasil<?php echo $list->id; ?>").attr('value', hasil);
                  // return alert("tes");
                });
              });
              </script>

              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
        <?php
          }
        ?>
      </div>


    </div>
  </div>
</div>
