<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Cards</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card-container">
        <div class="card">
            <h2>Card 1</h2>
            <p>This is the content of card 1.</p>
        </div>
        <div class="card1">
            <img src="{{ asset('image/logo-pemko.png') }}" class="icon1">
            <img src="{{ asset('image/kolaborasi-medan-berkah.png') }}" class="icon2">
            <div class="box">
                <h3>Box Inside Card 2</h3>
                <p>This is the content of the box inside card 2.</p>
            </div>
        </div>
    </div>
</body>
</html>
