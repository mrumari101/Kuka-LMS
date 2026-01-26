@extends('layouts.falcon')

{{--    @if ($errors->any())--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <x-alert type="danger" :message="$error" />--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--@php die @endphp--}}


@section('title', 'Dashboard - Chapters')

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
                ['label' => 'Chapters', 'url' => route('admin.chapters.index')],
                ['label' => 'Add', 'url' => route('admin.chapters.create')]
            ]"
    />

<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Add Chapter<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>
            </div>
            <div class="col-auto ms-auto">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                    <a href="{{ route('admin.chapters.index') }}"
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
                <form action="{{ route('admin.chapters.store') }}" method="POST" enctype="multipart/form-data">
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
                        <select id="level_id" class="form-select @error('level_id') is-invalid @enderror" name="level_id" disabled data-old="{{ old('level_id') }}">
                            <option value="">Select Level</option>
                        </select>
                        @error('level_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>




                    <div class="mb-3">
                        <label class="form-label" for="name">
                            Name <span class="text-danger">*</span>
                        </label>
                        <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Name">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="sequence">
                            Sequence# <span class="text-danger">*</span>
                        </label>
                        <input class="form-control @error('name') is-invalid @enderror" name="sequence" id="sequence" min="1" max="99" type="number" value="{{ old('sequence') }}" placeholder="Sequence#">
                        @error('sequence')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" placeholder="Description">{{ old('description') }}</textarea>
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
                            Image <span class="text-danger">*</span>
                        </label>
                        <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-start gap-2 mt-4">
                        <a href="{{ route('admin.chapters.index') }}"
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

</script>




@endsection
