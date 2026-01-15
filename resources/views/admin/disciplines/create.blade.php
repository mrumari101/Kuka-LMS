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
                        <li class="breadcrumb-item" aria-current="page">Disciplines</li>
                        <li class="breadcrumb-item active" aria-current="page">Add New</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Add Discipline<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="margin-left: 0.1875em; padding-right: 0.1875em; padding-left: 0.1875em;"></a></h5>
            </div>
            <div class="col-auto ms-auto">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                    <a href="{{ route('admin.disciplines.index') }}"
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
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="basic-form-name">Name</label>
                        <input class="form-control" id="basic-form-name" type="text" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-form-textarea">Description</label>
                        <textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-form-gender">Status</label>
                        <select class="form-select" id="basic-form-gender" aria-label="Default select example">
                            <option selected="selected">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Unactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input class="form-control" type="file">
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
