<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Todos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link {{Request::is(route('todo.index')) ? 'active':''}}" href="{{route('todo.index')}}">Home</a>
                <a class="nav-item nav-link {{Request::is(route('todo.create'))? 'active':''}}" href="{{route('todo.create')}}">Create</a>
            </div>
        </div>
    </div>
</nav>