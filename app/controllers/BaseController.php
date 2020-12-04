<?php

namespace App\Controllers;

class BaseController
{
    protected $folder; // Biến có giá trị là thư mục nào đó trong thư mục views, chứa các file view template của phần đang truy cập.

    // Hàm hiển thị kết quả ra cho người dùng.
    function render($file, $data = array())
    {
        // Kiểm tra file gọi đến có tồn tại hay không?
        $view_file = PATH_ROOT . '/' . 'app/views/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_contents();
            ob_end_clean();
            require_once(PATH_ROOT . '/' . 'app/views/layouts/application.php');
        }
        // else {
            // Nếu file muốn gọi ra không tồn tại thì chuyển hướng đến trang báo lỗi.
            // header('Location: /error');
        // }
    }
}
