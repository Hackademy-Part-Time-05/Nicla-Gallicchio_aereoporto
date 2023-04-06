<x-main>

<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title display-4 fw-bold">{{$volo['destination']}}</h5>
          <p class="card-text">Partenza ore: {{$volo['time']['departure']}}</p>
          <p class="card-text">Arrivo ore: {{$volo['time']['arrival']}}</p>
          <a href="#" class="btn btn-primary">Prenota</a>
        </div>
      </div>
    </div>
    
</x-main>