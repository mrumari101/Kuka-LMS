@extends('layouts.falcon')

@section('title', 'Dashboard - Disciplines')

@section('content')

    {{-- Alerts --}}
    @if (session('success'))
        <x-alert type="success" :message="session('success')" />
    @endif


    <x-breadcrumb
        title="Dashboard"
        :items="[
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'Disciplines', 'url' => route('admin.disciplines.index')]
            ]"
    />


    <div class="card">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">All Disciplines</h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('admin.disciplines.create') }}"
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
                                        <th>Image</th>
                                        <th class="text-black dark__text-white align-middle">Description </th>
                                        <th class="text-black dark__text-white align-middle">Status</th>
                                        <th class="text-black dark__text-white align-middle white-space-nowrap pe-3">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="bulk-select-body">
                                    @if (count($disciplines) > 0)
                                        @foreach ($disciplines as $discipline)
                                    <tr>
                                        <td class="align-middle white-space-nowrap">{{ $loop->iteration }}</td> <!-- Serial number -->
                                        <th class="align-middle">{{$discipline->name}}</th>
                                        <th class="align-middle">{{$discipline->code}}</th>
                                        <td class="align-middle white-space-nowrap">
                                        <a href="{{ $discipline->image
                                                    ? asset('storage/'.$discipline->image)
                                                    : asset('assets/img/default.png') }}" data-gallery="gallery-2" class="glightbox">
                                            <img class="img-fluid rounded" src="{{ $discipline->image
                                                    ? asset('storage/'.$discipline->image)
                                                    : asset('assets/images/default.png') }}" alt="" width="300" />
                                        </a>
                                        </td>


                                        <td class="align-middle">{{$discipline->description}}</td>
                                        <td class="align-middle">
                                            <span class="badge badge rounded-pill d-block p-2 @if($discipline->status) badge-subtle-success @else badge-subtle-danger @endif ">
                                                <span class="ms-1 fas @if($discipline->status) fa-check @else fa-times-circle @endif" data-fa-transform="shrink-2">

                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-flex align-items-center gap-2">

                                                {{-- Edit --}}
                                                <a href="{{ route('admin.disciplines.edit', $discipline->id) }}"
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
                                                    data-delete-id="{{ $discipline->id }}"
                                                    data-route="{{ route('admin.disciplines.delete', ':discipline') }}"
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
                                    name="deleteDisciplineId"
                                    id="deleteDisciplineId">

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








    {{--    <div class="card mb-3">--}}
{{--        <div class="card-header">--}}
{{--            <div class="row flex-between-end">--}}
{{--                <div class="col-auto align-self-center">--}}
{{--                    <h5 class="mb-0" data-anchor="data-anchor" id="example">Example<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#example" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>--}}
{{--                </div>--}}
{{--                <div class="col-auto ms-auto">--}}
{{--                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-32210c85-4a89-442f-9d59-8b3e0f27671f" type="button" role="tab" aria-controls="dom-32210c85-4a89-442f-9d59-8b3e0f27671f" aria-selected="true" id="tab-dom-32210c85-4a89-442f-9d59-8b3e0f27671f">Preview</button>--}}
{{--                        <button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-9602e4e5-4f97-4e9e-8303-27599856c80f" type="button" role="tab" aria-controls="dom-9602e4e5-4f97-4e9e-8303-27599856c80f" aria-selected="false" id="tab-dom-9602e4e5-4f97-4e9e-8303-27599856c80f" tabindex="-1">Code</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-body bg-body-tertiary">--}}
{{--            <div class="tab-content">--}}
{{--                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-32210c85-4a89-442f-9d59-8b3e0f27671f" id="dom-32210c85-4a89-442f-9d59-8b3e0f27671f">--}}
{{--                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">Launch demo modal</button>--}}
{{--                    <div class="modal fade" id="error-modal" tabindex="-1" style="display: none;" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">--}}
{{--                            <div class="modal-content position-relative">--}}
{{--                                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">--}}
{{--                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body p-0">--}}
{{--                                    <div class="rounded-top-3 py-3 ps-4 pe-6 bg-body-tertiary">--}}
{{--                                        <h4 class="mb-1" id="modalExampleDemoLabel">Add a new illustration </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="p-4 pb-0">--}}
{{--                                        <form>--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label class="col-form-label" for="recipient-name">Recipient:</label>--}}
{{--                                                <input class="form-control" id="recipient-name" type="text">--}}
{{--                                            </div>--}}
{{--                                            <div class="mb-3">--}}
{{--                                                <label class="col-form-label" for="message-text">Message:</label>--}}
{{--                                                <textarea class="form-control" id="message-text"></textarea>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>--}}
{{--                                    <button class="btn btn-primary" type="button">Understood </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--    <div id="deleteModal" modal-center--}}
{{--         class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">--}}
{{--        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">--}}
{{--            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">--}}
{{--                <div class="float-right">--}}
{{--                    <button data-modal-close="deleteModal"--}}
{{--                            class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x"--}}
{{--                                       class="size-5"></i></button>--}}
{{--                </div>--}}
{{--                <img src="data:image/png;base64,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"--}}
{{--                     alt="" class="block h-12 mx-auto">--}}
{{--                <div class="mt-5 text-center">--}}
{{--                    <h5 class="mb-1">Are you sure?</h5>--}}
{{--                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>--}}
{{--                    <div class="flex justify-center gap-2 mt-6">--}}
{{--                        <button type="reset" data-modal-close="deleteModal"--}}
{{--                                class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>--}}
{{--                        <form action="#" method="POST">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="deleteDisciplineId" id="deleteDisciplineId" value="">--}}
{{--                            <button type="submit"--}}
{{--                                    class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes,--}}
{{--                                Delete It!</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <script>--}}
{{--        function handleDeleteValue(event) {--}}
{{--            const button = event.currentTarget;--}}
{{--            const route = button.getAttribute('data-route');--}}

{{--            const form = document.getElementById('deleteForm');--}}
{{--            form.setAttribute('action', route);--}}

{{--            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));--}}
{{--            modal.show();--}}
{{--        }--}}
{{--    </script>--}}



    <script>
        function handleDeleteValue(e) {
            e.preventDefault();
            var form = document.querySelector('#deleteModal form');
            var value = e.currentTarget.dataset.deleteId;
            var url = e.currentTarget.dataset.route;
            form.action = url.replace(':discipline', value);
            var deleteInput = document.getElementById('deleteDisciplineId');
            deleteInput.value = value;
        }
    </script>

@endsection


