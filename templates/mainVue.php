<main id="app">
    <section class="card_container">

        <div class="card" v-for="disco in dischi">
            <img :src="disco.poster" alt="">
            <h2>{{disco.title}}</h2>
            <div>
                <p>{{disco.author}}</p>
                <p>{{disco.year}}</p>
            </div>
        </div>

    </section>

</main>