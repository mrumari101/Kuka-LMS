<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChapterRequest;
use App\Http\Requests\LevelRequest;
use App\Models\Chapter;
use App\Models\Level;
use App\Services\ChapterService;
use App\Services\DisciplineService;
use App\Services\LevelService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    use ApiResponse;
    protected $chapterService;
    protected $disciplineService;

    public function __construct(
        ChapterService $chapterService,
        DisciplineService $disciplineService,
    ) {
        $this->chapterService = $chapterService;
        $this->disciplineService = $disciplineService;
    }

    public function index()
    {
        $chapters = $this->chapterService->all();

        return view('admin.chapters.index', compact('chapters'));
    }

    public function create()
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.chapters.create', compact('disciplines'));
    }

    public function store(ChapterRequest $request)
    {
        try {
            $result = $this->chapterService->create($request->all());
            return redirect()
                ->route('admin.chapters.index')
                ->with('success', 'Chapter created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(Chapter $chapter)
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.chapters.edit', compact('chapter','disciplines'));
    }


    public function update(ChapterRequest $request, $chapterId)
    {
        $chapter = $this->chapterService->get($chapterId);

        try {
            $this->chapterService->update($chapter, $request->all());

            return redirect()
                ->route('admin.chapters.index')
                ->with('success', 'Chapter updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Chapter $chapter)
    {
        try {
            $this->chapterService->delete($chapter);

            return redirect()->route('admin.chapters.index')->with('success', 'Chapter deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function ChaptersBy(Request $request)
    {

        $request->validate([
            'level_id' => 'required|exists:levels,id',
        ]);

        $message = 'unknow server error';
        $errorCode = 400;
        $data = [];
        try {
            $levelId = $request->level_id;
            $data['chapters'] = $this->chapterService->chaptersBy($levelId);
            $errorCode = 200;
            $message = 'Successfully data fetched';
        } catch (\Exception $e) {
            $message = 'Operation failed: '.$e->getMessage();
        }

        $response = $this->apiResponse($data, $message, $errorCode);
        $response = $this->setResponseHeaders($response);

        return $response;
    }
}
