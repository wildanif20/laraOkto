<body>
<h3>{{!! $detail['email'] !!}}</h3>
<p>Bade ngagentos password na ?</p>

<a href="{{route('remiders.edit', ['id' => $detail['id'], 'code' => $detail['code']])}}">Click</a>
</body>