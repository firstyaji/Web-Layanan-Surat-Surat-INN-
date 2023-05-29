

<body onload="window.print()">

<div align="center">
<img align="left" src="<?= base_url('assets/dist/img/logo_pwr.png'); ?>"  width="90">
    <h3>PEMERINTAH KABUPATEN PURWOREJO<br>
    KECAMATAN KUTOARJO<br>
    KELURAHAN KUTOARJO<br>
    JLN. MT.HARYONO NO.32 KAB.PURWOREJO KODE POS 54212<br>
    ______________________________________________________________________________________________</h3>
    <h4 style="text-align:; margin-left: 5rem;">Surat Keterangan Tidak Mampu<br>
    <?php echo $subtitle ?></h5>
</div>
<h5>ㅤㅤㅤYang bertanda tangan dibawah ini saya :</h5>
<h4>
    <pre>
    ㅤㅤㅤㅤㅤㅤ Nama             : Dicky Dermawan<br>
    ㅤㅤㅤㅤㅤㅤ Jabatan          : Lurah Kutoarjo<br>
    ㅤㅤㅤㅤㅤㅤ Alamat           : Jln. MT Haryono No.32 Kelurahan Kutoarjo Kecamatan Kutoarjo Kabupaten Purworejo<br>
    </pre>
</h4>
<h5>ㅤㅤㅤDengan ini menyatakan sesungguhnya bahwa :</h5>
<h4>
<?php foreach ($datafilter as $row): ?>
<pre>
    ㅤㅤㅤㅤㅤㅤ Nama             : <?php echo $row->nama; ?><br>
    ㅤㅤㅤㅤㅤㅤ Jenis Kelamin    : <?php echo $row->jenis_kelamin; ?><br>
    ㅤㅤㅤㅤㅤㅤ Pekerjaan        : <?php echo $row->pekerjaan; ?><br>
    ㅤㅤㅤㅤㅤㅤ Tempat Tinggal   : <?php echo $row->alamat; ?><br>
    ㅤㅤㅤㅤㅤㅤ Keperluan        : <?php echo $row->keperluan; ?><br>
</pre>
    <?php endforeach ?>
</h4>
<h5>ㅤㅤㅤBahwasanya anak tersebut diatas benar-benar anak dari keluarga kurang mampu.<br> 
ㅤㅤㅤDemikian agar menjadi maklum adanya dan selanjutnya dapat dipergunakan sebagaimana mestinya.</h5>
<br>
<div align="right" style="margin-right: 3rem;">
<h5>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤKutoarjo, <?php echo date('d M Y')?><br>
ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤLurah Kutoarjo</h5>
<br>
<br>
<h5>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤDicky Dermawan</h5>
</div>