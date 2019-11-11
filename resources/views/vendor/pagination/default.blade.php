@if ($paginator->hasPages())
<ul class="pagination align-items-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    {{-- <li class="disabled"><span>&laquo;</span></li> --}}
    <li class="disabled page-item btn-prev btn">
        <a class="page-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                x="0px" y="0px" width="12px" height="12px" viewBox="0 0 41.999 41.999"
                style="enable-background:new 0 0 41.999 41.999; transform: rotate(180deg);" xml:space="preserve">
                <path
                    d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z"
                    fill="#e4e4e4" />
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
        </a>
    </li>
    @else
    {{-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li> --}}
    <li class="page-item btn-prev btn">
        <a class="page-link" href={{ $paginator->previousPageUrl() }}>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                x="0px" y="0px" width="12px" height="12px" viewBox="0 0 41.999 41.999"
                style="enable-background:new 0 0 41.999 41.999; transform: rotate(180deg);" xml:space="preserve">
                <path
                    d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z"
                    fill="#e4e4e4" />
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
        </a>
    </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item active"></li>
    {{-- <li class="active"><span>{{ $page }}</span></li> --}}
    @else
    <li class="page-item"><a class="page-link" href="{{ $url }}"></a></li>
    {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="page-item btn-next btn">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                x="0px" y="0px" width="12px" height="12px" viewBox="0 0 41.999 41.999"
                style="enable-background:new 0 0 41.999 41.999;" xml:space="preserve">
                <path
                    d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z"
                    fill="#e4e4e4" />
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
        </a>
    </li>
    {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li> --}}
    @else
    <li class="disabled page-item btn-next btn">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                x="0px" y="0px" width="12px" height="12px" viewBox="0 0 41.999 41.999"
                style="enable-background:new 0 0 41.999 41.999;" xml:space="preserve">
                <path
                    d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z"
                    fill="#e4e4e4" />
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
        </a>
    </li>
    {{-- <li class="disabled"><span>&raquo;</span></li> --}}
    @endif
</ul>
@endif