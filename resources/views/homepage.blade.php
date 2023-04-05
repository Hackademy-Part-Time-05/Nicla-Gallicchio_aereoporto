<x-main>
    <x-header/>

    <ul>
        @foreach ($voli as $volo)
        {{-- <li><a href="{{route('show',['id'=>$volo['id']])}}">{{$volo['destination']}}</a></li> --}}
            <x-card :volo="$volo" />
        @endforeach
    
    
    </ul>
</x-main>