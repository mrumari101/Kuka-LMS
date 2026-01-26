<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReadingRequest;
use App\Models\Reading;
use App\Services\DisciplineService;
use App\Services\ReadingService;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\DB;


class ReadingController extends Controller
{
    use ApiResponse;
    protected $readingService;
    protected $disciplineService;

    public function __construct(
        ReadingService $readingService,
        DisciplineService $disciplineService,
    ) {
        $this->readingService = $readingService;
        $this->disciplineService = $disciplineService;
    }

    public function index()
    {
        $readings = $this->readingService->all();
        return view('admin.readings.index', compact('readings'));
    }

    public function create()
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.readings.create', compact('disciplines'));
    }

    public function store(ReadingRequest $request)
    {

        try {
            $result = $this->readingService->create($request->all());
            return redirect()
                ->route('admin.readings.index')
                ->with('success', 'Reading created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(Reading $reading)
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.readings.edit', compact('reading','disciplines'));
    }


    public function update(ReadingRequest $request, $readingId)
    {
        $reading = $this->readingService->get($readingId);
        try {
            $this->readingService->update($reading, $request->all());
            return redirect()
                ->route('admin.readings.index')
                ->with('success', 'Reading updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Reading $reading)
    {
        try {
            $this->readingService->delete($reading);

            return redirect()->route('admin.readings.index')->with('success', 'Reading deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
