<!DOCTYPE html>
<html>

<head>
    <title>Trang Index</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            margin-top: 0;
        }

        .tin-tuc {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        @foreach ($sections as $section)
            <div class="section">
                <h2>{{ $section['loai_tin']->ten_loai_tin }}</h2>

                <h3>Danh sách tin tức:</h3>
                @forelse ($section['tin_tucs'] as $tinTuc)
                    <div class="tin-tuc">
                        <h4>{{ $tinTuc->tieu_de }}</h4>
                        <p>{{ $tinTuc->tom_tat }}</p>
                        @if ($tinTuc->hinh_anh)
                            <img src="{{ asset('storage/' . $tinTuc->hinh_anh) }}" alt="{{ $tinTuc->tieu_de }}"
                                style="width:100px;height:auto;">
                        @endif
                    </div>
                @empty
                    <p>Không có tin tức nào.</p>
                @endforelse
            </div>
        @endforeach
    </div>
</body>

</html>
