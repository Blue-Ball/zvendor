<!doctype html>
<html lang="en">
    <head>
    <x-vendor.head></x-vendor.head>
        <title>{{$title}}</title> 
    </head>
<body> 
     
 
    {{ $slot }}

	@include('components.vendor.script')

@stack('js')
</body>

</html>