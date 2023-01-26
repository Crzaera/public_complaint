<?php

include 'ConnectPDO';

class PengaduanController {


    public function index()
    {
        $query = "SELECT * FROM pengaduan";
        $index = $this->pdo->prepare($query);
        $index->execute();
        $result = $index->fetchAll(PDO::FETCHOBJ);

        return $result;
    }

    public function show($id)
    {
        $query = "SELECT * FROM pengaduan WHERE id = $id";
        $show = $this->pdo->prepare();
        $show->execute($query);
        $result = $show->fetchAll(PDO::FETCHOBJ);

        return $result;
    }

    public function edit($id)
    {
        $query = "SELECT * FROM pengaduan WHERE id = $id";
        $edit = $this->pdo->prepare();
        $edit->execute($query);
        $result = $edit->fetchAll(PDO::FETCHOBJ);

        header("Location: view/pengaduan/edit.php");
    }
       
    public function update($request)
    {
        $tgl            =   $request['tgl'];   
        $nik            =   $request['nik'];   
        $isi            =   $request['isi'];     
        $foto           =   $request['foto'];   
        $status         =   0; 

        $query = "UPDATE pengaduan SET tgl_pengaduan = '$tgl', nik = '$nik', isi_laporan = '$isi', foto = '$foto', status = '$status'";
        $store = $this->pdo->prepare();
        $store->execute();
        
        echo "<script>
        alert('Berhasil Mengajukan Pengaduan!')
        window.location.href='view/pengaduan/index.php'
        </script>";
    }
    
    public function store($request)
    {
        $tgl            =   $request['tgl'];   
        $nik            =   $request['nik'];   
        $isi            =   $request['isi'];     
        $foto           =   $request['foto'];   
        $status         =   0; 

        $query = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl', '$nik', '$isi', '$foto', '$status')";
        $store = $this->pdo->prepare();
        $store->execute();

        echo "<script>
        alert('Berhasil Mengajukan Pengaduan!')
        window.location.href='view/pengaduan/index.php'
        </script>";
    }

    public function destroy()
    {
        $query = "SELECT * FROM pengaduan WHERE id = $id";
        $destroy = $this->pdo->prepare();
        $destroy->execute($query);
        $result = $destroy->delete();

        header("Location: view/pengaduan/index.php");

    }

}