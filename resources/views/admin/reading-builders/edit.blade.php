@extends('layouts.falcon')

{{--    @if ($errors->any())--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <x-alert type="danger" :message="$error" />--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--@php die @endphp--}}


@section('title', 'Dashboard - Reading Builders')

@section('content')


    {{--    @if (session('error'))--}}
    {{--        <x-alert type="danger" :message="session('error')" />--}}
    {{--    @endif--}}

    @if ($errors->any())
        <x-alert type="danger" message="Your form has some fields missing or contains invalid data." />
    @endif


    <x-breadcrumb
        title="Dashboard"
        :items="[
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'Reading Builders', 'url' => route('admin.reading-builders.index')],
                ['label' => 'Update', 'url' => route('admin.reading-builders.edit',['readingBuilder'=>$readingBuilder->id])]
            ]"
    />

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Edit Reading Builder<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('admin.reading-builders.index') }}"
                           class="btn btn-falcon-success btn-sm">
                            <span class="fas fa-list-ul" data-fa-transform="shrink-3 down-2"></span>
                            <span class="ms-1">List</span>
                        </a>

                        {{--                    <button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-43631251-35c6-4416-9d8b-497c94bd83a2" type="button" role="tab" aria-controls="dom-43631251-35c6-4416-9d8b-497c94bd83a2" aria-selected="true" id="tab-dom-43631251-35c6-4416-9d8b-497c94bd83a2">Preview</button>--}}
                        {{--                    <button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-187bd5ca-6bfd-4b16-9549-73131a5df0b7" type="button" role="tab" aria-controls="dom-187bd5ca-6bfd-4b16-9549-73131a5df0b7" aria-selected="false" id="tab-dom-187bd5ca-6bfd-4b16-9549-73131a5df0b7" tabindex="-1">Code</button>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body bg-body-tertiary">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-43631251-35c6-4416-9d8b-497c94bd83a2" id="dom-43631251-35c6-4416-9d8b-497c94bd83a2">
                    <form action="{{ route('admin.reading-builders.update', ['readingBuilder' => $readingBuilder->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="discipline_id">
                                Discipline <span class="text-danger">*</span>
                            </label>
                            <select  data-old="{{ old('discipline_id', $readingBuilder->topic->chapter->level->discipline->id) }}" class="form-select @error('discipline_id') is-invalid @enderror" name="discipline_id" id="discipline_id" aria-label="Default select example">
                                @if ($disciplines->count() > 0)
                                    <option >Select Discipline</option>
                                    @foreach ($disciplines as $item)
                                        <option value="{{ $item->id }}" {{ old('discipline_id',$readingBuilder->topic->chapter->level->discipline->id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                @else
                                    <option selected="selected">Not Found</option>
                                @endif
                            </select>
                            @error('discipline_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Level --}}
                        <div class="mb-3">
                            <label class="form-label" for="level_id">
                                Level <span class="text-danger">*</span>
                            </label>
                            <select id="level_id" name="level_id"
                                    class="form-select @error('level_id') is-invalid @enderror"
                                    disabled
                                    data-old="{{ old('level_id', $readingBuilder->topic->chapter->level->id) }}">
                                <option value="">Select Level</option>
                            </select>
                            @error('level_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        {{-- Level --}}
                        <div class="mb-3">
                            <label class="form-label" for="chapter_id">
                                Chapter <span class="text-danger">*</span>
                            </label>
                            <select id="chapter_id" name="chapter_id"
                                    class="form-select @error('level_id') is-invalid @enderror"
                                    disabled
                                    data-old="{{ old('chapter_id', $readingBuilder->topic->chapter->id) }}">
                                <option value="">Select Chapter</option>
                            </select>
                            @error('level_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror


                        </div> {{-- Topic --}}
                        <div class="mb-3">
                            <label class="form-label" for="topic_id">
                                Topic <span class="text-danger">*</span>
                            </label>
                            <select id="topic_id" name="topic_id"
                                    class="form-select @error('topic_id') is-invalid @enderror"
                                    disabled
                                    data-old="{{ old('topic_id', $readingBuilder->topic->id) }}">
                                <option value="">Select Topic</option>
                            </select>
                            @error('topic_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label class="form-label" for="name">
                                Title <span class="text-danger">*</span>
                            </label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name',$readingBuilder->name) }}" placeholder="Title">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>




                        <div class="mb-3">
                            <label class="form-label" for="description">
                                Description <span class="text-danger">*</span>
                            </label>
                            <x-text-editor-field
                                id="description"
                                name="description"
                                label="Description"
                                placeholder="Write your reading content..."
                                value="{!! old('description',$readingBuilder->description)  !!}"
                            />
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="status">
                                Status <span class="text-danger">*</span>
                            </label>
                            <select class="form-select @error('status') is-invalid @enderror" name="status" id="status" aria-label="Default select example">
                                <option selected="selected">Select Status</option>
                                <option value="1" {{ old('status',$readingBuilder->status) == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status',$readingBuilder->status) == '0' ? 'selected' : '' }}>Unactive</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                File (PDF/DOCX) <span class="text-danger">*</span>
                            </label>
                            <input class="form-control @error('file') is-invalid @enderror" name="file" type="file" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                            <div class="small text-muted">
                                Upload specs: PDF/DOCX · Max size as defined · Letter size (21.59cm × H up to 11)
                            </div>
                            @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-start gap-2 mt-4">
                            <a href="{{ route('admin.reading-builders.index') }}"
                               class="btn btn-falcon-default btn-sm">
                                <span class="fas fa-arrow-left me-1"></span>
                                Cancel
                            </a>

                            <button class="btn btn-falcon-success btn-sm" type="submit">
                                <span class="fas fa-save me-1"></span>
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const disciplineSelect = document.getElementById('discipline_id');
            const levelSelect = document.getElementById('level_id');
            const chapterSelect = document.getElementById('chapter_id');
            const topicSelect = document.getElementById('topic_id');

            const oldDisciplineId = disciplineSelect?.dataset.old;
            const oldLevelId = levelSelect?.dataset.old;
            const oldChapterId = chapterSelect?.dataset.old;
            const oldTopicId = topicSelect?.dataset.old;

            async function fetchLevels(disciplineId, selectedLevelId = null) {
                levelSelect.innerHTML = '<option value="">Select Level</option>';
                levelSelect.disabled = true;

                if (!disciplineId) return;

                const response = await fetch('{{ route("admin.levels.by") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({ discipline_id: disciplineId })
                });

                const levels = (await response.json()).data.levels || [];

                levels.forEach(level => {
                    const option = new Option(level.name, level.id);
                    if (selectedLevelId == level.id) option.selected = true;
                    levelSelect.appendChild(option);
                });

                levelSelect.disabled = !levels.length;

                if (selectedLevelId) {
                    await fetchChapters(selectedLevelId, oldChapterId);
                }
            }

            async function fetchChapters(levelId, selectedChapterId = null) {
                chapterSelect.innerHTML = '<option value="">Select Chapter</option>';
                chapterSelect.disabled = true;

                if (!levelId) return;

                const response = await fetch('{{ route("admin.chapters.by") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({ level_id: levelId })
                });

                const chapters = (await response.json()).data.chapters || [];

                chapters.forEach(chapter => {
                    const option = new Option(chapter.name, chapter.id);
                    if (selectedChapterId == chapter.id) option.selected = true;
                    chapterSelect.appendChild(option);
                });

                chapterSelect.disabled = !chapters.length;

                if (selectedChapterId) {
                    await fetchTopics(selectedChapterId, oldTopicId);
                }
            }

            async function fetchTopics(chapterId, selectedTopicId = null) {
                topicSelect.innerHTML = '<option value="">Select Topic</option>';
                topicSelect.disabled = true;

                if (!chapterId) return;

                const response = await fetch('{{ route("admin.topics.by") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({ chapter_id: chapterId })
                });

                const topics = (await response.json()).data.topics || [];

                topics.forEach(topic => {
                    const option = new Option(topic.name, topic.id);
                    if (selectedTopicId == topic.id) option.selected = true;
                    topicSelect.appendChild(option);
                });

                topicSelect.disabled = !topics.length;
            }

            /* 🔹 AUTO-FILL ON EDIT PAGE */
            if (oldDisciplineId) {
                disciplineSelect.value = oldDisciplineId;
                fetchLevels(oldDisciplineId, oldLevelId);
            }

            /* 🔹 On Change Events */
            disciplineSelect.addEventListener('change', function () {
                fetchLevels(this.value);
                chapterSelect.innerHTML = '<option value="">Select Chapter</option>';
                topicSelect.innerHTML = '<option value="">Select Topic</option>';
                chapterSelect.disabled = topicSelect.disabled = true;
            });

            levelSelect.addEventListener('change', function () {
                fetchChapters(this.value);
                topicSelect.innerHTML = '<option value="">Select Topic</option>';
                topicSelect.disabled = true;
            });

            chapterSelect.addEventListener('change', function () {
                fetchTopics(this.value);
            });

        });
    </script>


    {{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', function () {--}}

{{--            const disciplineSelect = document.getElementById('discipline_id');--}}
{{--            const levelSelect = document.getElementById('level_id');--}}
{{--            const chapterSelect = document.getElementById('chapter_id');--}}

{{--            const oldDisciplineId = disciplineSelect.dataset.old;--}}
{{--            const oldLevelId = levelSelect.dataset.old;--}}
{{--            const oldChapterId = chapterSelect.dataset.old;--}}

{{--            async function fetchLevels(disciplineId, selectedLevelId = null) {--}}
{{--                levelSelect.innerHTML = '<option value="">Select Level</option>';--}}
{{--                levelSelect.disabled = true;--}}

{{--                if (!disciplineId) return;--}}

{{--                const response = await fetch('{{ route("admin.levels.by") }}', {--}}
{{--                    method: 'POST',--}}
{{--                    headers: {--}}
{{--                        'Content-Type': 'application/json',--}}
{{--                        'X-CSRF-TOKEN': '{{ csrf_token() }}',--}}
{{--                    },--}}
{{--                    body: JSON.stringify({ discipline_id: disciplineId })--}}
{{--                });--}}

{{--                const data = await response.json();--}}
{{--                const levels = data.data.levels || [];--}}

{{--                levels.forEach(level => {--}}
{{--                    const option = document.createElement('option');--}}
{{--                    option.value = level.id;--}}
{{--                    option.textContent = level.name;--}}

{{--                    if (selectedLevelId && selectedLevelId == level.id) {--}}
{{--                        option.selected = true;--}}
{{--                    }--}}
{{--                    levelSelect.appendChild(option);--}}
{{--                });--}}

{{--                levelSelect.disabled = !levels.length;--}}

{{--                // 🔥 IMPORTANT: load chapters after auto-selecting level--}}
{{--                if (selectedLevelId) {--}}
{{--                    await fetchChapters(selectedLevelId, oldChapterId);--}}
{{--                }--}}
{{--            }--}}

{{--            async function fetchChapters(levelId, selectedChapterId = null) {--}}
{{--                chapterSelect.innerHTML = '<option value="">Select Chapter</option>';--}}
{{--                chapterSelect.disabled = true;--}}

{{--                if (!levelId) return;--}}

{{--                const response = await fetch('{{ route("admin.chapters.by") }}', {--}}
{{--                    method: 'POST',--}}
{{--                    headers: {--}}
{{--                        'Content-Type': 'application/json',--}}
{{--                        'X-CSRF-TOKEN': '{{ csrf_token() }}',--}}
{{--                    },--}}
{{--                    body: JSON.stringify({ level_id: levelId })--}}
{{--                });--}}

{{--                const data = await response.json();--}}
{{--                const chapters = data.data.chapters || [];--}}

{{--                chapters.forEach(chapter => {--}}
{{--                    const option = document.createElement('option');--}}
{{--                    option.value = chapter.id;--}}
{{--                    option.textContent = chapter.name;--}}

{{--                    if (selectedChapterId && selectedChapterId == chapter.id) {--}}
{{--                        option.selected = true;--}}
{{--                    }--}}
{{--                    chapterSelect.appendChild(option);--}}
{{--                });--}}

{{--                chapterSelect.disabled = !chapters.length;--}}
{{--            }--}}

{{--            // 🔹 PAGE LOAD AUTO-FILL--}}
{{--            if (oldDisciplineId) {--}}
{{--                disciplineSelect.value = oldDisciplineId;--}}
{{--                fetchLevels(oldDisciplineId, oldLevelId);--}}
{{--            }--}}

{{--            // 🔹 Discipline change--}}
{{--            disciplineSelect.addEventListener('change', function () {--}}
{{--                fetchLevels(this.value);--}}
{{--                chapterSelect.innerHTML = '<option value="">Select Chapter</option>';--}}
{{--                chapterSelect.disabled = true;--}}
{{--            });--}}

{{--            // 🔹 Level change--}}
{{--            levelSelect.addEventListener('change', function () {--}}
{{--                fetchChapters(this.value);--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}

{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', function () {--}}
{{--            const disciplineSelect = document.getElementById('discipline_id');--}}
{{--            const levelSelect = document.getElementById('level_id');--}}

{{--            const oldDisciplineId = disciplineSelect.dataset.old;--}}
{{--            const oldLevelId = levelSelect.dataset.old;--}}

{{--            async function fetchLevels(disciplineId, selectedLevelId = null) {--}}
{{--                levelSelect.innerHTML = '<option value="">Select Level</option>';--}}
{{--                levelSelect.disabled = true;--}}

{{--                if (!disciplineId) return;--}}

{{--                try {--}}
{{--                    const response = await fetch('{{ route("admin.levels.by") }}', {--}}
{{--                        method: 'POST',--}}
{{--                        headers: {--}}
{{--                            'Content-Type': 'application/json',--}}
{{--                            'X-CSRF-TOKEN': '{{ csrf_token() }}',--}}
{{--                        },--}}
{{--                        body: JSON.stringify({ discipline_id: disciplineId })--}}
{{--                    });--}}

{{--                    const data = await response.json();--}}
{{--                    const levels = data.data.levels;--}}

{{--                    if (levels.length > 0) {--}}
{{--                        levels.forEach(level => {--}}
{{--                            const option = document.createElement('option');--}}
{{--                            option.value = level.id;--}}
{{--                            option.text = level.name;--}}
{{--                            if (selectedLevelId && selectedLevelId == level.id) {--}}
{{--                                option.selected = true;--}}
{{--                            }--}}
{{--                            levelSelect.appendChild(option);--}}
{{--                        });--}}
{{--                        levelSelect.disabled = false;--}}
{{--                    }--}}
{{--                } catch (err) {--}}
{{--                    console.error('Failed to fetch levels:', err);--}}
{{--                }--}}
{{--            }--}}

{{--            // Trigger Discipline select first--}}
{{--            if (oldDisciplineId) {--}}
{{--                // set the discipline select manually--}}
{{--                disciplineSelect.value = oldDisciplineId;--}}
{{--                // then fetch levels and auto-select old level--}}
{{--                fetchLevels(oldDisciplineId, oldLevelId);--}}
{{--            }--}}

{{--            // On change--}}
{{--            disciplineSelect.addEventListener('change', function () {--}}
{{--                fetchLevels(this.value);--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}



@endsection
