<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>


        a {
            color: #5d596c !important;
            text-decoration: none !important;
        }

        a:hover {
            text-decoration:none !important;
            cursor:pointer !important;
        }

        .card {
            background-clip: padding-box;
            box-shadow: 0 0.25rem 1.125rem rgba(75, 70, 92, 0.1);
        }

        .card-img, .card-img-top {
            border-top-left-radius: var(--bs-card-inner-border-radius);
            border-top-right-radius: var(--bs-card-inner-border-radius);
        }

        .card-img, .card-img-top, .card-img-bottom {
            width: 100%;
        }

        img, svg {
            vertical-align: middle;
        }

        .card-title {
            margin-bottom: var(--bs-card-title-spacer-y);
        }

        h5, .h5 {
            font-size: 1.125rem;
        }

        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 600;
            line-height: 1.37;
            color: #5d596c;
        }

        *, *::before, *::after {
            box-sizing: border-box;
        }

        h5 {
            display: block;
            font-size: 0.83em;
            margin-block-start: 1.67em;
            margin-block-end: 1.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

    </style>
</head>
<body>

    {{-- content start --}}

    {{-- <div class="container"> --}}
        <div class="row m-3">

            @foreach ($posts as $post)

            <div class="col-12 col-md-4 col-lg-4 mb-3">
                <div class="card h-100">
                        <a href="{{ route('post', ['id' => $post->id]) }}">
                        <img class="card-img-top" src="{{asset($post->image)}}" alt="Card image cap" />
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <p class="card-text">{{ $post->description }}</p>
                        </div>
                    </a>
                    </div>
                </div>
            @endforeach

        </div>
    {{-- </div> --}}

    {{-- content end --}}

    {{-- script start --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- script end --}}

</body>
</html>
