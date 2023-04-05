


<div class="card m-2" style="width: 18rem; display:inline-block;">
    <img src="{{$volo['image']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$volo['destination']}}</h5>
      <a href="{{route('show', ['id'=> $volo['id']])}}" class="btn btn-primary">Vedi</a>
    </div>
  </div>


