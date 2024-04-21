@php
    $scrollTo = $scrollTo ?? 'body';
@endphp

<script>
    function scrollToElement(selector) {
        const element = document.querySelector(selector);
        if (element) {
            element.scrollIntoView();
        }
    }
</script>

<style>
    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
    }

    .pagination .page-item {
        margin: 0 5px;
    }

    .pagination .page-link {
        border: 1px solid #007bff;
        padding: 5px 10px;
        color: #007bff;
        text-decoration: none;
        cursor: pointer;
        border-radius: 5px;
        background-color: white;
    }

    .pagination .page-item.active .page-link,
    .pagination .page-item:hover .page-link {
        background-color: #007bff;
        color: white;
    }

    .pagination .page-item.disabled .page-link {
        color: #ccc;
        cursor: not-allowed;
        background-color: #f9f9f9;
        border-color: #eee;
    }

    /* Additional styling for the first page or when "Previous" button is disabled */
    .pagination .page-item:first-child .page-link,
    .pagination .page-item:first-child.disabled .page-link {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    /* Adjust margin for the "Previous" button when it's disabled or on the first page */
    .pagination .page-item:first-child .page-link,
    .pagination .page-item:first-child.disabled .page-link {
        margin-left: 0;
    }

    .pagination-info {
        text-align: center;
        color: #666;
        margin-bottom: 10px;
        font-size: 14px;
    }
</style>


<div>
    @if ($paginator->hasPages())
        <div class="pagination-container">
            <nav aria-label="Pagination Navigation">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    <li class="page-item {{ $paginator->onFirstPage() ? 'd-none' : '' }}">
                        @if (!$paginator->onFirstPage())
                            <button type="button" class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')" onclick="scrollToElement('{{ $scrollTo }}')" wire:loading.attr="disabled">
                                @lang('pagination.previous')
                            </button>
                        @else
                            <span class="page-link">@lang('pagination.previous')</span>
                        @endif
                    </li>

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                        @elseif (is_array($element))
                            @foreach ($element as $page => $url)
                                <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                                    @if ($page == $paginator->currentPage())
                                        <span class="page-link">{{ $page }}</span>
                                    @else
                                        <button type="button" class="page-link" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" onclick="scrollToElement('{{ $scrollTo }}')">
                                            {{ $page }}
                                        </button>
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                        @if ($paginator->hasMorePages())
                            <button type="button" class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')" onclick="scrollToElement('{{ $scrollTo }}')" wire:loading.attr="disabled">
                                @lang('pagination.next')
                            </button>
                        @else
                            <span class="page-link">@lang('pagination.next')</span>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Displaying page count and results -->
        <div class="pagination-info">
            <p>
                Showing <span class="font-weight-bold">{{ $paginator->firstItem() }}</span> to
                <span class="font-weight-bold">{{ $paginator->lastItem() }}</span> of
                <span class="font-weight-bold">{{ $paginator->total() }}</span> results
            </p>
        </div>
    @endif
</div>
