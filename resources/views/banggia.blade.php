@extends('template')
@section('title', 'Trường Tín | Bảng giá')
@section('content')
    <div class="page-template-bang-gia">
        <main id="main" class="main-content home">
            <article id="post-379" class="single-post-article clearfix  post-379 page type-page status-publish hentry">
                <div class="content-default single-post-wapper">
                    <div class="container">
                        <div class="row">
                            <div class="content-layout content-blog col-12">
                                <div class="inner-content-post">
                                    {!! $content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>
    <style>
        body {
            background: #fafafa;
        }
        .inner-content-post img {
            margin: auto !important;
            max-width: 100%;
        }
    </style>
@endsection
