<?php
  //C006 ハイスコアランキング
  $nums = str_replace("\n", "", explode(" ", fgets(STDIN)));    //[0]...パラメータ数 [1]...人数 [2]...表示数
  $paras = str_replace("\n", "", explode(" ", fgets(STDIN)));
  for($i = 0; $i < $nums[1]; $i++){    //人数分読み込んだ時点でスコアに加算
      $score[$i] = 0;
      $shoji = str_replace("\n", "", explode(" ", fgets(STDIN)));  //それぞれのアイテム所持数
      for($j = 0; $j < $nums[0]; $j++){    //所持数×1個の点数
          $score[$i] += $paras[$j] * $shoji[$j];
      }
  }
  rsort($score);    //降順にソート
  for($i = 0; $i < $nums[2]; $i++){    //ベスト分の表示
      echo round($score[$i])."\n";
  }
?>
