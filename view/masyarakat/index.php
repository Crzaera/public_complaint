<html>
    <head>
        <title>DATA MASYARAKAT</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Masyarakat</h3>
            </div>
            <div class="card-body">
                <a href="register.php" class="btn btn-success">Register</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>No. Telepon</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;

                    foreach($data as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nik']."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['username']."</td>";
                        echo "<td>".$row['telp']."</td>";
                        echo "<td><a class='btn btn-info' href='edit.php?nik=".$row['nik']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_masyarakat=".$row['nik']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>