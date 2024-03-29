<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use LDAP\Result;

class AuthController extends Controller
{
    protected $obj_jwt;

    public function __construct()
    {
        $this->obj_jwt = new JWT();
    }


    public function issueToken(Request $req) 
    {
        Log::debug("-------- issueToken start --------");
        Log::debug("id : ".$req->id);
        // 유효성 검사
        
        // DB에서 유저 검색
        
        // JWT 생성
        $token = $this->obj_jwt->createJWT($req->only('id'));
        Log::debug("token : ".$token);
        Log::debug("-------- issueToken end --------");

        $response = [
            'errflg' => '0',
            'token'  => $token
        ];

        return response(json_encode($response), 200);
    }

    /*
        토큰 검증
    */
    public function chk(Request $req) {
        $token = $req->header('Authorization');

        $res = [
            'errflg'  => '0',
            'msg'     => 'OK'
        ];
        $status = 200;

        $result = $this->obj_jwt->chkToken($token);
        
        if ( is_array($result) ) {
            $res = [
                'errflg'         => '1',
                'error_info'     => [
                    'code'  => $result['code'],
                    'mgs'   => $result['mgs']
                ]
            ];
            $status = 401;
        }

        return response(json_encode($res), $status);
    }
}
