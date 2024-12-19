<?php
class DP
{
    // Phương thức kết nối
    private static function connect_DB()
    {
        $host = 'localhost';
        $dbname = 'webth';
        $us = 'root';
        $pass = '';
        try {
            // Tạo kết nối với PDO và cấu hình
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $us, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
            ]);
            return $conn;
        } catch (PDOException $e) {
            // Thông báo lỗi kết nối
            error_log("Database connection error: " . $e->getMessage());
            return null;
        }
    }

    // Phương thức xác định kiểu dữ liệu truyền vào của tham số câu truy vấn
    private static function get_type($var)
    {
        switch (gettype($var)) {
            case 'integer':
                return PDO::PARAM_INT;
            case 'boolean':
                return PDO::PARAM_BOOL;
            case 'NULL':
                return PDO::PARAM_NULL;
            default:
                return PDO::PARAM_STR;
        }
    }

    // Phương thức thực thi truy vấn
    public static function run_query($query, $paras, $type)
    {
        try {
            $con = self::connect_DB();
            if ($con === null) {
                throw new Exception("Connection could not be established.");
            }
            $h = $con->prepare($query);
            foreach ($paras as $key => $para) {
                $h->bindValue($key + 1, $para, self::get_type($para));
            }
            $h->execute();

            // $result;
            $result = null;
            switch ($type) {
                case 1:
                    $result = true;
                    break;  // Cho các truy vấn không trả về kết quả (INSERT, UPDATE, DELETE)
                case 2:
                    $result = $h->fetchAll();
                    break; // Cho các truy vấn SELECT
                case 3:
                    $result = $con->lastInsertId();
                    break; // Cho truy vấn INSERT có mã tự động
            }
            $con = null; // Đóng kết nối
            return $result;
        } catch (PDOException $e) {
            // Log lỗi truy vấn thay vì dùng alert
            error_log("Query error: " . $e->getMessage());
            return false; // Trả về false để báo lỗi truy vấn
        } catch (Exception $e) {
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
}
