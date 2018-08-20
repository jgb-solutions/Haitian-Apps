<div class="form-group">
    <label for="name">Nom du joueur</label>
    <input type="text"
        class="form-control"
        id="name"
        name="name"
        placeholder="Entrer le nom du pays"
        value="{{!empty($player) ? $player->name : old('name')}}">
</div>
<div class="form-group">
    <label for="nationality">Nationalité</label>
    <input type="text"
        class="form-control"
        id="nationality"
        name="nationality"
        placeholder="Entrer la nationalité"
        value="{{!empty($player) && $player->nationality ? $player->nationality : old('nationality')}}">
</div>
<div class="form-group">
    <label for="code">Date de Naissance</label>
    <input type="date"
        class="form-control"
        id="birthday"
        name="birthday"
        placeholder="Entrer la date de naissance"
        value="{{!empty($player) &&  $player->birthday ? $player->birthday : old('birthday')}}">
</div>
<div class="form-group">
    <label for="code">Hauteur</label>
    <input type="text"
        class="form-control"
        id="height"
        name="height"
        placeholder="Entrer la hauteur"
        value="{{!empty($player) && $player->height ? $player->height : old('height')}}">
</div>
<div class="form-group">
    <label for="code">Période Pro</label>
    <input type="text"
        class="form-control"
        id="pro_period"
        name="pro_period"
        placeholder="Entrer la période pro"
        value="{{!empty($player) && $player->pro_period ? $player->pro_period : old('pro_period')}}">
</div>
<div class="form-group">
    <label for="code">Position</label>
    <input type="text"
        class="form-control"
        id="position"
        name="position"
        placeholder="Entrer la position"
        value="{{!empty($player) && $player->position ? $player->position : old('position')}}">
</div>
<div class="form-group">
    <label for="code">Pied Fort</label>
    <input type="text"
        class="form-control"
        id="strong_leg"
        name="strong_leg"
        placeholder="Entrer le pied fort"
        value="{{!empty($player) ? $player->strong_leg : old('strong_leg')}}">
</div>
<div class="form-group">
    <label for="group">Équipe</label>
    <select class="form-control" id="team_code" name="team_code">
        <option value="">Choisir Une Équipe</option>
        @foreach ($teams as $team)
            <option value="{{!empty($player) && $player->team_code ? $player->team_code : (old('team') ?: $team->name)}}"
                {{ (!empty($player) && $player->team_code == $team->code) ? 'selected' : ''}}>{{$team->name}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="code">Photo</label>
    <input type="file"
        class="form-control"
        id="photo"
        name="photo"
        placeholder="Entrer le pied fort"
        accept="image/*">
</div>
{{-- <div class="form-group">
    <label for="presentation">Présentation</label>
    <textarea class="form-control summernote"
        id="presentation" rows="3"
        name="presentation">{{!empty($player) ? $player->presentation : old('presentation')}}</textarea>
</div> --}}