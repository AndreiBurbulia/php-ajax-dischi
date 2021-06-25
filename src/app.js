const app = new Vue({
    el: '#app',
    data: {
        dischi: null,
        prova: null,
        genre: 'rock',
        dischi_filtrati: null,
    },

    methods: {
        refresh() {
            console.log('ok');
        }
    },
    mounted() {
        /**/
        if (this.prova === null) {
            axios.get('./api/dischi.php')
                .then(response => {
                    this.dischi = response.data;
                })

        } else {
            axios.get('./database/db_filter.php?genre=' + this.genre)
                .then(response => {
                    this.dischi = response.data;
                })

        }


    },
})