
<div class="container-fluid bg-primary sticky-top">
<nav class="container-fluid navbar  navbar-expand-lg navbar-light navbar-toggleable-sm">
  <a class="navbar-brand text-white" href="#">တီတီယူ မွာေမးၾကည့္</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto navbar">
        <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('home')}}"><i class="fa fa-fw fa-university fa-lg"></i> Home</a>
        </li>
        @if(\Illuminate\Support\Facades\Auth::check())
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('question')}}"><i class="fa fa-fw fa-comments-o fa-lg"></i> Chatting</a>
        </li>
        @endif
      <li class="nav-item about ">
        <a class="nav-link text-white" href="{{route('about')}}"><i class="fa fa-fw fa-group fa-lg"></i> About <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item  dropdown" onclick="myFunction()">
        @if(\Illuminate\Support\Facades\Auth::check())

                <a class="nav-link text-white " href="{{'logout'}}"><i class="fa fa-sign-out fa-lg"></i> Logout </a>
          @else
        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-list fa-lg"></i> Members
        </a>
        <div  id="myDropdown" class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
            <a class="nav-link text-white" href="{{route('register')}}"><i class="fa fa-fw fa-sign-in fa-lg"></i> Register</a>

            <a class="nav-link text-white" href="{{route('login')}}"><i class="fa fa-fw fa-sign-in fa-lg"></i> Login</a>

            <a class="nav-link text-white" href="{{route('admin-login')}}"><i class="fa fa-fw fa-sign-in fa-lg"></i> Admin Login <span class="sr-only">(current)</span></a>
          @endif
        </div>
      </li>
    </ul>
    
  </div>
</nav>
</div>

<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>