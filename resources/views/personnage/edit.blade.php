<h1> Change de personnage</h1>

<form action="{{route('personnage.edit')}}" method="POST">
 
{{-- <input type="hidden" name="_method" value="PUT" /> --}}
 {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}

        <label for="nom">Nom :</label>
        <input type="text" name="name" id="name" value="" placeholder="Votre nom" />
        <label for="description">description :</label>
         <input type="text" name="description" id="decription" value="" placeholder="Description" />
   <select class="form-select" aria-label="Default select example" name="specialite" id="specialite">
                            <option value="" disabled selected>Type de personnage</option>
                            <option value="Guerrier">Guerrier</option>
                            <option value="Mage">Mage</option>
                            <option value="Druide">Druide</option>
                            <option value="Assassin">Assassin</option>
                            <option value="Berseker">Berseker</option>
                            <option value="Archer">Archer</option>
                          </select>
    
</select>
<input type="number" name="mag" id="mag" value={{$mag}} readonly  />
<input type="number" name="for" id="for" value={{$for}} readonly  />
<input type="number" name="int" id="int" value={{$agi}} readonly  />
<input type="number" name="agi" id="agi" value={{$int}} readonly  />
<input type="number" name="pv" id="pv" value={{$pv}} readonly  />

        <input type="submit" value="Envoyer" />
       
    </form>

    