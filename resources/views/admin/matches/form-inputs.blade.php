<div class="row">
    <div class="form-group col-6">
        <label for="match_day">Date et Heure du Match</label>
        <input type="datetime-local"
            class="form-control"
            id="match_day"
            name="match_day"
            placeholder="Entrer le nom du pays"
            value="{{!empty($match) ? \Carbon\Carbon::parse($match->match_day)->format('Y-m-d\TH:i') : old('match_day')}}">
    </div>
    <div class="form-group col-6">
        <label for="score">Score</label>
        <input type="text"
            class="form-control"
            id="score"
            name="score"
            placeholder="Entrer le score"
            value="{{!empty($match) ? $match->score : old('score')}}">
    </div>
    <div class="form-group col-6">
        <label for="stadium">Stade</label>
        <input type="text"
            class="form-control"
            id="stadium"
            name="stadium"
            placeholder="Entrer le stade"
            value="{{!empty($match) ? $match->stadium : old('stadium')}}">
    </div>
    <div class="form-group col-6">
        <label for="city">Ville</label>
        <input type="text"
            class="form-control"
            id="city"
            name="city"
            placeholder="Entrer le nom du pays"
            value="{{!empty($match) ? $match->city : old('city')}}">
    </div>

    <div class="form-group col-6">
        <label for="group">Choisir la première équipe</label>
        <select class="form-control" id="group" name="team1_code">
            @foreach ($teams as $team)
                <option value="{{$team->code}}"
                    {{ (!empty($match) && $match->team1_code == $team->code || old('team1_code') == $team->code) ? 'selected' : ''}}
                    >{{$team->name}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-6">
        <label for="group">Choisir la deuxième équipe</label>
        <select class="form-control" id="group" name="team2_code">
            @foreach ($teams as $team)
                <option value="{{$team->code}}"
                    {{ (!empty($match) && $match->team2_code == $team->code || old('team2_code') == $team->code) ? 'selected' : ''}}
                    >{{$team->name}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-12">
    <hr>
    <label for="summary">Résumé du match</label>
    <textarea class="form-control summernote"
        id="summary" rows="3"
        name="summary">{{!empty($match) ? $match->summary : old('summary')}}</textarea>
    </div>
</div>