<header>
    <div class="logo">My awesome app</div>
    <div class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-item nav-link" href="{{ url('/posts') }}">Posts</a>
                <a class="nav-item nav-link active" href="{{ url('/posts/create') }}">Create Posts</a>
            </div>
        </div>
    </div>
</header>