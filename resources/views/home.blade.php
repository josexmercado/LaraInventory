@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome  {{ Auth::user()->name }}!

                     <nav class="navbar navbar-expand-lg navbar-light bg-light">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarNavDropdown">
                       <ul class="navbar-nav">
                         <li class="nav-item active">
                           <a class="nav-link" href="{{ url('/inventory') }}">View Inventory<span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item active">
                           <a class="nav-link" href="#">View Suppliers<span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item active">
                           <a class="nav-link" href="#">View Customers<span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item active">
                           <a class="nav-link" href="#">Reports<span class="sr-only">(current)</span></a>
                         </li>

                         <li class="nav-item dropdown active">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Edit Stocks
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <a class="dropdown-item" href="#">Stock In</a>
                             <a class="dropdown-item" href="#">Stock Out</a>
                           </div>
                         </li>
                       </ul>
                     </div>
                   </nav>
                    
                    @yield('inventory')
                
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
