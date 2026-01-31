@extends('layouts.falcon')

@section('title', 'Dashboard - Questions')

@section('content')

    {{-- Alerts --}}
    @if (session('success'))
        <x-alert type="success" :message="session('success')" />
    @endif


    <x-breadcrumb
        title="Dashboard"
        :items="[
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'Questions', 'url' => route('admin.questions.index')]
            ]"
    />


    <div class="card">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">All Questions</h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('admin.questions.create') }}"
                           class="btn btn-falcon-success btn-sm">
                            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                            <span class="ms-1">New</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body py-0 border-top">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-89b5a08b-76a9-43a0-9878-2cf3fec68e75" id="dom-89b5a08b-76a9-43a0-9878-2cf3fec68e75">
                    <div class="card shadow-none">
                        <div class="card-body p-0 pb-3">
                            <div class="table-responsive scrollbar mt-4">
                                <table class="table mb-0">
                                    <thead class="bg-200">
                                    <tr>
                                        <th class="align-middle white-space-nowrap">
                                            QID.
                                        </th>
                                        <th class="text-black dark__text-white align-middle">Question Type</th>
                                        <th class="text-black dark__text-white align-middle">Code</th>
                                        <th class="text-black dark__text-white align-middle">Discipline</th>
                                        <th class="text-black dark__text-white align-middle">Level</th>
                                        <th class="text-black dark__text-white align-middle">Chapter</th>
{{--                                        <th>Image</th>--}}
{{--                                        <th class="text-black dark__text-white align-middle">Description </th>--}}
                                        <th class="text-black dark__text-white align-middle">Status</th>
                                        <th class="text-black dark__text-white align-middle white-space-nowrap pe-3">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="bulk-select-body">
                                    @if (count($questions) > 0)
                                        @foreach ($questions as $question)
                                    <tr>
                                        <td class="align-middle white-space-nowrap">{{ $question->question_uid }}</td> <!-- Serial number -->
                                        <th class="align-middle">{{$question->question_type}}</th>
                                        <th class="align-middle">{{$question->code}}</th>
                                        <th class="align-middle">{{$question->chapter->level->discipline->name}}</th>
                                        <th class="align-middle">{{$question->chapter->level->name}}</th>
                                        <th class="align-middle">{{$question->chapter->name}}</th>
{{--                                        <td class="align-middle white-space-nowrap">--}}
{{--                                        <a href="{{ $question->image--}}
{{--                                                    ? asset('storage/'.$topic->image)--}}
{{--                                                    : asset('assets/img/default.png') }}" data-gallery="gallery-2" class="glightbox">--}}
{{--                                            <img class="img-fluid rounded" src="{{ $topic->image--}}
{{--                                                    ? asset('storage/'.$topic->image)--}}
{{--                                                    : asset('assets/falcon/images/default.png') }}" alt="" width="300" />--}}
{{--                                        </a>--}}
{{--                                        </td>--}}


{{--                                        <td class="align-middle">{{$topic->description}}</td>--}}
                                        <td class="align-middle">
                                            <span class="badge badge rounded-pill d-block p-2 @if($question->status) badge-subtle-success @else badge-subtle-danger @endif ">
                                                <span class="ms-1 fas @if($question->status) fa-check @else fa-times-circle @endif" data-fa-transform="shrink-2">

                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-flex align-items-center gap-2">

                                                {{-- Edit --}}
                                                <a href="{{ route('admin.questions.edit', $question->id) }}"
                                                   class="btn btn-link p-0"
                                                   data-bs-toggle="tooltip"
                                                   data-bs-placement="top"
                                                   title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>

                                                {{-- Delete --}}
                                                <button
                                                    class="btn btn-link p-0 ms-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal"
                                                    data-delete-id="{{ $question->id }}"
                                                    data-route="{{ route('admin.questions.delete', ':question') }}"
                                                    onclick="handleDeleteValue(event)"
                                                    title="Delete">
                                                    <span class="fas fa-trash-alt text-500"></span>
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center"
                                                colspan="100">
                                                No Record Found!
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Delete Confirmation Modal -->
    <!-- Delete Confirmation Modal (Falcon) -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 480px">
            <div class="modal-content position-relative">

                <!-- Close -->
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                    <button
                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>

                <!-- Body -->
                <div class="modal-body p-0">

                    <!-- Header -->
                    <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">
                        <h4 class="mb-1">Delete Record</h4>
                    </div>

                    <!-- Content -->
                    <div class="p-4 text-center">
                        <img
                            src="{{ asset('assets/img/icons/delete.png') }}"
                            alt="Delete"
                            height="64"
                            class="mb-3">

                        <h5 class="mb-2">Are you sure?</h5>
                        <p class="text-500 mb-4">
                            This action cannot be undone.
                        </p>

                        <!-- ACTIONS -->
                        <div class="d-flex justify-content-center gap-2">
                            <button
                                type="button"
                                class="btn btn-falcon-secondary"
                                data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <form method="POST">
                                @csrf
                                @method('POST')

                                <!-- REQUIRED by your JS -->
                                <input
                                    type="hidden"
                                    name="deleteQuestionId"
                                    id="deleteQuestionId">

                                <button type="submit" class="btn btn-danger">
                                    Yes, Delete It
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>









    <script>
        function handleDeleteValue(e) {
            e.preventDefault();
            var form = document.querySelector('#deleteModal form');
            var value = e.currentTarget.dataset.deleteId;
            var url = e.currentTarget.dataset.route;
            form.action = url.replace(':question', value);
            var deleteInput = document.getElementById('deleteQuestionId');
            deleteInput.value = value;
        }
    </script>

@endsection


