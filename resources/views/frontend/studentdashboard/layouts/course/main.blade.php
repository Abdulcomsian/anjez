<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" data-textdirection="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
@include('frontend.studentdashboard.layouts.header')
@include('frontend.studentdashboard.layouts.navbar')

@yield('content')
</html>
{{-- @include('frontend.studentdashboard.layouts.course.sidebar') --}}

