<main>
    <section class="card_container">

        <?php foreach ($dischi as $disco) { ?>
        <div class="card">
            <img src="<?php echo $disco['poster']; ?>" alt="">
            <h2><?php echo $disco['title']; ?></h2>
            <div>
                <p><?php echo $disco['author']; ?></p>
                <p><?php echo $disco['year']; ?></p>
            </div>
        </div>

        <?php } ?>

    </section>

</main>