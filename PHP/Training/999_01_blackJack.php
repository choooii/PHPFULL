<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

// 1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
// 2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
// 4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
// 5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 비김
// 6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
// 7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
// 8. 한번 사용한 카드는 다시 사용할 수 없음

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

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
				// array_push($this->deck, $number[$z]);
			}
		}
		shuffle($this->deck); // 덱 셔플
	}

	// 한장 분배해서 유저 배열 안에 넣는 함수
	public function hit_user()
	{
		$z = array_pop($this->deck);
		array_push($this->user, $z);
	}

	// 한장 분배해서 딜러 배열 안에 넣는 함수
	public function hit_dealer()
	{
		$z = array_pop($this->deck);
		array_push($this->dealer, $z);
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
		foreach ($this->user as $key => $val) 
		{
			if (mb_substr($val, 1) === "a")
			{
				$this->user[$key] = 1;
			}
			else if (mb_substr($val, 1) === 'j' || mb_substr($val, 1) === 'q' || mb_substr($val, 1) === 'k')
			{
				$this->user[$key] = 10;
			}
			else 
			{
				$this->user[$key] = mb_substr($val, 1); 
			}
			$sum = array_sum($this->user);
			
			if ($val === "a" && $sum <= 11)
			{
				$sum += 10;
			}
		}
		return $sum;
	}

	// 딜러 배열 합계 리턴
	public function get_dealer_score()
	{
		foreach ($this->dealer as $key => $val) 
		{
			if (mb_substr($val, 1) === "a")
			{
				$this->dealer[$key] = 1;
			}
			else if (mb_substr($val, 1) === 'j' || mb_substr($val, 1) === 'q' || mb_substr($val, 1) === 'k')
			{
				$this->dealer[$key] = 10;
			}
			else 
			{
				$this->dealer[$key] = mb_substr($val, 1); 
			}
			$sum = array_sum($this->dealer);
			
			if (mb_substr($val, 1) === "a" && $sum <= 11)
			{
				$sum += 10;
			}
		}
		return $sum;
	}


	// 합 비교
	public function compare_sum()
	{
		$user_sum = $this->get_user_score();
		$dealer_sum = $this->get_dealer_score();
		
		echo "유저 합계 : ".$user_sum;
		echo "\n";
		echo "딜러 합계 : ".$dealer_sum;
		echo "\n";

		if ( $user_sum === $dealer_sum )
		{
			echo "비김";
		}
		else if ( $user_sum <= 21 && $dealer_sum <= 21 ) 
		{
			if ( $user_sum > $dealer_sum ) 
			{
				echo "유저 이김";
			}
			else 
			{
				echo "딜러 이김";
			}
		}
		else if ( $user_sum <= 21 )
		{
			echo "유저 이김";
		}
		else
		{
			echo "딜러 이김";
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

// echo "유저 합계: ".$obj_black->get_user_score();
// echo "딜러 합계: ".$obj_black->get_dealer_score();

// 각 패의 합 도출
$obj_black->compare_sum()


?>