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
        var menuActif = $(this).parent().index() + 1;
        $("nav ul").removeClass();
        $("nav ul").addClass("actif-"+menuActif);

        if(menuActif == 1){
            console.log("hey !")
        }
    });
</script>
