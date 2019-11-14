
@if(isset($nutricionista->id))
<div class="input-field">
	<input type="text" name="id" value="{{isset($nutricionista->id) ? $nutricionista->id : ''}}">
	<label>ID</label>
</div>
@endif

<div class="input-field">
	<input type="text" name="nome" value="{{isset($nutricionista->nome) ? $nutricionista->nome : ''}}">
	<label>Nome</label>
</div>

<div class="input-field col s12">
    <select name="segmento">
      <option value="" disabled selected>Escolha uma opção</option>
      <option value="coletivo" {{isset($nutricionista->segmento) && $nutricionista->segmento == 'coletivo' ? 'checked' : '' }}>Coletivo</option>
      <option value="esporte"  {{isset($nutricionista->segmento) && $nutricionista->segmento == 'esporte' ? 'checked' : '' }}>Esporte</option>
      <option value="gastronomico" {{isset($nutricionista->segmento) && $nutricionista->segmento == 'gastronomico' ? 'checked' : '' }}>Gastronômico</option>
    </select>
    <label>Segmento</label>
 </div>


<div class="input-field">
	<input type="text" name="valor" value="{{isset($nutricionista->username) ? $nutricionista->username : ''}}">
	<label>Nome do Usuario (Twitter)</label>
</div>

<div class="file-field input-field">
	<div class="btn blue">
		<span>Imagem</span>
		<input type="file" name="imagem">
	</div>
	<div class="file-path-wrapper">
		<input class="file-path validate" type="text">
	</div>
</div>
@if(isset($nutricionista->imagem))
<div class="input-field">
	<img width="150" src="{{asset($nutricionista->imagem)}}">
</div>
@endif


