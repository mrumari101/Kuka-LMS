<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisciplineRequest;
use App\Http\Requests\LevelRequest;
use App\Models\Discipline;
use App\Models\Level;
use App\Services\DisciplineService;
use App\Services\LevelService;
use App\Traits\CommonFunctions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LevelController extends Controller
{
    protected $levelService;
    protected $disciplineService;

    public function __construct(
        LevelService $levelService,
        DisciplineService $disciplineService,
    ) {
        $this->levelService = $levelService;
        $this->disciplineService = $disciplineService;
    }

    public function index()
    {
        $levels = $this->levelService->all();

        return view('admin.levels.index', compact('levels'));
    }

    public function create()
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.levels.create', compact('disciplines'));
    }

    public function store(LevelRequest $request)
    {

        try {
            $result = $this->levelService->create($request->all());
            return redirect()
                ->route('admin.levels.index')
                ->with('success', 'Level created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(Level $level)
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.levels.edit', compact('level','disciplines'));
    }


    public function update(LevelRequest $request, $levelId)
    {
        $level = $this->levelService->get($levelId);

        try {
            $this->levelService->update($level, $request->all());

            return redirect()
                ->route('admin.levels.index')
                ->with('success', 'Level updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Level $level)
    {
        try {
            $this->levelService->delete($level);

            return redirect()->route('admin.levels.index')->with('success', 'Level deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
