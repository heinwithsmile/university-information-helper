<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\QARequests;
use App\Query;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.add-question-answer', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(QARequests $request)
    {
        $files = $request->file('file');

        $filename = uniqid() . '_' . $files->getClientOriginalName();

        $files->move(public_path() . '/uploads/', $filename);


        Query::create([
            'questions' => $request->get('question'),
            'category_id' => $request->get('category_id'),
            'keyword1' => $request->get('keyone'),
            'keyword2' => $request->get('keytwo'),
            'answers' => $request->get('answer'),
            'answer_file' => $filename,
        ]);

        return redirect('admin/add')->with('status', 'Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function questions()
    {

        $categories = Category::all();
        if (request()->category) {

            $questions = Query::where('category_id', request()->category)->get();
//
            $categoryName = optional($categories->where('id', request()->category)->first())->categoryName;
        }else{

            $questions = Query::all();
//            var_dump($questions);die;
            $categoryName = '';
        }
        return view('question')->with([

            'categories' => $categories,
            'questions' => $questions,
            'categoryName' => $categoryName,

        ]);


    }


}
