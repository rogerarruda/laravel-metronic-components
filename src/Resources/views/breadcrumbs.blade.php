@if (count($breadcrumbs))
    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last && !$loop->first)
                <li class="m-nav__item">
                    <a href="{{ $breadcrumb->url }}" class="m-nav__link" title="{{ $breadcrumb->title }}">
                        <span class="m-nav__link-text">
                            {{ $breadcrumb->title }}
                        </span>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
            @elseif($loop->first)
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ $breadcrumb->url }}" class="m-nav__link m-nav__link--icon" title="{{ $breadcrumb->title }}">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
            @else
                <li class="m-nav__item">
                    <span class="m-nav__link-text">
                        {{ $breadcrumb->title }}
                    </span>
                </li>
            @endif
        @endforeach
    </ul>
@endif
