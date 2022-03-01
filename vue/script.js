console.log('Vue ok', Vue);


Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        movies: [],
    },
    methods: {
        getMovies() {
            axios.get("http://localhost/php-ajax-dischi/vue/data.php").then(res => {
                this.movies = res.data;
            })
        }
    },
    created() {
        this.getMovies();
    }

})