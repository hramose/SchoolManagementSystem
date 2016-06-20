@extends('forum::layouts.master')

@section('navbar-content')
    @if (Auth::guest())
        <li><a href="{{ url('/forum/login') }}">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->userable->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/forum/logout') }}">Logout</a></li>
            </ul>
        </li>
    @endif
@endsection

@section('content')
@include('forum::partials.breadcrumbs', compact('parentCategory', 'category', 'thread'))

<h2>{{ trans('forum::base.new_reply') }} ({{$thread->title}})</h2>

@include(
    'forum::partials.forms.post',
    array(
        'form_url'          => $thread->replyRoute,
        'form_classes'      => '',
        'show_title_field'  => false,
        'post_content'      => '',
        'submit_label'      => trans('forum::base.reply'),
        'cancel_url'        => $thread->route
    )
)
@overwrite
