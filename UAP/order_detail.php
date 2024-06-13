<?php
include 'connect/koneksi.php'; // Memastikan koneksi ke database

// Mendapatkan order ID dari parameter URL
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    
    // Memanggil data pesanan dari database berdasarkan ID
    $query = "SELECT * FROM orders WHERE id = $order_id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query Error: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $no_telpon = $row['no_telpon'];
        $email = $row['email'];
        $pesanan = $row['pesanan'];
        $total_harga = $row['total_harga'];
        $tanggal_pemesanan = $row['tanggal_pemesanan'];
        $tanggal_pengambilan = $row['tanggal_pengambilan'];
    } else {
        die('Order not found');
    }
} else {
    die('No order ID provided');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan Bunga</title>
    <style>
        * {
            font-family: 'Lucida Sans';
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: pink;
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

        .detail-group {
            margin-bottom: 15px;
        }

        .detail-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .detail-group span {
            font-weight: normal;
        }

        .button-group {
            text-align: center;
            margin-top: 20px;
        }

        .button-group button {
            background-color: #E37383;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            margin-right: 10px;
        }

        .button-group button:hover {
            background-color: pink;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Pemesanan Bunga</h2>
        <div class="detail-group">
            <label>Nama:</label>
            <span><?php echo $nama; ?></span>
        </div>
        <div class="detail-group">
            <label>Alamat:</label>
            <span><?php echo $alamat; ?></span>
        </div>
        <div class="detail-group">
            <label>No. Telepon:</label>
            <span><?php echo $no_telpon; ?></span>
        </div>
        <div class="detail-group">
            <label>Email:</label>
            <span><?php echo $email; ?></span>
        </div>
        <div class="detail-group">
            <label>Pesanan:</label>
            <span><?php echo $pesanan; ?></span>
        </div>
        <div class="detail-group">
            <label>Total Harga:</label>
            <span><?php echo 'Rp. ' . number_format($total_harga, 2, ',', '.'); ?></span>
        </div>
        <div class="detail-group">
            <label>Tanggal Pemesanan:</label>
            <span><?php echo $tanggal_pemesanan; ?></span>
        </div>
        <div class="detail-group">
            <label>Tanggal Pengambilan:</label>
            <span><?php echo $tanggal_pengambilan; ?></span>
        </div>
        <div class="button-group">
        <a href="hapus-booking.php?id=<?php echo $order_id; ?>"><button>Cancel</button></a>
            <a href="edit-booking.php?id=<?php echo $order_id; ?>"><button>Edit</button></a>
            
            <button onclick="window.location.href='confirm-booking.php'">Confirm</button>
        </div>
    </div>
</body>
</html>
