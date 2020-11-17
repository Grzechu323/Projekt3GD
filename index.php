<div class="container-fluid">
    <div class="jumbotron">
        <article>
            <div class="obraz">
                <img src="img/szachyprzezroczyste.png" width="30%" height="30%" alt="chess">
            </div>
            <h1 class="display-3" align="center">Witam na mojej stronie o szachach!</h1>
            <p class="lead" align="center">Znajdziesz tu treści dla tych początkujących, jak i bardziej wtajemniczonych.</p>
            <hr class="my-4">
            <p>Skorzystaj z menu w górnej części strony, aby wybrać interesujące Cię zagadnienie.</p>
            <p class="lead" align="right">
                <a class="btn btn-primary btn-lg" href="?pokaz=6" role="button">Sprawdź ciekawostkę na dziś</a>
            </p>
        </article>
        <h2>Chcesz zagrać z jednym z naszych studentów? Oto ich namiary:</h2>
        <?php
            include("datadownload.php");
        ?>
    </div>
</div>