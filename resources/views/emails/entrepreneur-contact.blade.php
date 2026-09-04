<h2>Nueva consulta de emprendedor</h2>
<p><strong>Negocio:</strong> {{ $data['business_name'] }}</p>
<p><strong>Nombre:</strong> {{ $data['contact_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Teléfono:</strong> {{ $data['phone'] ?? 'No especificado' }}</p>
<p><strong>Mensaje:</strong></p>
<p>{{ $data['message'] }}</p>