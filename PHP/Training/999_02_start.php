<?php
// 덱 생성
class Blackjack
{
	private $deck = array();
	private $user = array();
	private $dealer = array();

	// 덱 생성+셔플 함수
	public function deckmake()
	{
		$number = array("a", "2", "3", "4", "5", "6", "7", "8", "9", "10", "j", "q", "k");
		$shape = array( "♡", "◇", "♧", "♤");
		for ($i=0; $i < count($shape) ; $i++) 
		{
			for ($z=0; $z < count($number); $z++) 
			{
				array_push($this->deck, "$shape[$i]$number[$z]");
			}
		}
		shuffle($this->deck); // 덱 셔플
	}


// 한장 분배해서 유저 배열 안에 넣는 함수
public function hit_user()
{
	array_push($this->user, array_pop($this->deck));
}

// 한장 분배해서 딜러 배열 안에 넣는 함수
public function hit_dealer()
{
	array_push($this->dealer, array_pop($this->deck));
}

// 유저 손패 리턴해주는 함수
public function user_hand_return()
{
	return $this->user;
}

// 딜러 손패 리턴해주는 함수
public function dealer_hand_return()
{
	return $this->dealer;
}

// 유저 배열 합계 리턴
public function get_user_score()
{
	$sum = 0;
	foreach ($this->user as $val) 
	{
		if (mb_substr($val, 1) === "a")
		{
			$sum += 1;
		}
		else if (mb_substr($val, 1) === 'j' || mb_substr($val, 1) === 'q' || mb_substr($val, 1) === 'k')
		{
			$sum += 10;
		}
		else 
		{
			$sum += mb_substr($val, 1); 
		}
		
		if (mb_substr($val, 1) === "a" && $sum <= 11)
		{
			$sum += 10;
		}
	}
	return $sum;
}

// 딜러 배열 합계 리턴
public function get_dealer_score()
{
	$sum = 0;
	foreach ($this->dealer as $val) 
	{
		if (mb_substr($val, 1) === "a")
		{
			$sum += 1;
		}
		else if (mb_substr($val, 1) === 'j' || mb_substr($val, 1) === 'q' || mb_substr($val, 1) === 'k')
		{
			$sum += 10;
		}
		else 
		{
			$sum += mb_substr($val, 1); 
		}
		
		if (mb_substr($val, 1) === "a" && $sum <= 11)
		{
			$sum += 10;
		}
	}
	return $sum;
}

// 21 이상이나 블랙잭 거르는 함수


// 둘 다 21 이하일 때 결과 확인
function compare_sum()
{
	$user_sum = $this->get_user_score();
	$dealer_sum = $this->get_dealer_score();
	
	// echo "유저 합계 : ".$user_sum;
	// echo "\n";
	// echo "딜러 합계 : ".$dealer_sum;
	// echo "\n";

	if ( $user_sum > $dealer_sum ) 
	{
		echo "유저 승리";
	}
	else if ( $user_sum < $dealer_sum ) 
	{
		echo "딜러 승리";
	}
	else 
	{
		echo "무승부";
	}
}

}

$obj_black = new Blackjack;

// 덱 생성+섞기
$obj_black->deckmake();

// 유저 카드 2장 배분(배열에 넣음)
$obj_black->hit_user();
$obj_black->hit_user();

// 딜러 카드 2장 배분(배열에 넣음)
$obj_black->hit_dealer();
$obj_black->hit_dealer();

// 각자 점수
echo "유저 : ".$obj_black->user_hand_return()[0]." ".$obj_black->user_hand_return()[1];
echo "\n";
echo "딜러 : ".$obj_black->dealer_hand_return()[0]." ".$obj_black->dealer_hand_return()[1];
echo "\n";

// 21 초과나 블랙잭 확인
$obj_black->check_sum();
echo "\n";

// 각 패의 합 도출
// $obj_black->compare_sum();

?>