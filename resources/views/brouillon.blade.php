<form>
    <div class="form-group">
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example ">
          <option >Ville-départ</option>
          <option value="1">Tchamba</option>
          <option value="2">Sokodé</option>
          <option value="3">Kara</option>
          <option value="3">Bafilo</option>
          <option value="3">Lomé</option>
      </select>
    </div>
    <div class="form-group mt-3  shadow">
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
           @foreach ($trips as $Trajet)
            {{ $Trajet->ville-destination}}
           @endforeach
        </select>
    </div>
    <div class="form-group mt-3 shadow">
      <input type="date" class="form-control" >
    </div>
   <div class="text-center">
     <button type="submit" class="btn btn-success btn-block btn-lg cherchez mt-3">Rerchez</button>
  </div>
</form>
