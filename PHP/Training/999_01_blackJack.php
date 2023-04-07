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
		$number = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
		$shape = array( "♥", "◆", "♣", "♠");
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

	public function setgame()
	{
		// 덱 생성
		$this->deckmake();

		// 패 2번 돌리기
		for ($i=0; $i < 2 ; $i++)
		{
			$this->hit_dealer();
			$this->hit_user();
		}

		// 첫 패 점수 공개
		echo "유저 : ".$this->user_hand_return()[0]." ".$this->user_hand_return()[1];
		echo "\n";
		echo "딜러 : ".$this->dealer_hand_return()[0]." ".$this->dealer_hand_return()[1];
		echo "\n";
	}

	// 유저 배열 합계 리턴
	public function get_user_score()
	{
		$sum = 0;
		foreach ($this->user as $val)
		{
			if (mb_substr($val, 1) === "A")
			{
				$sum += 1;
			}
			else if (mb_substr($val, 1) === 'J' || mb_substr($val, 1) === 'Q' || mb_substr($val, 1) === 'K')
			{
				$sum += 10;
			}
			else
			{
				$sum += mb_substr($val, 1);
			}

			if (mb_substr($val, 1) === "A" && $sum <= 11)
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
			if (mb_substr($val, 1) === "A")
			{
				$sum += 1;
			}
			else if (mb_substr($val, 1) === 'J' || mb_substr($val, 1) === 'Q' || mb_substr($val, 1) === 'K')
			{
				$sum += 10;
			}
			else
			{
				$sum += mb_substr($val, 1);
			}

			if (mb_substr($val, 1) === "A" && $sum <= 11)
			{
				$sum += 10;
			}
		}
		return $sum;
	}

	// 유저 손패 출력
	public function print_user_hand()
	{
		echo "유저 : ".implode(", ", $this->user);
	}

	// 유저 손패 출력
	public function print_dealer_hand()
	{
		echo "딜러 : ".implode(", ", $this->dealer);
	}


	// 첫 손패 배분 후 21초과나 블랙잭 체크
	public function check_sum()
	{
		$array_sum
					= array(
						"유저" => $this->get_user_score()
						,"딜러" => $this->get_dealer_score()
						);

		foreach ($array_sum as $key => $val)
		{
			if ( $val > 21 )
			{
				echo $key." : burst\n";
				return true;
			}
			else if ( $val === 21 )
			{
				echo $key." : 블랙잭\n";
				return true;
			}
		}
	}

	// 딜러 합계 17 이하일때까지 카드 배분
	public function dealer_17()
	{
		while ( $this->get_dealer_score() < 17 ) 
		{
			$this->hit_dealer();
			if( $this->get_dealer_score() > 21 ) 
			{
				return false;
			}
		}
		return true;
	}

	// 합 비교
	public function compare_sum()
	{
	$user_sum = $this->get_user_score();
	$dealer_sum = $this->get_dealer_score();

	if ( $user_sum === $dealer_sum )
	{
		if( count($this->user) < count($this->dealer) )
		{
			echo "유저 카드 수 : ".count($this->user);
			echo "\n";
			echo "딜러 카드 수 : ".count($this->dealer);
			echo "\n";
			echo "유저 승리";
		}
		else if ( count($this->user) > count($this->dealer) )
		{
			echo "유저 카드 수 : ".count($this->user);
			echo "\n";
			echo "딜러 카드 수 : ".count($this->dealer);
			echo "\n";
			echo "딜러 승리";
		}
		else 
		{
			echo "유저 카드 수 : ".count($this->user);
			echo "\n";
			echo "딜러 카드 수 : ".count($this->dealer);
			echo "\n";
			echo "비김";
		}
	}
	else if ( $user_sum <= 21 && $dealer_sum <= 21 )
	{
		if ( $user_sum > $dealer_sum )
		{
			echo "유저 승리";
		}
		else
		{
			echo "딜러 승리";
		}
	}
	}




}


// $input = null; // input 초기화
// while( !( $input === 0 ) ) 

// {
$obj_black = new Blackjack;
// 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
echo '------------------- 게임 시작 -------------------';
print "\n";
$obj_black->setgame();
print "\n";


if ($obj_black->check_sum())
{
	echo "\n[최종 손패]\n";
	echo $obj_black->print_user_hand()."\n";
	echo $obj_black->print_dealer_hand()."\n\n";
}
else 
{
	echo "[1] : 카드 더 받기\n[2] : 카드 비교\n[O] : 게임 종료\n";
	echo "------------------------------------------------\n";

	while(true) 
	{
		fscanf( STDIN, "%d\n", $input );
		if( $input === 1 ) 
		{
			echo "1 입력\n";
		} 
		else if( $input === 2 ) 
		{
			echo "\n".$obj_black->compare_sum();
		} 
		else if( $input === 0 ) 
		{ 
			break;
		}
		echo "------------------------------------------------\n";
	}
}

// }

?>