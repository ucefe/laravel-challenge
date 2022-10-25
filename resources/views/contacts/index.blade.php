<x-layout>

@unless (count($contacts)==0)
<div class="row m-3">

@foreach ($contacts as $key=>$contact)
 <div class="card col-lg-3 col-md-6 py-3 m-1" >
    <div class="card-body">
      <h5 class="card-title">{{$contact['firstname']}} {{$contact['lastname']}} </h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$contact['phone']}}</h6>
      <form method="POST" action="/contacts/{{$key}}">
        @csrf
        @method('DELETE')
        <button href="#" class="btn btn-danger">Delete Contact</button>     
      </form>
    </div>
  </div>

@endforeach
</div>

@else
<h5> No contacts </h5>
@endunless


</x-layout>