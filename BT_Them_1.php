1.Interface:
Interface hay còn gọi là giao diện trong PHP là một khuôn mẫu, giúp ta tạo khung cho một hoặc nhiều đối tượng.
Nếu coi PHP là bản thiết kế cho các đối tượng thì một giao diện là bản thiết kế cho các lớp. 
Bất kỳ lớp nào implement một interface đã cho sẽ có cùng các hành vi về những gì nó có thể được gọi, cách nó được gọi và kết quả nó trả về.
<?php
// VÍ DỤ
interface Move 
{
    function run();
}

// lớp Dog kế thừa interface Move 
class Dog implements Move
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con chó chạy bằng 4 chân";
    }
}

// lớp Car kế thừa interface Move  
class Car implements Move
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Xe hơi chạy bằng 4 bánh";
    }
}
?>

2. Abstract:
Lớp abstract là một lớp có ít nhất một phương thức abstract. 
Các lớp khác khi kế thừa lớp trừu tượng này sẽ phải định nghĩa lớp trừu tượng ấy. Một class chỉ có thể kế thừa một lớp trừu tượng.
<?php
// VÍ DỤ
abstract class Animal
{
    protected $name;
    
    abstract function run();  // phuong thuc truu tuong voi khai báo với tu khoa abstract và không có thân hàm
}

// lớp Cat kế thừa từ lớp trừu tượng Animal  
class Cat extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con chó chạy bằng 4 chân";
    }
}

// lớp Person kế thừa từ lớp trừu tượng Animal 
class Person extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con người chạy bằng 2 chân";
    }
}
