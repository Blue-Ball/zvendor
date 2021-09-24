
<!doctype html>
<html lang="en">
    <head>
    <x-vendor.head></x-vendor.head>
        <title>{{$title}}</title> 
    </head>
<body>  
   
	@include('components.vendor.side_bar')
	@include('components.vendor.header')

    {{ $slot }}

	@include('components.vendor.script')
	
	@include('components.vendor.footer')
	
    @stack('js')
</body>

</html>