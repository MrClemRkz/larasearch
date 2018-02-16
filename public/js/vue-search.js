/**
 * Created by Clement on 2/16/18.
 */
new Vue({
    el: 'body',
    data: {
        products: [],
        loading: false,
        error: false,
        query: ''
    },
    methods: {
        search: function () {
            this.error = ''; // clear error values
            this.products = []; // clear products values
            this.loading = true; // this is for button change

            // http request for search response
            this.$http.get('api/search?q=' + this.query).then((response) => {
                response.body.error ? this.error = response.body.error : this.products = response.body;
                this.loading = false; //to indicate the search is complete on button
                this.query = ''; // clear the query
            });
        }
    }
});