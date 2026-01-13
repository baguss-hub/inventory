<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kop Surat</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .kop-surat {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 15px;
            border-bottom: 3px solid #000;
            margin-bottom: 25px;
        }

        .kop-surat img {
            width: 90px;
            height: 90px;
            margin-right: 20px;
            border-radius: 50%; /* membuat logo bulat */
            object-fit: cover;  /* menjaga proporsi gambar */ 
        }  

        .kop-text {
            text-align: center;
        }

        .kop-text h2 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
        }

        .kop-text p {
            margin: 3px 0;
            font-size: 13px;
        }

        .judul-laporan {
            text-align: center;
            margin: 20px 0;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- KOP SURAT -->
<div class="kop-surat">
    <img src="<?= base_url('assets/dist/img/dodo.png') ?>" alt="Logo Dodo Inventory">
    <div class="kop-text">
        <h2>DODO INVENTORY</h2>
        <p>Jl. Pancur No.123, Kota Pangkalpinang</p>
        <p>Telp: 0812-3456-7890 | Email: info@dodoinventory.com</p>
    </div>
</div>

</body>
</html>
