<?php
$flag = $_GET['flag'];
if ($flag == 0) {    
    $temp = $_GET['search'];
    if (is_numeric($temp)) {
        $search = $temp;
        $danhsachSP = DP::run_query("SELECT sanpham.masp, sanpham.tensp, sanpham.anhdaidien, sanpham.giacu, sanpham.giamoi 
                                     FROM sanpham 
                                     WHERE sanpham.giamoi = ?", [$search], 2);
    } else {
        $search = "%" . $temp . "%";
        $danhsachSP = DP::run_query("SELECT sanpham.masp, sanpham.tensp, sanpham.anhdaidien, sanpham.giacu, sanpham.giamoi 
                                     FROM sanpham 
                                     WHERE sanpham.tensp LIKE ?", [$search], 2);
    }
    $name = $_GET['search'];
} else if ($flag == 1) {
    $tensp = "%" . $_GET['tensanpham'] . "%";
    $giaban = "%" . $_GET['giaban'] . "%";
    $hangsp = "%" . $_GET['hangsp'] . "%";
	$chip="%".$_GET['chip']."%";

    $danhsachSP = DP::run_query("SELECT sanpham.masp, sanpham.tensp, sanpham.anhdaidien, sanpham.giacu, sanpham.giamoi 
                                 FROM sanpham
                                 INNER JOIN kho ON sanpham.masp = kho.masp
                                 WHERE sanpham.tensp LIKE ? 
                                 AND sanpham.giamoi LIKE ? 
                                 AND kho.nhacungcap LIKE ?
								 AND sanpham.mota LIKE ?", [$tensp, $giaban, $hangsp,$chip], 2);
    $name = $_GET['tensanpham'].", " . $_GET['giaban'] . "vnđ, " . $_GET['hangsp'].", ". $_GET['chip'];
}
?>
