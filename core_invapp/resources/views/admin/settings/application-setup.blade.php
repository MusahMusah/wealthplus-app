@extends('admin.layouts.minimal')
@section('title', __('Application Quick Setup'))

@php 

$service = !(isset($type) && $type=='system') ? 'system' : false;
$notice = ((gss('system' .'_'. 'service') && !gas()) || (session()->has('notice') && session()->pull('notice') == $service)) ? true : false;
$notice = (session()->has('system'. '_' .'revoke')) ? false : $notice;    

@endphp

@section('content')
<div class="nk-content-body">
    <div class="content-page wide-lg m-auto">
        <div class="nk-block-head nk-block-head-lg text-center mt-md-3">
            <h4 class="title text-center pb-2">{{ __('Quick Application Setup') }}</h4>
            <p class="w-max-550px m-auto">{{ __('This setup wizard helps you to complete your application setting quickly which is required to run the application. You can update all the setting anytime later.') }}</p>
        </div>

        <div class="nk-block wide-xs m-auto">
            <div class="card card-bordered">
                <div class="card-inner card-inner-lg">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <div class="alert-text">
                            <div class="alert-text">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                        <button class="close" data-dismiss="alert"></button>
                    </div>
                    @endif

                    <div class="quick-setup">
                        @if($state!=='complete')
                        @include('admin.settings.quick.form-'.$state, ['step' => $state])
                        @endif
                    </div>
                </div>
            </div>
            <div class="quick-skip text-center mt-4">
                <a class="link link-light" href="{{ route('admin.quick-setup', ['skip' => 'quick']) }}">{{ __("Dont ask me again") }}</a>
            </div>
        </div>
    </div>
</div>
@endsection