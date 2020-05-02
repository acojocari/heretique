@if ($breadcrumbs)
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">

                    {{--Get the current page name --}}
                    @foreach($breadcrumbs as $breadcrumb)
                        @if ($loop->last)
                            <h1>{{$breadcrumb->title}}</h1> {{-- TODO Use Breadcrumbs::current() and keep only one foreanch()--}}
                        @endif
                    @endforeach

                    {{--Get the father page--}}
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if ($breadcrumb->url && !$loop->last)
                            <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                            <i class="fas fa-arrow-right mx-2"></i>
                        @else
                            <a class="active">{{ $breadcrumb->title }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif