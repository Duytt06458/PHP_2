<?php
    namespace App\Interfaces;

    interface ModelInterface{
        public function create(array $data);
        public function update($id, array $data);
        public function delete($id);
        public function getAll();//tên bảng
        public function read($id);
    }
?>