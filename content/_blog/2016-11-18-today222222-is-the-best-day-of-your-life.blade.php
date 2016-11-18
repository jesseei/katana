@extends('_includes.blog_post_base')

@section('post::title', 'Today2222222222222 Is The Best Day Of Your Life')
@section('post::date', 'Nov 18, 2016')
@section('post::brief', '做点中文测试')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    The easiest way to accomplish visual balance is to align elements and structure designs with a clear grid. It guides us in the right direction when placing elements and determine dimensions, and it makes it easier for the user to process the interface.
	最简单的方法是

    > 下面介绍点新东西

    好吧，just kidding
    @endmarkdown

@stop
