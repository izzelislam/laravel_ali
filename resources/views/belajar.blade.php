<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Belajar Laravel</title>
  </head>
  <body>
   
    @foreach ($data as $item )
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Jumlah Covid Di Provinsi</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $item->attributes->Provinsi }}</h6>
        <br>
        <h6 class="card-subtitle mb-2 text-muted">Positif{{ $item->attributes->Kasus_Posi }}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Sembuh{{ $item->attributes->Kasus_Semb }}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Meninggal{{ $item->attributes->Kasus_Meni }}</h6>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    @endforeach
    

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>