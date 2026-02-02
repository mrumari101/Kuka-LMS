@extends('layouts.falcon')

{{--    @if ($errors->any())--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <x-alert type="danger" :message="$error" />--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--@php die @endphp--}}


@section('title', 'Dashboard - Questions')

@section('content')


{{--    @if (session('error'))--}}
{{--        <x-alert type="danger" :message="session('error')" />--}}
{{--    @endif--}}

@if ($errors->any())
    <x-alert type="danger" message="Your form has some fields missing or contains invalid data." />
@endif



    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error" />
        @endforeach
    @endif

    <x-breadcrumb
        title="Dashboard"
        :items="[
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'Questions', 'url' => route('admin.questions.index')],
                ['label' => 'Add', 'url' => route('admin.questions.create')]
            ]"
    />





<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Add Question<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>
            </div>
            <div class="col-auto ms-auto">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                    <a href="{{ route('admin.topics.index') }}"
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
                <form action="{{ route('admin.questions.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
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
                        <label class="form-label" for="difficulty_level_id">
                            Difficulty Level <span class="text-danger">*</span>
                        </label>
                        <select class="form-select @error('discipline_id') is-invalid @enderror" name="difficulty_level_id" id="difficulty_level_id" data-old="{{ old('difficulty_level_id') }}" aria-label="Default select example">
                            @if ($difficultyLevels->count() > 0)
                                <option selected disabled>Select Difficulty Level</option>
                                @foreach ($difficultyLevels as $item)
                                    <option value="{{ $item->id }}" {{ old('difficulty_level_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            @else
                                <option selected="selected">Not Found</option>
                            @endif
                        </select>
                        @error('difficulty_level_id')
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
                        <label class="form-label" for="question_typ">
                            Question Type <span class="text-danger">*</span>
                        </label>
                        <select class="form-select @error('question_type') is-invalid @enderror" name="question_type" id="question_type" aria-label="Default select example">
                            <option selected="">Select Question Type</option>
                            <option value="mcq" {{ old('question_type') == 'mcq' ? 'selected' : '' }}>MCQ</option>
                            <option value="descriptive" {{ old('question_type') == 'descriptive' ? 'selected' : '' }}>Descriptive</option>
                        </select>
                        @error('question_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                  <div id="mcqDiv" style="display:none">
                    <div class="mb-3">
                        <label class="form-label" for="mcq_description">
                            Mcq Description <span class="text-danger"> Description/Doc one should be filled * </span>
                        </label>
                        <x-text-editor-field
                            id="mcq_description"
                            name="mcq_description"
                            label="Mcq description"
                            placeholder="Write your content..."
                            value="{!! old('mcq_description')  !!}"
                        />
                        @error('mcq_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Mcq File (PDF/DOCX) <span class="text-danger">Description/Doc one should be filled * </span>
                        </label>

                        <input class="form-control @error('mcq_file') is-invalid @enderror" name="mcq_file" type="file" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        <div class="small text-muted">
                            Upload specs: PDF/DOCX · Max size as defined · Letter size (21.59cm × H up to 11)
                        </div>
                        @error('mcq_file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="status">
                            MCQ Options <span class="text-danger">*</span>
                        </label>

                        <div class="table-responsive">

                            <table class="table table-bordered align-middle fs--1">
                                <thead class="bg-200 text-uppercase">
                                <tr>
                                    <th style="width: 40px;"></th>
                                    <th style="width: 140px;">Correct</th>
                                    <th>Description</th>
                                    <th class="text-center" style="width: 120px;">Action</th>
                                </tr>
                                </thead>

                                @php
                                    $oldDescriptions = old('description');
                                    $oldCorrect = old('is_correct', []);

                                    if (!$oldDescriptions || count($oldDescriptions) < 2) {
                                        $oldDescriptions = ['', ''];
                                        $oldCorrect = [1, 0];
                                    }
                                @endphp

                                <tbody id="recipeTable">

                                @foreach($oldDescriptions as $index => $value)
                                    <tr draggable="true">
                                        <!-- drag -->
                                        <td class="text-center text-400 drag-handle" style="cursor: grab;">
                                            <span class="fas fa-grip-vertical"></span>
                                        </td>

                                        <!-- correct -->
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input correct-radio"
                                                    type="radio"
                                                    name="correct_ui"
                                                    {{ (!empty($oldCorrect[$index])) ? 'checked' : '' }}
                                                >
                                                <input
                                                    type="hidden"
                                                    name="is_correct[]"
                                                    value="{{ !empty($oldCorrect[$index]) ? 1 : 0 }}"
                                                    class="is-correct-input"
                                                >
                                            </div>
                                        </td>

                                        <!-- description -->
                                        <td>
                                            <input
                                                type="text"
                                                name="description[]"
                                                value="{{ $value }}"
                                                class="form-control @error("description.$index") is-invalid @enderror"
                                                placeholder="Enter description"
                                                required
                                            >

                                            @error("description.$index")
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>

                                        <!-- action -->
                                        <td class="text-center">
                                            <button
                                                type="button"
                                                class="btn btn-sm {{ $index < 2 ? 'btn-secondary' : 'btn-danger removeRow' }}"
                                                {{ $index < 2 ? 'disabled' : '' }}
                                            >
                                                <span class="fas {{ $index < 2 ? 'fa-lock' : 'fa-trash' }}"></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <button id="addRow" type="button" class="btn btn-sm btn-outline-primary">
                                            <span class="fas fa-plus me-1"></span>Add Row
                                        </button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                  </div>

                  <div id="descriptiveDiv" style="display:none">
                    <div class="mb-3">
                        <label class="form-label" for="question_description">
                           Question Description <span class="text-danger"> Description/Doc one should be filled * </span>
                        </label>
                        <x-text-editor-field
                            id="question_description"
                            name="question_description"
                            label="Question description"
                            placeholder="Write your content..."
                            value="{!! old('question_description')  !!}"
                        />
                        @error('question_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Question File (PDF/DOCX) <span class="text-danger">Description/Doc one should be filled * </span>
                        </label>

                        <input class="form-control @error('file') is-invalid @enderror" name="question_file" type="file" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        <div class="small text-muted">
                            Upload specs: PDF/DOCX · Max size as defined · Letter size (21.59cm × H up to 11)
                        </div>
                        @error('question_file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="solution_description">
                           Solution Description <span class="text-danger"> Description/Doc one should be filled * </span>
                        </label>
                        <x-text-editor-field
                            id="solution_description"
                            name="solution_description"
                            label="Solution description"
                            placeholder="Write your content..."
                            value="{!! old('solution_description')  !!}"
                        />
                        @error('solution_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Solution File (PDF/DOCX) <span class="text-danger">Description/Doc one should be filled * </span>
                        </label>

                        <input class="form-control @error('file') is-invalid @enderror" name="solution_file" type="file" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        <div class="small text-muted">
                            Upload specs: PDF/DOCX · Max size as defined · Letter size (21.59cm × H up to 11)
                        </div>
                        @error('solution_file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>


                    <div class="d-flex justify-content-start gap-2 mt-4">
                        <a href="{{ route('admin.questions.index') }}"
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


@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const el = document.querySelector('.is-invalid');
            el?.scrollIntoView({ behavior: 'smooth', block: 'center' });
            el?.focus();
        });
    </script>
@endif


<script>
    document.addEventListener('DOMContentLoaded', function () {

        const questionType = document.getElementById('question_type');
        const mcqDiv = document.getElementById('mcqDiv');
        const descriptiveDiv = document.getElementById('descriptiveDiv');

        function toggle(container, show) {
            container.style.display = show ? 'block' : 'none';

            container.querySelectorAll('input, textarea, select').forEach(el => {
                el.disabled = !show;
            });

            // TinyMCE safe handling
            container.querySelectorAll('textarea.tinymce').forEach(el => {
                const editor = tinymce.get(el.id);
                if (editor) {
                    show
                        ? editor.mode.set('design')
                        : editor.mode.set('readonly');
                }
            });
        }

        function applyVisibility() {

            const type = questionType.value;

            if (!type) {
                toggle(mcqDiv, false);
                toggle(descriptiveDiv, false);
                return;
            }

            if (type === 'mcq') {
                toggle(mcqDiv, true);
                toggle(descriptiveDiv, false);
            }

            if (type === 'descriptive') {
                toggle(mcqDiv, false);
                toggle(descriptiveDiv, true);
            }
        }

        questionType.addEventListener('change', applyVisibility);
        applyVisibility(); // initial load (handles old())
    });
</script>



{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function () {--}}

{{--        function toggleContainer(container, enable) {--}}
{{--            container.style.display = enable ? 'block' : 'none';--}}

{{--            container.querySelectorAll('input, textarea, select').forEach(el => {--}}

{{--                // Handle TinyMCE textarea--}}
{{--                if (el.tagName === 'TEXTAREA' && el.classList.contains('tinymce')) {--}}
{{--                    const editor = tinymce.get(el.id);--}}

{{--                    if (editor) {--}}
{{--                        enable ? editor.mode.set('design') : editor.mode.set('readonly');--}}
{{--                    }--}}
{{--                }--}}

{{--                el.disabled = !enable;--}}
{{--            });--}}
{{--        }--}}

{{--        const questionType = document.getElementById('question_type');--}}
{{--        const mcqDiv = document.getElementById('mcqDiv');--}}
{{--        const descriptiveDiv = document.getElementById('descriptiveDiv');--}}

{{--        function toggleByType() {--}}
{{--            if (questionType.value === 'mcq') {--}}
{{--                toggleContainer(mcqDiv, true);--}}
{{--                toggleContainer(descriptiveDiv, false);--}}
{{--            } else {--}}
{{--                toggleContainer(mcqDiv, false);--}}
{{--                toggleContainer(descriptiveDiv, true);--}}
{{--            }--}}
{{--        }--}}

{{--        questionType.addEventListener('change', toggleByType);--}}
{{--        toggleByType(); // init--}}
{{--    });--}}
{{--</script>--}}





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

</script>


<script>
    document.getElementById('myForm').addEventListener('submit', function(e) {
        tinymce.triggerSave(); // updates textarea with TinyMCE content
    });
</script>




<script>
    document.addEventListener('DOMContentLoaded', function () {

        const tableBody = document.getElementById('recipeTable');
        const addRowBtn = document.getElementById('addRow');

        const MIN = 2;
        const MAX = 5;

        let draggedRow = null;
        function syncTableState() {
            const rows = [...tableBody.rows];

            // Ensure one correct exists
            let checkedRow = rows.find(r =>
                r.querySelector('.correct-radio').checked
            );

            if (!checkedRow && rows.length) {
                rows[0].querySelector('.correct-radio').checked = true;
                checkedRow = rows[0];
            }

            rows.forEach((row) => {
                const radio = row.querySelector('.correct-radio');
                const hidden = row.querySelector('.is-correct-input');
                const btn = row.querySelector('button');

                const isChecked = radio.checked;
                hidden.value = isChecked ? 1 : 0;

                row.classList.toggle('table-success', isChecked);

                // 🚫 lock delete if correct OR min reached
                if (isChecked || rows.length <= MIN) {
                    btn.disabled = true;
                    btn.className = 'btn btn-sm btn-secondary';
                    btn.innerHTML = '<span class="fas fa-lock"></span>';
                    btn.title = isChecked
                        ? 'Correct option cannot be deleted'
                        : 'At least two options required';
                } else {
                    btn.disabled = false;
                    btn.className = 'btn btn-sm btn-danger remove-row';
                    btn.innerHTML = '<span class="fas fa-trash"></span>';
                    btn.title = 'Remove option';
                }
            });

            // 🔒 Disable Add button at max limit
            if (rows.length >= MAX) {
                addRowBtn.disabled = true;
                addRowBtn.classList.add('disabled');
                addRowBtn.title = 'Maximum 5 options allowed';
            } else {
                addRowBtn.disabled = false;
                addRowBtn.classList.remove('disabled');
                addRowBtn.title = '';
            }
        }

        // Add row
        addRowBtn.addEventListener('click', function () {
            if (tableBody.rows.length >= MAX) return;

            const row = document.createElement('tr');
            row.setAttribute('draggable', true);

            row.innerHTML = `
            <td class="text-center text-400 drag-handle" style="cursor: grab;">
                <span class="fas fa-grip-vertical"></span>
            </td>

            <td class="text-center">
                <div class="form-check">
                    <input class="form-check-input correct-radio" type="radio" name="correct_ui">
                    <input type="hidden" name="is_correct[]" value="0" class="is-correct-input">
                </div>
            </td>

            <td>
                <input type="text" name="description[]" class="form-control" required>
            </td>

            <td class="text-center">
                <button type="button" class="btn btn-sm btn-danger remove-row">
                    <span class="fas fa-trash"></span>
                </button>
            </td>
        `;

            tableBody.appendChild(row);
            syncTableState();
        });

        // Radio change
        tableBody.addEventListener('change', function (e) {
            if (e.target.classList.contains('correct-radio')) {
                syncTableState();
            }
        });

        // Remove row
        tableBody.addEventListener('click', function (e) {
            const btn = e.target.closest('.remove-row');
            if (!btn) return;

            if (tableBody.rows.length <= MIN) return;

            btn.closest('tr').remove();
            syncTableState();
        });

        // Drag & drop
        tableBody.addEventListener('dragstart', e => {
            draggedRow = e.target.closest('tr');
            draggedRow.classList.add('table-active');
        });

        tableBody.addEventListener('dragend', () => {
            draggedRow?.classList.remove('table-active');
            draggedRow = null;
            syncTableState();
        });

        tableBody.addEventListener('dragover', e => {
            e.preventDefault();
            const targetRow = e.target.closest('tr');
            if (!targetRow || targetRow === draggedRow) return;

            const rect = targetRow.getBoundingClientRect();
            const next = (e.clientY - rect.top) > rect.height / 2;
            tableBody.insertBefore(draggedRow, next ? targetRow.nextSibling : targetRow);
        });

        // Initial sync (IMPORTANT for validation old values)
        syncTableState();
    });
</script>




@endsection

@push('scripts')

@endpush

@push('scripts')

@endpush
