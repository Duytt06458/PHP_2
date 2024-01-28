<?php
    namespace App;
    use App\core\Database;
    
    class Login{
        public $email, $pwd, $db;

        public function  __construct(){
            $this->db = new Database();
        }
        public function login(){
            if(isset($_SESSION['user'])){
                $user_name = $_SESSION['user']['user_name'];

                return "{$user_name} <a href='/logout'>Đăng xuất</a>";
            }else{
                return '
                    <div class="container">
                        <form action="/loginUser" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required pattern="^.{6,}">
                            </div>
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">Đăng nhập</button>
                        </form>
                    </div>
                ';
            }
        }
        public function loginUser(){
            $this->email = $_POST['email'];
            $this->pwd = $_POST['password'];
            if($this->emptyInput() == false){
                header("location:/register?error=emptyInput");
                exit();
            }

            if($this->invalidEmail() == false){
                header("location:/register?error=email");
                exit();
            }

            $this->getUser($this->email, $this->pwd);
        }

        public function emptyInput() {
            if (empty($this->email) || empty($this->pwd)) {
                return false;
            }
            return true;
        }
    
        public function invalidEmail() {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
            return true;
        }

        public function logout(){
            session_unset();
            session_destroy();
            header("location:/");
        }

        protected function getUser($email, $pwd){
            $stmt = $this->db->connect()->query("SELECT * FROM accounts WHERE email='{$email}'");
            
            if($stmt->num_rows == 0){
                $stmt = null;
                header("location:login?error=usernotfound");
                exit();
            }else{
                $user = $stmt->fetch_array(MYSQLI_ASSOC);
    
                $_SESSION['user'] = $user;

                header("location:login");
                exit();
            }
            
        }
    }
?>