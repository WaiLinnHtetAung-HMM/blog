<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="./index.html">Creative Coder</a>
    <div class="d-flex">
      <a href="/#blogs" class="nav-link">Blogs</a>
      @auth
        <a href="" class="nav-link">{{auth()->user()->username}}</a>
        <form action="/logout" method="post"> 
          @csrf
          <button class="nav-link btn btn-link">Logout</button>
        </form>
      @else
        <a href="/register" class="nav-link">Register</a>
      @endauth
      <a href="#subscribe" class="nav-link">Subscribe</a>
    </div>
  </div>
</nav>