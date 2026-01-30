<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\ReadingRequest;
use App\Models\Question;
use App\Models\Reading;
use App\Services\DifficultyLevelService;
use App\Services\DisciplineService;
use App\Services\QuestionService;
use App\Services\ReadingService;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class QuestionController extends Controller
{
    use ApiResponse;
    protected $questionService;
    protected $disciplineService;
    protected $difficultyLevelService;

    public function __construct(
        QuestionService $questionService,
        DisciplineService $disciplineService,
        DifficultyLevelService $difficultyLevelService,
    ) {
        $this->questionService = $questionService;
        $this->disciplineService = $disciplineService;
        $this->difficultyLevelService = $difficultyLevelService;
    }

    public function index()
    {

        $questions = $this->questionService->all();
        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        $disciplines = $this->disciplineService->all();
        $difficultyLevels = $this->difficultyLevelService->all();
        return view('admin.questions.create', compact('disciplines','difficultyLevels'));
    }

    public function store(\Illuminate\Http\Request $request)
    {

//        echo '<pre>';
//        print_r($request->all());
//        die;


        try {
            $result = $this->questionService->create($request->all());
            return redirect()
                ->route('admin.questions.index')
                ->with('success', 'Question created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(Question $question)
    {
        $disciplines = $this->disciplineService->all();
        $difficultyLevels = $this->difficultyLevelService->all();
        return view('admin.questions.edit', compact('question','disciplines','difficultyLevels'));
    }


    public function update(QuestionRequest $request, $questionId)
    {
        $question = $this->questionService->get($questionId);
        try {
            $this->questionService->update($question, $request->all());
            return redirect()
                ->route('admin.questions.index')
                ->with('success', 'Question updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Question $question)
    {
        try {
            $this->questionService->delete($question);

            return redirect()->route('admin.questions.index')->with('success', 'Question deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
