<form action="{{ route('localization.create') }}" method="post" id="langChangeForm">
@csrf
	<select class="langChange" name="lang">
		<option value="en" {{ App::isLocale('en')=='en'?'selected':'' }}>English(en)</option>
		<option value="fr" {{ App::isLocale('fr')=='fr'?'selected':'' }}>Franch(fr)</option>
	</select>
</form>