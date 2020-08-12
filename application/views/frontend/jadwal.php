<div class="about">
  <div class="container">
    <h2 style="text-align: center;margin-bottom: 47px;font-weight: bold">JADWAL TRUK </h2>
    <div class="col-md-10 col-md-offset-1" style="text-align: left;">
      <table class="table table-striped table-bordered" style="color: #000">
        <thead>
          <tr>
            <th width="2%">No</th>
            <th>Daerah</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>TPS</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $x=1;
            foreach($jadwal as $list) {
          ?>
          <tr>
            <td><?php echo $x++; ?></td>
            <td><?php echo $list->daerah; ?></td>
            <td><?php echo $list->hari; ?></td>
            <td><?php echo $list->jam; ?></td>
            <td><?php echo $list->tps; ?></td>
            <td><?php echo $list->keterangan; ?></td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
