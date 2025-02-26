<?php
// 设置时区为中国标准时间
date_default_timezone_set('Asia/Shanghai');

$target_directory = "7BC0A9B8B80F/"; // 设置上传目录

// 检查目录是否存在，如果不存在则创建
if (!is_dir($target_directory)) {
    mkdir($target_directory, 0755, true);
}

// 获取当前日期
$date = date("Ymd");

// 获取文件名并计算 MD5 哈希值
$original_filename = basename($_FILES['fileToUpload']['name']);
$hashed_filename = $date . '_' . md5($original_filename);

// 设置目标路径
$target_path = $target_directory . $hashed_filename;

// 尝试移动上传的文件
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
    $log_message = "File uploaded successfully\n";
} else {
    $log_message = "File upload failed\n";
}

// 将日志消息写入 app.log 文件
file_put_contents('access.log', $log_message, FILE_APPEND);

// 输出结果
echo $log_message;
?>
