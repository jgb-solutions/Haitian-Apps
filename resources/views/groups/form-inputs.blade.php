<div class="form-group">
    <label for="name">Pays</label>
    <input type="text"
        class="form-control"
        id="name"
        name="name"
        placeholder="Entrer le nom du pays"
        value="{{!empty($team) ? $team->name : old('name')}}">
</div>
<div class="form-group">
    <label for="code">Code ISO</label>
    <input type="text"
        class="form-control"
        id="code"
        name="code"
        placeholder="Entrer le code ISO du pays"
        value="{{!empty($team) ? $team->code : old('code')}}">
</div>
<div class="form-group">
    <label for="group">Choisir un groupe</label>
    <select class="form-control" id="group" name="group">
        <option value="">Choisir Un Groupe</option>
        @foreach ($groups as $group)
            <option value="{{!empty($team) ? $team->group : (old('group') ?: $group->name)}}"
                {{ (!empty($team) && $team->group == $group->name) ? 'selected' : ''}}>{{$group->name}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="presentation">Présentation</label>
    <textarea class="form-control summernote"
        id="presentation" rows="3"
        name="presentation">{{!empty($team) ? $team->presentation : old('presentation')}}</textarea>
</div>