@include('home.blocks.header')
<body>
<?php $page = "home.blocks.".$page;?>
@include($page)
@include('home.blocks.footer')
</body>
</html>