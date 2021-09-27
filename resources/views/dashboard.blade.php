@extends("layout")


@section("content")

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Dashboard</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/report">Report</a>
            </li>
        </ul>
    </div>
</nav>



<div class="table-responsive mt-5 w-75 text-center align-center m-auto">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Domain Name</th>
                <th scope="col">Ip Address</th>
                <th scope="col">Browser Agent Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $domains as $domain)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$domain->name}}</td>
                <td>{{$domain->ip_address}}</td>
                <td>{{$domain->browser_agent}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
