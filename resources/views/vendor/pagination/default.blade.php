@if ($paginator->hasPages())

    <div class="main-paginate-div">
        <div>
            @if ($paginator->onFirstPage())
                <button class="forword-backword-btn" disabled style="margin-right: 20px;">
                    {{-- <x-common-svgs type="pagination-left-arrow-button"></x-common-svgs> --}}
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="forword-backword-btn" style="margin-right: 20px;">
                    {{-- <x-common-svgs type="pagination-left-arrow-button"></x-common-svgs> --}}
                </a>
            @endif
        </div>
        <div class="paginate_btns">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="btn btn-primary paginate-btn"
                                style="color: white;">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}" class="btn paginate-btn a-link">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
        <div>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="forword-backword-btn" style="margin-left: 20px;">
                    {{-- <x-common-svgs type="pagination-right-arrow-button"></x-common-svgs> --}}
                </a>
            @else
                <button class="forword-backword-btn" disabled style="margin-left: 20px;">
                    {{-- <x-common-svgs type="pagination-right-arrow-button"></x-common-svgs> --}}
                </button>
            @endif

        </div>
    </div>
@endif
