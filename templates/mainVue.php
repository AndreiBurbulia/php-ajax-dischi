<main id="app">
    <section class="card_container">

        <select v-model="prova" onchange="refresh()">
            <option value="pop">pop</option>
            <option value="rock">rock</option>
            <option value="jazz">jazz</option>
            <option value="metal">metal</option>
        </select>

        <!-- <div v-if="dischi.length > 0" class="card" v-for="disco in dischi_filtrati">
            <img :src="disco.poster" alt="">
            <h2>{{disco.title}}</h2>
            <div>
                <p>{{disco.author}}</p>
                <p>{{disco.year}}</p>
            </div>
        </div> -->

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