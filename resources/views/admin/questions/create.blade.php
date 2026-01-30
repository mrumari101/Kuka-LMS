@extends('layouts.falcon')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error" />
        @endforeach
    @endif
{{--@php die @endphp--}}


@section('title', 'Dashboard - Questions')

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
                        <label class="form-label" for="question_typ">
                            Question Type <span class="text-danger">*</span>
                        </label>
                        <select class="form-select @error('status') is-invalid @enderror" name="question_type" id="question_type" aria-label="Default select example">
                            <option selected="selected">Select Question Type</option>
                            <option value="MCQ" {{ old('question_type') == 'MCQ' ? 'selected' : '' }}>MCQ</option>
                            <option value="Descriptive" {{ old('question_type') == 'Descriptive' ? 'selected' : '' }}>Descriptive</option>
                        </select>
                        @error('question_type')
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
                        <label class="form-label" for="description">
                            Description <span class="text-danger">*</span>
                        </label>
                        <x-text-editor-field
                            id="description"
                            name="question_description"
                            label="Description"
                            placeholder="Write your content..."
                            value="{!! old('question_description')  !!}"
                        />
                        @error('question_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            File (PDF/DOCX) <span class="text-danger">*</span>
                        </label>

                        <input class="form-control @error('file') is-invalid @enderror" name="question_file" type="file" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        <div class="small text-muted">
                            Upload specs: PDF/DOCX · Max size as defined · Letter size (21.59cm × H up to 11)
                        </div>
                        @error('question_file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


{{--                    <div class="mb-3">--}}
{{--                        <label class="form-label" for="status">--}}
{{--                            Status <span class="text-danger">*</span>--}}
{{--                        </label>--}}

{{--                        <div class="dropzone dropzone-single p-0 dz-clickable"--}}
{{--                             data-dropzone--}}
{{--                             data-options='{"maxFiles":1,"acceptedFiles":"image/*"}'>--}}

{{--                            <div class="dz-preview dz-preview-single"></div>--}}

{{--                            <div class="dz-message fs-10" data-dz-message>--}}
{{--                                <img class="me-2" src="../../../assets/img/icons/cloud-upload.svg" width="20" alt="">--}}
{{--                                <span class="d-none d-lg-inline">--}}
{{--                                      Drag your image here<br>or,--}}
{{--                                    </span>--}}
{{--                                <span class="btn btn-link p-0 fs-10">Browse</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}



{{--                        --}}{{--                    <div class="dropzone dropzone-single p-0 dz-clickable" data-dropzone="data-dropzone" data-options="{&quot;maxFiles&quot;:1,&quot;acceptedFiles&quot;:&quot;image/*&quot;}">--}}

{{--                        <div class="dz-preview dz-preview-single"></div>--}}
{{--                        <div class="dz-message fs-10" data-dz-message="data-dz-message">--}}
{{--                            <img class="me-2" src="../../../assets/img/icons/cloud-upload.svg" width="20" alt="">--}}
{{--                            <span class="d-none d-lg-inline">--}}
{{--                                Drag your image here<br>or, </span><span class="btn btn-link p-0 fs-10">Browse</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    </div>--}}





{{--                    <h6 class="my-4 text-900 fw-semi-bold">Recipe</h6>--}}

{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered align-middle fs--1">--}}
{{--                            <thead class="bg-200 text-uppercase">--}}
{{--                            <tr>--}}
{{--                                <th style="width: 160px;">Correct</th>--}}
{{--                                <th>Description</th>--}}
{{--                                <th class="text-center" style="width: 120px;">Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}

{{--                            <tbody id="recipeTable">--}}
{{--                            <tr class="correct-row">--}}
{{--                                <td class="text-center">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input--}}
{{--                                            class="form-check-input correct-radio"--}}
{{--                                            type="radio"--}}
{{--                                            name="correct_answer"--}}
{{--                                            checked--}}
{{--                                            required--}}
{{--                                        >--}}
{{--                                    </div>--}}
{{--                                </td>--}}

{{--                                <td>--}}
{{--                                    <input--}}
{{--                                        type="text"--}}
{{--                                        name="description[]"--}}
{{--                                        class="form-control form-control-sm"--}}
{{--                                        placeholder="Enter description"--}}
{{--                                        required--}}
{{--                                    >--}}
{{--                                </td>--}}

{{--                                <td class="text-center">--}}
{{--                                    <button--}}
{{--                                        type="button"--}}
{{--                                        class="btn btn-sm btn-secondary"--}}
{{--                                        disabled--}}
{{--                                    >--}}
{{--                                        <span class="fas fa-lock"></span>--}}
{{--                                    </button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}

{{--                            <tfoot>--}}
{{--                            <tr>--}}
{{--                                <td colspan="3">--}}
{{--                                    <button id="addRow" type="button" class="btn btn-sm btn-outline-primary">--}}
{{--                                        <span class="fas fa-plus me-1"></span>Add Row--}}
{{--                                    </button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tfoot>--}}
{{--                        </table>--}}
{{--                    </div>--}}


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

                            <tbody id="recipeTable">
                            <tr draggable="true">
                                <!-- drag -->
                                <td class="text-center text-400 drag-handle" style="cursor: grab;">
                                    <span class="fas fa-grip-vertical"></span>
                                </td>

                                <!-- correct -->
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input correct-radio" type="radio" name="correct_ui" checked>
                                        <input type="hidden" name="is_correct[]" value="1" class="is-correct-input">
                                    </div>
                                </td>

                                <!-- description -->
                                <td>
                                    <input
                                        type="text"
                                        name="description[]"
                                        class="form-control"
                                        placeholder="Enter description"
                                        required
                                    >
                                </td>

                                <!-- action -->
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-secondary" disabled>
                                        <span class="fas fa-lock"></span>
                                    </button>
                                </td>
                            </tr>
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






                    {{--                        <h6 class="my-5 underline text-16">Recipe:</h6>--}}
{{--                        <div class="overflow-x-auto" bis_skin_checked="1">--}}
{{--                            <table class="w-full whitespace-nowrap">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">Ingredient Name</th>--}}
{{--                                    <th class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">Quantity</th>--}}
{{--                                    --}}{{--                                            <th class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">Cost</th>--}}
{{--                                    --}}{{--                                            <th class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">Price</th>--}}
{{--                                    <th class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">Action</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody class="before:block before:h-3 item-list">--}}
{{--                                <tr class="item">--}}
{{--                                    <td class="border border-slate-200 dark:border-zink-500">--}}
{{--                                        <select name="product_id[]" id="itemName1" required--}}
{{--                                                class="form-input border-slate-200 dark:border-zink-500--}}
{{--                                                focus:outline-none focus:border-custom-500--}}
{{--                                                disabled:bg-slate-100 dark:disabled:bg-zink-600--}}
{{--                                                dark:text-zink-100 dark:bg-zink-700">--}}
{{--                                            @if ($products->count() > 0)--}}
{{--                                                <option value="">---SELECT INGREDIENT---</option>--}}
{{--                                                @foreach ($products as $item)--}}
{{--                                                    <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->productUnit->name }})</option>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                        </select>--}}
{{--                                    </td>--}}
{{--                                    <td class="w-40 border border-slate-200 dark:border-zink-500">--}}
{{--                                        <div class="flex justify-center text-center input-step" bis_skin_checked="1">--}}
{{--                                            <input type="number" name="quantity[]" required class="w-full text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500 item-quantity" value="1" min="1" max="100"  step="0.0001" fdprocessedid="p0dnsn">--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    --}}{{--                                            <td class="w-40 border border-slate-200 dark:border-zink-500">--}}
{{--                                    --}}{{--                                                <input type="number" name="price[]" min="0" id="itemName1" class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-price" placeholder="00.00" required="" fdprocessedid="fuhoja">--}}
{{--                                    --}}{{--                                            </td>--}}

{{--                                    <td class="border border-slate-200 px-3.5 py-1.5 text-center dark:border-zink-500">--}}
{{--                                        --}}{{--                                                <button type="button" class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal" fdprocessedid="m5zt5c"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 inline-block mr-1 align-middle size-3"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg> <span class="align-middle">Delete</span></button>--}}
{{--                                    </td>--}}

{{--                                </tr>--}}

{{--                                </tbody>--}}


{{--                                <tbody class="before:block before:h-4" id="invoiceTable">--}}
{{--                                <tr>--}}
{{--                                    <td colspan="6">--}}
{{--                                        <a href="javascript:void(0)" id="addBtn"><button type="button" class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20" fdprocessedid="m6rou"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block mr-1 align-middle size-3"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg> <span class="align-middle">Add Ingredient</span></button></a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}

{{--                            </table>--}}
{{--                        </div>--}}





                    <div class="d-flex justify-content-start gap-2 mt-4">
                        <a href="{{ route('admin.topics.index') }}"
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

{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function () {--}}

{{--        const tableBody = document.getElementById('recipeTable');--}}
{{--        const addRowBtn = document.getElementById('addRow');--}}

{{--        function syncTableState() {--}}
{{--            [...tableBody.rows].forEach((row, index) => {--}}

{{--                // Radio value--}}
{{--                const radio = row.querySelector('.correct-radio');--}}
{{--                radio.value = index;--}}

{{--                // Highlight correct row--}}
{{--                if (radio.checked) {--}}
{{--                    row.classList.add('table-success', 'correct-row');--}}
{{--                    row.querySelector('button').disabled = true;--}}
{{--                    row.querySelector('button').classList.add('btn-secondary');--}}
{{--                    row.querySelector('button').classList.remove('btn-danger');--}}
{{--                    row.querySelector('button').innerHTML = '<span class="fas fa-lock"></span>';--}}
{{--                } else {--}}
{{--                    row.classList.remove('table-success', 'correct-row');--}}
{{--                    row.querySelector('button').disabled = false;--}}
{{--                    row.querySelector('button').classList.add('btn-danger');--}}
{{--                    row.querySelector('button').classList.remove('btn-secondary');--}}
{{--                    row.querySelector('button').innerHTML = '<span class="fas fa-trash"></span>';--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}

{{--        addRowBtn.addEventListener('click', function () {--}}
{{--            const row = document.createElement('tr');--}}

{{--            row.innerHTML = `--}}
{{--            <td class="text-center">--}}
{{--                <div class="form-check">--}}
{{--                    <input--}}
{{--                        class="form-check-input correct-radio"--}}
{{--                        type="radio"--}}
{{--                        name="correct_answer"--}}
{{--                        required--}}
{{--                    >--}}
{{--                </div>--}}
{{--            </td>--}}

{{--            <td>--}}
{{--                <input--}}
{{--                    type="text"--}}
{{--                    name="description[]"--}}
{{--                    class="form-control form-control-sm"--}}
{{--                    placeholder="Enter description"--}}
{{--                    required--}}
{{--                >--}}
{{--            </td>--}}

{{--            <td class="text-center">--}}
{{--                <button type="button" class="btn btn-sm btn-danger remove-row">--}}
{{--                    <span class="fas fa-trash"></span>--}}
{{--                </button>--}}
{{--            </td>--}}
{{--        `;--}}

{{--            tableBody.appendChild(row);--}}
{{--            syncTableState();--}}
{{--        });--}}

{{--        tableBody.addEventListener('change', function (e) {--}}
{{--            if (e.target.classList.contains('correct-radio')) {--}}
{{--                syncTableState();--}}
{{--            }--}}
{{--        });--}}

{{--        tableBody.addEventListener('click', function (e) {--}}
{{--            if (e.target.closest('.remove-row')) {--}}
{{--                e.target.closest('tr').remove();--}}
{{--                syncTableState();--}}
{{--            }--}}
{{--        });--}}

{{--        syncTableState();--}}
{{--    });--}}
{{--</script>--}}

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const tableBody = document.getElementById('recipeTable');
        const addRowBtn = document.getElementById('addRow');

        let draggedRow = null;

        function syncTableState() {
            [...tableBody.rows].forEach((row, index) => {
                const radio = row.querySelector('.correct-radio');
                const hidden = row.querySelector('.is-correct-input');
                const btn = row.querySelector('button');

                if (radio.checked) {
                    hidden.value = 1;
                    row.classList.add('table-success');
                    btn.disabled = true;
                    btn.className = 'btn btn-sm btn-secondary';
                    btn.innerHTML = '<span class="fas fa-lock"></span>';
                } else {
                    hidden.value = 0;
                    row.classList.remove('table-success');
                    btn.disabled = false;
                    btn.className = 'btn btn-sm btn-danger remove-row';
                    btn.innerHTML = '<span class="fas fa-trash"></span>';
                }
            });
        }

        // Add row
        addRowBtn.addEventListener('click', function () {
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
            if (e.target.closest('.remove-row')) {
                e.target.closest('tr').remove();
                syncTableState();
            }
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

        syncTableState();
    });
</script>







{{--<script>--}}


{{--    // price calculation--}}
{{--    const addBtn = document.querySelector('#addBtn');--}}
{{--    addBtn.addEventListener('click', (event) => {--}}
{{--        new_link()--}}
{{--    });--}}


{{--    document.addEventListener('click', function(event) {--}}
{{--        // Handle plus button--}}
{{--        if (event.target.closest('button.btn-plus')) {--}}
{{--            const inputElement = getDivFromTheElement(event.target);--}}
{{--            let inputVal = Number(inputElement.value);--}}
{{--            const maxVal = Number(inputElement.getAttribute('max'));--}}

{{--            if (inputVal < maxVal) {--}}
{{--                inputElement.value = inputVal + 1;--}}
{{--                updateQuantity(inputElement);--}}
{{--            }--}}
{{--        }--}}

{{--        // Handle minus button--}}
{{--        if (event.target.closest('button.btn-minus')) {--}}
{{--            const inputElement = getDivFromTheElement(event.target);--}}
{{--            let inputVal = Number(inputElement.value);--}}
{{--            const minVal = Number(inputElement.getAttribute('min'));--}}

{{--            if (inputVal > minVal) {--}}
{{--                inputElement.value = inputVal - 1;--}}
{{--                updateQuantity(inputElement);--}}
{{--            }--}}
{{--        }--}}

{{--        // ✅ Handle delete button--}}
{{--        // if (event.target.closest('.product-removal')) {--}}
{{--        //     const productRow = event.target.closest('.item');--}}
{{--        //     if (productRow) {--}}
{{--        //         productRow.remove();--}}
{{--        //     }--}}
{{--        // }--}}
{{--        if (event.target.closest('.product-removal')) {--}}
{{--            const productSection = event.target.closest('.item-list'); // Remove entire <tbody>--}}
{{--            if (productSection) {--}}
{{--                productSection.remove();--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}

{{--    function updateQuantity(quantityInput) {--}}
{{--        var productRow = quantityInput.closest('.item');--}}
{{--        var productList = quantityInput.closest('.item-list');--}}
{{--        var price = parseFloat(productRow.querySelector('.item-price')?.value || 0);--}}

{{--        var quantity = parseFloat(quantityInput.value);--}}
{{--        var linePrice = price * quantity;--}}
{{--        Array.from(productRow.getElementsByClassName('item-line-price')).forEach(function (e) {--}}
{{--            e.value = linePrice.toFixed(2);--}}
{{--            // recalculateCart();--}}
{{--        });--}}
{{--    }--}}

{{--    // Function to get the input element from the parent hierarchy--}}
{{--    function getDivFromTheElement(element) {--}}
{{--        let temp = element.parentNode.querySelector('input.item-quantity');--}}

{{--        if (!temp) {--}}
{{--            const upperParent = element.parentNode;--}}
{{--            return getDivFromTheElement(upperParent);--}}
{{--        }--}}
{{--        return temp;--}}
{{--    }--}}


{{--    var count = 2;--}}
{{--    function new_link() {--}}
{{--        var delLink =--}}
{{--            ` <tbody class="before:block before:h-3 item-list">--}}
{{--            <tr class="item">--}}
{{--                <td class="border border-slate-200 dark:border-zink-500">--}}
{{--                     <select name="product_id[]" id="itemName${count}" data-choices required--}}
{{--            --}}{{--                        class="form-input border-slate-200 dark:border-zink-500--}}
{{--            --}}{{--                               focus:outline-none focus:border-custom-500--}}
{{--            --}}{{--                               disabled:bg-slate-100 dark:disabled:bg-zink-600--}}
{{--            --}}{{--                               dark:text-zink-100 dark:bg-zink-700">--}}
{{--            --}}{{--                      @if ($products->count() > 0)--}}
{{--            --}}{{--                <option value="">---SELECT INGREDIENT---</option>--}}
{{--            --}}{{--@foreach ($products as $item)--}}
{{--            --}}{{--                <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->productUnit->name }})</option>--}}
{{--            --}}{{--                          @endforeach--}}
{{--            --}}{{--                @endif--}}
{{--            --}}{{--                </select>--}}
{{--            </td>--}}
{{--            <td class="w-40 border border-slate-200 dark:border-zink-500">--}}
{{--                <div class="flex justify-center text-center input-step">--}}
{{--                    <input type="number" name="quantity[]" required class="w-full text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500 item-quantity" value="1" min="1" max="100" step="0.0001">--}}
{{--                </div>--}}
{{--            </td>--}}

{{--           <td class="border border-slate-200 dark:border-zink-500 px-3.5 py-1.5 text-center">--}}
{{--                <button type="button" class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i data-lucide="trash-2" class="inline-block w-3 h-3 mr-1 align-middle"></i> <span class="align-middle">Delete</span></button>--}}
{{--            </td>--}}
{{--        </tr>--}}

{{--    </tbody>`--}}
{{--        document.getElementById("invoiceTable").insertAdjacentHTML("beforeBegin", delLink);--}}
{{--        count++;--}}

{{--        lucide.createIcons();--}}
{{--    }--}}

{{--</script>--}}



@endsection

@push('scripts')

@endpush

@push('scripts')

@endpush
