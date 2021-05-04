
Long time no see 😀 Hôm nay chúng ta sẽ cùng tìm hiểu quy trình từ khi clone 1 project laravel về đến khi start server chạy như thế nào 1 cách tốt nhất nhé. Do chưa làm với laravel lâu nên các bước này mình cũng không nhớ hết vì vậy mình viết ra bài này để mọi người mới bắt đầu với laravel hoặc hay quên như mình cùng tham khảo để có thể chạy được project laravel suông sẻ nhé (đặc biệt các bạn mới bắt đầu học mà chạy không được project là mau nản lắm).

Tóm tắt cho các bạn đã hiểu và cần gấp:
php artisan migrate:fresh –seed
php artisan serve
<pre title="terminal" class="wp-block-code  language-properties"><div class="prism-titlename">composer install</div>
<div class="prism-titlename">php artisan key:generate
</div>
<div class="prism-titlename">Tạo và config file .env</div>
<div class="prism-titlename">php artisan migrate:fresh –seed
</div>
<div class="prism-titlename">php artisan serve</div>
</pre>


Bước 1: Cài Đặt Dependency
Để cài đặt các dependency cho project, mở terminal từ thư mục project và chạy lệnh:
<pre title="terminal" class="wp-block-code  language-properties" style="background:black"><div class="prism-titlename">terminal</div><code lang="properties" class="  language-properties"><span class="token attr-name">composer</span> <span class="token attr-value">install</span></code></pre>
Bước 2: Tạo Key Cho Project
Tiếp theo chúng ta sẽ phải tạo key cho project, trước tiên nếu trong project clone về chưa có file .env thì phải tạo file này trước. Các bạn chỉ cần coppy file .env.example và rename lại thành .env là được.

Tiếp theo chạy lệnh:
<pre title="terminal" class="wp-block-code  language-properties"><code lang="properties" class="  language-properties"><span class="token attr-name">php</span> <span class="token attr-value">artisan key:generate</span></code></pre>
Vào file .env và kiểm tra xem giá trị của APP_KEY đã có chưa.

Bước 3: Config File .Env
Tiếp tục với file .env , thường chúng ta sẽ tiến hành config database (và một vài config cho các service như Mail,…). Để config laravel có thể kết nối đến CSDL (trong bài này mình dùng MySQL), chúng ta để ý các trường:
Hãy chỉnh sửa các thông tin ở các trường này phù hợp với database mà bạn tạo.

Bước 4: Chạy Migration Và Seed
Laravel hỗ trợ chúng ta config DB ngay trong code PHP mà không cần phải tự tạo DB bằng các câu query nhờ vào migration và seed. Để có thể tạo các cấu trúc bảng trong DB từ laravel (và cả các dữ liệu mẫu trong seed), chạy lệnh:
<pre title="terminal" class="wp-block-code  language-properties"><code lang="properties" class="  language-properties"><span class="token attr-name">php</span> <span class="token attr-value">artisan migrate:fresh --seed</span></code></pre>

Bước 5: Chạy Server
Sau khi hoàn tất các bước trên và thành công, các bạn chỉ cần chạy lệnh:
<pre title="terminal" class="wp-block-code  language-properties"><code lang="properties" class="  language-properties"><span class="token attr-name">php</span> <span class="token attr-value">artisan serve</span></code></pre>
Và truy cập vào đường link hiện ra trên console là thành công.

Tổng Kết
Vậy là chúng ta đã tìm hiểu xong 5 bước để cài đặt và chạy project laravel một cách suông sẻ nhất, nếu trong quá trình làm có phát sinh lỗi các bạn comment bên dưới để mình giúp nhé. Bye 😀
<h1>Chúc các bạn thành công nhé =)))) 😀</h1>
