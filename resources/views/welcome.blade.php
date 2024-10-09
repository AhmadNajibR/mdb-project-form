@extends('layouts.main')

@section('content')

<div class="container pt-3">
    <!-- Layouts Form dan Formcheckbox/Switch -->
    <div class="row">
        <!-- Layouts Form -->
        <div class="col-12 col-md-6 mb-3">
            <div class="border p-3 h-100">
                @include('layouts.form')
            </div>
        </div>


        <div class="col-12 col-md-6">
            <!-- Formcheckbox -->
            <div class="border p-3 mb-3">
                @include('layouts.formcheckbox')
            </div>

            <!-- formgroup -->
            <div class="border p-3 mb-3">
                @include('layouts.formgroup')
            </div>

            <!-- Switch -->
            <div class="border p-3">
                @include('layouts.switch')
            </div>
        </div>
    </div>
</div>

@endsection
