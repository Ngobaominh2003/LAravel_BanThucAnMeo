<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Hóa đơn</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Định dạng hóa đơn */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            text-align: left;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Hóa đơn</h2>
        <p><strong>Mã đơn hàng:</strong> {{ $order->order_id }}</p>
        <p><strong>Ngày đặt hàng:</strong> {{ $order->ngay_dat_hang }}</p>
        
        <h3>Thông tin khách hàng:</h3>
        <p><strong>Tên khách hàng:</strong> {{ $order->user->name }}</p>
        <p><strong>Email:</strong> {{ $order->user->email }}</p>
        <p><strong>Địa chỉ:</strong> {{ $order->user->address }}</p>
        
        <h3>Các mặt hàng đã đặt:</h3>
        <table>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
            </tr>
            @foreach($order->products as $product)
            <tr>
                <td>{{ $product->ten_san_pham }}</td>
                <td>{{ $product->pivot->quantity }}</td>
                <td>{{ number_format($product->pivot->price, 0, ',', '.') }} VND</td>
            </tr>
            @endforeach
        </table>
        
        <h3>Tổng thanh toán:</h3>
        <p><strong>Tổng giá:</strong> {{ number_format($order->tong_gia, 0, ',', '.') }} VND</p>

        <div class="footer">
            <p>Xin cảm ơn quý khách đã mua hàng!</p>
        </div>
    </div>
</body>

</html>
