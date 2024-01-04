<?php
// Membuat associative array dengan data perusahaan teknologi
$perusahaanTeknologi = array(
    "Perusahaan 1" => array(
        "Nama" => "Microsoft Corporation",
        "Didirikan" => "Albuquerque, New Mexico, Amerika Serikat. 4 April 1975",
        "Pendiri" => "Bill Gates dan Paul Allen",
        "Wilayah Operasi" => "Seluruh Dunia, oleh 180 negara",
        "Kantor Pusat" => "Redmond, Washington, Amerika Serikat",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/3/30/Building92microsoft.jpg",
    ),
    "Perusahaan 2" => array(
        "Nama" => "Informasi IBM (Internasional Bussines Machine)",
        "Didirikan" => "Endicot, New York, A.S. (16 Juni 1911)",
        "Pendiri" => "Charles Ranlet Flint",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Endicot, New York, A.S.",
        "Gambar" => "https://innovation.co.id/wp-content/uploads/2023/05/9dfe1610958bf0d9d6ffebc0e85ecad7.jpeg",
    ),
    "Perusahaan 3" => array(
        "Nama" => "Oracle Corporation",
        "Didirikan" => "Santa Clara, California, Amerika Serikat. 16 Juni 1977",
        "Pendiri" => "Larry Ellison, Bob Miner dan Ed Oates",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Austin, Texas, Amerika Serikat",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/c/cc/Oracle_Redwood_City_February_2013_panorama.jpg",
    ),
    "Perusahaan 4" => array(
        "Nama" => "Accenture",
        "Didirikan" => "1989",
        "Pendiri" => "Kim Petersen",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Durbin, Irlandia",
        "Gambar" => "https://st2.depositphotos.com/33336980/46855/i/1600/depositphotos_468554212-stock-photo-bucharest-romania-2021-accenture-office.jpg",
    ),
    "Perusahaan 5" => array(
        "Nama" => "SAP SE",
        "Didirikan" => "Weinheim, Jerman. 1972",
        "Pendiri" => "Dietmar Hopp, Hans-Werner Hector, Hasso Plattner, Klaus Tschira dan Claus Wellenreuther",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Jerman",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/5/59/SAP_2011_logo.svg",
    ),
    "Perusahaan 6" => array(
        "Nama" => "Tata Consultancy Services (TCS) Limited",
        "Didirikan" => "1968",
        "Pendiri" => "Tata Sons",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Mumbai, Maharashtra, India",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/8/85/TCS_SIPCOT_Building.jpg",
    ),
    "Perusahaan 7" => array(
        "Nama" => "Cognizant Technology Solution",
        "Didirikan" => "26 Januari 1994",
        "Pendiri" => "Kumar Mahadeva dan Francisco D'Souza",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Teaneck, New Jersey, Amerika Serikat",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/4/43/Cognizant_logo_2022.svg",
    ),
    "Perusahaan 8" => array(
        "Nama" => "Infosys",
        "Didirikan" => "2 Jully 1981",
        "Pendiri" => "N.R. Narayana Murthy, Nandan Nilekani, S. Gopalakrishnan, S. D. Shibulai, K. Dinesh, N. S. Raghavan dan Ashok Arora",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Bangalore, Karnataka, India",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/e/e5/Infosys_%284911287704%29.jpg",
    ),
    "Perusahaan 9" => array(
        "Nama" => "Capgemini",
        "Didirikan" => "1 Oktober 1967",
        "Pendiri" => "Sarge Kampf",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Paris, Prancis",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/6/64/11_rue_de_Tilsitt.jpg",
    ),
    "Perusahaan 10" => array(
        "Nama" => "Vmware Inc",
        "Didirikan" => "California, 1998",
        "Pendiri" => "Paul Maritz",
        "Wilayah Operasi" => "Seluruh Dunia",
        "Kantor Pusat" => "Palo Alto, California, AS",
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/8/8c/VMware_HQ_campus_3401_Hillview_entrance.JPG",
),
);

echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Didirikan</th><th>Pendiri</th><th>Wilayah Operasi</th><th>Kantor Pusat</th><th>Gambar</th></tr>";
$nomor = 1;         
foreach ($PerusahaanTeknologi as $perusahaan) {
    echo "<tr>";
   
    echo "<td><a heref='latihan5c.php'>" . $perusahaan["Nama"] . "</a></td>";
    echo "<td><a heref='latihan5c.php'>" . $perusahaan["Didirikan"] . "</a></td>";
    echo "<td><a heref='latihan5c.php'>" . $perusahaan["Pendiri"] . "</a></td>";
    echo "<td><a heref='latihan5c.php'>" . $perusahaan["Wilayah Operasi"] . "</a></td>";
    echo "<td><a heref='latihan5c.php'>" . $perusahaan["Kantro Pusat"] . "</a></td>";
    echo "<td><img src='" . $perusahaan["Gambar"] . "' alt='" . $perusahaan["Nama Perusahaan"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>