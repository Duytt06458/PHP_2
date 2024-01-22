<?php
    namespace App\core;
    class Field{
        public const TYPE_TEXT = 'text';
        public const TYPE_PASSWORD = 'password';
        public const TYPE_NUMBER = 'number';

        public string $type;
        public string $attribute;
        
        public function __construct(string $attribute)
        {
            $this->type = self::TYPE_TEXT;
            $this->attribute = $attribute;
        }

        public function __toString(){

            return sprintf('
                <div class="form-group mb-5">
                    <lable>%s</lable>
                    <input type="%s" name="%s">
                </div>',
            $this->getLable($this->attribute),
            $this->type,
            $this->attribute);
        }

        public function passwordField(){
            $this->type = self::TYPE_PASSWORD;
            
            return $this;
        }

        public function lables(): array
        {
            return [
                'firstname' => 'First Name',
                'lastname' => 'Last Name',
                'email' => 'Your Email',
                'password' => "Password",
                'confirmPassword' => "Comfirm Password"
            ];
        }

        public function getLable($attribute){
            return $this->lables()[$attribute] ?? $attribute;
        }
    }
?>