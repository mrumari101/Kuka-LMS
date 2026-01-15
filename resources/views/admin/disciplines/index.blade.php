@extends('layouts.falcon')

@section('title', 'Disciplines')

@section('content')

    <div class="card mb-3">
        <div class="card-body bg-body-tertiary" style="border-top-right-radius: .375rem; border-top-left-radius: .375rem;">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-16e83e07-ecf1-41d3-84c1-42d0c471f7bb" id="dom-16e83e07-ecf1-41d3-84c1-42d0c471f7bb">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Disciplines</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Listing</h5>
                </div>
{{--                <div class="col-auto ms-auto">--}}
{{--                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-89b5a08b-76a9-43a0-9878-2cf3fec68e75" type="button" role="tab" aria-controls="dom-89b5a08b-76a9-43a0-9878-2cf3fec68e75" aria-selected="true" id="tab-dom-89b5a08b-76a9-43a0-9878-2cf3fec68e75">Preview</button>--}}
{{--                        <button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-c72fa6a2-79ff-45d1-a24a-e8bf895f94bd" type="button" role="tab" aria-controls="dom-c72fa6a2-79ff-45d1-a24a-e8bf895f94bd" aria-selected="false" id="tab-dom-c72fa6a2-79ff-45d1-a24a-e8bf895f94bd" tabindex="-1">Code</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="card-body py-0 border-top">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-89b5a08b-76a9-43a0-9878-2cf3fec68e75" id="dom-89b5a08b-76a9-43a0-9878-2cf3fec68e75">
                    <div class="card shadow-none">
                        <div class="card-body p-0 pb-3">
                            <div class="d-flex align-items-center justify-content-end my-3">
                                <div id="bulk-select-replace-element">

                                    <a href="{{ route('admin.disciplines.create') }}"
                                       class="btn btn-falcon-success btn-sm">
                                        <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                        <span class="ms-1">New</span>
                                    </a>

{{--                                    <button class="btn btn-falcon-success btn-sm" type="button"><svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="ms-1">New</span></button>--}}

{{--                                   --}}



                                </div>
                                <div class="d-none ms-3" id="bulk-select-actions">
                                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                                            <option selected="selected">Bulk actions</option>
                                            <option value="Delete">Delete</option>
                                            <option value="Archive">Archive</option>
                                        </select><button class="btn btn-falcon-danger btn-sm ms-2" type="button">Apply</button></div>
                                </div>
                            </div>
                            <div class="table-responsive scrollbar">
                                <table class="table mb-0">
                                    <thead class="bg-200">
                                    <tr>
                                        <th class="align-middle white-space-nowrap">
                                            <div class="form-check mb-0"><input class="form-check-input" id="bulk-select-example" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;bulk-select-body&quot;,&quot;actions&quot;:&quot;bulk-select-actions&quot;,&quot;replacedElement&quot;:&quot;bulk-select-replace-element&quot;}"></div>
                                        </th>
                                        <th class="text-black dark__text-white align-middle">Name</th>
                                        <th class="text-black dark__text-white align-middle">Description </th>
                                        <th class="text-black dark__text-white align-middle">Status</th>
                                        <th class="text-black dark__text-white align-middle white-space-nowrap pe-3">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="bulk-select-body">
                                    <tr>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="checkbox-1" data-bulk-select-row="{&quot;id&quot;:1,&quot;name&quot;:&quot;Kit Harington&quot;,&quot;nationality&quot;:&quot;British&quot;,&quot;gender&quot;:&quot;Male&quot;,&quot;age&quot;:32}"></div>
                                        </td>
                                        <th class="align-middle">Kit Harington</th>
                                        <td class="align-middle">British</td>
                                        <td class="align-middle">
                                            <span class="badge badge rounded-pill d-block p-2 badge-subtle-success">Active <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> <!-- Font Awesome fontawesome.com --></span>
                                        </td>
                                        <td class="text-end">
                                            <div><button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit"><svg class="svg-inline--fa fa-edit fa-w-18 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path></svg><!-- <span class="text-500 fas fa-edit"></span> Font Awesome fontawesome.com --></button>
                                                <button class="btn btn-link p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete"><svg class="svg-inline--fa fa-trash-alt fa-w-14 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg><!-- <span class="text-500 fas fa-trash-alt"></span> Font Awesome fontawesome.com --></button>
                                            </div>
                                        </td>
                                    </tr>
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




@endsection


