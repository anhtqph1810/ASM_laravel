<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tinTuc->tieu_de }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <h1>{{ $tinTuc->tieu_de }}</h1>
    </header>

    <main>
        <div class="container">
            <img src="{{ asset('storage/' . $tinTuc->hinh_anh) }}" alt="{{ $tinTuc->tieu_de }}" class="img-fluid">
            <p><strong>Ngày đăng:</strong> {{ $tinTuc->ngay_dang }}</p>
            <p><strong>Nguồn:</strong> {{ $tinTuc->nguon_tin }}</p>
            <h2>Tóm tắt:</h2>
            <p>{{ $tinTuc->tom_tat }}</p>
            <h2>Nội dung:</h2>
            <p>{{ $tinTuc->noi_dung }}</p>
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Tin Tức</p>
    </footer>
</body>

</html>
