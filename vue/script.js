console.log('Vue ok', Vue);


Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        movies: [],
        search: '',
    },
    methods: {
        getMovies() {
            axios.get(`http://localhost/php-ajax-dischi/vue/data.php?search=${this.search}`).then(res => {
                this.movies = res.data;
            })
        },
    },
    created() {
        this.getMovies();
    }

})