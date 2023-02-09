<template>


    <div class="container mt-5">

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>create by</th>
                <th>name</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="list in lists" :key="list.id">
                <td>{{ list.id }}</td>
                <td>{{ list.user.full_name }}</td>
                <td>{{ list.name }}</td>
                <td class="form-group text-center">
                    <button
                        class="btn btn-danger text-center"
                        @click.prevent="edit_handler(list.id)"
                    >
                        edit
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from "axios";


export default {


    data() {
        return {

            lists: [],
            formData: {

                token: '',

            },
        };
    },
    created() {
        this.formData.token = localStorage.getItem("token");
        if (this.formData.token) {
            console.log(this.formData.token)
            this.show_list();
        } else {
            this.$router.push({name: 'login'});
        }
    },
    methods: {
        show_list() {
            this.formData.token = localStorage.getItem("token");
            axios.get('/sanctum/csrf-cookie').then((response) => {
                axios
                    .post('/api/workspaces', this.formData)
                    .then((response) => {


                        this.lists = response.data;


                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        },
        edit_handler($id) {
            this.$router.push({name: 'editWorkspace', params: {id: $id}});
        }
    },

}

</script>

<style scoped>

</style>
