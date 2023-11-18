<?php

namespace App\Http\Controllers;



class CalcController extends Controller
{
    public function result($num1, $operator, $num2)
    {
        switch ($operator) {
            case 'addition':
                $calc = $num1 + $num2;
                return view('calcs.addition', ['calc' => $calc]);
                break;
            case 'subtraction':
                $calc = $num1 - $num2;
                return view('calcs.subtraction', ['calc' => $calc]);

                break;
            case 'multiplication':
                $calc = $num1 * $num2;
                return view('calcs.multiplication', ['calc' => $calc]);

                break;
            case 'division':
                if ($num2 != 0) {
                    $calc = $num1 / $num2;
                    return view('calcs.division', ['calc' => $calc]);
                } else {
                    // ゼロでの割り算は避けるか、エラー処理を追加するなど
                    // ここではエラーメッセージを表示
                    echo "Error: Division by zero.";
                }
                break;
                

            default:
                // 未知の演算子に対するエラー処理
                echo "正しい演算子を入力してください";
        }
        
}
}
