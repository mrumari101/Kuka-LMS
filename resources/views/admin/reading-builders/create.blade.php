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



{{--    @if ($errors->any())--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <x-alert type="danger" :message="$error" />--}}
{{--        @endforeach--}}
{{--    @endif--}}

    <x-breadcrumb
        title="Dashboard"
        :items="[
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'Reading Builder', 'url' => route('admin.reading-builders.index')],
                ['label' => 'Add', 'url' => route('admin.reading-builders.create')]
            ]"
    />

<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Add Reading Builder<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>
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

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <x-alert type="danger" :message="$error" />
                        @endforeach
                    @endif


                <form action="{{ route('admin.reading-builders.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="discipline_id">
                            Discipline <span class="text-danger">*</span>
                        </label>
                        <select class="form-select @error('discipline_id') is-invalid @enderror" name="discipline_id" id="discipline_id" data-old="{{ old('discipline_id') }}" aria-label="Default select example">
                            @if ($disciplines->count() > 0)
                                <option selected disabled>Select Discipline</option>
                                @foreach ($disciplines as $item)
                                    <option value="{{ $item->id }}" {{ old('discipline_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
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
                        <select id="level_id" class="form-select @error('level_id') is-invalid @enderror" name="level_id" disabled  data-old="{{ old('level_id') }}">
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
                        <select id="chapter_id" name="chapter_id" class="form-select @error('chapter_id') is-invalid @enderror"  disabled data-old="{{ old('chapter_id') }}">
                            <option value="">Select Chapter</option>
                        </select>
                        @error('chapter_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label class="form-label" for="topic_id">
                            Topic <span class="text-danger">*</span>
                        </label>
                        <select id="topic_id" name="topic_id"
                                class="form-select @error('topic_id') is-invalid @enderror"
                                disabled
                                data-old="{{ old('topic_id') }}">
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
                        <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Title">
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
                        value="{!! old('description')  !!}"
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
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Unactive</option>
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
    document.getElementById('discipline_id').addEventListener('change', function () {
        const disciplineId = this.value;
        const levelSelect = document.getElementById('level_id');

        levelSelect.innerHTML = '<option value="">Loading...</option>';
        levelSelect.setAttribute('disabled', true);

        if (!disciplineId) {
            levelSelect.innerHTML = '<option value="">Select Level</option>';
            levelSelect.setAttribute('disabled', true);
            return;
        }

        fetch("{{ route('admin.levels.by') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                discipline_id: disciplineId
            })
        })
            .then(response => response.json())
            .then(response => {
                levelSelect.innerHTML = '<option value="">Select Level</option>';

                const levels = response.data.levels;

                if (levels.length === 0) {
                    levelSelect.innerHTML =
                        '<option value="">No levels found</option>';
                    return;
                }

                levels.forEach(level => {
                    const option = document.createElement('option');
                    option.value = level.id;
                    option.textContent = level.name;
                    levelSelect.appendChild(option);
                });

                levelSelect.removeAttribute('disabled');
            })
            .catch(() => {
                levelSelect.innerHTML =
                    '<option value="">Error loading levels</option>';
            });
    });




    document.getElementById('level_id').addEventListener('change', function () {
        const levelId = this.value;
        const chapterSelect = document.getElementById('chapter_id');

        chapterSelect.innerHTML = '<option value="">Loading...</option>';
        chapterSelect.setAttribute('disabled', true);

        if (!levelId) {
            chapterSelect.innerHTML = '<option value="">Select Chapter</option>';
            chapterSelect.setAttribute('disabled', true);
            return;
        }

        fetch("{{ route('admin.chapters.by') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                level_id: levelId
            })
        })
            .then(response => response.json())
            .then(response => {
                chapterSelect.innerHTML = '<option value="">Select Chapter</option>';

                const chapters = response.data.chapters;

                if (chapters.length === 0) {
                    chapterSelect.innerHTML =
                        '<option value="">No chapters found</option>';
                    return;
                }

                chapters.forEach(chapter => {
                    const option = document.createElement('option');
                    option.value = chapter.id;
                    option.textContent = chapter.name;
                    chapterSelect.appendChild(option);
                });

                chapterSelect.removeAttribute('disabled');
            })
            .catch(() => {
                chapterSelect.innerHTML =
                    '<option value="">Error loading chapters</option>';
            });
    });





    document.getElementById('chapter_id').addEventListener('change', function () {
        const chapterId = this.value;
        const topicSelect = document.getElementById('topic_id');

        topicSelect.innerHTML = '<option value="">Loading...</option>';
        topicSelect.setAttribute('disabled', true);

        if (!chapterId) {
            topicSelect.innerHTML = '<option value="">Select Topic</option>';
            topicSelect.setAttribute('disabled', true);
            return;
        }

        fetch("{{ route('admin.topics.by') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                chapter_id: chapterId
            })
        })
            .then(response => response.json())
            .then(response => {
                topicSelect.innerHTML = '<option value="">Select Topic</option>';

                const topics = response.data.topics;

                if (topics.length === 0) {
                    topicSelect.innerHTML =
                        '<option value="">No topics found</option>';
                    return;
                }

                topics.forEach(topic => {
                    const option = document.createElement('option');
                    option.value = topic.id;
                    option.textContent = topic.name;
                    topicSelect.appendChild(option);
                });

                topicSelect.removeAttribute('disabled');
            })
            .catch(() => {
                topicSelect.innerHTML =
                    '<option value="">Error loading topics</option>';
            });
    });










    document.addEventListener('DOMContentLoaded', function () {
        const disciplineSelect = document.getElementById('discipline_id');
        const levelSelect = document.getElementById('level_id');

        const oldDisciplineId = disciplineSelect.dataset.old;
        const oldLevelId = levelSelect.dataset.old;

        // Function to fetch levels
        async function fetchLevels(disciplineId, selectedLevelId = null) {
            if (!disciplineId) {
                levelSelect.innerHTML = '<option value="">Select Level</option>';
                levelSelect.disabled = true;
                return;
            }

            const response = await fetch('{{ route("admin.levels.by") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ discipline_id: disciplineId })
            });

            const data = await response.json();
            levelSelect.innerHTML = '<option value="">Select Level</option>';
            const levels = data.data.levels;
            if (levels.length) {
                levels.forEach(level => {
                    const option = document.createElement('option');
                    option.value = level.id;
                    option.text = level.name;
                    if (selectedLevelId && selectedLevelId == level.id) {
                        option.selected = true;
                    }
                    levelSelect.appendChild(option);
                });
                levelSelect.disabled = false;
            } else {
                levelSelect.disabled = true;
            }
        }

        // On page load: populate levels if old values exist
        if (oldDisciplineId) {
            fetchLevels(oldDisciplineId, oldLevelId);
        }

        // On change: populate levels
        disciplineSelect.addEventListener('change', function () {
            fetchLevels(this.value);
        });
    });






    document.addEventListener('DOMContentLoaded', function () {
        const levelSelect = document.getElementById('level_id');
        const chapterSelect = document.getElementById('chapter_id');

        const oldLevelId = levelSelect.dataset.old;
        const oldChapterId = chapterSelect.dataset.old;

        // Function to fetch levels
        async function fetchChapters(levelId, selectedChapterId = null) {
            if (!levelId) {
                chapterSelect.innerHTML = '<option value="">Select Chapter</option>';
                chapterSelect.disabled = true;
                return;
            }

            const response = await fetch('{{ route("admin.chapters.by") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ level_id: levelId })
            });

            const data = await response.json();
            chapterSelect.innerHTML = '<option value="">Select Chapter</option>';
            const chapters = data.data.chapters;
            if (chapters.length) {
                chapters.forEach(chapter => {
                    const option = document.createElement('option');
                    option.value = chapter.id;
                    option.text = chapter.name;
                    if (selectedChapterId && selectedChapterId == chapter.id) {
                        option.selected = true;
                    }
                    chapterSelect.appendChild(option);
                });
                chapterSelect.disabled = false;
            } else {
                chapterSelect.disabled = true;
            }
        }

        // On page load: populate levels if old values exist
        if (oldLevelId) {
            fetchChapters(oldLevelId, oldChapterId);
        }

        // On change: populate levels
        levelSelect.addEventListener('change', function () {
            fetchChapters(this.value);
        });
    });


    document.addEventListener('DOMContentLoaded', function () {
        const chapterSelect = document.getElementById('chapter_id');
        const topicSelect = document.getElementById('topic_id');

        const oldChapterId = chapterSelect.dataset.old;
        const oldTopicId = topicSelect.dataset.old;

        async function fetchTopics(chapterId, selectedTopicId = null) {
            if (!chapterId) {
                topicSelect.innerHTML = '<option value="">Select Topic</option>';
                topicSelect.disabled = true;
                return;
            }

            const response = await fetch('{{ route("admin.topics.by") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ chapter_id: chapterId })
            });

            const data = await response.json();
            topicSelect.innerHTML = '<option value="">Select Topic</option>';
            const topics = data.data.topics;

            if (topics.length) {
                topics.forEach(topic => {
                    const option = document.createElement('option');
                    option.value = topic.id;
                    option.text = topic.name;

                    if (selectedTopicId && selectedTopicId == topic.id) {
                        option.selected = true;
                    }
                    topicSelect.appendChild(option);
                });
                topicSelect.disabled = false;
            } else {
                topicSelect.disabled = true;
            }
        }

        // Auto-populate Topic dropdown on page load (for edit or after validation errors)
        if (oldChapterId) {
            fetchTopics(oldChapterId, oldTopicId);
        }

        // On change of Chapter
        chapterSelect.addEventListener('change', function () {
            fetchTopics(this.value);
        });
    });
</script>

<script>
    document.getElementById('myForm').addEventListener('submit', function(e) {
        tinymce.triggerSave(); // updates textarea with TinyMCE content
    });
</script>




@endsection

@push('script')

@endpush
