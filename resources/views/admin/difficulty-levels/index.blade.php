@extends('layouts.falcon')

@section('title', 'Dashboard - Difficulty Levels')

@section('content')

    {{-- Alerts --}}
    @if (session('success'))
        <x-alert type="success" :message="session('success')" />
    @endif


    <x-breadcrumb
        title="Dashboard"
        :items="[
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'Difficulty Levels', 'url' => route('admin.difficulty-levels.index')]
            ]"
    />


    <div class="card">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">All Difficulty Levels</h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('admin.difficulty-levels.create') }}"
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
{{--                            <div class="d-flex align-items-center justify-content-end my-3">--}}
{{--                                <div id="bulk-select-replace-element">--}}

{{--                                   --}}

{{--                                    <button class="btn btn-falcon-success btn-sm" type="button"><svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="ms-1">New</span></button>--}}

{{--                                   --}}



{{--                                </div>--}}
{{--                                <div class="d-none ms-3" id="bulk-select-actions">--}}
{{--                                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">--}}
{{--                                            <option selected="selected">Bulk actions</option>--}}
{{--                                            <option value="Delete">Delete</option>--}}
{{--                                            <option value="Archive">Archive</option>--}}
{{--                                        </select><button class="btn btn-falcon-danger btn-sm ms-2" type="button">Apply</button></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="table-responsive scrollbar mt-4">
                                <table class="table mb-0">
                                    <thead class="bg-200">
                                    <tr>
                                        <th class="align-middle white-space-nowrap">
                                            Sr.
                                        </th>
                                        <th class="text-black dark__text-white align-middle">Name</th>
                                        <th class="text-black dark__text-white align-middle">Code</th>
                                        <th class="text-black dark__text-white align-middle">Status</th>
                                        <th class="text-black dark__text-white align-middle white-space-nowrap pe-3">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="bulk-select-body">
                                    @if (count($difficultyLevels) > 0)
                                        @foreach ($difficultyLevels as $difficultyLevel)
                                    <tr>
                                        <td class="align-middle white-space-nowrap">{{ $loop->iteration }}</td> <!-- Serial number -->
                                        <th class="align-middle">{{$difficultyLevel->name}}</th>
                                        <th class="align-middle">{{$difficultyLevel->code}}</th>
                                        <td class="align-middle">
                                            <span class="badge badge rounded-pill d-block p-2 @if($difficultyLevel->status) badge-subtle-success @else badge-subtle-danger @endif ">
                                                <span class="ms-1 fas @if($difficultyLevel->status) fa-check @else fa-times-circle @endif" data-fa-transform="shrink-2">

                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-flex align-items-center gap-2">

                                                {{-- Edit --}}
                                                <a href="{{ route('admin.difficulty-levels.edit', $difficultyLevel->id) }}"
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
                                                    data-delete-id="{{ $difficultyLevel->id }}"
                                                    data-route="{{ route('admin.difficulty-levels.delete', ':difficultyLevel') }}"
                                                    onclick="handleDeleteValue(event)"
                                                    title="Delete">
                                                    <span class="fas fa-trash-alt text-500"></span>
                                                </button>
{{--                                                <button--}}
{{--                                                    type="button"--}}
{{--                                                    class="btn btn-link p-0"--}}
{{--                                                    data-bs-toggle="tooltip"--}}
{{--                                                    data-bs-placement="top"--}}
{{--                                                    title="Delete"--}}
{{--                                                    data-bs-target="#deleteModal"--}}
{{--                                                    data-delete-id="{{ $discipline->id }}"--}}
{{--                                                    data-route="{{ route('admin.disciplines.destroy', $discipline->id) }}"--}}
{{--                                                    onclick="handleDeleteValue(event)">--}}
{{--                                                    <span class="text-500 fas fa-trash-alt"></span>--}}
{{--                                                </button>--}}

                                            </div>
                                        </td>

                                        {{--                                        <td class="text-end">--}}
{{--                                            <div>--}}
{{--                                                <button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit"><span class="text-500 fas fa-edit"></span></button>--}}
{{--                                                <button class="btn btn-link p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
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
{{--                                <p class="mt-3 mb-2">Click the button to get selected rows</p><button class="btn btn-warning" data-selected-rows="data-selected-rows">Get Selected Rows</button><pre id="selectedRows"></pre>--}}
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
                                    name="deleteDifficultyLevelId"
                                    id="deleteDifficultyLevelId">

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
            form.action = url.replace(':difficultyLevel', value);
            var deleteInput = document.getElementById('deleteDifficultyLevelId');
            deleteInput.value = value;
        }
    </script>

@endsection


