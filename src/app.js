const app = new Vue({
    el: '#app',
    data: {
        prova: 'cuiao',
        dischi: null,
    },
    mounted() {
        axios.get('./api/dischi.php')
            .then(response => {
                this.dischi = response.data;
                console.log(this.dischi);
            })
    },
})