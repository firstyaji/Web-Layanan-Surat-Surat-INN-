

<body onload="window.print()">

<div align="center">
<img align="left" src="<?= base_url('assets/dist/img/logo_pwr.png'); ?>"  width="90">    
    <h3>PEMERINTAH KABUPATEN PURWOREJO<br>
    KECAMATAN KUTOARJO<br>
    KELURAHAN KUTOARJO<br>
    JLN. MT.HARYONO NO.32 KAB.PURWOREJO KODE POS 54212<br>
    ______________________________________________________________________________________________</h3>
    <h4 style="text-align:; margin-left: 5rem;">Surat Keterangan Belum Menikah<br>
    <?php echo $subtitle ?></h5>
</div>
<h5>ㅤㅤㅤYang bertanda tangan dibawah ini Lurah Kutoarjo, Kecamatan Kutoarjo, Kabupaten Purworejo Menerangkan Bahwa :</h5>
<h4>
    <?php foreach ($datafilter as $row): ?>
    <pre>
    ㅤㅤㅤㅤㅤㅤ Nama ㅤㅤㅤㅤㅤㅤ             : <?php echo $row->nama; ?><br>
    ㅤㅤㅤㅤㅤㅤ Jenis Kelamin ㅤㅤㅤㅤㅤㅤ    : <?php echo $row->jenis_kelamin; ?><br>
    ㅤㅤㅤㅤㅤㅤ Pekerjaan ㅤㅤㅤㅤㅤㅤ        : <?php echo $row->pekerjaan; ?><br>
    ㅤㅤㅤㅤㅤㅤ Tempat Tinggal ㅤㅤㅤㅤㅤㅤ   : <?php echo $row->alamat; ?><br>
    ㅤㅤㅤㅤㅤㅤ Surat Bukti Diri ㅤㅤㅤㅤㅤㅤ : Ktp.NIK <?php echo $row->nik; ?><br>
    ㅤㅤㅤㅤㅤㅤ Keperluan ㅤㅤㅤㅤㅤㅤ        : <?php echo $row->keperluan; ?><br>
</pre>
<!--
        <tr><td>Nama</td><td>:</td><td><?php echo $row->nama; ?><br></td></tr>
        <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $row->jenis_kelamin; ?><br></td></tr>
        <tr><td>Pekerjaan</td><td>:</td><td><?php echo $row->pekerjaan; ?><br></td></tr>
        <tr><td>Tempat Tinggal</td><td>:</td><td><?php echo $row->alamat; ?><br></td></tr>
        <tr><td>Surat Bukti Diri</td><td>:</td><td>Ktp.NIK <?php echo $row->nik; ?><br></td></tr>
        <tr><td>Keperluan</td><td>:</td><td><?php echo $row->keperluan; ?><br></td></tr>
        -->
    <?php endforeach ?>
</h4>
<h5>ㅤㅤAdalah warga kelurahan kutoarjo dan menerangkan bahwa orang tersebut pada saat dibuatnya surat keterangan ini belum pernah menikah.</h5>
<h5>ㅤㅤDemikian untuk menjadikan maklum bagi yang berkepentingan.</h5>
<div align="right" style="margin-right: 3rem;">
<h5>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤKutoarjo, <?php echo date('d F Y')?><br>
ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤLurah Kutoarjo</h5>
<br>

<h5>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ          Dicky Dermawan</h5>
</div>