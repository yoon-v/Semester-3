<!DOCTYPE html>

<head>
    <title>multidemensi</title>
</head>

<body>
    <center>
        <h1>Data Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Kelas</th>
                <th>Instansi</th>
            </tr>
            <?php
            $institut = array(
                array('19210002', 'Joko Susilo', 'Sistem Komputer',  '4E', 'STMIK Royal Kisaran'),
                array('19210003', 'Abdul Gani',  'Sistem Informasi', '4A', 'STMIK Royal Kisaran'),
                array('19210004', 'Arnold',      'Sistem Informasi', '4B', 'STMIK Royal Kisaran'),
                array('19210005', 'Samsul',      'Sistem Komputer',  '4K', 'STMIK Royal Kisaran'),
                array('19210006', 'Juli',        'Sistem Informasi', '4G', 'STMIK Royal Kisaran'));
            for ($i = 0; $i < count($institut); $i++) {
                echo "<tr>";
                echo "<td>" . ($i + 0) . "</td>";
                echo "<td>" . $institut[$i][0] . "</td>";
                echo "<td>" . $institut[$i][1] . "</td>";
                echo "<td>" . $institut[$i][2] . "</td>";
                echo "<td>" . $institut[$i][3] . "</td>";
                echo "<td>" . $institut[$i][4] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <hr>
        <h1>Hasil Data Mahasiswa</h1>
        <?php
            $institut = array(
                //         0          1          2          3         4
                array('19210002','19210003','19210004','19210005','19210006'),
                array('Joko Susilo','Abdul Gani','Arnold','Samsul','Juli'),
                array('Sistem Komputer','Sistem Informasi','Sistem Informasi','Sistem Komputer','Sistem Informasi'),
                array('4E','4A','4B','4K','4G'),
                array('STMIK Royal Kisaran'));
        echo "<table border=1 cellpadding=10 cellspacing=0>";
        echo "<tr>";
        echo "<td>NIM  </td>";
        echo "<td>" . $institut[0][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama Lengkap  </td>";
        echo "<td>" . $institut[1][1] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Program Studi  </td>";
        echo "<td>" . $institut[2][1] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Kelas  </td>";
        echo "<td>" . $institut[3][1] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Instansi  </td>";
        echo "<td>" . $institut[4][0] . "</td>";
        echo "</tr>";
        echo "</table>";
        ?>
    </center>
</body>

</html>