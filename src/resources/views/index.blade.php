<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{$content}}</h1>

    {{-- Bladeの基本 --}}
    {{--
    コメント
    --}}

    {{--
    @php
    phpの処理
    @endphp
    --}}


    {{-- 条件分岐 --}}
    {{--
    @if(条件)
    // 条件がtrueの時の処理
    @else
    // 条件がfalseの時の処理
    @endif
    --}}

    {{--
    @unless(条件)
    //条件が偽の時の処理
    @else
    //条件が真の時の処理
    @endunless
    --}}

    {{--
    @switch(変数)
        @case(0)
        //0の時の処理 @break
        @case(1)
        //1の時の処理 @break
        @default
        //その他の時の処理 @endswitch
    --}}

    {{--
    @empty(変数)
    //変数が0やfalseやnullの時の処理
    @else
    //変数が0やfalseやnullでない時の処理
    @endempty
    --}}

    {{--
    @isset(変数)
    //変数が定義されていてnullでない時の処理
    @else
    //変数が定義されていないかnullの時の処理
    --}}


    {{-- 繰り返し --}}
    {{--
    @for(初期値; 条件; 変化式)
    //繰り返す処理
    @endfor
    --}}

    {{--
    @foreach(配列 as 変数)
    //繰り返す処理
    @endforeach
    --}}

    {{--
    @forelse(配列 as 変数)
    //配列に値がある時の処理
    @empty
    //配列が空の時の処理
    @endforelse
    --}}

    {{--
    @while(条件)
    //繰り返す処理
        @break,@continue
    @endwhile
    --}}


    {{-- 表示 --}}
    {{--
    @extends('ディレクトリ名.ファイル名')
    --}}

    {{--
    @section(セクション名)
    //セクションの内容
    @endsection
    --}}

    {{--
    @yield(セクション名)
    --}}

    {{--
    @component('ディレクトリ名.ファイル名')
    //コンポーネントの表示内容 変数を引き渡したい時は @slotディレクティブを使用
    @endcomponent
    --}}

    {{--
    @include('ディレクトリ名.ファイル名') //変数がある場合には第二引数に連想配列として渡す
    --}}

    {{--
    @each
    --}}
</body>

</html>