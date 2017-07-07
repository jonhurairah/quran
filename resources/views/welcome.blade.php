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
            font-size: 72px;
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

        p.lead {
            padding: 8px;
        }
    </style>
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md text-center">
                Quran
                <span class="hidden-xs">
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
                </span>
            </div>
            <p class="lead">
                <b>Akses Pintas &#8226;</b>
                Tambahkan Format URI
                <br>
                <b>
                    <span class="hidden-xs">
                        {nomor-surah}/{nomor-ayat-dari}/{nomor-ayat-hingga}
                    </span>
                    <span class="visible-xs">
                        {#surah}/{dari}/{hingga}
                    </span>
                </b>
                <ul>
                    Contoh: 
                    <li>
                        <a href="{{ url('/1') }}">
                            Surat Al-Fatihah
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/2/1') }}">
                            Surat Al-Baqarah ayat pertama
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/3/172/173') }}">
                            Surat Ali Imran ayat 172-173
                        </a>
                    </li>
                </ul>
            </p>
        </div>
    </div>
@endsection
