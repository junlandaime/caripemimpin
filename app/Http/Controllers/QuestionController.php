<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('region')->paginate(10);
        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('admin.questions.create', compact('regions'));
    }

    public function store(QuestionRequest $request)
    {
        $data = $request->validated();
        if ($request->has('options')) {
            $data['options'] = json_encode($request->options);
        }

        Question::create($data);
        return redirect()->route('admin.questions.index')->with('success', 'Question created successfully');
    }

    public function edit(Question $question)
    {
        $regions = Region::all();
        return view('admin.questions.edit', compact('question', 'regions'));
    }

    public function update(QuestionRequest $request, Question $question)
    {
        $data = $request->validated();
        if ($request->has('options')) {
            $data['options'] = json_encode($request->options);
        }

        $question->update($data);
        return redirect()->route('admin.questions.index')->with('success', 'Question updated successfully');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index')->with('success', 'Question deleted successfully');
    }
}
