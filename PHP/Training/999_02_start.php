<?php
class Blackjack
{
	public $deck = array();
	public $number = array("a", "2", "3", "4", "5", "6", "7", "8", "9", "10", "j", "q", "k");
	// public $shape = array("d", "h", "s", "c");
	public $user = array();
	public $dealer = array();

	// 덱 생성+셔플 함수
	public function deckmake()
	{
		for ($i=0; $i < 4 ; $i++) 
		{
			for ($z=0; $z < count($this->number); $z++) 
			{
				array_push($this->deck, $this->number[$z]);
			}
		}
		shuffle($this->deck); // 덱 셔플
	}

	// 한장 분배해서 배열 안에 넣는 함수
	public function hit(&$array)
	{
		$z = array_pop($this->deck);
		array_push($array, $z);
	}

	// 배열 합계 리턴
	public function get_score($array)
	{
		foreach ($array as $key => $val) 
		{
			if ($val === 'j' || $val === 'q' || $val === 'k') 
			{
				$array[$key] = 10;
			}
			elseif ($val === 'a') 
			{
				$array[$key] = 11;
			}
			else 
			{
				$array[$key] = $val; 
			}
		}
		$sum = array_sum($array);
		return $sum;
	}


	// 합 비교
	public function compare_sum()
	{
		$user_sum = $this->get_score($this->user);
		$dealer_sum = $this->get_score($this->dealer);

		if ( $user_sum > 21 || $dealer_sum > 21 ) 
		{
			if ( $user_sum > 21 ) 
			{
				echo "딜러 이김";
			}
			elseif ( $dealer_sum > 21 ) 
			{
				echo "유저 이김";
			}
			else 
			{
				echo "비김";
			}
		}
		elseif ( $user_sum === 21 || $dealer_sum === 21 ) 
		{
			if ( $user_sum === 21 ) 
			{
				echo "유저 이김";
			}
			elseif ( $dealer_sum === 21 ) 
			{
				echo "딜러 이김";
			}
			else 
			{
				echo "비김";
			}
		}
		else
		{
			if ($dealer_sum < $user_sum) 
			{
				echo "유저 이김";
			}
			elseif ($dealer_sum > $user_sum) 
			{
				echo "딜러 이김";
			}
			elseif ($dealer_sum = $user_sum) 
			{
				echo "비김";
			}
		}
	}
}


echo "시작";
echo "\n";

// 덱 생성+섞기
$obj_black = new Blackjack;
$obj_black->deckmake($obj_black->deck);

// 유저 카드 2장 배분(배열에 넣음)
$obj_black->hit($obj_black->user);
$obj_black->hit($obj_black->user);
echo  "유저 손패 : ".$obj_black->user[0]." ".$obj_black->user[1];
echo "\n";

// 딜러 카드 2장 배분(배열에 넣음)
$obj_black->hit($obj_black->dealer);
$obj_black->hit($obj_black->dealer);
echo "딜러 손패 : ".$obj_black->dealer[0]." ".$obj_black->dealer[1];
echo "\n";

// 각 패의 합 도출
echo "유저 합 : ".$obj_black->get_score($obj_black->user);
echo "\n";
echo "딜러 합 : ".$obj_black->get_score($obj_black->dealer);
echo "\n";

// 첫 승패
$obj_black->compare_sum();

while(true) 
{
    print "\n";
    fscanf(STDIN, "%d\n", $input);        
    if($input === 0) 
    {
        break;
    }
    elseif($input === 1)
    {
        echo "카드 더 받기";
    }
    elseif($input === 2)
    {
        echo "카드 비교";
    }
    print "\n";
}
?>