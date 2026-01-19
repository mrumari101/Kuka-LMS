<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChapterRequest;
use App\Http\Requests\TopicRequest;
use App\Models\Chapter;
use App\Models\Topic;
use App\Services\ChapterService;
use App\Services\DisciplineService;
use App\Services\TopicService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    use ApiResponse;
    protected $topicService;
    protected $disciplineService;

    public function __construct(
        TopicService $topicService,
        DisciplineService $disciplineService,
    ) {
        $this->topicService = $topicService;
        $this->disciplineService = $disciplineService;
    }

    public function index()
    {
        $topics = $this->topicService->all();
        return view('admin.topics.index', compact('topics'));
    }

    public function create()
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.topics.create', compact('disciplines'));
    }

    public function store(TopicRequest $request)
    {
        try {
            $result = $this->topicService->create($request->all());
            return redirect()
                ->route('admin.topics.index')
                ->with('success', 'Topic created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(Topic $topic)
    {
        $disciplines = $this->disciplineService->all();
        return view('admin.topics.edit', compact('topic','disciplines'));
    }


    public function update(TopicRequest $request, $topicId)
    {
        $topic = $this->topicService->get($topicId);

        try {
            $this->topicService->update($topic, $request->all());

            return redirect()
                ->route('admin.topics.index')
                ->with('success', 'Topic updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Topic $topic)
    {
        try {
            $this->topicService->delete($topic);

            return redirect()->route('admin.topics.index')->with('success', 'Topic deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

//    public function LevelsBy(Request $request)
//    {
//
//        $request->validate([
//            'level_id' => 'required|exists:levels,id',
//        ]);
//
//        $message = 'unknow server error';
//        $errorCode = 400;
//        $data = [];
//        try {
//            $levelId = $request->level_id;
//            $data['chapters'] = $this->chapterService->chaptersBy($levelId);
//            $errorCode = 200;
//            $message = 'Successfully data fetched';
//        } catch (\Exception $e) {
//            $message = 'Operation failed: '.$e->getMessage();
//        }
//
//        $response = $this->apiResponse($data, $message, $errorCode);
//        $response = $this->setResponseHeaders($response);
//
//        return $response;
//    }
}
