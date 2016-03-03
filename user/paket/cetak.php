<body onLoad=”window.print()”>
  <?php
  $id     = @intval($_GET['id']);
  $paket  = @intval($_GET['paket']);
  $jumlah = @intval($_GET['jumlah']);
  ?>

  <!-- load custemer -->
  <?php
  $tcustemer = q("select * from custemer where id = {$id}");
  $dcustemer = mysqli_fetch_array($tcustemer)
  ?> 

  <p>NAMA PEMESAN : <?php echo $dcustemer['nama']; ?></p>
  <p>NO TELEPON  : <?php echo $dcustemer['tlp']; ?></p>
  <p> ALAMAT : <?php echo $dcustemer['alm']; ?></p>
  <p>TANGGAL PESAN : <?php echo $dcustemer['tgl_m']; ?></p>
  <p>TANGGAL KELUAR  : <?php echo $dcustemer['tgl_k']; ?></p>
  <p>  NO REKENING PEMBAYARAN : </p>

  <!-- load wisata -->

  <?php
  $hrg = 0;
  $twisata = q("SELECT w.*, (SELECT kategori FROM kategori k WHERE k.id=w.kategori) as kt from wisata w where paket = {$paket}");
  while($dwisata = mysqli_fetch_array($twisata)){
    ?> 
    <div class="col-md-12">
      <div class="list-group">
        <span class="list-group-item">NAMA WISATA : <?php echo $dwisata['nama']; ?></span>
        <span class="list-group-item">LOKASI WISATA : <?php echo $dwisata['lokasi']; ?></span>
        <span class="list-group-item">TRADISI : <?php echo $dwisata['tradisi']; ?></span>
        <span class="list-group-item">KATEGORI WISATA : <?php echo $dwisata['kt']; ?></span>
        <span class="list-group-item">TIKET MASUK : <b>Rp. <?php echo number_format($dwisata['harga'], 0, '', '.'); ?></b></span>
      </div>
    </div>
    <div class="clearfix"></div>
    <?php
    $hrg += $dwisata['harga'];
  }
  ?>

  <!-- load penginapan -->

  <?php
  $tpenginapan = q("select * from penginapan where paket = {$paket}");
  $no = 1;
  while($dpenginapan = mysqli_fetch_array($tpenginapan)){
    ?>
    <div class="col-md-12">
      <div class="list-group">
        <span class="list-group-item">NAMA PENGINAPAN : <?php echo $dpenginapan['nama']; ?></span>
        <span class="list-group-item">FASILITAS : <?php echo $dpenginapan['fasilitas']; ?></span>
        <span class="list-group-item">HARGA : <b>Rp. <?php echo number_format($dpenginapan['harga'], 0, '', '.'); ?></b></span>
      </div>
    </div>
    <?php
    $p = $dpenginapan['harga'];
    $no++;
  }
  ?>

  <!-- load transport -->

  <?php
  $transport = q("select * from transport where paket = {$paket}");
  $no = 1;
  while($dtransport = mysqli_fetch_array($transport)){
    ?>
    <div class="col-md-12">
      <div class="list-group">
        <span class="list-group-item">NAMA TRANSPORTASI : <?php echo $dtransport['nama']; ?></span>
        <span class="list-group-item">FASILITAS : <?php echo $dtransport['fasilitas']; ?></span>
        <span class="list-group-item">HARGA : <b>Rp. <?php echo number_format($dtransport['harga'], 0, '', '.'); ?></b></span>
      </div>
    </div>
    <?php
    $t = $dtransport['harga'];
    $no++;
  }
  ?>
</body>