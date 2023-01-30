<template>
    <div>
        <div class="row justify-content-center w-50 m-auto">
            <div class="col-ml-4">
                <div class="card">
                    <div class="card-header text-center">Change Password</div>
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
                            <label for="confirm_password"
                                >confirm_password</label
                            >
                            <input
                                type="password"
                                class="form-control"
                                name="confirm_password"
                                v-model="formData.confirm_password"
                            />
                        </div>

                        <div class="form-group">
                            <router-link class="float-right" to="/register"
                                >register</router-link
                            >
                            <router-link class="float-right" to="/login"
                                >login</router-link
                            >
                            <button
                                class="btn btn-primary"
                                @click.prevent="changePass_handler"
                            >
                                Change Password
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
                confirm_password: "",
            },
        };
    },
    methods: {
        changePass_handler() {
            axios.get("/sanctum/csrf-cookie").then((response) => {
                axios
                    .put("/forgetPass", this.formData)
                    .then((response) => {
                        console.log("your pass change successful");
                        this.$router.push("/login");
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        },
    },
};
</script>
