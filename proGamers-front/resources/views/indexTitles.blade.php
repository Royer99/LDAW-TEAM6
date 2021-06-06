<html>
<meta>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="{{asset('/css/main.css')}}" rel="stylesheet">
<body>
<!--navbar-->
<x-navbar/>
<div class="container-fluid">
    <x-sidebar/>
    <!--form-->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($titles as $titlex)
        <div class="col">
            <div class="card card h-100" style="width: 18rem;">
                <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimages-na.ssl-images-amazon.com%2Fimages%2FI%2F512dVKB22QL.png&imgrefurl=https%3A%2F%2Fwww.amazon.com%2F-%2Fes%2Fdp%2FB01NCJDPER&tbnid=e89JtULndtYHSM&vet=12ahUKEwiJ9ODz9NvwAhUR0awKHY4xDRYQMygLegUIARDvAQ..i&docid=FY0-iIip_kxc4M&w=512&h=512&q=minecraft&ved=2ahUKEwiJ9ODz9NvwAhUR0awKHY4xDRYQMygLegUIARDvAQ" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$titlex['title']}}</h5>
                    <p class="card-text">{{$titlex['description']}}</p>
                    <p>{{$titlex['edition']}}</p>
                    <p>{{$titlex['version']}}</p>
                    <a href="#" class="btn btn-primary">detalle</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </main>
    </div>
    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="{{asset('/js/title.js')}}"></script>
</body>
</html>