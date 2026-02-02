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


    <x-breadcrumb
        title="Dashboard"
        :items="[
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'Questons', 'url' => route('admin.questions.index')],
                ['label' => 'Detail', 'url' => route('admin.questions.show',['question'=>$question->id])]
            ]"
    />

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Question Detail<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('admin.questions.index') }}"
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
{{--                    <form action="{{ route('admin.topics.update', ['topic' => $topic->id]) }}" method="POST" enctype="multipart/form-data">--}}
{{--                        @csrf--}}

                        <div class="mb-3">
                            <label class="form-label">
                                Discipline : {{$question->chapter->level->discipline->name}}
                            </label>
                        </div>

                        {{-- Level --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Level : {{$question->chapter->level->name}}
                            </label>
                        </div>



                        {{-- Level --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Chapter : {{$question->chapter->name}}
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Difficulty Level : {{$question->difficultyLevel->name}}
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Status : {{($question->status) ? 'Active' : 'Unactive'}}
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Question Type : {{$question->question_type}}
                            </label>
                        </div>

                    @if($question->question_type=='mcq')
                    <div >
                        <div class="mb-3">
                            <label class="form-label" for="mcq_description">
                                Mcq Description :
                            </label>
                               {!! old('mcq_description')  !!}
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Mcq File (PDF/DOCX) :
                            </label>

                            {{$question->mcq_file}}
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="status">
                                MCQ Options <span class="text-danger">*</span>
                            </label>

                            <div class="table-responsive">
                                <table class="table table-bordered align-middle fs--1">
                                    <thead class="bg-200 text-uppercase">
                                    <tr>
                                        <th style="width: 140px;">Correct</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($question->mcqOptions as $option)
                                        <tr class="{{ $option->is_correct ? 'table-success' : 'table-danger' }}">
                                            <td class="text-center">
                                                @if($option->is_correct)
                                                    <i class="fas fa-check-circle text-success fa-2x"></i>
                                                @else
                                                    <i class="fas fa-times-circle text-danger fa-2x"></i>
                                                @endif
                                            </td>

                                            <td>
                                                {{ $option->description }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($question->question_type=='descriptive')
                    <div >
                        <div class="mb-3">
                            <label class="form-label" for="question_description">
                                Question Description :
                            </label>
                                {!! $question->question_description  !!}
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Question File (PDF/DOCX) :
                            </label>

                           {{$question->question_file}}
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="solution_description">
                                Solution Description :
                            </label>

                                {!! $question->solution_description  !!}

                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Solution File (PDF/DOCX) :
                            </label>
                            {{$question->solution_file}}
                        </div>
                    </div>
                    @endif






                        <div class="d-flex justify-content-start gap-2 mt-4">
                            <a href="{{ route('admin.questions.index') }}"
                               class="btn btn-falcon-default btn-sm">
                                <span class="fas fa-arrow-left me-1"></span>
                                Cancel
                            </a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
