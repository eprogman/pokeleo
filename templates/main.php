<main class="container">

    <div class="main">
        <form action="../index.php">
            <label for="pokemon">Ingresa el Pokemon</label><input type="text" name="pokemon" required autofocus>
            <button type="submit">enviar</button>
        </form>
        <h1 class="titulo">Este es tu pokemon elegido :</h1><br>
        <img src="<?php echo $pokemon ?>" alt="">
        <h1 class="nombre">Su nombre es : <span><?php echo $name; ?></span></h1>
        <h2 class="nivel">Tiene el nivel de experiancia : <span><?php echo $base_experience; ?></span></h2>
    </div>
    <div class="nivel_mov">
        <h2 class="mov">Tiene los siguientes movimientos: <span><?php echo implode("  ,  ", $moves); ?></span></h2>
        <h2 class="habi">Tiene las siguieetes habilidades: <span><?php echo implode("  ,  ", $habilidades); ?></span></h2>
    </div>
</main>