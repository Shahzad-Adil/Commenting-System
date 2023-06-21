<div>
    @foreach ($comments as $comment)

        <div class="col-12 mb-3">
            <div class="card card-white post">
                <div class="post-heading">
                    <div class="image" style="float: left;">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class=" meta" style="float: left;">
                        <div class="title h5">
                            <b>{{ $comment->user != null ? $comment->user->name : 'User' }}</b>
                        </div>
                        <h6 class="text-muted time">{{ \Carbon\Carbon::parse($comment->created_at)->diffForhumans() }}</h6>
                    </div>
                </div>
                <div class="post-description">
                    <p>{{ $comment->comment }}</p>

                </div>
            </div>
        </div>

    @endforeach
</div>
