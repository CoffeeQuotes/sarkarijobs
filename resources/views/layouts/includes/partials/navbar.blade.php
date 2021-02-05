
<nav  class="navbar navbar-expand-lg navbar-warning fixed-top" style="background-color: #fff8dc!important;">
    <div class="container">
                <a class="navbar-brand" href="/"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid" alt=""></a>
                    <button class="navbar-toggler" style="border-radius: 50px;
background: linear-gradient(145deg, #2c3132, #343a3c); " type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <svg enable-background="new 0 0 24 24" fill="#E0DFD5" height="12" viewBox="0 0 24 24" width="12" xmlns="http://www.w3.org/2000/svg"><path d="m4.5 6h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m4.5 15h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m4.5 24h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m13.5 6h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m13.5 15h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m13.5 24h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m22.5 6h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m22.5 15h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/><path d="m22.5 24h-3c-.827 0-1.5-.673-1.5-1.5v-3c0-.827.673-1.5 1.5-1.5h3c.827 0 1.5.673 1.5 1.5v3c0 .827-.673 1.5-1.5 1.5zm-3-5c-.276 0-.5.225-.5.5v3c0 .275.224.5.5.5h3c.276 0 .5-.225.5-.5v-3c0-.275-.224-.5-.5-.5z"/></svg>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor03">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link font-weight-bolder text-dark"  href="{{route('article','Jobs')}}">Latest Jobs
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link font-weight-bolder text-dark"    href="{{route('article','Results')}}">Result</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link font-weight-bolder text-dark"   href="{{route('article','Admit Card')}}">Admit Card</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link font-weight-bolder text-dark"   href="{{route('article','Answer Key')}}">Answer Key</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link font-weight-bolder text-dark"   href="{{route('article','Syllabus')}}">Syllabus</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link font-weight-bolder text-dark"   href="{{route('article','Admissions')}}">Admission</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link  font-weight-bolder text-dark"   href="/">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link font-weight-bolder text-dark" href="https://www.facebook.com/groups/srijobs" target="_blank"><svg fill="#0F8FF2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg> Facebook Group
                    </a> 
                    </li>
                    {{-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </li> --}}
                  </ul>
                  {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                  </form> --}}
                </div>
                 </div>
              </nav>
             