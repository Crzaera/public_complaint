<html>
    <head>
        <title>DATA MASYARAKAT</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <h1> List Pengaduan Masyarakat</h1>
        <?php if ($result != null) : ?>
            <div class="card">
            <? foreach ($result as $index) : ?>
                <p>Tanggal : </p><br>
                <p><?= $index->tgl_pengaduan ?></p><br>
                <p>NIK : </p><br>
                <p><?= $index->nik ?></p><br>
                <p>Laporan : </p><br>
                <p><?= $index->isi_laporan ?></p><br>
                <p>Foto : </p><br>
                <p><?= $index->foto ?></p><br>
                <p>Status : </p><br>
                <p><?= $index->status ?></p><br>
                <p>Tanggal : </p><br>
                    <?php if ($index->status == 0) : ?>
                        <p>Belum Diproses</p>
                    <?php elseif ($index->status == 'proses') : ?>
                        <p>Sedang Diproses</p>
                    <?php elseif ($index->status == 'selesai') : ?>
                        <p>Selesai Diproses</p>
                    <?php endif ; ?>
                    <p><?= $index->status ?></p><br>
                    </div>
                    <? endforeach ; ?>
            <?php else : ?>
                <h3></h3>
                <? endif ;?>
            </div>
        </div>
    </div>
    </body>
</html>