<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 10px;
            background-color: #ffffff;
            padding: 2rem;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-weight: bold;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #333333;
            text-align: center;
        }
        .card-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555555;
        }
        .img-thumbnail {
            max-width: 200px;
            height: auto;
            margin-bottom: 1rem;
            border-radius: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4" style="color: #333333;">User Information</h1>
        <div class="card">
            <img src="{{ $account->avatar }}" alt="Avatar" class="img-thumbnail">
            <h5 class="card-title">{{ $account->name }}</h5>
            <p class="card-text">
                <strong>Role:</strong> {{ $account->role->roleName }}<br>
                <strong>Email:</strong> {{ $account->email }}<br>
                <strong>Phone Number:</strong> {{ $account->phoneNumber }}<br>
                <strong>Birthday:</strong> {{ date('d/m/Y', strtotime($account->birthday)) }}<br>
                <strong>Gender:</strong> {{ $account->gender }}<br>
            </p>
        </div>
    </div>
</body>
</html>