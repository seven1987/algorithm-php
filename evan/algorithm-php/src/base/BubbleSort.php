<?php


namespace algorithm\base;


class BubbleSort implements IAlgorithm
{
    public function exec($data)
    {
        for ($i = 0; $i < count($data) ; $i++) {
           // 第二层为从$i+1的地方循环到数组最后
            for ($j = $i+1; $j < count($data); $j++) {
               // 比较数组中两个相邻值的大小
                if ($data[$i] > $data[$j]) {
                    $tem = $data[$i]; // 这里临时变量，存贮$i的值
                    $data[$i] = $data[$j]; // 第一次更换位置
                    $data[$j] = $tem; // 完成位置互换
                }
            }
        }
        return $data;
    }
}