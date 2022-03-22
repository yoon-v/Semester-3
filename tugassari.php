<!DOCTYPE html>

<head>
    <title>Array multidemensi</title>
</head>

<body>
    <?php
            // data mahasiswa
            $datamahasiswa = array(
            array("19210002","19210003","19210004","19210005","19210006"),
            array("Joko Susilo","Abdul Gani","Arnold","Samsul","Juli"),
            array("Sistem Komputer","Sistem Informasi","Sistem Informasi","Sistem Komputer","Sistem Informasi"),
            array("4E","4A","4B","4K","4G"),
            array("STMIK Royal Kisaran","STMIK Royal Kisaran","STMIK Royal Kisaran","STMIK Royal Kisaran","STMIK Royal Kisaran")
        );
            // output data mahasiswa
            echo "Nim : ".$datamahasiswa[0][1]."<br>";
            echo "Nama lengkap : ".$datamahasiswa[1][1]."<br>";
            echo "Program studi : ".$datamahasiswa[2][1]."<br>";
            echo "Kelas : ".$datamahasiswa[3][0]."<br>";
            echo "Instansi : ".$datamahasiswa[4][0]."<br>";
        ?>
</body>

</html>