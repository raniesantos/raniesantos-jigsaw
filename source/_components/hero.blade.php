<section
    class="hero
        {{ $size ? " is-{$size}" : '' }}
        {{ $type ? " is-{$type}" : '' }}
        {{ $image ? ' hero-image' : '' }}
        {{ $image && $title ? ' overlay-dark' : '' }}
    "
    {!! $image ? ' style="background-image: url(' . $image . ');"' : '' !!}
>
    <div class="hero-body{{ $centered ? ' has-text-centered' : '' }}">
        <div class="container">
            <h1 class="title">{{ $title }}</h1>
            @if ($subtitle)
                <h2 class="subtitle">{{ $subtitle }}</h2>
            @endif
        </div>
    </div>
</section>
