const { createApp } = Vue
createApp({
    data() {
        return {
            base_api_url: 'api.php',
            disks: [],
        }
    },
    mounted() {
        axios.get(this.base_api_url)
            .then((result) => {
                console.log(result);
                this.disks = result.data;
            })
    }
}).mount('#app')