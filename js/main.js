function init() {

    new Vue({

        el: "#app",
        data: {

            "music" : [],
            "allGenres" : [],
            "filterKey" : ""
        },

        methods: {

            getGenres: function() {

                this.music.forEach(song => {

                    const genre = song.genre;
                    if (!this.allGenres.includes(genre))
                        this.allGenres.push(genre)
                });
            },

            filterByGenre: function() {

                axios
                    .get("db/data.php", {
                        params : {
                            "filter" : this.filterKey
                        }
                    })
                    .then(data => {

                        this.music = data.data;
                    })
                    .catch(() => {

                        console.log("Error!")
                    })
            }
        },

        mounted() {

            axios
                .get("db/data.php")
                .then(data => {

                    this.music = data.data;
                    this.getGenres();
                })
                .catch(() => {

                    console.log("Error!")
                })
        }
    })
}

document.addEventListener("DOMContentLoaded", init);