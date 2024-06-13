<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Bunga</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('assets/pict4.png') no-repeat center center/cover;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #E37383;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
        }
        .form-group input[type="date"],
        .form-group input[type="number"] {
            padding: 8px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        .button-group button {
            background-color: #E37383;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            width: 48%;
        }
        .button-group button:hover {
            background-color: #e67e22;
        }
        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #ff8c00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Pemesanan Bunga</h2>
        <form>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="no-telpon">No Telpon:</label>
                <input type="tel" id="no-telpon" name="no-telpon" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="tujuan-wisata">Pesanan:</label>
                <input type="text" id="pesanan" name="pesanan" required>
            </div>
            <div class="form-group">
                <label for="tanggal-pemesanan">Tanggal Pemesanan:</label>
                <input type="date" id="tanggal-pemesanan" name="tanggal-pemesanan" required>
            </div>
            <div class="form-group">
                <label for="jumlah-orang">Jumlah Pemesanan:</label>
                <input type="number" id="jumlah-pemesanan" name="jumlah-pemesanan" min="1" required>
            </div>
            <div class="form-group button-group">
                <button type="button" onclick="history.back()">Kembali</button>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
