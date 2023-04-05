<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 드로우
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한번 사용한 카드는 다시 사용할 수 없음

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
	public $deck = array();
	public $number = array("a", "2", "3", "4", "5", "6", "7", "8", "9", "10", "j", "q", "k");
	public $shape = array("d", "h", "s", "c");
	public $user = array();
	public $dealer = array();

	// 덱 생성+셔플 함수
	public function deckmake(&$array)
	{
		for ($i=0; $i < 4 ; $i++) 
		{
			for ($z=0; $z < 13; $z++) 
			{
				array_push($array, $this->shape[$i].$this->number[$z]);
			}
		}
		shuffle($array); // 덱 셔플

		return $array;
	}

	// 한장 분배하는 함수
	public function hit(&$array)
	{
		$z = array_pop($this->deck);
		array_push($array, $z);

		return $array;
	}

	//배열 내 문자를 계산할 수 있는 숫자로 변경
	public function str_into_int(&$array)
	{
		foreach ($array as $key => $val)
		{
			if (!is_numeric(mb_substr($val, 1))) 
			{
				$array[$key] = 10;
			}
			else 
			{
				$array[$key] = mb_substr($val, 1);
			}
		}

		return $array;
	}



}

$obj_black = new Blackjack;

// 덱 생성
$obj_black->deckmake($obj_black->deck);

// 유저 카드 2장 배분 후 숫자만 배열에 넣음
$obj_black->hit($obj_black->user); // 1장
$obj_black->hit($obj_black->user); // 2장

// 딜러 카드 2장 배분 후 숫자 배열에 넣음
$obj_black->hit($obj_black->dealer); // 1장
$obj_black->hit($obj_black->dealer); // 2장

// 각자 분배된 카드와 숫자 배열 확인
echo "유저 : ".$obj_black->user[0]." ".$obj_black->user[1];
echo "\n";
echo "딜러 : ".$obj_black->dealer[0]." ".$obj_black->dealer[1];
echo "\n";

// 각각 배열 숫자로 변환
$obj_black->str_into_int($obj_black->user); // 유저 배열 변경
$obj_black->str_into_int($obj_black->dealer); // 딜러 배열 변경

// print_r($obj_black->user);
// print_r($obj_black->dealer);

// 합에 따른 결과 배정
$user_sum = array_sum($obj_black->user); // 유저 합계
$dealer_sum = array_sum($obj_black->dealer); // 딜러 합계


?>