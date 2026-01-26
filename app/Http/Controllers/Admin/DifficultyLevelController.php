<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DifficultyLevelRequest;
use App\Http\Requests\DisciplineRequest;
use App\Models\DifficultyLevel;
use App\Models\Discipline;
use App\Services\DifficultyLevelService;
use App\Services\DisciplineService;
use App\Traits\CommonFunctions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DifficultyLevelController extends Controller
{
    protected $difficultyLevelService;

    public function __construct(
        DifficultyLevelService $difficultyLevelService,
    ) {
        $this->difficultyLevelService = $difficultyLevelService;
    }

    public function index()
    {
        $difficultyLevels = $this->difficultyLevelService->all();

        return view('admin.difficulty-levels.index', compact('difficultyLevels'));
    }

    public function create()
    {

        return view('admin.difficulty-levels.create');
    }

    public function store(DifficultyLevelRequest $request)
    {

        try {
            $result = $this->difficultyLevelService->create($request->all());
            return redirect()
                ->route('admin.difficulty-levels.index')
                ->with('success', 'Difficulty level created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(DifficultyLevel $difficultyLevel)
    {
        return view('admin.difficulty-levels.edit', compact('difficultyLevel'));
    }

    public function update(DifficultyLevelRequest $request, $difficultyLevelId)
    {
        $difficultyLevel = $this->difficultyLevelService->get($difficultyLevelId);

        try {
            $this->difficultyLevelService->update($difficultyLevel, $request->all());

            return redirect()
                ->route('admin.difficulty-levels.index')
                ->with('success', 'Difficulty level updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(DifficultyLevel $difficultyLevel)
    {
        try {
            $this->difficultyLevelService->delete($difficultyLevel);

            return redirect()->route('admin.difficulty-levels.index')->with('success', 'Difficulty level deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

