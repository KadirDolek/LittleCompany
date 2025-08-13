@extends('Layout.app')

@section('title','MyLittleCompany')

@section('content')
    
<section>

         @include('Layout.partials.frontEnd.carousel')

</section>
<section>

         @include('Layout.partials.frontEnd.service')

</section>
<section>

         @include('Layout.partials.frontEnd.prod')

</section>



   

@endsection