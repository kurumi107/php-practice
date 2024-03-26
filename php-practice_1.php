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
else 
{
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 17;
echo ($age>=18)? '成人です。' : '未成年です。';


// Q6 配列
$pref =
[
    '東京都',
    '茨城県',
    '栃木県',
    '群馬県',
    '埼玉県',
    '千葉県',
    '神奈川県'
];
echo $pref[2] . 'と' . $pref[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$pref = 
[
    '東京都' => '新宿区', 
    '茨城県' => '水戸市', 
    '栃木県' => '宇都宮市', 
    '群馬県' => '前橋市', 
    '埼玉県' => 'さいたま市', 
    '千葉県' => '千葉市', 
    '神奈川県' => '横浜市'
];

foreach ($pref as $value)
{
    echo $value . "\n";
}


// Q8 連想配列-2
$pref = 
[
    '東京都' => '新宿区', 
    '茨城県' => '水戸市', 
    '栃木県' => '宇都宮市', 
    '群馬県' => '前橋市', 
    '埼玉県' => 'さいたま市', 
    '千葉県' => '千葉市', 
    '神奈川県' => '横浜市'
];

foreach ($pref as $key => $value)
{
    // 繰り返したい処理
    if($key === '埼玉県')
    {
        echo $key . 'の県庁所在地は' . $value . 'です。';
        break;
    } 
    

}

// Q9 連想配列-3
$pref = 
[
    '東京都' => '新宿区', 
    '茨城県' => '水戸市',
    '栃木県' => '宇都宮市', 
    '群馬県' => '前橋市', 
    '埼玉県' => 'さいたま市', 
    '千葉県' => '千葉市', 
    '神奈川県' => '横浜市', 
];

$pref['愛知県'] = '名古屋市';
$pref['大阪府'] = '大阪市';

foreach ($pref as $key => $value)
{
    if (
        $key === '東京都' ||
        $key === '茨城県' || 
        $key === '栃木県' || 
        $key === '群馬県' || 
        $key === '埼玉県' || 
        $key === '千葉県' || 
        $key === '神奈川県'
    ) {
        echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
    } else 
    {
        echo $key . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1
function hello($name) // 仮引数
{
    return $name . 'さん、こんにちは。' . "\n";
}

echo hello('近藤'); // 実引数
echo hello('大橋');

// Q11 関数-2

// 定義
function calcTaxInPrice($nonTaxPrice)
{
    return $nonTaxPrice . '円の商品の税込価格は' . $nonTaxPrice*1.1 . '円です。'; 
}

$price = 1000;
// 実行
$taxInPrice = calcTaxInPrice($price);//実引数
echo $taxInPrice;


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

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($test)
{
    switch ($test) {
        case 'A':
        case 'B':
            return '合格です。' . "\n";
            // break; // 条件分岐やループ処理（繰り返し構文）を終わらせる

        case 'C':
            return '合格ですが追加課題があります。' . "\n";
            // break;

        case 'D':
            return '不合格です。' . "\n";
            // break;

        default:
            return '判定不明です。講師に問い合わせてください。' . "\n";
            // break;
    }

    // echo "owatta";

}

echo evaluateGrade('A');
echo evaluateGrade('W');

?>