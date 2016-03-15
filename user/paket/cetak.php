<?php
$id     = @intval($_GET['id']);
$paket  = @intval($_GET['paket']);
$jumlah = @intval($_GET['jumlah']);
?>
<!DOCTYPE html>
<body onload="document.title='Ekowisata <?php echo date('Ymd').'--'.$paket.'-'.$id ?> By Izunk'; window.print()">
  <?php
  // load custemer
  $tcustemer = q("select * from custemer where id = {$id}");
  $dcustemer = mysqli_fetch_array($tcustemer)
  ?> 
  <div style="margin: 0 auto; width: 800px;">
    <div style="background: #333; padding: 10px; color: #fff; text-align: center; font-weight: bold;">
      INVOICE EKOWISATA
    </div>
    <div style="width: 500px;">
      <h3 style="color: #0000CC;">EKOWISATA</h3>
      <div>http:<?php echo $url; ?></div>
      <hr/>
    </div>
    <div style="float: left; width: 350px;">
      <table style="border:1px solid #CCC; width: inherit;">
        <tr>
          <td style="font-weight: bold;">NAMA PEMESAN</td>
          <td>:</td>
          <td><?php echo $dcustemer['nama']; ?></td>
        </tr>
        <tr>
          <td style="font-weight: bold;">NO TELEPON</td>
          <td>:</td>
          <td><?php echo $dcustemer['tlp']; ?></td>
        </tr>
        <tr>
          <td style="font-weight: bold;">ALAMAT</td>
          <td>:</td>
          <td><?php echo $dcustemer['alm']; ?></td>
        </tr>
        <tr>
          <td style="font-weight: bold;">TANGGAL PESAN</td>
          <td>:</td>
          <td><?php echo $dcustemer['tgl_m'];?></td>
        </tr>
        <tr>
          <td style="font-weight: bold;">TANGGAL KELUAR</td>
          <td>:</td>
          <td><?php echo $dcustemer['tgl_k']; ?></td>
        </tr>
        <tr>
          <td style="font-weight: bold;">NAMA BIRO</td>
          <td>:</td>
          <td>EKOWISATA JEPARA</td>
        </tr>
        <tr>
          <td style="font-weight: bold;">NO REKENING</td>
          <td>:</td>
          <td>5896-01-011735-53-3</td>
        </tr>
      </table>
    </div>
    <div style="float: right; width: 250px;">
      <table style="border:1px solid #CCC; width: inherit;">
        <tr>
          <td style="font-weight: bold;">Tanggal</td>
          <td>:</td>
          <td><?php echo date('d-m-Y'); ?></td>
        </tr>
        <tr>
          <td style="font-weight: bold;">No Transaksi</td>
          <td>:</td>
          <td><?php echo date('Ymd').'--'.$paket.'-'.$id ?></td>
        </tr>
      </table>
    </div>
    <div style="clear: both;"></div>

    <!-- load wisata -->
    <div style="width: 800px; margin-top: 30px;">
      <table style="border:1px solid #000; width: inherit;">
        <tr bgcolor="#ccc">
          <th style="padding: 10px;">NAMA WISATA</th>
          <th style="padding: 10px;">LOKASI WISATA</th>
          <th style="padding: 10px;">TRADISI</th>
          <th style="padding: 10px;">KATEGORI WISATA</th>
          <th style="padding: 10px;">TIKET MASUK</th>
        </tr>
        <?php
        $hrg = 0;
        $twisata = q("SELECT w.*, (SELECT kategori FROM kategori k WHERE k.id=w.kategori) as kt from wisata w where paket = {$paket}");
        while($dwisata = mysqli_fetch_array($twisata)){
          ?> 
          <tr>
            <td style="padding: 5px 10px;"><?php echo $dwisata['nama']; ?></td>
            <td style="padding: 5px 10px;"><?php echo $dwisata['lokasi']; ?></td>
            <td style="padding: 5px 10px;"><?php echo $dwisata['tradisi']; ?></td>
            <td style="padding: 5px 10px;"><?php echo $dwisata['kt']; ?></td>
            <td style="text-align: right; padding: 5px 10px;"><b>Rp. <?php echo number_format($dwisata['harga'], 0, '', '.'); ?></b></td>
          </tr>
          <?php
          $hrg += $dwisata['harga'];
        }
        $hrg = @intval($hrg);
        ?>
      </table>
    </div>

    <!-- load penginapan -->
    <div style="width: 800px; margin-top: 30px;">
      <table style="border:1px solid #000; width: inherit;">
        <tr bgcolor="#ccc">
          <th style="padding: 10px;">NAMA PENGINAPAN</th>
          <th style="padding: 10px;">FASILITAS</th>
          <th style="padding: 10px;">HARGA</th>
        </tr>
        <?php
        $tpenginapan = q("select * from penginapan where paket = {$paket}");
        $no = 1;
        while($dpenginapan = mysqli_fetch_array($tpenginapan)){
          ?>
          <tr>
            <td style="padding: 5px 10px;"><?php echo $dpenginapan['nama']; ?></td>
            <td style="padding: 5px 10px;"><?php echo $dpenginapan['fasilitas']; ?></td>
            <td style="text-align: right; padding: 5px 10px;"><b>Rp. <?php echo number_format($dpenginapan['harga'], 0, '', '.'); ?></b></td>
          </tr>
          <?php
          $p = $dpenginapan['harga'];
          $no++;
        }
        $p = @intval($p);
        ?>
      </table>
    </div>

    <!-- load transport -->

    <div style="width: 800px; margin-top: 30px;">
      <table style="border:1px solid #000; width: inherit;">
        <tr bgcolor="#ccc">
          <th style="padding: 10px;">NAMA TRANSPORTASI</th>
          <th style="padding: 10px;">FASILITAS</th>
          <th style="padding: 10px;">HARGA</th>
        </tr>
        <?php
        $transport = q("select * from transport where paket = {$paket}");
        $no = 1;
        while($dtransport = mysqli_fetch_array($transport)){
          ?>
          <tr>
            <td style="padding: 5px 10px;"><?php echo $dtransport['nama']; ?></td>
            <td style="padding: 5px 10px;"><?php echo $dtransport['fasilitas']; ?></td>
            <td style="padding: 5px 10px; text-align: right;"><b>Rp. <?php echo number_format($dtransport['harga'], 0, '', '.'); ?></b></td>
          </tr>
          <?php
          $t = $dtransport['harga'];
          $no++;
        }
        $t = @intval($t);
        ?>
      </table>
      <?php
      $add  = '';
      $tmbh = $p + $t;
      $akhr = $tmbh + $hrg;
      if(!empty($jumlah))
      {
        $ttl = $akhr * $jumlah;
        $add = '&jumlah='.$jumlah;
      }else{
        $ttl = $akhr;
      }
      ?>
      <div style="width: 800px; margin-top: 30px;">
       <table style="border:1px solid #000; width: inherit;">
         <raight>TOTAL PEMBAYARAN : <b>Rp.&nbsp;<?php echo number_format($ttl, 0, '', '.'); ?></b></raight>
       </table>
     </div>
   </div>
   <hr>
   <div style="background: #777; padding: 5px; color: #ccc; text-align: center; font-weight: bold; font-style: italic;">
    <small>Ekowisata Berbasis Masyarakat Daerah Jepara Dengan Kearifan Lokal</small>
  </div>
</div>
</body>