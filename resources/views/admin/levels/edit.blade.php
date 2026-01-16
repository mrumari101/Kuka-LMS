@extends('layouts.falcon')

 @if ($errors->any())
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
@endif
{{--@php die @endphp--}}


@section('title', 'Dashboard - Levels')

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
                ['label' => 'Levels', 'url' => route('admin.levels.index')],
                ['label' => 'Update', 'url' => route('admin.levels.edit',['level'=>$level->id])]
            ]"
    />

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Edit Level<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('admin.levels.index') }}"
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
                    <form action="{{ route('admin.levels.update', ['level' => $level->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="discipline_id">Discipline</label>
                            <select class="form-select @error('discipline_id') is-invalid @enderror" name="discipline_id" id="discipline_id" aria-label="Default select example">
                                @if ($disciplines->count() > 0)
                                    <option >Select Discipline</option>
                                    @foreach ($disciplines as $item)
                                        <option value="{{ $item->id }}" {{ old('discipline_id',$level->discipline_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                @else
                                    <option selected="selected">Not Found</option>
                                @endif
                            </select>
                            @error('discipline_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name',$level->name) }}" placeholder="Name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" placeholder="Description">{{ old('description',$level->descripion) }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" name="status" id="status" aria-label="Default select example">
                                <option selected="selected">Select Status</option>
                                <option value="1" {{ old('status',$level->status) == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status',$level->status) == '0' ? 'selected' : '' }}>Unactive</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-start gap-2 mt-4">
                            <a href="{{ route('admin.levels.index') }}"
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
@endsection
