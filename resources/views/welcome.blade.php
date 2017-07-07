@extends('template.bootstrap')

@section('style')
    @parent
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 300;
            margin: 0;
        }

        .full-height {
            height: 80vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md text-center">
                Quran
                &#8226;
                <span
                    dir="rtl"
                    lang="ar"
                    style="
                        font-family: qalammajeed;
                    "
                >
                    القرآن
                </span>
            </div>
            <p class="lead">
                <b>Akses Pintas &#8226;</b>
                Tambahkan Format URI
                <br>
                <b>{nomor-surah}/{nomor-ayat-dari}/{nomor-ayat-hingga}</b>
                <ul>
                    Contoh: 
                    <li>
                        Surat Al-Fatihah, 
                        <a href="{{ url('/1') }}">
                            {{ url('/1') }}
                        </a>
                    </li>
                    <li>
                        Surat Al-Baqarah ayat no.1 <i><u>saja</u></i>, 
                        <a href="{{ url('/2/1') }}">
                            {{ url('/2/1') }}
                        </a>
                    </li>
                    <li>
                        Surat Ali Imran ayat <i><u>172-173</u></i>
                        <a href="{{ url('/3/172/173') }}">
                            {{ url('/2/1') }}
                        </a>
                    </li>
                </ul>
            </p>
            <!--
            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
            -->
        </div>
    </div>
@endsection
