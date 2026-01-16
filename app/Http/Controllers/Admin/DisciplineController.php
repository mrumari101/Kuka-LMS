<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisciplineRequest;
use App\Models\Discipline;
use App\Services\DisciplineService;
use App\Traits\CommonFunctions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DisciplineController extends Controller
{
    protected $disciplineService;

    public function __construct(
        DisciplineService $disciplineService,
    ) {
        $this->disciplineService = $disciplineService;
    }

    public function index()
    {
        $disciplines = $this->disciplineService->all();

        return view('admin.disciplines.index', compact('disciplines'));
    }

    public function create()
    {

        return view('admin.disciplines.create');
    }

    public function store(DisciplineRequest $request)
    {

        try {
            $result = $this->disciplineService->create($request->all());
            return redirect()
                ->route('admin.disciplines.index')
                ->with('success', 'Discipline created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(Discipline $discipline)
    {
        return view('admin.disciplines.edit', compact('discipline'));
    }

    public function update(DisciplineRequest $request, $disciplineId)
    {
        $discipline = $this->disciplineService->get($disciplineId);

        try {
            $this->disciplineService->update($discipline, $request->all());

            return redirect()
                ->route('admin.disciplines.index')
                ->with('success', 'Discipline updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Discipline $discipline)
    {
        try {
            $this->disciplineService->delete($discipline);

            return redirect()->route('admin.disciplines.index')->with('success', 'Discipline deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

