<?php

class PrepraredStatement {

    public function __construct()
    {
        $sql ="INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES (?, ?, ?, ?, ?)";
        $statement = $pdo->prepared($sql);
        $statement->execute(['Sandra', 'Aamont']);
        
        $sql ="INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES (:nik, :nama, :username, :password, :telp)";
        $statement = $pdo->prepared($sql);
        $statement->execute([
            'nik'               =>  '1100011',
            'nama'              =>  'Sandra',
            'username'          =>  'sandra',
            'password'          =>  'Sandra123',
            'telp'              =>  '081326481239',
        ]);

        $nik = __POST('nik');
        $sql ="INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ('$nik', '$name', '$username', '$password', $telp)";
        $statement = $pdo->prepared($sql);
        $statement->execute(['Sandra', 'Aamont']);
    }

}