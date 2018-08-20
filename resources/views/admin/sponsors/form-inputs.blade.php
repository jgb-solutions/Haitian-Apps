<div class="form-group">
    <label for="name">Nom</label>
    <input type="text"
        class="form-control"
        id="name"
        name="name"
        placeholder="Entrer le nom du pays"
        value="{{!empty($sponsor) ? $sponsor->name : old('name')}}">
</div>

<div class="form-group">
    <label for="group">Choisir Le Niveau Du Sponsor</label>
    <select class="form-control" id="group" name="weight">
        @foreach ($levels as $level)
            <option value="{{$level->weight}}"
                {{ (!empty($sponsor) && $sponsor->weight == $level->weight || old('weight') == $level->weight) ? 'selected' : ''}}>
                {{$level->name}}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control summernote"
        id="description" rows="3"
        name="description">{{!empty($sponsor) ? $sponsor->description : old('description')}}</textarea>
</div>

<div class="form-group">
    <label for="name">Téléphones</label>
    <input type="text"
        class="form-control"
        name="phones"
        id="phones"
        placeholder="Entrer les numéros de téléphones"
        value="{{!empty($sponsor) ? $sponsor->phones : old('phones')}}">
</div>

<div class="form-group">
    <label for="code">Logo</label>
    <input type="file"
        class="form-control"
        id="logo"
        name="logo"
        accept="image/*">
</div>
