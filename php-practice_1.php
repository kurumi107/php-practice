<?php
// Q1 変数と文字列
$name = '丸山';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5;
echo $num = $num * 4 . "\n";
echo  $num /= 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$today = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $today . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'mac' || $device === 'windows') 
{
    echo '使用OSは、' . $device . 'です。';
}
else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$age = ($age>=18)? '成人です。' : '未成年です。';
echo $age;

// Q6 配列
$pref = ['東京都', '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '神奈川県'];
echo $pref[2] . 'と' . $pref[5] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$pref = ['東京都' => '新宿区', '茨城県' => '水戸市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];
echo $pref['東京都'] . "\n";
echo $pref['神奈川県'] . "\n";
echo $pref['千葉県'] . "\n";
echo $pref['埼玉県'] . "\n";
echo $pref['栃木県'] . "\n";
echo $pref['群馬県'] . "\n";
echo $pref['茨城県'] . "\n";

// Q8 連想配列-2
$pref = ['東京都' => '新宿区', '茨城県' => '水戸市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];

    foreach ($pref as $x => $y)
{
    if($x === '埼玉県' && $y === 'さいたま市')
    {
        echo $x . 'の県庁所在地は' . $y . 'です。';
    }
}

// Q9 連想配列-3
$pref = ['東京都' => '新宿区', '茨城県' => '水戸市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市', '愛知県' => '名古屋市',
'大阪府' => '大阪市'];

foreach($pref as $x => $y)
{
    if($x === '東京都' || $x === '茨城県' || $x === '栃木県' || $x === '群馬県' || $x === '埼玉県' || $x === '千葉県' || $x === '神奈川県') 
    {
        echo $x . 'の県庁所在地は、' . $y . 'です。' . "\n";
    } else 
    {
        echo $x . 'は関東地方ではありません。' . "\n";
    }
    
}

// Q10 関数-1
function hello($name)
{
    echo $name . '、こんにちは。' . "\n";
}

hello('近藤さん');
hello('大橋さん');

// Q11 関数-2
function calcTaxInPrice($price)
{
    return $price . '円の商品の税込価格は' . $price *1.1 . '円です。'; 
}

echo $taxInPrice = calcTaxInPrice('1000');

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 === 0) 
    {
        return $num . 'は偶数です。' . "\n";
    } else
    {
        return $num . 'は奇数です。' . "\n";
    }

}

echo distinguishNum('11');
echo distinguishNum('24');

// Q13 関数とswitch文
function evaluateGrade($test)
{
switch ($test) {
    case 'A':
    case 'B':
        echo '合格です。' . "\n";
        break;

    case 'C':
        echo '合格ですが追加課題があります。' . "\n";
        break;

    case 'D':
        echo '不合格です。' . "\n";
        break;

    default:
        echo '判定不明です。講師に問い合わせてください。' . "\n";
        break;
}

}

echo evaluateGrade('A');
echo evaluateGrade('W');

?>