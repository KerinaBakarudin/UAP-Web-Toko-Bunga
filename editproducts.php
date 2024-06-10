<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #f7d9e3;
        }

        .container {
            max-width: 600px; 
            margin: auto; 
            margin-top: auto; 
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
        }

        h2 {
            text-align: center;
            color: #e83e8c;
        }

        label {
            margin-bottom: 5px;
            display: block;
            color: #e83e8c;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #e83e8c;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #e83e8c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #d8357e;
        }

        input[type="file"]::file-selector-button {
            background-color: #e83e8c;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Edit Informasi Produk</h2>
        <form id="flowerForm">
        <label for="flowerName">Nama Produk:</label>
        <input type="text" id="flowerName" name="flowerName" required>
        
        <label for="flowerPrice">Harga:</label>
        <input type="text" id="flowerPrice" name="flowerPrice" required>
        
        <label for="flowerImage">Gambar Produk:</label>
        <input type="file" id="flowerImage" name="flowerImage" accept="image/*" required>
        
        <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
