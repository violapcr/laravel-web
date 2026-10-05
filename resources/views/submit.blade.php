<!DOCTYPE html>
<html>
<head>
    <title>Submit Data</title>
</head>
<body>

    <h1>Form Data Mahasiswa</h1>

    <form action="/submit" method="POST">
        @csrf

        <label>Nama:</label>
        <input type="text" name="nama">

        <br><br>

        <label>NIM:</label>
        <input type="text" name="nim">

        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
