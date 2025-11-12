<!DOCTYPE html>
<html lang="ja">

<!-- TODO: headタグ: componens/head.blade.php -->
@include('components.head', ['title' => 'Spring Apparel'])

<body class="min-h-screen">
    <!-- TODO: ヘッダナビゲーション(include): componens/nav.blade.php -->
    @include('components.nav')

    <!-- TODO: メインコンテンツ(yield): content -->
    @yield('content')
</body>

</html>
