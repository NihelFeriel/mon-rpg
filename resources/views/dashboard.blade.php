<div class="box">
<h1>Bonjour {{auth()->user()->pseudo}}</h1>

<a href="#" onclick="document.getElementById('logout-form').submit()">
<form action="{{route('logout')}}" method="'post" id="logout-form">
@method('PUT') {{-- <input type="hidden" name="_method" value="PUT" /> --}}
@csrf {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
</form>
Se déconnecter
</a>

<a href="#" onclick="document.getElementById('personnage-form').submit()">
<form action="{{ route ('personnages.create')}}" method="'post" id="personnage-form">
 {{-- <input type="hidden" name="_method" value="PUT" /> --}}
@csrf {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
</form>
Personnage
</a>
</div>

<style>
   

</style>