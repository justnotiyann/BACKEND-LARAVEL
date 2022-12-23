<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Quiz::get();
        // dd($results);
        return view('quiz.index', compact('results'));
    }

    public function store(Request $request)
    {
        Quiz::create([
            'quiz' => $request->quiz,
            'jawaban' => $request->jawaban,
            'tingkat_kesulitan' => $request->tingkat_kesulitan,
        ]);
        return back();
    }


    public function renderEdit(Request $request, $id)
    {
        $result = Quiz::find($id);
        return view('quiz.renderEdit', compact('result'));
    }


    public function update(Request $request, $id)
    {
        $value = [
            "quiz" => $request->quiz,
            "jawaban" => $request->jawaban,
            "tingkat_kesulitan" => $request->tingkat_kesulitan,
        ];
        Quiz::find($id)->update($value);
        return redirect('/quiz');
    }

    public function destroy(Request $request, $id)
    {
        Quiz::find($id)->delete();
        return back();
    }
}