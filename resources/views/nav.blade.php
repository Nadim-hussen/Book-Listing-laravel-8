<nav>
        <button class="nav-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="links">
        @if( session()->has('user') )
            <li><a href="home">Home</a></li>
           
           <li><a href="books">Book</a></li>
           <li><a href="logout">Logout</a></li>
        
        @else
           <li><a href="/">Registration</a></li>
           
            <li><a href="login">Login</a></li>

        @endif    
        </ul>
    </nav>
    
    <script>
        const navtoggle = document.querySelector('.nav-toggle');
        const links = document.querySelector('.links');
        navtoggle.addEventListener('click', function () {
            if (links.classList.contains('navlinks')) {
                links.classList.remove('navlinks')
            } else {
                links.classList.add('navlinks')
            }
        })
    </script>