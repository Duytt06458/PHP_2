<?php
    function tinhTuoi($ngaySinh) {
        // Tạo đối tượng DateTime cho ngày sinh
        $ngaySinh = new DateTime($ngaySinh);
    
        // Lấy ngày hiện tại
        $ngayHienTai = new DateTime();
    
        // Tính khoảng thời gian giữa hai ngày
        $khoangThoiGian = $ngaySinh->diff($ngayHienTai);
    
        // Lấy số ngày từ khoảng thời gian
        $soNgay = $khoangThoiGian->days;
    
        // Tính số tuổi
        $soTuoi = floor($soNgay / 365);
        
        return $soTuoi;
    }
    
    $ngaySinh = '2003-07-03';
    $tuoi = tinhTuoi($ngaySinh);
    
    echo "Ngày sinh: $ngaySinh, Tuổi: $tuoi tuổi";
    
?>