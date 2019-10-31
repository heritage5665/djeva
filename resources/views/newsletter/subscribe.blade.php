<h3> subscribe for our newsletter </h3>
<form action="{{ url('newsletter/subscribe') }}"
method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="email">enter your email to subscribe for our newsletter</label>
<input type="email" name="email" id="email" required autocomplete="email">
<input type="submit">
</form>
