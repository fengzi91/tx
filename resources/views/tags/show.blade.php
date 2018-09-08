@extends('layouts.app')

@section('content')
<div class="mdui-container">
<div class="mdui-row mdui-m-t-5">
    <div class="mdui-col-md-8 mdui-col-offset-md-2">
        <div class="mdui-clearfix">
            <div class="mdui-float-left mdui-p-l-2">
                <div class="mdui-typo-headline">与{{ $tag->name }}有关的梗</div>
            </div>
            <div class="mdui-float-right mdui-p-r-2">
                <a href="{{ route('topics.create') }}" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">&#xe145;</i></a>
            </div>
        </div>
        <div class="mdui-divider" style="height:2px;margin-top:2px;"></div>
    </div>
</div>
<div class="mdui-row">
    <div class="mdui-col-md-8 mdui-col-offset-md-2">
    @include('topics._topic_list', ['topics' => $topics])
    </div>
</div>
<div class="mdui-row">
    <div class="g-pagination">{!! $topics->appends(Request::except('page'))->render() !!}</div>
</div>
</div>
@stop
