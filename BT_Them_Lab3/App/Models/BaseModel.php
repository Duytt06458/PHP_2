<?php
    namespace App\Models;
    use App\Interfaces\ModelInterface;

    abstract class BaseModel implements ModelInterface{
        protected $table;
        public function __construct($table)
        {
            $this->table = $table;
        }

        public function create(array $data){
            //xử lý
        }

        public function update($id, array $data){
            //xử lý
        }

        public function delete($id){
            //xử lý
        }

        public function getAll(){
            //xử lý
            echo "get All <br>";
        }

        public function read($id){
            //xử lý
            echo "read <br>";
        }
    }
?>