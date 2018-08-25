<li class="active">
	<a href="/" class="white-text">
		<i class="material-icons left white-text">home</i>Home
	</a>
</li>


<li>
	<a href="/categories" class="white-text">
		<i class="material-icons left white-text">apps</i>Categories
	</a>
</li>

<li>
	<a href="/about" class="white-text">
		<i class="material-icons left white-text">info</i>About
	</a>
</li>

<li>
	<a href="/contact" class="white-text">
		<i class="material-icons left white-text">email</i>Contact
	</a>
</li>

@guest
	<li>
		<a class="waves-effect waves-light blue" href="/login">
			<i class="material-icons left">person</i> Join
		</a>
	</li>
@else
<li>
	<a href="/me" class="waves-effect waves-light blue center-align">
		<i class="fa fa-user fa-2x"></i>
		{{auth()->user()->first_name}}
	</a>
</li>
<li>
	<a href="/logout" class="waves-effect waves-light btn red center-align">
			<i class="material-icons">power_settings_new</i>
	</a>
</li>
@endguest