<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChapterRequest;
use App\Http\Requests\ReadingBuilderRequest;
use App\Http\Requests\TopicRequest;
use App\Models\Chapter;
use App\Models\ReadingBuilder;
use App\Models\Topic;
use App\Services\ChapterService;
use App\Services\DisciplineService;
use App\Services\ReadingBuilderService;
use App\Services\TopicService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ReadingBuilderController extends Controller
{
    use ApiResponse;
    protected $readingBuilderService;
    protected $disciplineService;

    public function __construct(
        ReadingBuilderService $readingBuilderService,
        DisciplineService $disciplineService,
    ) {
        $this->readingBuilderService = $readingBuilderService;
        $this->disciplineService = $disciplineService;
    }

    public function index()
    {
        $readingBuilders = $this->readingBuilderService->all();
        return view('admin.reading-builders.index', compact('readingBuilders'));
    }

    public function create()
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.reading-builders.create', compact('disciplines'));
    }

    public function store(ReadingBuilderRequest $request)
    {
//        echo '<pre>';
//        print_r($request->all());
//        die;
        try {
            $result = $this->readingBuilderService->create($request->all());
            return redirect()
                ->route('admin.reading-builders.index')
                ->with('success', 'Reading builder created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(ReadingBuilder $readingBuilder)
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.reading-builders.edit', compact('readingBuilder','disciplines'));
    }


    public function update(ReadingBuilderRequest $request, $readingBuilderId)
    {
        $readingBuilder = $this->readingBuilderService->get($readingBuilderId);

        try {
            $this->readingBuilderService->update($readingBuilder, $request->all());

            return redirect()
                ->route('admin.reading-builders.index')
                ->with('success', 'Reading builder updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(ReadingBuilder $readingBuilder)
    {
        try {
            $this->readingBuilderService->delete($readingBuilder);

            return redirect()->route('admin.reading-builders.index')->with('success', 'Reading builder deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
