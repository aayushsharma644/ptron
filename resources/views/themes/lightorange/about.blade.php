@extends($theme.'layouts.app')
@section('title',trans('About Us'))

@section('content')
    @include($theme.'sections.feature')
    @include($theme.'sections.how-it-work')
    @include($theme.'sections.how-we-work')
    @include($theme.'sections.know-more-us')
    @if(basicControl()->top_investor)
        @include($theme.'sections.investor')
    @endif
    @include($theme.'sections.we-accept')
    @include($theme.'sections.faq')
@endsection
