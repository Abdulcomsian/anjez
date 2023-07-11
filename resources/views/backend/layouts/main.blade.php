@include('backend.layouts.header')
@include('backend.layouts.admindashboard.adminheader')
@include('backend.layouts.admindashboard.sidebar')
@yield('content')
{{-- @include('frontend.layouts.navbar') --}}
{{-- @include('frontend.layouts.sidebar') --}}
@include('backend.layouts.admindashboard.footer')
