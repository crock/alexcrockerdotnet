Alex, {{ $name }} has contacted you via your website on {{ $date }}!
<br>
Here is their message:
<br>
<b>Name:</b> {{ $name }}
<br>
<b>Email:</b> {{ $email  }}
<br>
@if($phone != null)
    <b>Phone:</b> {{ $phone }}
@endif
<br>
<b>Message:</b>
<p>{{ $bodyMessage }}</p>
