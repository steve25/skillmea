 @php
     $dir_model = new App\Models\Director();
     
     $selected = false;
     
     if (isset($director)) {
         $selected = $director->id;
     } elseif (isset($movie)) {
         $selected = $movie->director_id;
     }
 @endphp

 <select name="director_id" onchange="{{ $submit ? 'this.form.submit()' : '' }}">
     <option value="">All Directors</option>
     @foreach ($dir_model->getDirectors() as $director)
         <option {{ $selected === $director->id ? 'selected' : '' }} value="{{ $director->id }}">{{ $director->name }}
         </option>
     @endforeach
 </select>
