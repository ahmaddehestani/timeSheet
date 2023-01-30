<template>
    <div>
        <div class="row justify-content-center w-50 m-auto">
            <div class="col-ml-4">
                <div class="card">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                v-model="formData.email"
                            />
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                v-model="formData.password"
                            />
                        </div>

                        <div class="form-group">
                            <router-link class="float-right" to="/register"
                                >register</router-link
                            >
                            <router-link class="float-right" to="/forgetPass"
                                >forget password</router-link
                            >
                            <button
                                class="btn btn-primary"
                                @click.prevent="login_handler"
                            >
                                login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            formData: {
                email: "",
                password: "",
            },
        };
    },
    methods: {
        login_handler() {
            axios.get("/sanctum/csrf-cookie").then((response) => {
                axios
                    .post("/login", this.formData)
                    .then((response) => {
                        console.log("you log in success");
                        this.$router.push("/");
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        },
    },
};
</script>
