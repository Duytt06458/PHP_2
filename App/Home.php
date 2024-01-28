<?php
    namespace App;
    const STORAGE_PATH = 'src';
    class Home{
        public static function index(): string{
            
            return <<<FORM
            <div class="container mt-5">
            <form action="/upload" method="post" enctype="multipart/form-data" class="mb-3">
                <div class="mb-3">
                    <input type="file" class="form-control" id="receipt" name="receipt">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            FORM;
        }

        public function upload(){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            //Lấy tên tệp
            $oldName = $_FILES['receipt']['name'];

            //Lấy đuôi tệp
            $extension = pathinfo($oldName, PATHINFO_EXTENSION);

            //Tên file mới
            $newName = date('Y-m-d_H-i-s').'.'.$extension;

            //Nơi lưu tệp tải lên
            $filePath = STORAGE_PATH.'/'.$newName;
            
            move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);
            echo "<pre>";
            var_dump(pathinfo($filePath));
            echo "</pre>";
        }
    }
?>