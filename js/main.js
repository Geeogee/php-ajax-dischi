function init() {

    new Vue({

        el: "#app",
        data: {

            "music" : []
        },

        mounted() {

            axios
                .get("db/data.php")
                .then(data => {

                    this.music = data.data;
                })
                .catch(() => {

                    console.log("Error!")
                })
        }

    
    })
}

document.addEventListener("DOMContentLoaded", init);