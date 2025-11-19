@extends('layouts.app')

@section('content')
<h2>商品一覧</h2>

<a href="/item/create">新規追加</a>
<a href="{{ route('item.edit', 1) }}">編集</a>
@endsection
