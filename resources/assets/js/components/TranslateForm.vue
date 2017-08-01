<script>
    export default {
        data() {
            return {
                form: new Form({
                    from: '',
                    to: '',
                    text: ''
                }),
                text: ''
            }
        },
        methods: {
            translite() {
                this.form.post('/api/v1/translate')
                    .then(response => {
                        this.text = response.text
                    });
            }
        }
    }
</script>