<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/toastr.min.css">
    @livewireStyles

    <style>
        .card-white  .card-heading {
        color: #333;
        background-color: #fff;
        border-color: #ddd;
        border: 1px solid #dddddd;
        }
        .card-white  .card-footer {
        background-color: #fff;
        border-color: #ddd;
        }
        .card-white .h5 {
            font-size:14px;
            //font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .card-white .time {
            font-size:12px;
            //font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .post .post-heading {
        height: 95px;
        padding: 20px 15px;
        }
        .post .post-heading .avatar {
        width: 60px;
        height: 60px;
        display: block;
        margin-right: 15px;
        }
        .post .post-heading .meta .title {
        margin-bottom: 0;
        }
        .post .post-heading .meta .title a {
        color: black;
        }
        .post .post-heading .meta .title a:hover {
        color: #aaaaaa;
        }
        .post .post-heading .meta .time {
        margin-top: 8px;
        color: #999;
        }
        .post .post-image .image {
        width: 100%;
        height: auto;
        }
        .post .post-description {
        padding: 15px;
        }
        .post .post-description p {
        font-size: 14px;
        }
        .post .post-description .stats {
        margin-top: 20px;
        }
        .post .post-description .stats .stat-item {
        display: inline-block;
        margin-right: 15px;
        }
        .post .post-description .stats .stat-item .icon {
        margin-right: 8px;
        }
        .post .post-footer {
        border-top: 1px solid #ddd;
        padding: 15px;
        }
        .post .post-footer .input-group-addon a {
        color: #454545;
        }
        .post .post-footer .comments-list {
        padding: 0;
        margin-top: 20px;
        list-style-type: none;
        }
        .post .post-footer .comments-list .comment {
        display: block;
        width: 100%;
        margin: 20px 0;
        }
        .post .post-footer .comments-list .comment .avatar {
        width: 35px;
        height: 35px;
        }
        .post .post-footer .comments-list .comment .comment-heading {
        display: block;
        width: 100%;
        }
        .post .post-footer .comments-list .comment .comment-heading .user {
        font-size: 14px;
        font-weight: bold;
        display: inline;
        margin-top: 0;
        margin-right: 10px;
        }
        .post .post-footer .comments-list .comment .comment-heading .time {
        font-size: 12px;
        color: #aaa;
        margin-top: 0;
        display: inline;
        }
        .post .post-footer .comments-list .comment .comment-body {
        margin-left: 50px;
        }
        .post .post-footer .comments-list .comment > .comments-list {
        margin-left: 50px;
        }
    </style>
</head>
<body>

    {{-- content start --}}

    <div class="container mb-5">
        <div class="row m-3">

            <div class="col-12 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset($post->image)}}" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{ $post->description }}</p>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row m-3">
            <div class="col-12 ">
                Comments
            </div>
        </div>

        <div class="row m-3">

            @livewire('comment',['post_id' => $post_id])

        </div>

        <div class="row m-3">
            <div class="col-12 mb-3">
                <form id="post-comment-form" class="form" method="post">
                    @csrf
                    <div class="row mb-1">
                        <div class="col-12">
                            <textarea class="form-control" name="comment" id="post-comment-input" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12">
                            <button class="btn btn-secondary" type="submit" id="post-comment-btn">Post Comment</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="modal" tabindex="-1" id="login-modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Login</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="login-form" class="form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="mb-1 row justify-content-center">
                                            <div class="col-12">
                                                <input type="email" id="email" class=" form-control "
                                                    name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row justify-content-center">
                                            <div class="col-12">
                                                <div class="custom_eay_col">
                                                <input type="password" id="password" class="mb-1  form-control"
                                                    name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center pe-4 ps-4">
                                        <div class="text-center">
                                            <button type="submit"
                                                class="w-100 btn btn-success waves-effect waves-float waves-light p-1">Login</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>

    </div>

    {{-- content end --}}

    {{-- script start --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('app-assets') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('app-assets') }}/js/toastr.min.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

    @livewireScripts

    <script>

        var validator = $("#login-form").validate({
            rules: {
                'email': {
                    required: true,
                },
                'password': {
                    required: true,
                },
            },
            errorClass: 'is-invalid text-danger',
            errorElement: "span",
            wrapper: "div",
            submitHandler: function(form) {
                $('.is-invalid').removeClass('is-invalid');
                $('.errorClass').remove();

                var _token = '{{ csrf_token() }}';
                $.ajax({
                    url: '{{ route('login.custom') }}',
                    type: 'post',
                    data: {
                        'email': $('#email').val(),
                        'password': $('#password').val(),
                        '_token': _token,
                    },
                    success: function(data) {

                        if (data.status == true) {
                            toastr.success(data.message);
                            postComment();
                            $('#login-modal').modal('hide');
                        } else {
                            toastr.error(data.message);
                        }
                    },
                    error: function(error) {
                        toastr.error(data.message);
                    }
                });

            }
        });


        var validator = $("#post-comment-form").validate({
            rules: {
                'comment': {
                    required: true,
                },
            },
            errorClass: 'is-invalid text-danger',
            errorElement: "span",
            wrapper: "div",
            submitHandler: function(form) {
                $('.is-invalid').removeClass('is-invalid');
                $('.errorClass').remove();
                @auth
                    postComment();
                @else
                    $('#login-modal').modal('show');
                @endauth
            }
        });

        function postComment() {
            var _token = '{{ csrf_token() }}';
            $.ajax({
                url: '{{ route('comment.post') }}',
                type: 'post',
                data: {
                    'comment': $('#post-comment-input').val(),
                    'post_id': '{{ $post_id }}',
                    '_token': _token,
                },
                success: function(data) {

                    if (data.status == true) {
                        toastr.success(data.message);
                        $('#post-comment-form')[0].reset()
                    } else {
                        toastr.error(data.message);
                    }
                },
                error: function(error) {
                    toastr.error(data.message);
                }
            });
        }

        //Pusher
        var pusher = new Pusher('766381460178fd97f49b', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('comment-posted-channel');
        channel.bind('comment-posted-event', function(data) {
            Livewire.emit('updateComments', data.post_id);
        });

    </script>
    {{-- script end --}}

</body>
</html>
