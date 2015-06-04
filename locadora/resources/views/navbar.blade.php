<nav>
    <div class="nav-wrapper amber">
        <a href="#!" class="brand-logo">Locadora</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <ul class="right hide-on-med-and-down" >
            <li><a href="#">Veiculo</a></li>
            <li><a href="#">Estoque</a></li>
            <li><a href="#">Marcas</a></li>
            <li><a href="#">Ultimas Locações</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a class="amber-text text-darken-2" href="#">Home</a></li>
            <li><a class="amber-text text-darken-2" href="#">Estoque</a></li>
            <li><a class="amber-text text-darken-2" href="#">Marcas</a></li>
            <li><a class="amber-text text-darken-2" href="#">Ultimas Locações</a></li>
        </ul>
    </div>
</nav>

<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $('.dropdown-button').dropdown({

        })
    })

</script>
