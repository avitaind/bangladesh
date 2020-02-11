<html>
<title></title>
<head></head>
<body>
<h2>Hi {{ $name }},</h2>
<img src="{{ $message->embed(public_path() . '/images/cap-auto-reply.png') }}" alt="" />
</body>
</html>