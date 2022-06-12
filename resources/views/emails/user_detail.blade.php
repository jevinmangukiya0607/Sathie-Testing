<!DOCTYPE html>
<html>
<head>
    <title>Sathie</title>
</head>
<body>
    <h2>Name : {{ $data['name'] }}</h1>
    @if($data['address'])	
    	<h2>Address : {{ $data['address'] }}</h1>
    @endif	
    @if(isset($data['mobile_number']))	
    	<h2>Mobile Number : {{ $data['mobile_number'] }}</h1>
    @endif	
    @if(isset($data['email_id']))	
    	<h2>Email Address : {{ $data['email_id'] }}</h1>
    @endif	
    
   
    <p>Thank you</p>
</body>
</html>