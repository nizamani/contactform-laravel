<p>New freelancer request:</p>
<ul>
    <li><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</li>
    <li><strong>Email:</strong> {{ $data['email'] }}</li>
    <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
    <li><strong>Comments:</strong> {{ $data['comments'] }}</li>
    <li><strong>Services:</strong> {{ implode(', ', $data['services'] ?? []) }}</li>
</ul>
