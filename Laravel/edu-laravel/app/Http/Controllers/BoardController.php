<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Board;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // * ----------------------
        // * 쿼리 빌더
        // * ----------------------
        // * SELECT
        $result = DB::select('select * from categories');
        $no = 5;
        // 키 지정
        // $result = DB::select('select * from categories where no = :no', ['no' => $no]);
        // 물음표 사용
        // $result = DB::select('select * from categories where no = ?', [$no]);

        $input = ['4', '7', '8']; // categories의 no 컬럼

        $result = DB::select(
                    'select b.bno, b.btitle, c.name
                    from boards b
                        inner join categories c
                        on b.category = c.no
                    where c.no = :no1
                    or c.no = :no2 
                    or c.no = :no3
                    order by b.bno
                    limit 5'
                    ,['no1' => $input[0], 'no2' => $input[1], 'no3' => $input[2]]);

        // inner join 다른 쿼리
        // $result = DB::select(
        //             'select b.bno, b.btitle, c.name
        //             from boards b, categories c
        //             where b.category = c.no
        //             and c.no in(?, ?, ?)
        //             order by b.bno
        //             limit 5'
        //             ,$input);


        // * INSERT: 결과에 따른 true or false 반환
        // $result = DB::insert(
        //                 'insert into boards (category, btitle, bcontents, created_at, updated_at) 
        //                 values (?, ?, ?, now(), now())',
        //                 ['1', 'gg', 'gg']);
        
        // laravel의 now() : config\app.php timezone 설정에 따름

        // * UPDATE: 영향받은 행 수 반환
        // $result = DB::update('update boards set btitle = ?, bcontents = ?, updated_at = now() where bno = (SELECT max(bno) FROM boards)', ['jj', 'jj']);

        // * DELETE: 영향받은 행 수 반환
        // $result = DB::delete('delete boards where bno = ?', [11]);


        // * ----------------------
        // * 쿼리 빌더 체이닝
        // object로 반환
        // * ----------------------
        $no ='5';
        // $result = DB::table('categories')->where('no', '=', $no)->get();

        // select * from categories where no = ? or no = ?
        $no1 = '5';
        $no2 = '8';
        // $result = DB::table('categoires')->where('no', $no)->orWhere('no', $no2)->get();

        // select * from categories where no in (?, ?)
        // $result = DB::table('categories')->whereIn('no', [$no1, $no2])->get();

        // select * from categories where no not in (?, ?)
        // $result = DB::table('categories')->whereNotIn('no', [$no1, $no2])->get();

        // select id, no, name from categories
        // $result = DB::table('categories')->select('id', 'no', 'name')->get();

        // select id, no, name from categories order by name desc
        // $result = DB::table('categories')->select('id', 'no', 'name')->orderBy('name', 'desc')->get();

        // ! 주의해서 사용
        // $result = DB::table('categories')->whereRaw('no = 5');

        // first() : limit 1과 비슷한 작동, 실패시 false 반환
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();
        
        // firstOrFail() : first()와 같은 동작을 하는데, 실패시 결과가 예외 발생
        // 엘로퀀트 모델 객체에서만 사용 가능
        // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOrFail();

        // * 집계 메소드 : count(), min(), max(), avg(), sum()
        // $result = DB::table('boards')->count(); // 결과의 레코드 수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환

        // * 트랜잭션
        // DB::beginTransaction(); // 트랜잭션 시작
        
        // DB::rollback(); // 롤백
        // DB::commit(); // 커밋
        
        // 카테고리가 활성화되어 있는 게시글의 카테고리 별 개수를 출력
        // 카테고리 번호, 카테고리 명, 개수
        $result = DB::table('boards')
                ->selectRaw('boards.category, categories.name, COUNT("categories.*") as cnt')
                // ->select('boards.category', 'categories.name', DB::raw('count(*) as cnt'))
                ->join('categories', 'boards.category', '=', 'categories.no')
                ->where('categories.active_flg', '1')
                ->groupBy('categories.name', 'boards.category') // select에서 출력할 컬럼을 모두 묶어줘야 함
                ->get();

        return var_dump($result);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
