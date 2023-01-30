<template>
    <div>
        <div class="row justify-content-center w-50 m-auto">
            <div class="col-ml-4">
                <div class="card">
                    <div class="card-header text-center">Register</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">full name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="full_name"
                                v-model="formData.full_name"
                            />
                            <p
                                class="text-danger"
                                v-text="errors.full_name"
                            ></p>
                        </div>
                        <div class="form-group">
                            <label for="user_name"> user Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="user_name"
                                v-model="formData.user_name"
                            />
                            <p
                                class="text-danger"
                                v-text="errors.user_name"
                            ></p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                v-model="formData.email"
                            />
                            <p class="text-danger" v-text="errors.email"></p>
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                v-model="formData.password"
                            />
                            <p class="text-danger" v-text="errors.password"></p>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password"
                                >confirm password</label
                            >
                            <input
                                type="password"
                                class="form-control"
                                name="confirm_password"
                                v-model="formData.confirm_password"
                            />
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <router-link class="float-right" to="/login"
                                    >Already I have account</router-link
                                >
                            </div>
                            <div class="text-center">
                                <button
                                    class="btn btn-primary text-center m-2"
                                    @click.prevent="register_handler"
                                >
                                    register
                                </button>
                            </div>
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
                full_name: "",
                email: "",
                password: "",
                confirm_password: "",
                user_name: "",
            },
            errors: {},
        };
    },
    methods: {
        register_handler() {
            axios.get("/sanctum/csrf-cookie").then((response) => {
                axios
                    .post("/register", this.formData)
                    .then((response) => {
                        console.log("register user success");
                        this.errors = {};
                        this.$router.push("/login");
                    })
                    .catch((errors) => {
                        this.errors = errors.response.data.errors;
                        console.log(errors);
                    });
            });
        },
    },
};
</script>
