<div class="card mb-3">
    <div class="card-body bg-body-tertiary" style="border-top-right-radius: .375rem; border-top-left-radius: .375rem;">
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-16e83e07-ecf1-41d3-84c1-42d0c471f7bb" id="dom-16e83e07-ecf1-41d3-84c1-42d0c471f7bb">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @foreach($items as $item)
                            @if($loop->last)
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                            @else
                                <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                            @endif
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>



