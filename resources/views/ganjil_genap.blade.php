<!DOCTYPE html>
<html>
<head>
    <title>Cek Ganjil atau Genap</title>
</head>
<body>
    <h2>Deteksi Bilangan Ganjil atau Genap</h2>
    <form method="POST" action="/cek-ganjil-genap">
        @csrf
        <input type="number" name="number" required>
        <button type="submit">Cek</button>
    </form>

    @isset($isEven)
        <p>Angka {{ $number }} adalah <strong>{{ $isEven ? 'Bilangan Genap' : 'Bilangan Ganjil' }}</strong></p>
    @endisset
</body>
</html>
