<h1>
   salut
</h1>


<a href="#" onclick="document.getElementById('logout-form').submit()">
<form action="{{route('personnage.edit')}}" method="'post" id="logout-form">
@method('PUT') {{-- <input type="hidden" name="_method" value="PUT" /> --}}
@csrf {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
</form>
Se déconnecter
</a>