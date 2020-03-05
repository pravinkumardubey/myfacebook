<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
  <script src="{{asset('js/comment.js')}}"></script>
  <script src="{{asset('js/login.js')}}"></script>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{__('home.languageLable')}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="locale/en">English</a>
          <a class="dropdown-item" href="locale/hindi">हिंदी</a>
          <a class="dropdown-item"href="locale/franch">française</a>
          
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">{{__('home.home')}} <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('category')}}">{{__('home.totalCategoryLable')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('bloblist')}}">{{__('home.totalBlobsLable')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('viewdesc')}}">{{__('home.totalBlobsLable')}}</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
      {{__ ('home.search')}}</button>
    </form>
  </div>
</nav>
@yield('body')
  </body>
  </html>