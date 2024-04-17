const { createApp } = Vue
createApp({
    data() {
        return {
            disks: [],
            base_api_url: 'api.php',
        }
    },
    mounted() {
        axios.get(this.base_api_url)
            .then((result) => {
                console.log(result);
                this.disks = result.data;
            }).cath((err) => {
                console.log(err);
                this.error = err.message;
            });
    }
}).mount('#app')