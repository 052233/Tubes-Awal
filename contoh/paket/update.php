<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <form action="input.php" method="post" enctype="multipart/form-data">
        <label for="title">Judul:</label>
        <input type="text" name="title" required>

        <label for="loc">Lokasi</label>
        <textarea name="tour_location" required></textarea>

        <label for="cost">Harga</label>
        <textarea name="cost" required></textarea>

        <label for="desc">Deskripsi</label>
        <textarea name="description" required></textarea>

        <!-- <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" accept="image/*"> -->
        
        <button type="submit">Submit</button>
    </form>
</body>

</html>
