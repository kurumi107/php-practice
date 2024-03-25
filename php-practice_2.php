<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
    
  if($i % 4 === 0 && $i % 5 === 0)
  {
      echo  'tic-tac' . "\n";    
  } elseif($i % 4 === 0) 
  {
      echo 'tic' . "\n";
  } elseif($i % 5 === 0) 
  {
      echo 'tac' . "\n";
  } else 
  {
      echo $i . "\n";
  }

}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],

];
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

foreach ($personalInfos as $index=>$value) 
{
    echo  $index+1 . '番目の' . $value['name'] . 'のメールアドレスは' . $value['mail'] . 'で、電話番号は' . $value['tel'] . 'です。' . "\n";
}

$ageList = 
[
    25, 
    30, 
    18
];
foreach($ageList as $index=>$value)
{
   $personalInfos[$index]['age'] = $value;
}

var_dump($personalInfos);
// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;
    

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120,'山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime();
echo $date->modify('-1 month')->format('Y-m-d');


$start = new DateTime('1992-04-25');
$end = new DateTime();
echo $interval = $end->diff($start)->format('あの日から%a日経過しました。');
?> 