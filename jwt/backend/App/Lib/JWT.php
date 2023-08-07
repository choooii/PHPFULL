<?php
namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT 
{
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';

    // 에러 메시지(보통은 설정파일에 작성)
    protected $error_base = [
            "E01"   => "Not set Token"
            ,"E02"  => "Unknown form Token"
            ,"E03"  => "Unauthorization Token"
            ,"E04"  => "Expired Token"
            ,"E99"  => "System Error"
        ];

    /*
        JWT 생성
    */
    public function createJWT(Array $data) {
        Log::debug("-------- create JWT start --------");
        
        // Header 작성
        $header_json = json_encode([
            'alg' => $this->alg,
            'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);
        Log::debug("-------- header : " . $header);
        
        // payload 작성
        $iat = time();
        $exp = $iat + 60;
        $payload_json = json_encode([
            'id'   => $data['id'],
            'iat'  => $iat,
            'exp'  => $exp
        ]);
        $payload = base64_encode($payload_json);
        Log::debug("-------- payload : " . $payload);
        
        // signature 작성
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug("-------- signature : " . $signature);
        
        
        Log::debug("-------- create JWT end --------");
        return base64_encode($header.".".$payload.".".$signature);
    }
    
    public function chkToken($token) {
        Log::debug("-------- chkToken start --------");
        Log::debug("token : ".$token);

        try {
            // token 유무 체크
            if(empty($token)) {
                throw new Exception("E01");
            }

            // token 디코딩
            $decode_token = base64_decode($token);
            Log::debug("decode_token : ".$decode_token);
            
            // 토큰 분리
            $arr_token = explode(".", $decode_token);


            // 토큰 형태 체크
            if ( count($arr_token) !== 3 ) {
                throw new Exception("E02");
            }
            
            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];
            
            // 토큰 유효시간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if(time() > $arr_payload->exp) {
                throw new Exception('E04');
            }

            Log::debug("signature : ".$signature);
            
            // 검증용 시그니처 생성
            $verify =  hash($this->alg, $header.$payload.$this->secret_key);
            Log::debug("verify : ".$verify);
            
            if ($signature !== $verify) {
                throw new Exception('E03');
            }
        } catch (Throwable $e) { // Throwable: php 7버전 이상부터 사용 가능
            return $this->create_error_info($e);
        } finally {
            Log::debug("-------- chkToken end --------");
        }

        return "";
    }

    /*
    @ 메소드명 : create_error_info
    @ 기능     : 에러 정보 배열 작성
    @ 파라미터 : String     $error_code
    @ 리턴     : Array      $error_info
    */
    public function create_error_info($error_code) {
        // 예외 코드 확인
        $code = array_key_exists($error_code->getMessage(), $this->error_base) ? $error_code->getMessage() : 'E99';

        $error_info = [
            "code"  => $code
            ,"mgs"  => $this->error_base[$code]
        ];

        Log::debug("error : ".$code);
        return $error_info;
    }
}
