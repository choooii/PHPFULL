<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * 리소스의 목록 페이지
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Tasks.index!!";
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Tasks.create!!";
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성 처리
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $arrOnly = $request->only(['id', 'pw']);

        // $result = 'id : '.$arrOnly['id']."<br>pw : ".$arrOnly['pw'];
        // $result = $request->id.'<br>오류는 안날거야'.$request->pw;
        $result = 'id : '.$request->get('id').'<br>pw : '.$request->get('pw');

        return $result;
    }

    /**
     * Display the specified resource.
     * 리소스 조회 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Tasks.show!! : ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Tasks.edit!! : ".$id;
    }

    /**
     * Update the specified resource in storage.
     * 리소스 수정 처리
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump($request);
        $arrAll = $request->all(); // 사용자가 전달하는 모든 데이터를 획득(배열)
        $arrOnly = $request->only(['id', 'name']); // 사용자가 전달한 데이터 중 해당하는 데이터만 획득(배열)
        $oneGet = $request->get('pw'); // 사용자가 전달한 데이터 중 해당하는 데이터의 값만 획득

        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);

        return "Tasks.update!! : ".$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Tasks.destroy!! : ".$id;
    }
}
