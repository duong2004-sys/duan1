
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 100px;
        }
        form1{
            display:flex;s
        }
        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }
        
        table{
            margin-top: 20px;
        }
        td{
            font-size: 14px;
        }
        .thongtin{
            text-align: center;
        }
        .box{
            display: flex;
            padding-left:40%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Liên hệ</h1>
    <hr>
    <td>Nếu Qúy khách có bất kỳ thắc mắc hoặc cần hỗ trợ thêm, Qúy khách vui lòng liên hệ với Bộ phận Chăm sóc khách hàng của LOTTE Cinema tại đây. Chúng tôi sẽ phản hồi với Qúy khách trong vòng 24h.<br>
    Mọi yêu cầu nhận được sau 6 giờ chiều vào thứ Sáu sẽ được xử lý vào tuần tới. Câu hỏi thường gặp (FAQ)</td>
    <br>
    <table border="1">
        <tr>
            <th colspan="3">Cung cấp thông tin</th>
        </tr>
        <tr>
            <td>LOTTE Cinema sẽ sử dụng các thông tin cá nhân thu thập được từ Thành viên để tối ưu hóa chương trình dành cho Thành viên và nhằm nâng cao chất lượng dịch vụ chăm sóc khách hàng. LOTTE Cinema cam kết không sử dụng thông tin cá nhân của khách hàng vào mục đích khác.</td>
        </tr>
        <tr>
            <td>LOTTE Cinema sẽ sử dụng các thông tin cá nhân thu thập được từ Thành viên để tối ưu hóa chương trình dành cho Thành viên và thực hiện các hoạt động tiếp thị hướng đến Khách hàng và nhằm tối ưu hóa hiệu quả của chương trình.<br>
LOTTE Cinema không sử dụng thông tin cá nhân thu được từ Thành viên vào các mục đích khác mà không có sự đồng ý của Thành viên đó và cũng không được tiết lộ thông tin cá nhân đó cho người khác ngoài trừ những trường hợp sau đây:<br>
+ Trường hợp những thông tin tối thiểu (tên, địa chỉ, số điện thoại và email) được yêu cầu tiết lộ để cấp cho nhà cung cấp dịch vụ hoạt động tiếp thị hướng đến Khách hàng.<br>
+ Trường hợp thông tin cá nhân được tiết lộ cho mục đích thống kê, nghiên cứu, hay hoạt động tiếp thị, với điều kiện là những thông tin này được tiết lộ dưới hình thức mà bằng cách đó không thể nào xác định được bất cứ một người cụ thể nào<br>
+ Trường hợp tiết lộ thông tin cá nhân theo yêu cầu của pháp luật.
</td>
    </tr>
    </table>        
     <form1>
<input name="gender" type="radio" value="" />Tôi đồng ý
<input name="gender" type="radio" value="" />Tôi không đồng ý
</form1>
<div class="thongtin">
<h3>Thông tin thành viên</h3>
    <form method="post" >
        <div class="box">
        <label for="name">Họ và tên:</label>
        <input type="text" id="name" name="name" required>
        </div>
        <div class="box">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        </div>
        <div class="box">
        <label for="message">Nội dung:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        </div>
    </form>
    <button type="submit">Hủy bỏ</button>
    <button type="submit">Gửi</button>
    </div>
</body>
</html>
