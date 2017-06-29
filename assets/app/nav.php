<nav class="bottom">
    <ul>
        <li class="active"><a href="#">Lien 1</a></li>
        <li><a href="#">Lien 2</a></li>
        <li><a href="#">Lien 3</a></li>
    </ul>
</nav>
<script type="text/javascript">
    $("nav ul li a").click(function(e){
        e.preventDefault();
        var pourcentage = $(this).parent().index();
        $("nav ul").removeClass();
        $("nav ul").addClass("actif-"+(pourcentage+1));
    });
</script>
