# SPhone

Frontend: HTML, CSS, JavaScript + Bootstrap 5

Backend: PHP

Database: MySQL


# Tips for running

Create schema named **sphone** and run sql script **sphone.sql**

Thay đổi thư mục Web Root (Đường dẫn mặc định trong XAMPP:
C:\xampp\htdocs)
1. Tìm và mở file: httpd.conf trong thư mục cài đặt XAMPP (Mặc định:
C:\xampp\apache\conf)
2. Tìm dòng C:/xampp/htdocs, và sửa thành đường dẫn đến thư mục Web Root mới
3. Restart Apache

# Notes

Default action for each Page/Controller is **GetPage** function

For Register: Using md5 to hash password

Role for user:
- 1: User
- 2: Admin

