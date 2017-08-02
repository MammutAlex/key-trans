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
            translate() {
                this.form.post('/api/v1/translate')
                    .then(response => {
                        this.text = response.text
                    });
            },
            translateAuto() {
                if (this.form.from !== '' && this.form.to !== '' && this.form.text !== '') {
                    this.form.post('/api/v1/translate')
                        .then(response => {
                            this.text = response.text
                        });
                }
            }
        }
    }
</script>