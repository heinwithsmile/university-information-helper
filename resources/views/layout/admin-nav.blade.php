<div class="container-fluid bg-primary sticky-top">
    <nav class="container-fluid navbar  navbar-expand-lg navbar-light navbar-toggleable-sm">
        <a class="navbar-brand text-white" href="#">TTU Chatbot</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active ">
                    <a class="nav-link text-white " href="{{route('dashboard')}}"><i class="fa-solid fa-chart-line"></i> Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="{{route('category')}}"><i class="fa fa-file fa-lg" aria-hidden="true"></i> Add Category</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="{{route('category-view')}}"><i class="fa fa-database fa-lg" aria-hidden="true"></i>Category</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="{{route('add-QA')}}"><i class="fa fa-pencil  fa-lg" aria-hidden="true"></i> Add Question & Answer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('query')}}"><i class="fa fa-gears fa-lg" aria-hidden="true"></i> Query QA</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="{{route('student')}}"><i class="fa fa-users fa-lg" aria-hidden="true"></i> Students</a>
                </li>

                <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="#"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                </li>

            </ul>

        </div>
    </nav>
</div>